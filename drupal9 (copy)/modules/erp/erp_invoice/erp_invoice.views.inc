<?php

// $Id: erp_invoice.views.inc,v 1.1.2.6 2009/12/26 00:22:22 simon Exp $
/**
 * @file
 * Views related erp invoice code
 */

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_invoice_views_data() {
  $data = array();

  $data['erp_invoice']['table']['group'] = t('ERP invoice');
  $data['erp_invoice']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_invoice']['customer_nid'] = array(
    'title' => t('ERP Customer'),
    'help' => t('Add ability to relate in customer nodes.'),
    // Because this is a foreign key to the {node} table. This allows us to
    // have, when the view is configured with this relationship, all the fields
    // for the related node available.
    'relationship' => array(
      'base' => 'node',
      'field' => 'nid',
      'handler' => 'views_handler_relationship',
      'label' => t('Customer'),
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_invoice']['invoice_id'] = array(
    'title' => t('Id'),
    'help' => t('Invoice id'),
    'field' => $std_field,
  );

  $data['erp_invoice']['total'] = array(
    'title' => t('Total'),
    'help' => t('Total invoiced'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE,
    )
  );

  $data['erp_invoice']['invoice_status'] = array(
    'title' => t('Invoice status'),
    'help' => t('Show the invoice status'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort'
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $data['erp_invoice']['printed'] = array(
    'title' => t('Printed'),
    'help' => t('Has the invoice been printed'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $data['erp_invoice']['print'] = array(
    'title' => t('Print'),
    'help' => t('Provide link to print invoice'),
    'field' => array(
      'handler' => 'erp_invoice_views_handler_field_print',
    )
  );

  return $data;
}

function erp_invoice_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_invoice'),
    ),
    'handlers' => array(
      'erp_invoice_views_handler_field_print' => array(
        'parent' => 'views_handler_field_custom',
      ),
    ),
  );
}
