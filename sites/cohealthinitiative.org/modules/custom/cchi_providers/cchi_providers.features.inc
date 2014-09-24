<?php
/**
 * @file
 * cchi_providers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function cchi_providers_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "feeds_tamper" && $api == "feeds_tamper_default") {
    return array("version" => "2");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function cchi_providers_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function cchi_providers_node_info() {
  $items = array(
    'provider' => array(
      'name' => t('Provider'),
      'base' => 'node_content',
      'description' => t('Providers can be imported and get included on the Provider map.'),
      'has_title' => '1',
      'title_label' => t('Name of Clinic'),
      'help' => '',
    ),
  );
  return $items;
}
