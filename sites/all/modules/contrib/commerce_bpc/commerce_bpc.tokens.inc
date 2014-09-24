<?php
/**
 * @file
 *   Token API implementations for Commerce bulk product creation module.
 */
/**
 * Implements hook_token_info().
 */
function commerce_bpc_token_info() {
  $token_type = array(
    'name' => t('Bulk Product'),
    'description' => t('Tokens related to bulk products.'),
    'needs-data' => 'bulk_product',
  );

  // Tokens for bulk products.
  $bulk_product = array();

  // Build a whitelist of possible tokens
  foreach (commerce_product_types() as $type => $product_type) {
    if (commerce_bpc_valid_product_type($type)) {
      // Load the fields available to the product type
      $fields = field_info_instances('commerce_product', $type);
      foreach ($fields as $field_type => $field) {
        if ($field_type != 'commerce_price' AND commerce_bpc_valid_field($field)) {
          $field_info = field_info_field($field_type);

          $bulk_product[$field_type . '-value'] = array(
            'name' => t('@field Option Value', array('@field' => $field['label'])),
            'description' => t('The value of the @field option.', array('@field' => $field['label'])),
          );

          $bulk_product[$field_type . '-name'] = array(
            'name' => t('@field Option Name', array('@field' => $field['label'])),
            'description' => t('The name of the @field option.', array('@field' => $field['label'])),
          );
        }
      }
    }
  }

  return array(
    'types' => array('bulk_product' => $token_type),
    'tokens' => array('bulk_product' => $bulk_product),
  );
}

/**
 * Implements hook_tokens().
 */
function commerce_bpc_tokens($type, $tokens, array $data = array(), array $options = array()) {
  $url_options = array('absolute' => TRUE);

  if (isset($options['language'])) {
    $url_options['language'] = $options['language'];
    $language_code = $options['language']->language;
  }
  else {
    $language_code = NULL;
  }

  $sanitize = !empty($options['sanitize']);

  $replacements = array();

  if ($type == 'bulk_product' && !empty($data['bulk_product'])) {
    $bulk_product = $data['bulk_product'];

    foreach ($tokens as $name => $original) {
      $replacements[$original] = $bulk_product[$name];
    }
  }

  return $replacements;
}
/**
 * Helper function to build the replacement tokens from the options
 */
function commerce_bpc_build_replacement_tokens($options) {
  $replacement_options = array();
  foreach ($options as $field => $field_info) {
    $replacement_options[$field . "-value"] = $field_info['value'];
    if (isset($field_info['name'])) {
      $replacement_options[$field . "-name"] = $field_info['name'];
    }
  }
  return $replacement_options;
}