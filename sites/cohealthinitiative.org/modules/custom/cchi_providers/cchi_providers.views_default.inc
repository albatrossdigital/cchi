<?php
/**
 * @file
 * cchi_providers.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function cchi_providers_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'providers';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'providers';
  $view->core = 7;
  $view->api_version = '3.0-alpha1';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Colorado Health-care Providers';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'gmap';
  $handler->display->display_options['style_options']['markertype'] = 'blue';
  $handler->display->display_options['style_options']['latfield'] = 'title';
  $handler->display->display_options['style_options']['lonfield'] = 'title';
  $handler->display->display_options['style_options']['markerfield'] = 'title';
  $handler->display->display_options['style_options']['enablermt'] = 0;
  $handler->display->display_options['style_options']['rmtfield'] = 'title';
  $handler->display->display_options['style_options']['center_on_proximityfilter'] = 1;
  $handler->display->display_options['style_options']['center_on_proximityfilter_rel'] = 'none';
  $handler->display->display_options['style_options']['tooltipenabled'] = 1;
  $handler->display->display_options['style_options']['tooltipfield'] = 'title';
  $handler->display->display_options['style_options']['bubbletextenabled'] = 1;
  $handler->display->display_options['style_options']['bubbletextfield'] = 'address';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nid']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['external'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['nid']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['nid']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['nid']['alter']['html'] = 0;
  $handler->display->display_options['fields']['nid']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['nid']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['nid']['hide_empty'] = 0;
  $handler->display->display_options['fields']['nid']['empty_zero'] = 0;
  $handler->display->display_options['fields']['nid']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['nid']['link_to_node'] = 0;
  /* Field: Location: Distance / Proximity */
  $handler->display->display_options['fields']['distance']['id'] = 'distance';
  $handler->display->display_options['fields']['distance']['table'] = 'location';
  $handler->display->display_options['fields']['distance']['field'] = 'distance';
  $handler->display->display_options['fields']['distance']['label'] = 'Distance';
  $handler->display->display_options['fields']['distance']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['external'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['distance']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['distance']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['distance']['alter']['html'] = 0;
  $handler->display->display_options['fields']['distance']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['distance']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['distance']['hide_empty'] = 0;
  $handler->display->display_options['fields']['distance']['empty_zero'] = 0;
  $handler->display->display_options['fields']['distance']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['distance']['origin'] = 'tied';
  $handler->display->display_options['fields']['distance']['units'] = 'mi';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 0;
  /* Field: Content: Call for Appointment */
  $handler->display->display_options['fields']['field_provider_call']['id'] = 'field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['table'] = 'field_data_field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['field'] = 'field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_call']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['alter']['text'] = '<div><div class="field-label">Call for appointments:</div> [field_provider_call]</div>';
  $handler->display->display_options['fields']['field_provider_call']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['field_api_classes'] = 0;
  /* Field: Content: Phone Number */
  $handler->display->display_options['fields']['field_provider_phone']['id'] = 'field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['table'] = 'field_data_field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['field'] = 'field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['text'] = '<div> <div class="field-label">Phone Number:</div> [field_provider_phone]</div>';
  $handler->display->display_options['fields']['field_provider_phone']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['field_api_classes'] = 0;
  /* Field: Content: Population Ages Served */
  $handler->display->display_options['fields']['field_provider_population']['id'] = 'field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['table'] = 'field_data_field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['field'] = 'field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_population']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['alter']['text'] = '<div> <div class="field-label">Population Ages Served:</div> [field_provider_population]</div>';
  $handler->display->display_options['fields']['field_provider_population']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['field_api_classes'] = 0;
  /* Field: Content: Provides CICP? */
  $handler->display->display_options['fields']['field_provider_ccip']['id'] = 'field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['table'] = 'field_data_field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['field'] = 'field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['field_api_classes'] = 0;
  /* Field: Content: Services */
  $handler->display->display_options['fields']['field_provider_services']['id'] = 'field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['table'] = 'field_data_field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['field'] = 'field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_services']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['alter']['text'] = '<div> <div class="field-label">Services:</div> [field_provider_services]</div>';
  $handler->display->display_options['fields']['field_provider_services']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['field_api_classes'] = 0;
  /* Field: Content: Sponsor */
  $handler->display->display_options['fields']['field_provider_sponsor']['id'] = 'field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['table'] = 'field_data_field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['field'] = 'field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['text'] = '<div> <div class="field-label">Sponsor:</div> [field_provider_sponsor]</div>';
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['field_api_classes'] = 0;
  /* Field: Content: Website */
  $handler->display->display_options['fields']['field_provider_website']['id'] = 'field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['table'] = 'field_data_field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['field'] = 'field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['label'] = 'Visit website';
  $handler->display->display_options['fields']['field_provider_website']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_provider_website']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['text'] = '<div><a href="[field_provider_website-url]" target="_blank">Visit website</a></div>';
  $handler->display->display_options['fields']['field_provider_website']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['external'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['element_label_colon'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['hide_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_provider_website']['type'] = 'link_plain';
  $handler->display->display_options['fields']['field_provider_website']['field_api_classes'] = 0;
  /* Field: Location: Address */
  $handler->display->display_options['fields']['address']['id'] = 'address';
  $handler->display->display_options['fields']['address']['table'] = 'location';
  $handler->display->display_options['fields']['address']['field'] = 'address';
  $handler->display->display_options['fields']['address']['exclude'] = TRUE;
  $handler->display->display_options['fields']['address']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['address']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['address']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['address']['alter']['external'] = 0;
  $handler->display->display_options['fields']['address']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['address']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['address']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['address']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['address']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['address']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['address']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['address']['alter']['html'] = 0;
  $handler->display->display_options['fields']['address']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['address']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['address']['hide_empty'] = 0;
  $handler->display->display_options['fields']['address']['empty_zero'] = 0;
  $handler->display->display_options['fields']['address']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['address']['hide'] = array(
    'name' => 'name',
    'country' => 'country',
    'locpick' => 'locpick',
    'province_name' => 'province_name',
    'country_name' => 'country_name',
    'map_link' => 'map_link',
    'coords' => 'coords',
    'street' => 0,
    'additional' => 0,
    'city' => 0,
    'province' => 0,
    'postal_code' => 0,
  );
  /* Field: Clinic */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['ui_name'] = 'Clinic';
  $handler->display->display_options['fields']['nothing']['label'] = 'Clinic';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div id="provider-[nid]">
[title]
[address]
[field_provider_call]
[field_provider_phone]
[field_provider_website]
</div>';
  $handler->display->display_options['fields']['nothing']['alter']['make_link'] = 0;
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
  /* Field: Services */
  $handler->display->display_options['fields']['nothing_1']['id'] = 'nothing_1';
  $handler->display->display_options['fields']['nothing_1']['table'] = 'views';
  $handler->display->display_options['fields']['nothing_1']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing_1']['ui_name'] = 'Services';
  $handler->display->display_options['fields']['nothing_1']['label'] = 'Services';
  $handler->display->display_options['fields']['nothing_1']['alter']['text'] = '[field_provider_services]
[field_provider_ccip]
[field_provider_population]
[field_provider_sponsor]';
  $handler->display->display_options['fields']['nothing_1']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['external'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['nothing_1']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['nothing_1']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['nothing_1']['alter']['html'] = 0;
  $handler->display->display_options['fields']['nothing_1']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['nothing_1']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['nothing_1']['hide_empty'] = 0;
  $handler->display->display_options['fields']['nothing_1']['empty_zero'] = 0;
  $handler->display->display_options['fields']['nothing_1']['hide_alter_empty'] = 0;
  /* Sort criterion: Location: Distance / Proximity */
  $handler->display->display_options['sorts']['distance']['id'] = 'distance';
  $handler->display->display_options['sorts']['distance']['table'] = 'location';
  $handler->display->display_options['sorts']['distance']['field'] = 'distance';
  $handler->display->display_options['sorts']['distance']['origin'] = 'tied';
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
    'provider' => 'provider',
  );
  /* Filter criterion: Location: Distance / Proximity */
  $handler->display->display_options['filters']['distance']['id'] = 'distance';
  $handler->display->display_options['filters']['distance']['table'] = 'location';
  $handler->display->display_options['filters']['distance']['field'] = 'distance';
  $handler->display->display_options['filters']['distance']['operator'] = 'dist';
  $handler->display->display_options['filters']['distance']['value'] = array(
    'latitude' => '',
    'longitude' => '',
    'postal_code' => '',
    'country' => '',
    'php_code' => '',
    'nid_arg' => '',
    'nid_loc_field' => 'node',
    'uid_arg' => '',
    'search_distance' => '25',
    'search_units' => 'mile',
  );
  $handler->display->display_options['filters']['distance']['exposed'] = TRUE;
  $handler->display->display_options['filters']['distance']['expose']['operator_id'] = 'distance_op';
  $handler->display->display_options['filters']['distance']['expose']['label'] = 'Where do you live?';
  $handler->display->display_options['filters']['distance']['expose']['operator'] = 'distance_op';
  $handler->display->display_options['filters']['distance']['expose']['identifier'] = 'distance';
  $handler->display->display_options['filters']['distance']['expose']['required'] = 1;
  $handler->display->display_options['filters']['distance']['expose']['remember'] = 1;
  $handler->display->display_options['filters']['distance']['expose']['multiple'] = FALSE;
  $handler->display->display_options['filters']['distance']['expose']['gmap_macro'] = array(
    'default' => '[gmap ]',
  );
  $handler->display->display_options['filters']['distance']['expose']['user_location_choose'] = array(
    'default' => FALSE,
  );
  $handler->display->display_options['filters']['distance']['origin'] = 'postal_default';
  /* Filter criterion: Content: Appendix (field_provider_index) */
  $handler->display->display_options['filters']['field_provider_index_value']['id'] = 'field_provider_index_value';
  $handler->display->display_options['filters']['field_provider_index_value']['table'] = 'field_data_field_provider_index';
  $handler->display->display_options['filters']['field_provider_index_value']['field'] = 'field_provider_index_value';
  $handler->display->display_options['filters']['field_provider_index_value']['operator'] = 'contains';
  $handler->display->display_options['filters']['field_provider_index_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['operator_id'] = 'field_provider_index_value_op';
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['label'] = 'Appendix';
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['operator'] = 'field_provider_index_value_op';
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['identifier'] = 'field_provider_index_value';
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['required'] = 0;
  $handler->display->display_options['filters']['field_provider_index_value']['expose']['multiple'] = FALSE;
  /* Filter criterion: Content: Type of Clinic (field_provider_type) */
  $handler->display->display_options['filters']['field_provider_type_value']['id'] = 'field_provider_type_value';
  $handler->display->display_options['filters']['field_provider_type_value']['table'] = 'field_data_field_provider_type';
  $handler->display->display_options['filters']['field_provider_type_value']['field'] = 'field_provider_type_value';
  $handler->display->display_options['filters']['field_provider_type_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_provider_type_value']['expose']['operator_id'] = 'field_provider_type_value_op';
  $handler->display->display_options['filters']['field_provider_type_value']['expose']['label'] = 'Type of Clinic';
  $handler->display->display_options['filters']['field_provider_type_value']['expose']['operator'] = 'field_provider_type_value_op';
  $handler->display->display_options['filters']['field_provider_type_value']['expose']['identifier'] = 'field_provider_type_value';
  $handler->display->display_options['filters']['field_provider_type_value']['expose']['multiple'] = FALSE;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Call for Appointment */
  $handler->display->display_options['fields']['field_provider_call']['id'] = 'field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['table'] = 'field_data_field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['field'] = 'field_provider_call';
  $handler->display->display_options['fields']['field_provider_call']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_call']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_call']['field_api_classes'] = 0;
  /* Field: Content: Phone Number */
  $handler->display->display_options['fields']['field_provider_phone']['id'] = 'field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['table'] = 'field_data_field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['field'] = 'field_provider_phone';
  $handler->display->display_options['fields']['field_provider_phone']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_phone']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_phone']['field_api_classes'] = 0;
  /* Field: Content: Population Ages Served */
  $handler->display->display_options['fields']['field_provider_population']['id'] = 'field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['table'] = 'field_data_field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['field'] = 'field_provider_population';
  $handler->display->display_options['fields']['field_provider_population']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_population']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_population']['field_api_classes'] = 0;
  /* Field: Content: Provides CICP? */
  $handler->display->display_options['fields']['field_provider_ccip']['id'] = 'field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['table'] = 'field_data_field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['field'] = 'field_provider_ccip';
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_ccip']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_ccip']['field_api_classes'] = 0;
  /* Field: Content: Services */
  $handler->display->display_options['fields']['field_provider_services']['id'] = 'field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['table'] = 'field_data_field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['field'] = 'field_provider_services';
  $handler->display->display_options['fields']['field_provider_services']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_services']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_services']['field_api_classes'] = 0;
  /* Field: Content: Sponsor */
  $handler->display->display_options['fields']['field_provider_sponsor']['id'] = 'field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['table'] = 'field_data_field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['field'] = 'field_provider_sponsor';
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_sponsor']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_sponsor']['field_api_classes'] = 0;
  /* Field: Content: Website */
  $handler->display->display_options['fields']['field_provider_website']['id'] = 'field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['table'] = 'field_data_field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['field'] = 'field_provider_website';
  $handler->display->display_options['fields']['field_provider_website']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_provider_website']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_provider_website']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_provider_website']['field_api_classes'] = 0;
  /* Field: Location: Address */
  $handler->display->display_options['fields']['address']['id'] = 'address';
  $handler->display->display_options['fields']['address']['table'] = 'location';
  $handler->display->display_options['fields']['address']['field'] = 'address';
  $handler->display->display_options['fields']['address']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['address']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['address']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['address']['alter']['external'] = 0;
  $handler->display->display_options['fields']['address']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['address']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['address']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['address']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['address']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['address']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['address']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['address']['alter']['html'] = 0;
  $handler->display->display_options['fields']['address']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['address']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['address']['hide_empty'] = 0;
  $handler->display->display_options['fields']['address']['empty_zero'] = 0;
  $handler->display->display_options['fields']['address']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['address']['hide'] = array(
    'name' => 'name',
    'country' => 'country',
    'locpick' => 'locpick',
    'province_name' => 'province_name',
    'country_name' => 'country_name',
    'map_link' => 'map_link',
    'coords' => 'coords',
    'street' => 0,
    'additional' => 0,
    'city' => 0,
    'province' => 0,
    'postal_code' => 0,
  );
  /* Field: Location: Latitude */
  $handler->display->display_options['fields']['latitude']['id'] = 'latitude';
  $handler->display->display_options['fields']['latitude']['table'] = 'location';
  $handler->display->display_options['fields']['latitude']['field'] = 'latitude';
  $handler->display->display_options['fields']['latitude']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['external'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['latitude']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['latitude']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['latitude']['alter']['html'] = 0;
  $handler->display->display_options['fields']['latitude']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['latitude']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['latitude']['hide_empty'] = 0;
  $handler->display->display_options['fields']['latitude']['empty_zero'] = 0;
  $handler->display->display_options['fields']['latitude']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['latitude']['style'] = 'dd';
  /* Field: Location: Longitude */
  $handler->display->display_options['fields']['longitude']['id'] = 'longitude';
  $handler->display->display_options['fields']['longitude']['table'] = 'location';
  $handler->display->display_options['fields']['longitude']['field'] = 'longitude';
  $handler->display->display_options['fields']['longitude']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['external'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['longitude']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['longitude']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['longitude']['alter']['html'] = 0;
  $handler->display->display_options['fields']['longitude']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['longitude']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['longitude']['hide_empty'] = 0;
  $handler->display->display_options['fields']['longitude']['empty_zero'] = 0;
  $handler->display->display_options['fields']['longitude']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['longitude']['style'] = 'dd';
  $handler->display->display_options['path'] = 'providers';

  /* Display: Attachment */
  $handler = $view->new_display('attachment', 'Attachment', 'attachment_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_provider_call' => 'field_provider_call',
    'field_provider_phone' => 'field_provider_phone',
    'field_provider_population' => 'field_provider_population',
    'field_provider_ccip' => 'field_provider_ccip',
    'field_provider_services' => 'field_provider_services',
    'field_provider_sponsor' => 'field_provider_sponsor',
    'field_provider_website' => 'field_provider_website',
    'address' => 'address',
    'latitude' => 'latitude',
    'longitude' => 'longitude',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_call' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_phone' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_population' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_ccip' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_services' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_sponsor' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'field_provider_website' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'address' => array(
      'align' => '',
      'separator' => '',
    ),
    'latitude' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
    'longitude' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['displays'] = array(
    'page' => 'page',
    'default' => 0,
  );
  $handler->display->display_options['attachment_position'] = 'after';
  $handler->display->display_options['inherit_exposed_filters'] = 1;
  $export['providers'] = $view;

  return $export;
}
