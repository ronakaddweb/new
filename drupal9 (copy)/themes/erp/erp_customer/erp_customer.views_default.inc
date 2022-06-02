<?php

function erp_customer_views_default_views() {
  $view = new view;
  $view->name = 'erp_customer';
  $view->description = 'Customer list';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'customer_id' => array(
      'id' => 'customer_id',
      'table' => 'erp_customer',
      'field' => 'customer_id',
      'label' => 'Customer Id',
    ),
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'Name',
      'link_to_node' => TRUE,
    ),
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'label' => 'Date',
    ),
    'phone' => array(
      'id' => 'phone',
      'table' => 'erp_customer',
      'field' => 'phone',
      'label' => 'Phone',
    ),
    'mobile' => array(
      'id' => 'mobile',
      'table' => 'erp_customer',
      'field' => 'mobile',
      'label' => 'Mobile',
    ),
    'email' => array(
      'label' => 'Email',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
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
      'id' => 'email',
      'table' => 'erp_customer',
      'field' => 'email',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'operator' => 'in',
      'value' => array(
        '0' => 'erp_customer',
      ),
    ),
    'title' => array(
      'operator' => 'allwords',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'title_op',
        'identifier' => 'customer',
        'label' => 'Customer name',
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
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '4' => '4',
      '3' => '3',
    ),
    'perm' => '',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '50');
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'columns' => array(),
    'default' => 'title',
    'info' => array(
      'customer_id' => array(
        'sortable' => TRUE,
      ),
      'title' => array(
        'sortable' => TRUE,
      ),
      'created' => array(
        'sortable' => TRUE,
      ),
      'phone' => array(
        'sortable' => TRUE,
      ),
      'mobile' => array(
        'sortable' => TRUE,
      ),
      'email' => array(
        'sortable' => TRUE,
      ),
    ),
    'override' => FALSE,
    'order' => 'asc',
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'erp/customers');
  $handler->override_option('menu', array(
    'type' => 'normal',
    'title' => 'Customers',
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
  $view->name = 'erp_book_customer';
  $view->description = 'Provides a list of book pages for a particular customer';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'customer_nid' => array(
      'label' => 'Customer node',
      'required' => 0,
      'id' => 'customer_nid',
      'table' => 'erp_customer_link',
      'field' => 'customer_nid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'label' => 'Date',
    ),
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'Title',
      'link_to_node' => TRUE,
    ),
    'title_1' => array(
      'label' => 'Customer',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
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
      'link_to_node' => 0,
      'exclude' => 0,
      'id' => 'title_1',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'customer_nid',
    ),
  ));
  $handler->override_option('arguments', array(
    'nid' => array(
      'default_action' => 'default',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'node',
      'default_argument' => '',
      'validate_type' => 'none',
      'validate_fail' => 'not found',
      'break_phrase' => 0,
      'not' => 0,
      'id' => 'nid',
      'table' => 'node',
      'field' => 'nid',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        '2' => 0,
        '4' => 0,
        '5' => 0,
        '6' => 0,
        '3' => 0,
      ),
      'relationship' => 'customer_nid',
      'default_options_div_prefix' => '',
      'default_argument_user' => 0,
      'default_argument_fixed' => '',
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'erp_cash_sale' => 0,
        'erp_customer' => 0,
        'erp_goods_receive' => 0,
        'erp_invoice' => 0,
        'erp_item' => 0,
        'erp_job' => 0,
        'erp_payment' => 0,
        'erp_purchase_order' => 0,
        'erp_quote' => 0,
        'erp_store' => 0,
        'erp_supplier' => 0,
        'book' => 0,
        'page' => 0,
        'story' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        '7' => 0,
        '3' => 0,
        '9' => 0,
        '8' => 0,
        '1' => 0,
        '4' => 0,
        '10' => 0,
        '11' => 0,
        '2' => 0,
      ),
      'validate_argument_type' => 'tid',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'validate_argument_php' => '',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'book' => 'book',
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
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '4' => 4,
      '5' => 5,
      '6' => 6,
      '3' => 3,
    ),
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('title', 'All invoices');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('use_ajax', TRUE);
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'columns' => array(),
    'default' => 'invoice_id',
    'info' => array(
      'invoice_id' => array(
        'sortable' => TRUE,
      ),
      'created' => array(
        'sortable' => TRUE,
      ),
      'title' => array(
        'sortable' => TRUE,
      ),
      'customer' => array(
        'sortable' => TRUE,
      ),
      'total' => array(
        'sortable' => TRUE,
      ),
    ),
    'override' => FALSE,
    'order' => 'desc',
  ));
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  return $views;
}
