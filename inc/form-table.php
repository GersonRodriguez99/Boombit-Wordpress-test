<?php 

global $wpdb;
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->base_prefix}user_invoice_register` (
  public_key varchar(255) NOT NULL ,
  mail varchar(150) NOT NULL,
  document_id varchar(16),
  user varchar(100),
  phone varchar(8),
  invoice varchar(10),
  amounts float(2),
  invoice_date date,
  PRIMARY KEY  (public_key)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
?>