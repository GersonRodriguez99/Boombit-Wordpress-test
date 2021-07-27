<?php
/**
 * The template for displaying the footer
 * @package Boombit-Wordpress-test
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer  class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;
				?>
                <div class="site-info">
		
          <!-- Copyright -->
    <div class="text-center p-4 bg-dark text-white" >
	<?php get_template_part('template-parts/form/form', 'subscription');?>
    © 2021:  
    <a class="text-reset fw-bold"><?php
		printf( __( 'Created by Gerson Rodriguez'));
		?></a>


  </div>
  <!-- Copyright -->

</div><!-- .site-info -->
			</div><!-- .wrap -->
		</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
