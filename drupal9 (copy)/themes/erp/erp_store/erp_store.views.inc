<?php

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_store_views_data() {
  $data = array();

  $data['erp_store']['table']['group'] = t('ERP store');
  $data['erp_store']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_store']['store_id'] = array(
    'title' => t('Store id'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_store']['company'] = array(
    'title' => t('Company'),
    'help' => t('Company'),
    'field' => $std_field
  );

  $data['erp_store']['tax_id'] = array(
    'title' => t('ABN'),
    'help' => t('ABN'),
    'field' => $std_field
  );

  $data['erp_store']['address'] = array(
    'title' => t('Address'),
    'help' => t('Address'),
    'field' => $std_field
  );

  $data['erp_store']['suburb'] = array(
    'title' => t('Suburb'),
    'help' => t('Suburb'),
    'field' => $std_field
  );

  $data['erp_store']['state'] = array(
    'title' => t('State'),
    'help' => t('State'),
    'field' => $std_field
  );

  $data['erp_store']['postcode'] = array(
    'title' => t('Postcode'),
    'help' => t('Postcode'),
    'field' => $std_field
  );

  $data['erp_store']['phone'] = array(
    'title' => t('Phone'),
    'help' => t('Phone'),
    'field' => $std_field
  );

  $data['erp_store']['fax'] = array(
    'title' => t('Fax'),
    'help' => t('Fax'),
    'field' => $std_field
  );

  $data['erp_store']['mobile'] = array(
    'title' => t('Mobile'),
    'help' => t('Mobile'),
    'field' => $std_field
  );

  $data['erp_store']['bank_details'] = array(
    'title' => t('Bank details'),
    'help' => t('Bank details'),
    'field' => $std_field
  );

  $data['erp_store']['terms'] = array(
    'title' => t('Terms'),
    'help' => t('Terms'),
    'field' => $std_field
  );

  $data['erp_store']['email'] = array(
    'title' => t('Email'),
    'help' => t('Store email'),
    'field' => array(
      'handler' => 'erp_store_views_handler_field_email',
      'click sortable' => TRUE
    ),
  );

  return $data;
}

function erp_store_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_store'),
    ),
    'handlers' => array(
      'erp_store_views_handler_field_email' => array(
        'parent' => 'views_handler_field',
      ),
    ),
  );
}
