<?php
// $Id: erp_customer_views_handler_field_email.inc,v 1.1.2.3 2009/12/26 00:22:22 simon Exp $

/**
 * @file
 * Email handler to make the email from a customer field clickable
 */
class erp_customer_views_handler_field_email extends views_handler_field {
  function render( $values ) {
    return l($values->erp_customer_email, 'mailto:'. $values->erp_customer_email);
  }
}