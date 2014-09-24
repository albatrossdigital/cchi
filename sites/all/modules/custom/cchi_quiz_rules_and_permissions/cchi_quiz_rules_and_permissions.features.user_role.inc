<?php
/**
 * @file
 * cchi_quiz_rules_and_permissions.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function cchi_quiz_rules_and_permissions_user_default_roles() {
  $roles = array();

  // Exported role: boomer
  $roles['boomer'] = array(
    'name' => 'boomer',
    'weight' => '3',
  );

  // Exported role: members_section
  $roles['members_section'] = array(
    'name' => 'members_section',
    'weight' => '4',
  );

  return $roles;
}
