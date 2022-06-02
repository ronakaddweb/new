<?php
// $Id: erp_supplier.views.inc,v 1.1.2.6 2009/12/26 00:22:23 simon Exp $

/**
 * @file
 * Views definitions for the erp_supplier module
 */

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_supplier_views_data() {
  $data = array();

  $data['erp_supplier']['table']['group'] = t('ERP supplier');
  $data['erp_supplier']['table']['join'] = array(
     'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_supplier']['supplier_id'] = array(
    'title' => t('ERP Supplier'),
    'help' => t('Add ability to relate in supplier nodes.'),
    'field' => array(
      'help' => t('Supplier id'),
      'handler' => 'views_handler_field',
      'click sortable' => TRUE
    ),
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

  $data['erp_supplier']['address'] = array(
    'title' => t('Address'),
    'help' => t('Address'),
    'field' => $std_field
  );

  $data['erp_supplier']['suburb'] = array(
    'title' => t('Suburb'),
    'help' => t('Suburb'),
    'field' => $std_field
  );

  $data['erp_supplier']['state'] = array(
    'title' => t('State'),
    'help' => t('State'),
    'field' => $std_field
  );

  $data['erp_supplier']['postcode'] = array(
    'title' => t('Postcode'),
    'help' => t('Postcode'),
    'field' => $std_field
  );

  $data['erp_supplier']['phone'] = array(
    'title' => t('Phone'),
    'help' => t('Phone'),
    'field' => $std_field
  );

  $data['erp_supplier']['fax'] = array(
    'title' => t('Fax'),
    'help' => t('Fax'),
    'field' => $std_field
  );

  $data['erp_supplier']['mobile'] = array(
    'title' => t('Mobile'),
    'help' => t('Mobile'),
    'field' => $std_field
  );

  $data['erp_supplier']['bank_details'] = array(
    'title' => t('Bank details'),
    'help' => t('Bank details'),
    'field' => $std_field
  );

  $data['erp_supplier']['terms'] = array(
    'title' => t('Terms'),
    'help' => t('Terms'),
    'field' => $std_field
  );

  $data['erp_supplier']['email'] = array(
    'title' => t('Email'),
    'help' => t('Supplier email'),
    'field' => array(
      'handler' => 'erp_supplier_views_handler_field_email',
      'click sortable' => TRUE
    ),
  );
  
  $data['erp_supplier']['homepage'] = array(
    'title' => t('Homepage'),
    'help' => t('Supplier homepage'),
    'field' => array(
      'views_handler_field_url', 
      'click_sortable' => TRUE
    ),
  );

  return $data;
}

function erp_supplier_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_supplier'),
    ),
    'handlers' => array(
      'erp_supplier_views_handler_field_email' => array(
        'parent' => 'views_handler_field',
      ),
      'erp_supplier_views_handler_field_customer_name' => array(
        'parent' => 'views_handler_field_custom',
      )
    ),
  );
}

