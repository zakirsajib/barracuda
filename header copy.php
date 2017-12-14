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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-logo-full.png" class="logo-display" alt="Smiling Barracuda">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-logo-full.png" class="logo-scrolled" alt="Smiling Barracuda">
                        </a>
                    </div>
                    <div class="navbar-search-box-icon">
                        <a href="#." class="search-icon">
                            <i class="fa fa-search"> </i>
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
                    <div class="navbar-search-box" id="search-box">
                        <div class="navbar-search-box-data">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="search" placeholder="type keyword(s) here" class="form-control" id="search" value="<?php echo get_search_query(); ?>" name="s">
                                <div class="navbar-search-box-button">
                                    <button type="submit" class="btn button-blue page-buttons button">
                                        <?php echo _x( 'Search', 'submit button', 'aristocrat' ); ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </nav>
        <!-- REVOLUTION SLIDER -->
        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="slider2" data-source="gallery" style="background:transparent;padding:0;">
            <!-- START REVOLUTION SLIDER 5.4.5 fullscreen mode -->
            <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.5">
                <ul>	<!-- SLIDE  -->
                    <li  data-index="rs-16" data-param1="01" data-transition="slideoverright" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="img/100x50_31ba7-home-background.jpg"  data-delay="4999"  data-rotate="0"  data-saveperformance="off"  data-title="Slide"  data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="" data-lazyload="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption awsum  tp-resizeme"
                             id="slide-16-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-146','-146']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5; white-space: nowrap; font-size: 22px; line-height: 22px; font-weight: 200; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-16-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-71','-71','-71','-71']"
                             data-fontsize="['60','60','60','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 100; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">We, <span class="default-span-yellow">Aristocrat</span> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-16-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','5']"
                             data-fontsize="['60','60','60','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 100; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">Will <span class="default-span">Help </span> You to </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-16-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['86','86','86','86']"
                             data-fontsize="['60','60','60','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 100; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><span class="default-span">Build</span> Your <span class="default-span">Dream</span> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-16-layer-7"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['163','163','163','163']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 200; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"><a href="#about" class="scroll explore-now page-buttons button top20"> Explore Now</a> </div>
                    </li>
                    <!-- SLIDE  -->
                    
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div>
        <!-- END REVOLUTION SLIDER -->
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
