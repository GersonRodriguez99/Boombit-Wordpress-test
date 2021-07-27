<?php
  /**
   * The template for the sidebar containing the main widget area
   */
?>


<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <aside class="blog-sidebar">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside>
<?php endif; ?>
