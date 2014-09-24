<?php
/**
 * @file
 * cchi_providers.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function cchi_providers_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass;
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'providers-call_for_appointment-convert_case';
  $feeds_tamper->importer = 'providers';
  $feeds_tamper->source = 'Call for Appointment';
  $feeds_tamper->plugin_id = 'convert_case';
  $feeds_tamper->settings = array(
    'mode' => '2',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Convert case';
  $export['providers-call_for_appointment-convert_case'] = $feeds_tamper;

  return $export;
}
