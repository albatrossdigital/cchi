<?php

/*
 * @file
 * Hanldes field user_email.
 */
class quiz_views_handler_field_user_email extends views_handler_field {
  function render($values) {
    $value = $values->{$this->field_alias};
    return $value;
  }
}
