<?php

class erp_cash_sale_views_handler_field_customer extends views_handler_field {
  function render( $values ) {
    return l($values->erp_customer_email, 'mailto:'. $values->erp_customer_email);
  }
}