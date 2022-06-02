<?php

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_payment_views_data() {
  $data = array();

  $data['erp_payment']['table']['group'] = t('ERP payment');
  $data['erp_payment']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_payment']['customer_nid'] = array(
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

  $data['erp_payment']['payment_id'] = array(
    'title' => t('Id'),
    'help' => t('Payment id'),
    'field' => $std_field
  );

  $data['erp_payment']['total'] = array(
    'title' => t('Total'),
    'help' => t('Total payment'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE,
    )
  );

  return $data;
}

