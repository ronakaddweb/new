<?php
// $Id: erp_customer.views.inc,v 1.1.2.4 2009/12/26 00:22:22 simon Exp $

/**
 * @file
 * Views definitions for the erp_customer module
 */

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_customer_views_data() {
  $data = array();

  $data['erp_customer']['table']['group'] = t('ERP customer');
  $data['erp_customer']['table']['join'] = array(
    'node' => array(
       'left_field' => 'nid',
       'field' => 'nid',
    ),
  );

  $data['erp_customer']['customer_id'] = array(
    'title' => t('ERP Customer'),
    'help' => t('Add ability to relate in customer nodes.'),
    'field' => array(
      'help' => t('Customer id'),
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
      'label' => t('Customer node'),
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_customer']['address'] = array(
    'title' => t('Address'),
    'help' => t('Customer address'),
    'field' => $std_field
  );

  $data['erp_customer']['suburb'] = array(
    'title' => t('Suburb'),
    'help' => t('Customer suburb'),
    'field' => $std_field
  );

  $data['erp_customer']['state'] = array(
    'title' => t('State'),
    'help' => t('Customer state'),
    'field' => $std_field
  );

  $data['erp_customer']['postcode'] = array(
    'title' => t('Postcode'),
    'help' => t('Customer postcode'),
    'field' => $std_field
  );

  $data['erp_customer']['phone'] = array(
    'title' => t('Phone'),
    'help' => t('Customer phone'),
    'field' => $std_field
  );

  $data['erp_customer']['fax'] = array(
    'title' => t('Fax'),
    'help' => t('Customer fax'),
    'field' => $std_field
  );

  $data['erp_customer']['mobile'] = array(
    'title' => t('Mobile'),
    'help' => t('Customer mobile'),
    'field' => $std_field
  );

  $data['erp_customer']['terms'] = array(
    'title' => t('Terms'),
    'help' => t('Customer terms'),
    'field' => $std_field
  );

  $data['erp_customer']['email'] = array(
    'title' => t('Email'),
    'help' => t('Customer email'),
    'field' => array(
      'handler' => 'erp_customer_views_handler_field_email',
      'click sortable' => TRUE
    ),
  );

  $data['erp_customer_link']['table']['group'] = t('Book');
  $data['erp_customer_link']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid'
    ),  
  );
  
  $data['erp_customer_link']['customer_nid'] = array(
    'title' => t('ERP Customer'),
    'help' => t('Add ability to relate in customer nodes.'),
    'field' => array(
      'help' => t('Customer nid'),
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
      'label' => t('Customer node'),
    ),
  );  

  return $data;
}

function erp_customer_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_customer'),
    ),
    'handlers' => array(
      'erp_customer_views_handler_field_email' => array(
        'parent' => 'views_handler_field',
      ),
      'erp_customer_views_handler_field_customer_name' => array(
        'parent' => 'views_handler_field_custom',
      )
    ),
  );
}

