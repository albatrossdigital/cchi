<?php
/**
 * @file
 * cchi_quiz_rules_and_permissions.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function cchi_quiz_rules_and_permissions_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'quiz_results_views';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'quiz_node_properties';
  $view->human_name = 'Quiz results';
  $view->core = 7;
  $view->api_version = '3.0-alpha1';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Quiz results';
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    3 => '3',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '100';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'user_email' => 'user_email',
    'score' => 'score',
    'time_start' => 'time_start',
    'time_end' => 'time_end',
    'quiz_state' => 'quiz_state',
    'result_id' => 'result_id',
    'nothing' => 'nothing',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'user_email' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'score' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'time_start' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'time_end' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'quiz_state' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'result_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  /* Relationship: Quiz Results: Quiz Node NID */
  $handler->display->display_options['relationships']['nid']['id'] = 'nid';
  $handler->display->display_options['relationships']['nid']['table'] = 'quiz_node_results';
  $handler->display->display_options['relationships']['nid']['field'] = 'nid';
  $handler->display->display_options['relationships']['nid']['required'] = 0;
  /* Field: Quiz Results: User Email */
  $handler->display->display_options['fields']['user_email']['id'] = 'user_email';
  $handler->display->display_options['fields']['user_email']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['user_email']['field'] = 'user_email';
  $handler->display->display_options['fields']['user_email']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['external'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['user_email']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['user_email']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['user_email']['alter']['html'] = 0;
  $handler->display->display_options['fields']['user_email']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['user_email']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['user_email']['hide_empty'] = 1;
  $handler->display->display_options['fields']['user_email']['empty_zero'] = 0;
  $handler->display->display_options['fields']['user_email']['hide_alter_empty'] = 0;
  /* Field: Quiz Results: Score */
  $handler->display->display_options['fields']['score']['id'] = 'score';
  $handler->display->display_options['fields']['score']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['score']['field'] = 'score';
  $handler->display->display_options['fields']['score']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['score']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['score']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['score']['alter']['external'] = 0;
  $handler->display->display_options['fields']['score']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['score']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['score']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['score']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['score']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['score']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['score']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['score']['alter']['html'] = 0;
  $handler->display->display_options['fields']['score']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['score']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['score']['hide_empty'] = 0;
  $handler->display->display_options['fields']['score']['empty_zero'] = 0;
  $handler->display->display_options['fields']['score']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['score']['format_plural'] = 0;
  /* Field: Quiz Results: Quiz Start Time */
  $handler->display->display_options['fields']['time_start']['id'] = 'time_start';
  $handler->display->display_options['fields']['time_start']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['time_start']['field'] = 'time_start';
  $handler->display->display_options['fields']['time_start']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['external'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['time_start']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['time_start']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['time_start']['alter']['html'] = 0;
  $handler->display->display_options['fields']['time_start']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['time_start']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['time_start']['hide_empty'] = 0;
  $handler->display->display_options['fields']['time_start']['empty_zero'] = 0;
  $handler->display->display_options['fields']['time_start']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['time_start']['date_format'] = 'long';
  /* Field: Quiz Results: Quiz End Time */
  $handler->display->display_options['fields']['time_end']['id'] = 'time_end';
  $handler->display->display_options['fields']['time_end']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['time_end']['field'] = 'time_end';
  $handler->display->display_options['fields']['time_end']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['external'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['time_end']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['time_end']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['time_end']['alter']['html'] = 0;
  $handler->display->display_options['fields']['time_end']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['time_end']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['time_end']['hide_empty'] = 0;
  $handler->display->display_options['fields']['time_end']['empty_zero'] = 0;
  $handler->display->display_options['fields']['time_end']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['time_end']['date_format'] = 'long';
  /* Field: Quiz Results: Quiz State */
  $handler->display->display_options['fields']['quiz_state']['id'] = 'quiz_state';
  $handler->display->display_options['fields']['quiz_state']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['quiz_state']['field'] = 'quiz_state';
  $handler->display->display_options['fields']['quiz_state']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['external'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['quiz_state']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['quiz_state']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['quiz_state']['alter']['html'] = 0;
  $handler->display->display_options['fields']['quiz_state']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['quiz_state']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['quiz_state']['hide_empty'] = 0;
  $handler->display->display_options['fields']['quiz_state']['empty_zero'] = 0;
  $handler->display->display_options['fields']['quiz_state']['hide_alter_empty'] = 0;
  /* Field: Quiz Results: Result ID */
  $handler->display->display_options['fields']['result_id']['id'] = 'result_id';
  $handler->display->display_options['fields']['result_id']['table'] = 'quiz_node_results';
  $handler->display->display_options['fields']['result_id']['field'] = 'result_id';
  $handler->display->display_options['fields']['result_id']['label'] = '';
  $handler->display->display_options['fields']['result_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['result_id']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['external'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['result_id']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['result_id']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['result_id']['alter']['html'] = 0;
  $handler->display->display_options['fields']['result_id']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['result_id']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['result_id']['hide_empty'] = 0;
  $handler->display->display_options['fields']['result_id']['empty_zero'] = 0;
  $handler->display->display_options['fields']['result_id']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['result_id']['separator'] = '';
  $handler->display->display_options['fields']['result_id']['format_plural'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = 'View results';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'View';
  $handler->display->display_options['fields']['nothing']['alter']['make_link'] = 1;
  $handler->display->display_options['fields']['nothing']['alter']['path'] = 'node/!1/results/[result_id]';
  $handler->display->display_options['fields']['nothing']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['external'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['nothing']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['nothing']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['html'] = 0;
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['nothing']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['nothing']['hide_empty'] = 0;
  $handler->display->display_options['fields']['nothing']['empty_zero'] = 0;
  $handler->display->display_options['fields']['nothing']['hide_alter_empty'] = 0;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['relationship'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['break_phrase'] = 0;
  $handler->display->display_options['arguments']['nid']['not'] = 0;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'node/%/quiz-results';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'Quiz Results';
  $handler->display->display_options['menu']['description'] = 'Quiz Results';
  $handler->display->display_options['menu']['weight'] = '0';
  $export['quiz_results_views'] = $view;

  return $export;
}
