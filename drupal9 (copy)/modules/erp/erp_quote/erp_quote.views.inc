<?php

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_quote_views_data() {
  $data = array();

  $data['erp_quote']['table']['group'] = t('ERP quote');
  $data['erp_quote']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  /* Actually, store is used for this. Doh. Saving for later.
  $data['erp_quote']['oid'] = array(
    'title' => t('ERP Quote owner'),
    'help' => t("Add the ability to relate in the 'owner'"),
    'relationship' => array(
      'base' => 'users',
      'field' => 'uid',
      'handler' => 'views_handler_relationship',
      'label' => t('Owner'),
    )
  );
  */

  $data['erp_quote']['customer_nid'] = array(
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

  $data['erp_quote']['quote_id'] = array(
    'title' => t('Id'),
    'help' => t('Quote id'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE
    ),
  );

  $data['erp_quote']['total'] = array(
    'title' => t('Total'),
    'help' => t('Quote total'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),
  );

  return $data;
}

/*
function erp_quote_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_quote'),
    ),
  );
}
*/