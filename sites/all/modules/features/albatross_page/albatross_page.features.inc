<?php
/**
 * @file
 * albatross_page.features.inc
 */

/**
 * Implementation of hook_ctools_plugin_api().
 */
function albatross_page_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implementation of hook_node_info().
 */
function albatross_page_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => t('Creates a basic page with a title and a body.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
