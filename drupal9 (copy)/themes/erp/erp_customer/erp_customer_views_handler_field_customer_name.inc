<?php

class erp_customer_views_handler_field_customer_name extends views_handler_field {
  function render( $values ) {
    return $values->node_title;
  }
}