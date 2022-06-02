<?php

/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_item_views_data() {
  $data = array();

  $data['erp_item']['table']['group'] = t('ERP item');
  $data['erp_item']['table']['join'] = array(
     'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_item']['supplier_nid'] = array(
    'title' => t('ERP Supplier'),
    'help' => t('Add ability to relate in supplier nodes.'),
    // Because this is a foreign key to the {node} table. This allows us to
    // have, when the view is configured with this relationship, all the fields
    // for the related node available.
    'relationship' => array(
      'base' => 'node',
      'field' => 'supplier_nid',
      'handler' => 'views_handler_relationship',
      'label' => t('Supplier'),
    ),
  );


  $data['erp_item']['code'] = array(
    'title' => t('Code'),
    'help' => t('Item code'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $data['erp_item']['supp_code'] = array(
    'title' => t('Supplier code'),
    'help' => t('Supplier item code'),
    'field' => array(
      'handler' => 'views_handler_field',
      'click sortable' => TRUE
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_item']['email'] = array(
    'title' => t('Email'),
    'help' => t('Customer email'),
    'field' => array(
      'handler' => 'erp_customer_views_handler_field_email',
      'click sortable' => TRUE
    ),
  );

  $data['erp_item']['buy_price'] = array(
    'title' => t('Buy price'),
    'help' => t('Buy price from supplier'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),

  );

  $data['erp_item']['rrp_price'] = array(
    'title' => t('RRP price'),
    'help' => t('RRP to customer'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),
  );

  $data['erp_item']['sell_price'] = array(
    'title' => t('Sell price'),
    'help' => t('Sell to customer'),
    'field' => array(
      'handler' => 'erp_accounting_views_handler_field_currency',
      'click sortable' => TRUE
    ),

  );

  $data['erp_item']['add_to_cart'] = array(
    'title' => t('Add to cart'),
    'help' => t('Provide add to cart link for this item'),
    'field' => array(
      'handler' => 'erp_item_views_handler_add_to_cart',
      'click sortable' => TRUE
    ),
  );

  $data['erp_item']['active'] = array(
    'title' => t('Active'),
    'help' => t('Item active status'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_boolean_operator',
    ),
  );

  $data['erp_item']['in_stock'] = array(
    'title' => t('In stock'),
    'help' => t('Item stock status'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_boolean_operator',
    ),
  );

  $data['erp_item']['barcode'] = array(
    'title' => t('Barcode'),
    'help' => t('Item barcode'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  $data['erp_item']['item_type'] = array(
    'title' => t('Item type'),
    'help' => t('Item type'),
    'field' => $std_field,
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_string',
    ),
  );

  return $data;
}

function erp_item_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_item'),
    ),
    'handlers' => array(
      'erp_item_views_handler_add_to_cart' => array(
        'parent' => 'views_handler_field_custom',
      ),
    ),
  );
}
