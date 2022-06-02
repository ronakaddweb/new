<?php

class erp_item_views_handler_add_to_cart extends views_handler_field_custom {
  function render( $values ) {
    $rest = array();

    // Construct dummy node for the erp_item_cart_link()
    $node = new stdClass();
    $node->nid = $values->nid;

    // TODO: There has to be a better way than this?
    $temp = $_GET;
    $url = check_plain($temp['q']);
    unset($temp['q']);

    foreach ($temp as $var => $value) {
      $rest[] = implode('=', array(check_plain($var), check_plain($value)));
    }

    $link_temp = erp_cart_item_link($node);

    if (count($rest)) {
      $destination = 'destination='. $url .'&'. implode('&', $rest);
    }
    else {
      $destination = 'destination='. $url;
    }

    $link = l($link_temp['erp_item_cart_link']['title'],
      $link_temp['erp_item_cart_link']['href'],
      array('query' => $destination,
            'attributes' => $link_temp['erp_item_cart_link']['attributes'],
            'html' => TRUE)
    );

    return $link;
  }
}