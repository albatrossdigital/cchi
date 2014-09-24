<?php
/**
 * @file
 * Provides infrequently used functions and hooks for button_block.
 */

/**
 * Implements hook_menu().
 */
function _button_block_menu() {
  $items['admin/structure/block/add-button-block'] = array(
    'title' => 'Add button block',
    'description' => 'Add a new button block.',
    'access arguments' => array('administer blocks'),
    'page callback' => 'drupal_get_form',
    'page arguments' => array('button_block_add_block_form'),
    'type' => MENU_LOCAL_ACTION,
    'file' => 'button_block.admin.inc',
  );
  $items['admin/structure/block/delete-button-block'] = array(
    'title' => 'Delete menu block',
    'access arguments' => array('administer blocks'),
    'page callback' => 'drupal_get_form',
    'page arguments' => array('button_block_delete'),
    'type' => MENU_CALLBACK,
    'file' => 'button_block.admin.inc',
  );
  return $items;
}


/**
 * Menu callback: display the button block addition form.
 *
 * @see button_block_add_block_form_submit()
 */
function button_block_add_block_form($form, &$form_state) {
  module_load_include('inc', 'block', 'block.admin');
  return block_admin_configure($form, $form_state, 'button_block', NULL);
}

/**
 * Save the new button block.
 */
function button_block_add_block_form_submit($form, &$form_state) {
  // Determine the delta of the new block.
  $block_ids = variable_get('button_block_ids', array());
  $delta = empty($block_ids) ? 1 : max($block_ids) + 1;

  // Save the new array of blocks IDs.
  $block_ids[] = $delta;
  variable_set('button_block_ids', $block_ids);

  // Save the block configuration.
  button_block_block_save($delta, $form_state['values']);

  // Run the normal new block submission (borrowed from block_add_block_form_submit).
  $query = db_insert('block')->fields(array('visibility', 'pages', 'custom', 'title', 'module', 'theme', 'region', 'status', 'weight', 'delta', 'cache'));
  foreach (list_themes() as $key => $theme) {
    if ($theme->status) {
      $region = !empty($form_state['values']['regions'][$theme->name]) ? $form_state['values']['regions'][$theme->name] : BLOCK_REGION_NONE;
      $query->values(array(
        'visibility' => (int) $form_state['values']['visibility'],
        'pages' => trim($form_state['values']['pages']),
        'custom' => (int) $form_state['values']['custom'],
        'title' => $form_state['values']['title'],
        'module' => $form_state['values']['module'],
        'theme' => $theme->name,
        'region' => ($region == BLOCK_REGION_NONE ? '' : $region),
        'status' => 0,
        'status' => (int) ($region != BLOCK_REGION_NONE),
        'weight' => 0,
        'delta' => $delta,
        'cache' => DRUPAL_NO_CACHE,
      ));
    }
  }
  $query->execute();

  $query = db_insert('block_role')->fields(array('rid', 'module', 'delta'));
  foreach (array_filter($form_state['values']['roles']) as $rid) {
    $query->values(array(
      'rid' => $rid,
      'module' => $form_state['values']['module'],
      'delta' => $delta,
    ));
  }
  $query->execute();

  drupal_set_message(t('The block has been created.'));
  cache_clear_all();
  $form_state['redirect'] = 'admin/structure/block';
}

/**
 * Alters the block admin form to add delete links next to button blocks.
 */
function _button_block_form_block_admin_display_form_alter(&$form, $form_state) {
  $blocks = module_invoke_all('button_block_blocks');
  foreach (variable_get('button_block_ids', array()) AS $delta) {
    if (empty($blocks[$delta])) {
      $form['blocks']['button_block_' . $delta]['delete'] = array('#type' => 'link', '#title' => t('delete'), '#href' => 'admin/structure/block/delete-button-block/' . $delta);
    }
  }
}

/**
 * Menu callback: confirm deletion of button blocks.
 */
function button_block_delete($form, &$form_state, $delta = 0) {
  $title = _button_block_format_title(button_block_get_config($delta));
  $form['block_title'] = array('#type' => 'hidden', '#value' => $title);
  $form['delta'] = array('#type' => 'hidden', '#value' => $delta);

  return confirm_form($form, t('Are you sure you want to delete the "%name" block?', array('%name' => $title)), 'admin/structure/block', NULL, t('Delete'), t('Cancel'));
}

/**
 * Deletion of button blocks.
 */
