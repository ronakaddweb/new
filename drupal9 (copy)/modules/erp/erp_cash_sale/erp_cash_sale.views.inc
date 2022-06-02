<?php

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_cash_sale_views_data() {
  $data = array();

  $data['erp_cash_sale']['table']['group'] = t('ERP cash sale');
  $data['erp_cash_sale']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_cash_sale']['customer_nid'] = array(
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

  $data['erp_cash_sale']['cash_sale_id'] = array(
    'title' => t('Id'),
    'help' => t('Cash sale id'),
    'field' => $std_field
  );
  
  $data['erp_cash_sale']['payment_amount'] = array(
    'title' => t('Payment amount'),
    'help' => t('Payment amount'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),
  );

  $data['erp_cash_sale']['total'] = array(
    'title' => t('Total'),
    'help' => t('Total'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),
  );  
  return $data;
}
