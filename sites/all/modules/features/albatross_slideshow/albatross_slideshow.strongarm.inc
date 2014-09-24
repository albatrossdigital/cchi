<?php
/**
 * @file
 * albatross_slideshow.strongarm.inc
 */

/**
 * Implementation of hook_strongarm().
 */
function albatross_slideshow_strongarm() {
  $export = array();

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_slide';
  $strongarm->value = array(
    0 => 'status',
    1 => 'promote',
    2 => 'revision',
  );
  $export['node_options_slide'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_slide_pattern';
  $strongarm->value = 'slides/[node:title]';
  $export['pathauto_node_slide_pattern'] = $strongarm;

  return $export;
}