function button_block_delete_submit($form, &$form_state) {
  // Remove the menu block configuration variables.
  $delta = $form_state['values']['delta'];
  $block_ids = variable_get('button_block_ids', array());
  unset($block_ids[array_search($delta, $block_ids)]);
  sort($block_ids);
  variable_set('button_block_ids', $block_ids);
  variable_del("button_block_{$delta}_admin_title");
  variable_del("button_block_{$delta}_button_text");
  variable_del("button_block_{$delta}_button_link");
  variable_del("button_block_{$delta}_button_classes");
  
  

  db_delete('block')
    ->condition('module', 'button_block')
    ->condition('delta', $delta)
    ->execute();
  db_delete('block_role')
    ->condition('module', 'button_block')
    ->condition('delta', $delta)
    ->execute();
  drupal_set_message(t('The block "%name" has been removed.', array('%name' => $form_state['values']['block_title'])));
  cache_clear_all();
  $form_state['redirect'] = 'admin/structure/block';
  return;
}

/**
 * Implements hook_block_info().
 */
function _button_block_block_info() {
  $blocks = array();
  $deltas = variable_get('button_block_ids', array());
  foreach (array_keys(module_invoke_all('button_block_blocks')) as $delta) {
    $deltas[] = $delta;
  }
  foreach ($deltas AS $delta) {
    $blocks[$delta]['info'] = _button_block_format_title(button_block_get_config($delta));
    // Menu blocks can't be cached because each menu item can have
    // a custom access callback. menu.inc manages its own caching.
    $blocks[$delta]['cache'] = DRUPAL_NO_CACHE;
  }
  return $blocks;
}

/**
 * Return the title of the block.
 *
 * @param $config
 *   array The configuration of the menu block.
 * @return
 *   string The title of the block.
 */
function _button_block_format_title($config) {
  // If an administrative title is specified, use it.
  if (!empty($config['admin_title'])) {
    return check_plain($config['admin_title']);
  }
  else {
    //@TODO: handle 
  }
  return $title;
}

/**
 * Implements hook_block_configure().
 */
function _button_block_block_configure($delta = '') {
  // Create a pseudo form state.
  $form_state = array('values' => button_block_get_config($delta));
  return button_block_configure_form(array(), $form_state);
}

/**
 * Returns the configuration form for a menu tree.
 *
 * @param $form_state
 *   array An associated array of configuration options should be present in the
 *   'values' key. If none are given, default configuration is assumed.
 * @return
 *   array The form in Form API format.
 */
function button_block_configure_form($form, &$form_state) {
  $config = array();
  // Get the config from the form state.
  if (!empty($form_state['values'])) {
    $config = $form_state['values'];
    if (!empty($config['parent'])) {
      list($config['menu_name'], $config['parent_mlid']) = explode(':', $config['parent']);
    }
  }
  // Merge in the default configuration.
  $config += menu_block_get_config();

  // Don't display the config form if this delta is exported to code.
  if (!empty($config['exported_to_code'])) {
    $form['exported_message'] = array(
      '#markup' => '<p><em>' . t('Configuration is being provided by code.') . '</em></p>',
    );
    return $form;
  }
  $form['admin_title'] = array(
    '#type' => 'textfield',
    '#default_value' => $config['admin_title'],
    '#title' => t('Administrative title'),
    '#description' => t('This title will be used administratively to identify this block. If blank, the regular title will be used.'),
  );
  $form['button_text'] = array(
    '#type' => 'textfield',
    '#default_value' => $config['button_text'],
    '#title' => t('Button Text'),
    '#description' => t('This will be the text of the button.'),
  );
  $form['button_link'] = array(
    '#type' => 'textfield',
    '#default_value' => $config['button_link'],
    '#title' => t('Button Link'),
    '#description' => t('This is the link path... either use the absolute path: "http://example.com/about" or the relative path "about".'),
  );
  $form['button_classes'] = array(
    '#type' => 'textfield',
    '#default_value' => $config['button_classes'],
    '#title' => t('Button Classes'),
    '#description' => t('Additional button classes for styling the button separated by spaces, like "white-button uppercase-button".'),
  );
  return $form;
}

/**
 * Implements hook_block_save().
 */
function _button_block_block_save($delta = '', $edit = array()) {
  if (!empty($delta)) {
    // Don't save values for an exported block.
    $config = button_block_get_config($delta);
    if (empty($config['exported_to_code'])) {
      variable_set("button_block_{$delta}_admin_title", $edit['admin_title']);
      variable_set("button_block_{$delta}_button_text", $edit['button_text']);
      variable_set("button_block_{$delta}_button_link", $edit['button_link']);
      variable_set("button_block_{$delta}_button_classes", $edit['button_classes']);
    }
  }
}
