<?php
/**
 * @file
 * albatross_slideshow.views_default.inc
 */

/**
 * Implementation of hook_views_default_views().
 */
function albatross_slideshow_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'slideshow';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Slideshow';
  $view->core = 7;
  $view->api_version = '3.0-alpha1';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'slideshow';
  $handler->display->display_options['style_options']['slideshow_type'] = 'views_slideshow_cycle';
  $handler->display->display_options['style_options']['slideshow_skin'] = 'default';
  $handler->display->display_options['style_options']['skin_info'] = array(
    'class' => 'default',
    'name' => 'Default',
    'module' => 'views_slideshow',
    'path' => '',
    'stylesheets' => array(),
  );
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['weight'] = '1';
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['type'] = 'views_slideshow_pager_fields';
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['views_slideshow_pager_fields_fields'] = array(
    'title' => 0,
  );
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_controls']['weight'] = '1';
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_controls']['type'] = 'views_slideshow_controls_text';
  $handler->display->display_options['style_options']['widgets']['top']['views_slideshow_slide_counter']['weight'] = '1';
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['enable'] = 1;
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['weight'] = '1';
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['type'] = 'views_slideshow_pager_fields';
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['views_slideshow_pager_fields_fields'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_controls']['enable'] = 1;
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_controls']['weight'] = '1';
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_controls']['type'] = 'views_slideshow_controls_text';
  $handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_slide_counter']['weight'] = '1';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['timeout'] = '5000';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['speed'] = '700';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['delay'] = '0';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['start_paused'] = 0;
  $handler->display->display_options['style_options']['views_slideshow_cycle']['remember_slide_days'] = '1';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['items_per_slide'] = '1';
  $handler->display->display_options['style_options']['views_slideshow_cycle']['cleartype'] = 0;
  $handler->display->display_options['style_options']['views_slideshow_cycle']['cleartypenobg'] = 0;
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['empty'] = TRUE;
  $handler->display->display_options['header']['area']['content'] = '<ul class="action-links"><li><a href="">Add new slide</a></li></ul>';
  $handler->display->display_options['header']['area']['format'] = 'filtered_html';
  $handler->display->display_options['header']['area']['tokenize'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['label'] = '';
  $handler->display->display_options['fields']['field_image']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_image']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_image']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_image']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_image']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_image']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['type'] = 'styles_media_large';
  $handler->display->display_options['fields']['field_image']['field_api_classes'] = 0;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['field_slide_link']['id'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['table'] = 'field_data_field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['field'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['label'] = '';
  $handler->display->display_options['fields']['field_slide_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_link']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['element_type'] = '0';
  $handler->display->display_options['fields']['field_slide_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_slide_link']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_slide_link']['type'] = 'plain';
  $handler->display->display_options['fields']['field_slide_link']['field_api_classes'] = 0;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['field_description']['id'] = 'field_description';
  $handler->display->display_options['fields']['field_description']['table'] = 'field_data_field_description';
  $handler->display->display_options['fields']['field_description']['field'] = 'field_description';
  $handler->display->display_options['fields']['field_description']['label'] = '';
  $handler->display->display_options['fields']['field_description']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_description']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_description']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_description']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_description']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_description']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_description']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_description']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_description']['field_api_classes'] = 0;
  /* Sort criterion: DraggableViews: Order */
  $handler->display->display_options['sorts']['value0']['id'] = 'value0';
  $handler->display->display_options['sorts']['value0']['table'] = 'draggableviews_structure_node0';
  $handler->display->display_options['sorts']['value0']['field'] = 'value0';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'slide' => 'slide',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['defaults']['access'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'edit any slide content';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'draggabletable';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_image' => 'field_image',
    'field_slide_link' => 'field_slide_link',
    'field_description' => 'field_description',
    'value0' => 'value0',
  );
  $handler->display->display_options['style_options']['default'] = -1;
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_image' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_slide_link' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_description' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'value0' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  $handler->display->display_options['style_options']['tabledrag_order'] = array(
    'field' => 'value0',
    'handler' => 'native',
  );
  $handler->display->display_options['style_options']['tabledrag_order_visible'] = array(
    'visible' => 0,
  );
  $handler->display->display_options['style_options']['tabledrag_hierarchy'] = array(
    'field' => 'none',
    'handler' => 'native',
  );
  $handler->display->display_options['style_options']['tabledrag_hierarchy_visible'] = array(
    'visible' => 0,
  );
  $handler->display->display_options['style_options']['draggableviews_depth_limit'] = '0';
  $handler->display->display_options['style_options']['draggableviews_repair'] = array(
    0 => 'repair',
    'repair' => 'repair',
  );
  $handler->display->display_options['style_options']['tabledrag_expand'] = array(
    'expand_links' => 0,
    'collapsed' => 0,
    'by_uid' => 0,
  );
  $handler->display->display_options['style_options']['draggableviews_extensions'] = array(
    'extension_top' => '3',
    'extension_bottom' => '3',
  );
  $handler->display->display_options['style_options']['tabledrag_lock'] = array(
    'lock' => 0,
  );
  $handler->display->display_options['style_options']['draggableviews_default_on_top'] = '1';
  $handler->display->display_options['style_options']['draggableviews_arguments'] = array(
    'use_args' => 0,
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['label'] = '';
  $handler->display->display_options['fields']['field_image']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_image']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_image']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_image']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_image']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_image']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_image']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['type'] = 'styles_media_thumbnail';
  $handler->display->display_options['fields']['field_image']['field_api_classes'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['field_slide_link']['id'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['table'] = 'field_data_field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['field'] = 'field_slide_link';
  $handler->display->display_options['fields']['field_slide_link']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_slide_link']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['element_type'] = '0';
  $handler->display->display_options['fields']['field_slide_link']['element_label_colon'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_slide_link']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_slide_link']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_slide_link']['type'] = 'plain';
  $handler->display->display_options['fields']['field_slide_link']['field_api_classes'] = 0;
  /* Field: DraggableViews: Order */
  $handler->display->display_options['fields']['value0']['id'] = 'value0';
  $handler->display->display_options['fields']['value0']['table'] = 'draggableviews_structure_node0';
  $handler->display->display_options['fields']['value0']['field'] = 'value0';
  $handler->display->display_options['fields']['value0']['label'] = '';
  $handler->display->display_options['fields']['value0']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['external'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['value0']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['value0']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['value0']['alter']['html'] = 0;
  $handler->display->display_options['fields']['value0']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['value0']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['value0']['hide_empty'] = 0;
  $handler->display->display_options['fields']['value0']['empty_zero'] = 0;
  $handler->display->display_options['fields']['value0']['hide_alter_empty'] = 0;
  $handler->display->display_options['path'] = 'admin/content/slideshow';
  $export['slideshow'] = $view;

  return $export;
}
