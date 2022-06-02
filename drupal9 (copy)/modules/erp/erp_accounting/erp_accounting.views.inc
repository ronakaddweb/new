<?php

function erp_accounting_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_accounting'),
    ),
    'handlers' => array(
      'erp_accounting_views_handler_field_currency' => array(
        'parent' => 'views_handler_field_custom',
        ),
      ),
    );
}