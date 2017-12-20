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
                        
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
	                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" >
                            <img src="<?php echo $image[0]?>" class="logo-display" alt="<?php bloginfo( 'name' );?>">
                            <img src="<?php echo get_theme_mod('header_logo', 'No Logo has been provided yet.')?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>">
                        </a>
                    </div>
                    
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
	                <?php if( get_field('home_logo') ): ?>
		                <h5 class="above-heading-line">
		                <img src="<?php the_field('home_logo')?>" class="logo-display" alt="Smiling Barracuda">
		                </h5>
		             <?php else:?>
		             	<h5 class="above-heading-line">
			             	<img src="<?php echo get_template_directory_uri(); ?>/images/home-page-center-logo.png" class="logo-display" alt="Smiling Barracuda">
		             	</h5>
		             <?php endif;?>
	                <?php if( get_field('home_statement') ): ?>
	                	<h2 class="feature-heading top100"><?php the_field('home_statement')?></h2>
	                <?php else:?>
	                	<h2 class="feature-heading top100">Supporting SME founders in becoming successful entrepreneurs.</h2>
	                <?php endif;?>
	                <div class="bottom10">
		            	<a href="#homeparttwo" class="scroll"><i class="fa fa-angle-down blue bounce" aria-hidden="true"></i></a>
	            	</div>	
	            </div>
	        </div>
	    </section>

		<section class="homebarracuda-part-two padding-top" id="homeparttwo">
	        <div class="container">
	            <div class="homeparttwo-text">
		            <?php if( get_field('founders_statement') ):
		            	the_field('founders_statement');
		            else:?>    
		                <p class="top20">"Being an entrepreneur is lonely. And it gets lonelier the more successful you are. Finding someone to talk openly to gets harder. You’re never really your own boss. You have more bosses than when you worked in corporate – You need to satisfy far too many people; clients, your team, your partners.</p>
						<p class="top20">It's often really not that cool or awesome. But the magic moments make everything worthwhile and once you start, you’ve crossed to the dark side and you can’t go back. </p>
						<p class="top20">That’s why I founded Smiling Barracuda -  to support the entrepreneurial journey that every founder is going through."</p>
						<p class="top20">Freddie Talberg</p>
						<p class="top20"><em>Founder of Smiling Barracuda and Serial Entrepreneur</em></p>
					<?php endif;?>
	            </div>
	            <div class="text-center bottom10">
		            <a href="#club" class="scroll"><i class="fa fa-angle-down blue bounce" aria-hidden="true"></i></a>
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
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-full heading_space"><img src="<?php echo get_theme_mod('header_logo', 'No Logo has been provided yet.')?>" alt="<?php bloginfo( 'name' ); ?>"></a>

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
                                    <a href="https://twitter.com/barracudaclub" target="_blank" class="twitter button">
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
	<div id="content" class="site-content">
