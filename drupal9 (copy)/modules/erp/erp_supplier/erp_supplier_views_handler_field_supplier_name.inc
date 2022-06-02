<?php
// $Id: erp_supplier_views_handler_field_supplier_name.inc,v 1.1.2.3 2009/12/26 00:22:23 simon Exp $

/**
 * @file
 * Handler for the supplier name field
 */

class erp_supplier_views_handler_field_supplier_name extends views_handler_field {
  function render( $values ) {
    return $values->node_title;
  }
}