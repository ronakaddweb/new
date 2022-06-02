<?php
// $Id: erp_item.views_default.inc,v 1.1.2.10 2010/02/25 06:02:27 simon Exp $
/**
 * @file
 * ERP Item default views
 */

function erp_item_views_default_views() {
  $view = new view;
  $view->name = 'erp_item';
  $view->description = 'Provide a list of all items';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'supplier_nid' => array(
      'label' => 'Supplier',
      'required' => 0,
      'id' => 'supplier_nid',
      'table' => 'erp_item',
      'field' => 'supplier_nid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'code' => array(
      'label' => 'Code',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
    ),
    'title_1' => array(
      'label' => 'Description',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title_1',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'item_type' => array(
      'label' => 'Item type',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'item_type',
      'table' => 'erp_item',
      'field' => 'item_type',
      'relationship' => 'none',
    ),
    'rrp_price' => array(
      'label' => 'RRP price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'rrp_price',
      'table' => 'erp_item',
      'field' => 'rrp_price',
      'relationship' => 'none',
    ),
    'sell_price' => array(
      'label' => 'Sell price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'sell_price',
      'table' => 'erp_item',
      'field' => 'sell_price',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'title' => array(
      'label' => 'Supplier',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'supplier_nid',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'add_to_cart' => array(
      'label' => 'Add to cart',
      'alter' => array(
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'add_to_cart',
      'table' => 'erp_item',
      'field' => 'add_to_cart',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'erp_item' => 'erp_item',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'relationship' => 'none',
    ),
    'code' => array(
      'operator' => 'allwords',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'code_op',
        'identifier' => 'code',
        'label' => 'Code',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'barcode' => array(
      'operator' => 'allwords',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'barcode_op',
        'identifier' => 'barcode',
        'label' => 'Barcode',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'barcode',
      'table' => 'erp_item',
      'field' => 'barcode',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'title' => array(
      'operator' => 'allwords',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'title_op',
        'identifier' => 'title',
        'label' => 'Description',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'active' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'operator' => '',
        'identifier' => 'active',
        'label' => 'Active',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 1,
      'id' => 'active',
      'table' => 'erp_item',
      'field' => 'active',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '4' => 4,
      '3' => 3,
    ),
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('items_per_page', 50);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'asc',
    'columns' => array(
      'code' => 'code',
      'title_1' => 'title_1',
      'item_type' => 'item_type',
      'rrp_price' => 'rrp_price',
      'sell_price' => 'sell_price',
      'title' => 'title',
      'add_to_cart' => 'add_to_cart',
    ),
    'info' => array(
      'code' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title_1' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'item_type' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'rrp_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'sell_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'add_to_cart' => array(
        'sortable' => 1,
        'separator' => '',
      ),
    ),
    'default' => 'sell_price',
  ));
  $handler = $view->new_display('page', 'Page', 'page_2');
  $handler->override_option('path', 'erp/item');
  $handler->override_option('menu', array(
    'type' => 'normal',
    'title' => 'Items',
    'description' => '',
    'weight' => '0',
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'normal',
    'title' => 'erp',
    'description' => '',
    'weight' => '0',
  ));

  $views[$view->name] = $view;

  $view = new view;
  $view->name = 'erp_item_stock';
  $view->description = 'Provide a list of all stock items';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'supplier_nid' => array(
      'label' => 'Supplier',
      'required' => 0,
      'id' => 'supplier_nid',
      'table' => 'erp_item',
      'field' => 'supplier_nid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'code' => array(
      'label' => 'Code',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
    ),
    'title_1' => array(
      'label' => 'Description',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title_1',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'item_type' => array(
      'label' => 'Item type',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'item_type',
      'table' => 'erp_item',
      'field' => 'item_type',
      'relationship' => 'none',
    ),
    'rrp_price' => array(
      'label' => 'RRP price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'rrp_price',
      'table' => 'erp_item',
      'field' => 'rrp_price',
      'relationship' => 'none',
    ),
    'sell_price' => array(
      'label' => 'Sell price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'sell_price',
      'table' => 'erp_item',
      'field' => 'sell_price',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'title' => array(
      'label' => 'Supplier',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'supplier_nid',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'add_to_cart' => array(
      'label' => 'Add to cart',
      'alter' => array(
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'add_to_cart',
      'table' => 'erp_item',
      'field' => 'add_to_cart',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'erp_item' => 'erp_item',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'relationship' => 'none',
    ),
    'item_type' => array(
      'operator' => '=',
      'value' => 'stock item',
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'case' => 0,
      'id' => 'item_type',
      'table' => 'erp_item',
      'field' => 'item_type',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'code' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'code_op',
        'identifier' => 'code',
        'label' => 'ERP item: Code',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 1,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
    ),
    'barcode' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'barcode_op',
        'identifier' => 'barcode',
        'label' => 'Barcode',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'barcode',
      'table' => 'erp_item',
      'field' => 'barcode',
      'relationship' => 'none',
    ),
    'title' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'title_op',
        'identifier' => 'title',
        'label' => 'Title',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
    ),
    'active' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'active_op',
        'identifier' => 'active',
        'label' => 'ERP item: Active',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 1,
      'id' => 'active',
      'table' => 'erp_item',
      'field' => 'active',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '4' => 4,
      '3' => 3,
    ),
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('items_per_page', 50);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'asc',
    'columns' => array(
      'code' => 'code',
      'title_1' => 'title_1',
      'item_type' => 'item_type',
      'rrp_price' => 'rrp_price',
      'sell_price' => 'sell_price',
      'title' => 'title',
      'add_to_cart' => 'add_to_cart',
    ),
    'info' => array(
      'code' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title_1' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'item_type' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'rrp_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'sell_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'add_to_cart' => array(
        'sortable' => 1,
        'separator' => '',
      ),
    ),
    'default' => 'sell_price',
  ));
  $handler = $view->new_display('page', 'Page', 'page_2');
  $handler->override_option('path', 'erp/item/stock');
  $handler->override_option('menu', array(
    'type' => 'tab',
    'title' => 'Stock items',
    'description' => '',
    'weight' => '0',
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => NULL,
    'description' => '',
    'weight' => NULL,
  ));


  $views[$view->name] = $view;

  $view = new view;
  $view->name = 'erp_item_nonstock';
  $view->description = 'Provide a list of all non stock items';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'supplier_nid' => array(
      'label' => 'Supplier',
      'required' => 0,
      'id' => 'supplier_nid',
      'table' => 'erp_item',
      'field' => 'supplier_nid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'code' => array(
      'label' => 'Code',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
    ),
    'title_1' => array(
      'label' => 'Description',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title_1',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'item_type' => array(
      'label' => 'Item type',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'item_type',
      'table' => 'erp_item',
      'field' => 'item_type',
      'relationship' => 'none',
    ),
    'rrp_price' => array(
      'label' => 'RRP price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'rrp_price',
      'table' => 'erp_item',
      'field' => 'rrp_price',
      'relationship' => 'none',
    ),
    'sell_price' => array(
      'label' => 'Sell price',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'sell_price',
      'table' => 'erp_item',
      'field' => 'sell_price',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'title' => array(
      'label' => 'Supplier',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'supplier_nid',
      'override' => array(
        'button' => 'Override',
      ),
    ),
    'add_to_cart' => array(
      'label' => 'Add to cart',
      'alter' => array(
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'exclude' => 0,
      'id' => 'add_to_cart',
      'table' => 'erp_item',
      'field' => 'add_to_cart',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'erp_item' => 'erp_item',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'relationship' => 'none',
    ),
    'item_type' => array(
      'operator' => '!=',
      'value' => 'stock item',
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'case' => 0,
      'id' => 'item_type',
      'table' => 'erp_item',
      'field' => 'item_type',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
    'code' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'code_op',
        'identifier' => 'code',
        'label' => 'ERP item: Code',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 1,
      'id' => 'code',
      'table' => 'erp_item',
      'field' => 'code',
      'relationship' => 'none',
    ),
    'barcode' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'barcode_op',
        'identifier' => 'barcode',
        'label' => 'Barcode',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'barcode',
      'table' => 'erp_item',
      'field' => 'barcode',
      'relationship' => 'none',
    ),
    'title' => array(
      'operator' => 'contains',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'title_op',
        'identifier' => 'title',
        'label' => 'Title',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
    ),
    'active' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'active_op',
        'identifier' => 'active',
        'label' => 'ERP item: Active',
        'optional' => 1,
        'remember' => 0,
      ),
      'case' => 1,
      'id' => 'active',
      'table' => 'erp_item',
      'field' => 'active',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '4' => 4,
      '3' => 3,
    ),
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('items_per_page', 50);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'asc',
    'columns' => array(
      'code' => 'code',
      'title_1' => 'title_1',
      'item_type' => 'item_type',
      'rrp_price' => 'rrp_price',
      'sell_price' => 'sell_price',
      'title' => 'title',
      'add_to_cart' => 'add_to_cart',
    ),
    'info' => array(
      'code' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title_1' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'item_type' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'rrp_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'sell_price' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'add_to_cart' => array(
        'sortable' => 1,
        'separator' => '',
      ),
    ),
    'default' => 'sell_price',
  ));
  $handler = $view->new_display('page', 'Page', 'page_2');
  $handler->override_option('path', 'erp/item/nonstock');
  $handler->override_option('menu', array(
    'type' => 'tab',
    'title' => 'Non stock items',
    'description' => '',
    'weight' => '-1',
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => NULL,
    'description' => '',
    'weight' => NULL,
  ));

  $views[$view->name] = $view;

  return $views;
}
