<?php
/**
 * Barracuda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barracuda
 */

if ( ! function_exists( 'barracuda_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function barracuda_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Barracuda, use a find and replace
		 * to change 'barracuda' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'barracuda', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'barracuda' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'barracuda_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'barracuda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function barracuda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'barracuda_content_width', 640 );
}
add_action( 'after_setup_theme', 'barracuda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function barracuda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'barracuda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'barracuda' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'barracuda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function barracuda_scripts() {
	wp_enqueue_style( 'barracuda-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover.css');
	wp_enqueue_style( 'cubeportfolio', get_template_directory_uri() . '/css/cubeportfolio.min.css');
	wp_enqueue_style( 'REVsettings', get_template_directory_uri() . '/css/settings.css');
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'blue', get_template_directory_uri() . '/css/blue.css');

	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'jquery.cubeportfolio.min', get_template_directory_uri() . '/js/jquery.cubeportfolio.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), null, true );
	wp_enqueue_script( 'jquery.themepunch.tools.min', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'jquery.themepunch.revolution.min', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array('jquery'), null,  true );
	
	
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), null, true );
	
	//wp_enqueue_script( 'revolution.extension.actions', get_template_directory_uri() . '/js/extensions/revolution.extension.actions.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.carousel', get_template_directory_uri() . '/js/extensions/revolution.extension.carousel.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.kenburn.min', get_template_directory_uri() . '/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.layeranimation', get_template_directory_uri() . '/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.migration.min', get_template_directory_uri() . '/js/extensions/revolution.extension.migration.min.js', array('jquery'), null, true );
	////wp_enqueue_script( 'revolution.extension.navigation.min', get_template_directory_uri() . '/js/extensions/revolution.extension.navigation.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.parallax.min', get_template_directory_uri() . '/js/extensions/revolution.extension.parallax.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'revolution.extension.slideanims.min', get_template_directory_uri() . '/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'extensions/revolution.extension.video.min', get_template_directory_uri() . '/js/extensions/revolution.extension.video.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
	
	wp_enqueue_script( 'barracuda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'barracuda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'barracuda_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );