<?php
// $Id: erp_ubercart_service.inc,v 1.1.2.3 2009/12/26 00:22:23 simon Exp $

/**
 * @file
 * Functions for erp_ubercart_serivce module
 */

function erp_ubercart_service_product_list($filter = NULL) {
  // Retrieve a list of nids
  if ($filter) {
  	$result = db_query("SELECT nid FROM {uc_products} WHERE model LIKE '%%%s%%'", $filter);
  }
  else {
    $result = db_query("SELECT nid FROM {uc_products}");
  }

  // Loop through building a list
  while ($row = db_fetch_array($result)) {
    $nid = $row['nid'];

    $product_node = node_load($nid);

    $nodes[trim($product_node->model)] = $product_node;
  }

  return $nodes;
}

function erp_ubercart_service_product_by_code($code) {
  $nid = db_result(db_query("SELECT nid FROM {uc_products} WHERE model = %d", $code));

  if ($nid) {
    $node = node_load($nid);
    return $node;
  }

  return FALSE;
}

function erp_ubercart_service_category_list() {
	$uc_catalog_vid = variable_get('uc_catalog_vid', FALSE);
	$uc_catalog_name = variable_get('uc_catalog_name', '');
	
  if (!$uc_catalog_vid) {
  	return FALSE;
  }

  $terms = taxonomy_get_tree($uc_catalog_vid);

  return $terms;  
}
    