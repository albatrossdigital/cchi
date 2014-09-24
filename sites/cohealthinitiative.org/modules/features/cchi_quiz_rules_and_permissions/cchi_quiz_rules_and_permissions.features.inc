<?php
/**
 * @file
 * cchi_quiz_rules_and_permissions.features.inc
 */

/**
 * Implements hook_views_api().
 */
function cchi_quiz_rules_and_permissions_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}
