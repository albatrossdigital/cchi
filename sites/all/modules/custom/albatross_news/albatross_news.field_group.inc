<?php
/**
 * @file
 * albatross_news.field_group.inc
 */

/**
 * Implementation of hook_field_group_info().
 */
function albatross_news_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->api_version = 1;
  $field_group->identifier = 'group_attachments|node|story|form';
  $field_group->group_name = 'group_attachments';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'story';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Attachments',
    'weight' => '4',
    'children' => array(
      0 => 'field_attachment',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_attachments|node|story|form'] = $field_group;

  return $export;
}
