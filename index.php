<?php
/**
 * The main template file
 * 
 * @package Boombit-Wordpress-test
 * @version 1.0
 */

get_header(); ?>
<div class="container-fluid">
<div class="wrap top-banner row">
        <?php get_template_part('template-parts/banner/banner', 'promotions');?>
    <div class="form-container col-m-4 col-lg-4">
        <?php get_template_part( 'template-parts/form/form', 'user' ); ?>
    </div> <!-- form-container -->
</div><!-- .wrap -->
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : 
        $col = " col-m-8 col-lg-8";
    else: 
        $col = "col-m-12 col-lg-12";
        ?>
        <?php endif; ?>
	<div id="primary" class="content-area <?php echo $col ?>">
		<main id="main" class="site-main" role="main">
<?php
			if ( have_posts() ) :

				// Start the Loop.
				while ( have_posts() ) :
                    the_title();
					the_post();

                    the_content();
					
				endwhile;
                the_posts_pagination( array('mid_size' => 2) );

			else :

                echo '<h2>Sorry, no posts have been found</h2>';
                
			endif;
			?>
        	</main><!-- #main -->
	</div><!-- #primary -->
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="sidebar-container col-lg-4 col-md-4 ">
        <div class="container">
	        <?php get_sidebar(); ?>
        </div>
        </div><!-- .sidebar-container -->
        <?php endif; ?>
 </div> <!-- container -->
<?php
get_footer();

$user_id = get_current_user_id();
echo $user_id;