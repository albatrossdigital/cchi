<?php
/**
 * @file
 *   Form generation functions for the Commerce bulk product creation module
 */

/**
 * Build the Bulk Product Creation Form
 */
function commerce_bpc_create_bulk_form($form, &$form_state, $product_type) {
  // Display page 2 if $form_state['page_num'] == 2
  if (!empty($form_state['page_num']) && $form_state['page_num'] == 2) {
    return commerce_bpc_create_bulk_form_display_node($form, $form_state, $product_type);
  }
  // Otherwise we build page 1.
  $form_state['page_num'] = 1;

  $form['#parents'] = array();

  // Create a temporary product object to use for the commerce_price field
  // widget
  $new_product = commerce_product_new($product_type);

  // Store the product type for later use
  $form['product_type'] = array(
    '#type' => 'value',
    '#value' => $product_type,
  );

  // Load the fields available to the product type
  $fields = field_info_instances('commerce_product', $product_type);

  $field_seeds = array();

  $form['description'] = array(
    '#type' => 'item',
    '#title' => t('Bulk Product Creation Form'),
  );

  $form['product'] = array(
    '#type' => 'fieldset',
    '#title' => t('Product Info'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['options'] = array(
    '#type' => 'fieldset',
    '#title' => t('Combinations'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#tree' => TRUE,
  );

  // Get the available tokens
  $all_tokens = token_info();

  $avail_tokens = array();

  foreach ($fields as $field_type => $field) {
    $field_info = field_info_field($field_type);
    if ($field_type != 'commerce_price') {
      if (commerce_bpc_valid_field($field)) {
        // Include the value token
        if (isset($all_tokens['tokens']['bulk_product'][$field_type . '-value'])) {
          $avail_tokens['tokens']['bulk_product'][$field_type . '-value'] = $all_tokens['tokens']['bulk_product'][$field_type . '-value'];
          // the -name tokens make only sense for list-like fields
          if ($field_info['module'] == 'list') {
            $avail_tokens['tokens']['bulk_product'][$field_type . '-name'] = $all_tokens['tokens']['bulk_product'][$field_type . '-name'];

          }
        }

        $widget = _field_invoke_default('form', 'commerce_product', $new_product, $form, $form_state, array('field_name' => $field_info['field_name']));
        switch ($field_info['module']) {
          case 'list':
          // Let the user select which of the options they want to use
          // with checkboxes

            $form['options'][$field_type] = $widget[$field_type][LANGUAGE_NONE];
            $form['options'][$field_type]['#type'] = 'checkboxes';
            // Get rid of 'none' option---user can just not pick any
            unset($form['options'][$field_type]['#options']['_none']);

            if (!is_array($form['options'][$field_type]['#default_value'])) {
              $form['options'][$field_type]['#default_value'] = array($form['options'][$field_type]['#default_value']);
            }
          break;

          default:
          // Right now, this gets executed only for textfields ... fix?
            $form['options'][$field_type] = $widget[$field_type][LANGUAGE_NONE][0];
          break;
        }
      }
      else {
        drupal_set_message(t('Note: The %field_type field named %field_name is not available for bulk product creation.
        You can edit the products afterwards to set the value for this field.',
          array(
            '%field_type' => $field_info['module'],
            '%field_name' => $field['field_name']
            )));
      }
    }
  }

  // Add site and date tokens
  $avail_tokens['tokens']['site'] = $all_tokens['tokens']['site'];
  $avail_tokens['tokens']['date'] = $all_tokens['tokens']['date'];

  $form['product']['sku_pattern'] = array(
    '#type' => 'textfield',
    '#title' => t('SKU Pattern'),
    '#required' => TRUE,
    '#description' => t("Enter a template used to generate the SKUs. You may use the tokens listed below."),
    '#size' => 40,
  );
  $form['product']['title_pattern'] = array(
    '#type' => 'textfield',
    '#title' => t('Title Pattern'),
    '#required' => TRUE,
    '#description' => t("Enter a template used to generate the Titles. You may use the tokens listed below."),
    '#size' => 40,
  );

  $form['product']['commerce_price'] = _field_invoke_default('form', 'commerce_product', $new_product, $form, $form_state, array('field_name' => 'commerce_price'));

  $rows = array();

  $form['product']['tokens'] = array(
    '#type' => 'fieldset',
    '#title' => t('Tokens'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  foreach ($avail_tokens['tokens'] as $token_type => $tokens) {
    foreach ($tokens as $token_name => $token_info) {
      $rows[] = array('[' . $token_type . ':' . $token_name . ']', $token_info['name'], $token_info['description']);
    }
  }

  $tokens_table = array(
    'header' => array(t('Token'), t('Label'), t('Desription')),
    'rows' => $rows,
    'attributes' => array(),
    'caption' => t('SKU Tokens'),
    'colgroups' => array(),
    'sticky' => FALSE,
    'empty' => '',
    );

  $form['product']['tokens']['available_tokens'] = array(
    '#type' => 'item',
    '#title' => t('You may use the following tokens:'),
    '#markup' => theme_table($tokens_table),
  );

  $form['status'] = array(
    '#type' => 'radios',
    '#title' => t('Status'),
    '#description' => t('Disabled products cannot be added to shopping carts and may be hidden in administrative product lists.'),
    '#options' => array(
      '1' => t('Active'),
      '0' => t('Disabled'),
    ),
    '#default_value' => 1,
    '#required' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Create products'),
    '#submit' => array('commerce_bpc_create_bulk_form_create_products_submit'),
    '#validate' => array('commerce_bpc_create_bulk_form_validate'),
  );

  // Show the Display Node option if applicable
  $display_nodes = commerce_bpc_get_node_types($product_type);
  if (!empty($display_nodes)) {
    $form['next'] = array(
      '#type' => 'submit',
      '#value' => 'Create products and Create display',
      '#submit' => array('commerce_bpc_create_bulk_form_create_products_submit'),
    );
  }

  return $form;
}

/**
 * Returns the form for the second page of form_example_tutorial_8().
 */
function commerce_bpc_create_bulk_form_display_node($form, &$form_state, $product_type) {
  $form['description'] = array(
    '#type' => 'item',
    '#title' => t('Bulk Product Creation Form - Choose Display Node'),
  );

  // Store the product type for later use
  $form['product_type'] = array(
    '#type' => 'value',
    '#value' => $product_type,
  );

  $form['node_type'] = array(
    '#type' => 'radios',
    '#title' => t('Display Node'),
    '#options' => commerce_bpc_get_node_types($product_type),
    '#required' => TRUE,
    '#description' => t("Select which Display Node Type to use.
      Note that the Node Type must have a Product Reference Field with multiple values which can accept products of the chosen type to be considered as a candidate."),
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Create node'),
    '#submit' => array('commerce_bpc_create_bulk_form_create_display_submit'),
    '#validate' => array(),
  );

  return $form;
}

/**
 * Validation function for commerce_bpc_create_bulk_form().
 */
function commerce_bpc_create_bulk_form_validate($form, &$form_state) {
  // Check to make sure all of the SKUs to be generated are unique and not taken yet
  $combinations = commerce_bpc_get_combinations($form_state['input']['options']);

  $skus = array();

  foreach ($combinations as $options) {
    $replacements = array('bulk_product' => commerce_bpc_build_replacement_tokens($options));
    $sku = token_replace($form_state['values']['sku_pattern'], $replacements);
    if (!commerce_product_validate_sku_unique($sku, '')) {
      form_set_error('sku_pattern', t('This pattern yielded one or more invalid SKUs, please use a different pattern. Check for token values that may have spaces.'));
      break;
    }
    elseif (in_array($sku, $skus)) {
      form_set_error('sku_pattern', t('This pattern yielded one or more duplicate SKUs, please use a different pattern.'));
      break;
    }
    else {
      $skus[] = $sku;
    }
  }
}

/**
 * The bulk product form submit handler
 */
function commerce_bpc_create_bulk_form_create_products_submit($form, &$form_state) {
  global $user;

  // Get some variables
  $product_type = $form_state['values']['product_type'];
  $options = $form_state['input']['options'];
  $status = $form_state['values']['status'];
  $commerce_price = $form_state['values']['commerce_price'][LANGUAGE_NONE][0];
  $sku_pattern = $form_state['values']['sku_pattern'];
  $title_pattern = $form_state['values']['title_pattern'];

  $bulk_products = commerce_bpc_create_bulk_products($product_type, $options, $commerce_price, $status, $sku_pattern, $title_pattern, $user->uid);

  // Set a success message
  if (count($bulk_products) > 0) {
    drupal_set_message(t("Successfully generated @count new products.", array('@count' => count($bulk_products))));
  }

  // If selected, rebuild the form to let the user choose a display node
  if ($form_state['input']['op'] == 'Create products and Create display') {
    $form_state['bulk_products'] = $bulk_products;
    $form_state['product_type'] = $product_type;

    // When form rebuilds, it will look at this to figure which page to build.
    $form_state['page_num'] = 2;
    $form_state['rebuild'] = TRUE;
  }
  else {
    drupal_goto('admin/commerce/products');
  }
}

/**
 * The bulk product choose display form submit handler
 */
function commerce_bpc_create_bulk_form_create_display_submit($form, &$form_state) {
  // Save the product SKUs in SESSION
  $bulk_product_skus = array();

  foreach ($form_state['bulk_products'] as $product) {
    $bulk_product_skus[$product->product_id] = $product->sku;
  }

  $id = isset($_SESSION['bulk_product_ids']) ? count($_SESSION['bulk_product_ids']) + 1 : 1;

  $_SESSION['bulk_product_ids'][$id] = $bulk_product_skus;

  // Redirect to the node/add form
  drupal_goto('node/add/' . $form_state['values']['node_type'], array('query' => array('bulk_product_ids' => $id)));
}