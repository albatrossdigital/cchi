<?php
/**
 * @file
 * cchi_quiz_rules_and_permissions.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function cchi_quiz_rules_and_permissions_user_default_permissions() {
  $permissions = array();

  // Exported permission: access quiz
  $permissions['access quiz'] = array(
    'name' => 'access quiz',
    'roles' => array(),
  );

  return $permissions;
}
