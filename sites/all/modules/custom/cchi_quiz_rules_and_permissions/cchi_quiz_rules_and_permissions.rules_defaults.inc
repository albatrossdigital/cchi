<?php
/**
 * @file
 * cchi_quiz_rules_and_permissions.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function cchi_quiz_rules_and_permissions_default_rules_configuration() {
  $items = array();
  $items['rules_restrict_access_to_quiz_pages'] = entity_import('rules_config', '{ "rules_restrict_access_to_quiz_pages" : {
      "LABEL" : "Restrict Access to quiz pages",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "rules" ],
      "ON" : [ "node_view" ],
      "IF" : [
        { "node_is_of_type" : { "node" : [ "node" ], "type" : { "value" : { "quiz" : "quiz" } } } },
        { "AND" : [
            { "NOT user_has_role" : {
                "account" : [ "site:current-user" ],
                "roles" : { "value" : { "2" : "2" } }
              }
            }
          ]
        }
      ],
      "DO" : [
        { "redirect" : { "url" : "user", "destination" : 1 } },
        { "drupal_message" : { "message" : "Please log in to view that page." } }
      ]
    }
  }');
  $items['rules_user_redirect'] = entity_import('rules_config', '{ "rules_user_redirect" : {
      "LABEL" : "Redirect to members",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "rules" ],
      "ON" : [ "user_login" ],
      "IF" : [
        { "user_has_role" : {
            "account" : [ "account" ],
            "roles" : { "value" : { "3" : "3", "5" : "5" } },
            "operation" : "OR"
          }
        }
      ],
      "DO" : [ { "redirect" : { "url" : "members-resources" } } ]
    }
  }');
  return $items;
}
