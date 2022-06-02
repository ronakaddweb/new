<?php

class erp_store_views_handler_field_email extends views_handler_field {
  function render( $values ) {
    return l($values->erp_store_email, 'mailto:'. $values->erp_store_email);
  }
}