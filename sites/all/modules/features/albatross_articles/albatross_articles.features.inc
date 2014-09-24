<?php
/**
 * @file
 * albatross_articles.features.inc
 */

/**
 * Implementation of hook_ctools_plugin_api().
 */
function albatross_articles_ctools_plugin_api() {
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
function albatross_articles_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => t('Articles are typically snippits from articles appearing in other publications.  They appear in the News section and include a byline and a link to the full article.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
