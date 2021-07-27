<?php
 
  /**
   * Load CSS and JavaScript Enqueues
   */
  require get_template_directory() . '/inc/enqueues.php';

  /**
   * Load menus
   */
  require get_template_directory() . '/inc/menus.php';


  /**
   * Load widgets
   */
  require get_template_directory() . '/inc/widgets.php';


  /**
   * Load shortcodes
   */
  require get_template_directory() . '/inc/shortcodes.php';
  /**
   * Create database table
   */
  require get_template_directory() . '/inc/form-table.php';