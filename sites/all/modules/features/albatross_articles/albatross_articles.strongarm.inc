<?php
/**
 * @file
 * albatross_articles.strongarm.inc
 */

/**
 * Implementation of hook_strongarm().
 */
function albatross_articles_strongarm() {
  $export = array();

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_article';
  $strongarm->value = array(
    0 => 'status',
    1 => 'revision',
  );
  $export['node_options_article'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_article_pattern';
  $strongarm->value = 'news/[node:created:custom:Y-m-d]/[node:title]';
  $export['pathauto_node_article_pattern'] = $strongarm;

  return $export;
}
