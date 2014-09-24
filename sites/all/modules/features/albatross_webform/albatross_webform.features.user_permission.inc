<?php
/**
 * @file
 * albatross_webform.features.user_permission.inc
 */

/**
 * Implementation of hook_user_default_permissions().
 */
function albatross_webform_user_default_permissions() {
  $permissions = array();

  // Exported permission: create webform content
  $permissions['create webform content'] = array(
    'name' => 'create webform content',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any webform content
  $permissions['delete any webform content'] = array(
    'name' => 'delete any webform content',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own webform content
  $permissions['delete own webform content'] = array(
    'name' => 'delete own webform content',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any webform content
  $permissions['edit any webform content'] = array(
    'name' => 'edit any webform content',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own webform content
  $permissions['edit own webform content'] = array(
    'name' => 'edit own webform content',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  return $permissions;
}
