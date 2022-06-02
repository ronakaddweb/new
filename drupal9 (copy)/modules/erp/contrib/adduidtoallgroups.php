#!/usr/bin/php
<?php

$debug = 1;

ob_start();
module_load_include('inc', 'adduidtoallgroups', 'includes/bootstrap');
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
ob_end_flush();

print "Adding $argv[1] to all groups\n";

$user = user_load(array('name' => $argv[1]));
print "User id: $user->uid\n";

$already = $customers = $suppliers = $skipped = $invalid = 0;

if ($user) {
  $result = db_query("SELECT nid, description FROM og");
  while ($row = db_fetch_array($result)) {
    $node = node_load($row['nid']);
    if ($node) {
      if ($debug > 2) { print $row['nid'] .' - '. $row['description'] . "\n"; }
      if (og_get_subscription($row['nid'], $user->uid)) {
        if ($debug > 1) { print $row['nid'] .' - '. $row['description'] . "\n"; }
        $already++;
        continue;
      }
      switch ($node->type) {
      case 'erp_customer':
        og_save_subscription($row['nid'], $user->uid, array('is_active' => 1));
        $customers++;
        break;
      case 'erp_supplier':
        og_save_subscription($row['nid'], $user->uid, array('is_active' => 1));
        $suppliers++;
        break;
      default:
        print $row['nid'] .' - '. $row['description'] ." - skipped, unknown type - $node->type\n";
        $skipped++;
      }
    }
    else {
      print $row['nid'] .' - '. $row['description'] . " - no node\n";
      $invalid++;
    }
  }
}
else {
  print "Unable to find $argv[1]\n";
}

print "Adding user $user->name\n";
print "Already subscribed: $already\n";
print "Customers: $customers\n";
print "Suppliers: $suppliers\n";
print "Skipped: $skipped\n";
print "Invalid: $invalid\n";

function og_get_subscription($gid, $uid) {
  $sql = "SELECT * FROM {og_uid} WHERE nid = %d AND uid = %d";
  $result = db_query($sql, $gid, $uid);
  if (db_fetch_object($result)) {
    return TRUE;
  }
  return FALSE;
}

?>
