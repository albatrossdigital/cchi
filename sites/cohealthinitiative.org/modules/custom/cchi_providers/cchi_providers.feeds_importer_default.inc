<?php
/**
 * @file
 * cchi_providers.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function cchi_providers_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass;
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'providers';
  $feeds_importer->config = array(
    'name' => 'Providers',
    'description' => 'Imports nodes of type Provider.',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => FALSE,
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'no_headers' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'content_type' => 'provider',
        'expire' => '-1',
        'author' => 0,
        'mappings' => array(
          0 => array(
            'source' => 'Name',
            'target' => 'title',
            'unique' => FALSE,
          ),
          1 => array(
            'source' => 'Appendix',
            'target' => 'field_provider_index',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'Type of Clinic (Appendix III only)',
            'target' => 'field_provider_type',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'CICP',
            'target' => 'field_provider_ccip',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'Website',
            'target' => 'field_provider_website:url',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'Population Ages Served',
            'target' => 'field_provider_population',
            'unique' => FALSE,
          ),
          6 => array(
            'source' => 'Address',
            'target' => 'locations:street',
            'unique' => FALSE,
          ),
          7 => array(
            'source' => 'City',
            'target' => 'locations:city',
            'unique' => FALSE,
          ),
          8 => array(
            'source' => 'State',
            'target' => 'locations:province',
            'unique' => FALSE,
          ),
          9 => array(
            'source' => 'Zip',
            'target' => 'locations:postal_code',
            'unique' => FALSE,
          ),
          10 => array(
            'source' => 'County',
            'target' => 'field_provider_county',
            'unique' => FALSE,
          ),
          11 => array(
            'source' => 'Phone',
            'target' => 'field_provider_phone',
            'unique' => FALSE,
          ),
          12 => array(
            'source' => 'Sponsor/Grantee/district - Grant',
            'target' => 'field_provider_sponsor',
            'unique' => FALSE,
          ),
          13 => array(
            'source' => 'Call for Appointment',
            'target' => 'field_provider_call',
            'unique' => FALSE,
          ),
          14 => array(
            'source' => 'Services',
            'target' => 'field_provider_services',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '1',
        'input_format' => 'plain_text',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['providers'] = $feeds_importer;

  return $export;
}
