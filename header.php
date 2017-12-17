<?php
/**
 * The header for our theme
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
    <section class="home-main" id="home">
        <h2 class="sr-only">This is home section</h2>


            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">
                <div class="menu-icon-position">
                    <div class="menu-icon">
                        <span></span>
                    </div>
                </div>
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
                    
<!--
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="active"><a href="#home" class="scroll">Home</a></li>
                            <li> <a href="#club" class="scroll">The Club</a></li>
                            <li> <a href="#programme" class="scroll">Founder's Programme</a></li>
                            <li> <a href="#team" class="scroll">The Team</a></li>
                            <li> <a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                    </div>
-->
                    
                    <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'items_wrap'		=>	'<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
			                'container_class'	=>	'collapse navbar-collapse',
			                'container_id'		=>	'navbar-menu'
			            ));
			        ?>
                </div>

            </nav>
        <section class="homebarracuda padding-top">
	        <div class="container">
	            <div class="text-center feature-about-text">
	                <h5 class="above-heading-line">
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/home-page-center-logo.png" class="logo-display" alt="Smiling Barracuda">
	                </h5>
	                <h2 class="feature-heading top100">Supporting SME founders in becoming successful entrepreneurs.</h2>
	                <div class="bottom10">
		            	<a href="#homeparttwo" class="scroll"><img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-arrow.png" class="logo-display" alt="Smiling Barracuda Arrow"></a>
	            	</div>	
	            </div>
	            
	        </div>
	    </section>

		<section class="homebarracuda-part-two padding-top" id="homeparttwo">
	        <div class="container">
	            <div class="homeparttwo-text">
	                <p class="top20">"Being an entrepreneur is lonely. And it gets lonelier the more successful you are. Finding someone to talk openly to gets harder. You’re never really your own boss. You have more bosses than when you worked in corporate – You need to satisfy far too many people; clients, your team, your partners.</p>

					<p class="top20">	It's often really not that cool or awesome. But the magic moments make everything worthwhile and once you start, you’ve crossed to the dark side and you can’t go back. </p>
					
					<p class="top20">That’s why I founded Smiling Barracuda -  to support the entrepreneurial journey that every founder is going through."</p>
					
					<p class="top20">Freddie Talberg</p>
					<p class="top20"><em>Founder of Smiling Barracuda and Serial Entrepreneur</em></p>
	            </div>
	            <div class="text-center bottom10">
		            <a href="#club" class="scroll"><img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-arrow.png" class="logo-display" alt="Smiling Barracuda Arrow"></a>
	            </div>
	        </div>
	    </section>
    
        <!--Header ends-->


        <!--Full Menu-->
        <div class="full-menu">
            <div class="menu-icon active">
                <span></span>
            </div>
            <div class="open-full-menu-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 columns half text-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-full heading_space"><img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-logo-full.png" alt="Smiling Barracuda"></a>

                        </div>
                                                
                        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'link_before'		=>	'<span></span>',
								'container_class'	=>	'col-sm-12 columns half text-left',
				                'menu_class'		=>	'full-nav top20 heading_space'
				            ));
				        ?>
                                                
                        <div class="col-sm-12">
                            <ul class="social">
                                <li>
                                    <a href="#." class="twitter button">
                                        <i class="fa fa-twitter" ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#." class="linkedin button">
                                        <i class="fa fa-linkedin" ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </header>
    <!--Full Menu-->
    <!-- Navigation End -->
	
	
	
	
<!--
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'barracuda' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>
	</header>
--><!-- #masthead -->

	<div id="content" class="site-content">
