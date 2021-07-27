<?php
 /* Register Custom Menus */
  function boombit_custom_menus() {
    register_nav_menus(
      array(
        'top' => 'Top Menu',
        'footer'  => 'Footer Menu',
        'social'  => 'Social Menu',
        'info'    => 'Info Menu',
      )
    );
  }
  add_action( 'init', 'boombit_custom_menus' );
?> 