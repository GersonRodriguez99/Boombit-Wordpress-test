<?php
/**
 * The header for Custom theme
 *
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Boombit Wordpress test">
<meta name="description" content="This is test for a Custom WordPress Template,  I hope you like it!!">
<meta name="keywords" content="Test, WordPress, Market">
<meta name="robots" content="noindex, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header id="masthead" class="site-header" role="banner">
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
	<div class="site-branding">
	    <div class="wrap">
            
            <a class="navbar-brand text-white">
			<?php
            the_custom_logo();
			$name = get_bloginfo( 'name' );
			if ( $name || is_customize_preview() ) :?>
				<?php echo $name; ?>
            <?php else: 
                echo "Supermercado"?>
			<?php endif; ?>
            </a><!-- .navbar-brand -->
	</div><!-- .wrap -->
    </div><!-- .site-branding -->
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
            </button> <!-- .navbar-toggler -->
		<?php if ( has_nav_menu('top' ) ) : ?>
                <?php
									wp_nav_menu( array(
										'theme_location' => 'top',
										'menu_class'     => 'navbar-nav  justify-content-end',
                                        'container_class' => 'collapse navbar-collapse justify-content-end',
                                        'container_id' => 'navbarNav'
									 ) );
								?>
		<?php endif; ?>
     </div> <!-- .container -->
    </nav> <!-- .navbar  -->
	</header><!-- #masthead -->
	<div class="site-content-contain">
		<div id="content" class="site-content container-fluid">
