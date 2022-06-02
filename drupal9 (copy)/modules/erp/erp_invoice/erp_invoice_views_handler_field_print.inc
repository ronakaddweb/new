<?php
// $Id: erp_invoice_views_handler_field_print.inc,v 1.1.2.4 2009/12/26 00:22:22 simon Exp $

/**
 * @file
 * Handler to make invoices easily printable from views
 */

class erp_invoice_views_handler_field_print extends views_handler_field_custom {
  function render( $values ) {
    return l('print', 'print/'. $values->nid);
  }
}