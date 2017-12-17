<?php
/**
 * The header for Application Form page ONLY
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barracuda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="90">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'barracuda' ); ?></a>

	<!--Page Loader-->
<div class="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!--Page Loader ends-->
<div class="parallax-content">
    <header>
    <section class="home-main" id="homeform">
        <h2 class="sr-only">This is home section</h2>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">                
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home-page-center-logo.png" class="logo-display" alt="Smiling Barracuda">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-logo-full.png" class="logo-scrolled" alt="Smiling Barracuda">
                        </a>
                    </div>
                    
                    
                    
                    
                    <?php
			            wp_nav_menu( array(
			                'menu'              => 'secondary',
			                'theme_location'    => 'secondary',
			                'items_wrap'		=>	'<ul class="nav navbar-nav navbar-right top50" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
			                'container_class'	=>	'collapse navbar-collapse',
			                'container_id'		=>	'navbar-menu'
			            ));
			        ?>
                </div>

            </nav>    
        <!--Header ends-->        
    </section>
    </header>
	<div id="content" class="site-content top50">