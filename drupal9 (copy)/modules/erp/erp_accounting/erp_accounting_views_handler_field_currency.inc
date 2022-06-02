<?php
// $Id: erp_accounting_views_handler_field_currency.inc,v 1.1.2.4 2011/01/14 00:55:03 simon Exp $

/**
 * @file
 * Currency field handler for views
 */

class erp_accounting_views_handler_field_currency extends views_handler_field {
  function render( $values ) {
    $value = $values->{$this->field_alias};
    return check_plain(erp_currency($value));
  }
}
