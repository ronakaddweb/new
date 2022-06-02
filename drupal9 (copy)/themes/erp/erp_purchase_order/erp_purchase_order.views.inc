<?php
// $Id: erp_purchase_order.views.inc,v 1.1.2.5 2009/12/26 00:22:22 simon Exp $

/**
 * @file
 * Views definitions for the erp_purchase_order module.
 */

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_purchase_order_views_data() {
  $data = array();

  $data['erp_purchase_order']['table']['group'] = t('ERP purchase order');
  $data['erp_purchase_order']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_purchase_order']['customer_nid'] = array(
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

  $data['erp_purchase_order']['supplier_nid'] = array(
    'title' => t('ERP Supplier'),
    'help' => t('Add ability to relate in supplier nodes.'),
    // Because this is a foreign key to the {node} table. This allows us to
    // have, when the view is configured with this relationship, all the fields
    // for the related node available.
    'relationship' => array(
      'base' => 'node',
      'field' => 'nid',
      'handler' => 'views_handler_relationship',
      'label' => t('Supplier'),
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_purchase_order']['purchase_order_id'] = array(
    'title' => t('Id'),
    'help' => t('Purchase order id'),
    'field' => $std_field,
  );

  $data['erp_purchase_order']['purchase_order_status'] = array(
    'title' => t('Status'),
    'help' => t('Purchase order status'),
    'field' => $std_field,
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $data['erp_purchase_order']['total'] = array(
    'title' => t('Total'),
    'help' => t('Total of the PO'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),
  
  );

  return $data;
}

/*
function erp_purchase_order_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_purchase_order'),
    ),
  );
}
*/
