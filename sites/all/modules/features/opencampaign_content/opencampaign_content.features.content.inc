<?php

/**
 * Implementation of hook_content_defaults().
 */
function opencampaign_content_content_defaults() {
$content = array();
$content['volunteer'] = (object)array(
  'exported_path' => 'volunteer',
  'webform' => array(
    'confirmation' => '<p>Thank you for your interest in volunteering.  We will get back to you shortly.</p>',
    'confirmation_format' => '0',
    'redirect_url' => '<confirmation>',
    'status' => '1',
    'block' => '0',
    'teaser' => '0',
    'allow_draft' => '0',
    'submit_notice' => '1',
    'submit_text' => '',
    'submit_limit' => '-1',
    'submit_interval' => '-1',
    'roles' => array(
      '0' => '1',
      '1' => '2',
    ),
    'emails' => array(),
    'components' => array(
      '0' => array(
        'pid' => '0',
        'form_key' => 'first_name',
        'name' => 'First Name',
        'type' => 'textfield',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'width' => '',
          'maxlength' => '',
          'field_prefix' => '',
          'field_suffix' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '1',
        'weight' => '0',
        'page_num' => 1,
      ),
      '1' => array(
        'pid' => '0',
        'form_key' => 'last_name',
        'name' => 'Last Name',
        'type' => 'textfield',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'width' => '',
          'maxlength' => '',
          'field_prefix' => '',
          'field_suffix' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '1',
        'weight' => '1',
        'page_num' => 1,
      ),
      '2' => array(
        'pid' => '0',
        'form_key' => 'street_address',
        'name' => 'Street Address',
        'type' => 'textfield',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'width' => '',
          'maxlength' => '',
          'field_prefix' => '',
          'field_suffix' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '0',
        'weight' => '2',
        'page_num' => 1,
      ),
      '3' => array(
        'pid' => '0',
        'form_key' => 'city',
        'name' => 'City',
        'type' => 'textfield',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'width' => '',
          'maxlength' => '',
          'field_prefix' => '',
          'field_suffix' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '0',
        'weight' => '3',
        'page_num' => 1,
      ),
      '4' => array(
        'pid' => '0',
        'form_key' => 'state',
        'name' => 'State',
        'type' => 'select',
        'value' => 'CO',
        'extra' => array(
          'items' => 'AL|Alabama
AK|Alaska
AS|American Samoa
AZ|Arizona
AR|Arkansas
CA|California
CO|Colorado
CT|Connecticut
DE|Delaware
DC|District of Columbia
FL|Florida
GA|Georgia
GU|Guam
HI|Hawaii
ID|Idaho
IL|Illinois
IN|Indiana
IA|Iowa
KS|Kansas
KY|Kentucky
LA|Louisiana
ME|Maine
MH|Marshall Islands
MD|Maryland
MA|Massachusetts
MI|Michigan
MN|Minnesota
MS|Mississippi
MO|Missouri
MT|Montana
NE|Nebraska
NV|Nevada
NH|New Hampshire
NJ|New Jersey
NM|New Mexico
NY|New York
NC|North Carolina
ND|North Dakota
MP|Northern Marianas Islands
OH|Ohio
OK|Oklahoma
OR|Oregon
PW|Palau
PA|Pennsylvania
PR|Puerto Rico
RI|Rhode Island
SC|South Carolina
SD|South Dakota
TN|Tennessee
TX|Texas
UT|Utah
VT|Vermont
VI|Virgin Islands
VA|Virginia
WA|Washington
WV|West Virginia
WI|Wisconsin
WY|Wyoming
',
          'options_source' => 'united_states',
          'multiple' => 0,
          'title_display' => 0,
          'aslist' => 1,
          'optrand' => 0,
          'conditional_operator' => '=',
          'other_option' => NULL,
          'other_text' => 'Other...',
          'description' => '',
          'custom_keys' => FALSE,
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '0',
        'weight' => '4',
        'page_num' => 1,
      ),
      '5' => array(
        'pid' => '0',
        'form_key' => 'zip',
        'name' => 'Zip',
        'type' => 'textfield',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'width' => '5',
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'maxlength' => '',
          'field_prefix' => '',
          'field_suffix' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '1',
        'weight' => '5',
        'page_num' => 1,
      ),
      '6' => array(
        'pid' => '0',
        'form_key' => 'email_address',
        'name' => 'Email Address',
        'type' => 'email',
        'value' => '',
        'extra' => array(
          'title_display' => 0,
          'disabled' => 0,
          'unique' => 0,
          'conditional_operator' => '=',
          'width' => '',
          'description' => '',
          'attributes' => array(),
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '1',
        'weight' => '6',
        'page_num' => 1,
      ),
      '7' => array(
        'pid' => '0',
        'form_key' => 'how_would_you_like_to_help',
        'name' => 'How would you like to help?',
        'type' => 'select',
        'value' => '',
        'extra' => array(
          'items' => 'Host a coffee or a fundraiser|Host a coffee or a fundraiser
Distribute Literature|Distribute Literature
Help with events|Help with events
Help with fundraising|Help with fundraising
Help with mailings|Help with mailings
Phone calls|Make phone calls
Walk in parades|Walk with Happy, parades, neighborhood precincts
Yard Sign|Take a yard sign
Other|I can help in other ways. Call me.',
          'multiple' => 1,
          'title_display' => 0,
          'aslist' => 0,
          'optrand' => 0,
          'conditional_operator' => '=',
          'other_option' => NULL,
          'other_text' => 'Other...',
          'description' => '',
          'custom_keys' => FALSE,
          'options_source' => '',
          'conditional_component' => '',
          'conditional_values' => '',
        ),
        'mandatory' => '1',
        'weight' => '7',
        'page_num' => 1,
      ),
    ),
  ),
  'title' => 'Sign Up to Volunteer',
  'status' => '1',
  'promote' => '1',
  'sticky' => '0',
  'type' => 'webform',
  'language' => 'und',
  'created' => '1298659536',
  'comment' => '0',
  'translate' => '0',
  'machine_name' => 'volunteer',
);
return $content;
}
