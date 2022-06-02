<?php

function erp_access_views_default_views() {
  $view = new view;
  $view->name = 'erp_access_customer';
  $view->description = 'ERP access customer block';
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
    'status' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '5' => 5,
    ),
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', 5);
  $handler->override_option('use_pager', 'mini');
  $handler->override_option('pager_element', 1);
  $handler->override_option('distinct', 1);
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
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->override_option('block_description', 'Customer list block for ERP access');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  return $views;
}