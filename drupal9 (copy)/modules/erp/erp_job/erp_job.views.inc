<?php
/**
 * Function to work with the new "Views" module, which saves us having to write
 * list functions all over the place. Nice!
 *
 * @return unknown
 */
function erp_job_views_data() {
  $data = array();

  $data['erp_job']['table']['group'] = t('ERP job');
  $data['erp_job']['table']['join'] = array(
     'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['erp_job']['customer_nid'] = array(
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
      'label' => t('Customer'),
    ),
  );

  // oid field
  $data['erp_job']['oid'] = array(
    'title' => t('ERP Owner'),
    'help' => t('The owner of this job.'),
    'field' => array(
      'help' => t('Owner id'),
      'handler' => 'views_handler_field',
      'click_sortable' => TRUE,
    ),
    'argument' => array(
      'handler' => 'views_handler_argument_user_uid',
      'name field' => 'name', // display this field in the summary
    ),
    'relationship' => array(
      'handler' => 'views_handler_relationship',
      'base' => 'users',
      'field' => 'uid',
      'label' => t('Owner'),
    ),
  );

  $std_field = array('handler' => 'views_handler_field', 'click sortable' => TRUE);

  $data['erp_job']['job_id'] = array(
    'title' => t('Job id'),
    'help' => t('Job id'),
    'field' => $std_field
  );
  
  $data['erp_job']['job_desc'] = array(
    'title' => t('Description'),
    'help' => t('Job description'),
    'field' => $std_field
  );

  $data['erp_job']['priority'] = array(
    'title' => t('Priority'),
    'help' => t('Job priority'),
    'field' => $std_field,
  );
  
  $data['erp_job']['start_date'] = array(
    'title' => t('Start date'),
    'help' => t('Start date for this job'),
    'field' => array(
      'handler' => 'views_handler_field_date',
      'click sortable' => TRUE,
    ),
    'sort' => array(
      'handler' => 'views_handler_sort_date',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_date',
    ),
  );

  $data['erp_job']['end_date'] = array(
    'title' => t('End date'),
    'help' => t('End date for this job'),
    'field' => array(
      'handler' => 'views_handler_field_date',
      'click sortable' => TRUE,
    ),
    'sort' => array(
      'handler' => 'views_handler_sort_date',
    ),
    'filter' => array(
      'handler' => 'views_handler_filter_date',
    ),
  );

//  $data['erp_job']['oid'] = array(
//    'title' =>
//  )

  return $data;
}


function erp_job_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'erp_job'),
    ),
    'handlers' => array(
      'erp_job_views_handler_field_email' => array(
        'parent' => 'views_handler_field',
      ),
      'erp_job_views_handler_field_customer_name' => array(
        'parent' => 'views_handler_field_custom',
      )
    ),
  );
}