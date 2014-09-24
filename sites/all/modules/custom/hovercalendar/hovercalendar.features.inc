<?php
/**
 * @file
 * hover_calendar.features.inc
 */

/**
 * Implementation of hook_views_api().
 */
function hover_calendar_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}
