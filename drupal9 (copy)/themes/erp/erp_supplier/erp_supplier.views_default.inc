<?php
// $Id: erp_supplier.views_default.inc,v 1.1.2.4 2010/02/25 06:02:28 simon Exp $

/**
 * @file
 * Default views for the erp_supplier module
 */

function erp_supplier_views_default_views() {
  $view = new view;
  $view->name = 'erp_supplier_all';
  $view->description = 'Provides a list of suppliers';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'supplier_id' => array(
      'label' => 'ERP Supplier',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'supplier_id',
      'table' => 'erp_supplier',
      'field' => 'supplier_id',
      'relationship' => 'none',
    ),
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'Name',
      'link_to_node' => TRUE,
    ),
    'address' => array(
      'label' => 'Address',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'address',
      'table' => 'erp_supplier',
      'field' => 'address',
      'relationship' => 'none',
    ),
    'suburb' => array(
      'label' => 'Suburb',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'suburb',
      'table' => 'erp_supplier',
      'field' => 'suburb',
      'relationship' => 'none',
    ),
    'state' => array(
      'label' => 'State',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'state',
      'table' => 'erp_supplier',
      'field' => 'state',
      'relationship' => 'none',
    ),
    'postcode' => array(
      'label' => 'Postcode',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'postcode',
      'table' => 'erp_supplier',
      'field' => 'postcode',
      'relationship' => 'none',
    ),
    'phone' => array(
      'label' => 'Phone',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'phone',
      'table' => 'erp_supplier',
      'field' => 'phone',
      'relationship' => 'none',
    ),
    'homepage' => array(
      'label' => 'Homepage',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 1,
        'path' => '[homepage]',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'strip_tags' => 0,
        'html' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'exclude' => 0,
      'id' => 'homepage',
      'table' => 'erp_supplier',
      'field' => 'homepage',
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
        '0' => 'erp_supplier',
      ),
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
      '4' => '4',
      '3' => '3',
    ),
    'perm' => '',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('title', 'Suppliers');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '50');
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 0,
    'sticky' => 0,
    'order' => 'asc',
    'columns' => array(
      'supplier_id' => 'supplier_id',
      'title' => 'title',
      'address' => 'address',
      'suburb' => 'suburb',
      'state' => 'state',
      'postcode' => 'postcode',
      'phone' => 'phone',
      'homepage' => 'homepage',
    ),
    'info' => array(
      'supplier_id' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'title' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'address' => array(
        'sortable' => 0,
        'separator' => '',
      ),
      'suburb' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'state' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'postcode' => array(
        'sortable' => 0,
        'separator' => '',
      ),
      'phone' => array(
        'sortable' => 0,
        'separator' => '',
      ),
      'homepage' => array(
        'separator' => '',
      ),
    ),
    'default' => 'supplier_id',
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'erp/suppliers');
  $handler->override_option('menu', array(
    'type' => 'normal',
    'title' => 'Suppliers',
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

  return $views;
}
