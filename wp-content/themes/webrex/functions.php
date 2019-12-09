<?php
/**
 * webrex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webrex
 */

if ( ! function_exists( 'webrex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webrex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webrex, use a find and replace
		 * to change 'webrex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webrex', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'webrex' ),
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
		add_theme_support( 'custom-background', apply_filters( 'webrex_custom_background_args', array(
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
add_action( 'after_setup_theme', 'webrex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webrex_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'webrex_content_width', 640 );
}
add_action( 'after_setup_theme', 'webrex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webrex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webrex' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webrex' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'webrex_widgets_init' );
/**
 * Register and Enqueue Styles.
 */
function webrex_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'webrex-style', get_stylesheet_uri(), array(), $theme_version );
	
	wp_style_add_data( 'webrex-style', 'rtl', 'replace' );

//	Fonts START
	wp_enqueue_style( 'webrex-font-google-style', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all', array(), $theme_version );
//	Fonts END

//	Global styles START
	wp_enqueue_style( 'fontawesome-style', get_stylesheet_directory_uri() .'/assets/plugins/font-awesome/css/font-awesome.min.css', array(), $theme_version );
	wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() .'/assets/plugins/bootstrap/css/bootstrap.min.css', array(), $theme_version );
//	Global styles End

//	Page level plugin styles START
	wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri() .'/assets/pages/css/animate.css', array(), $theme_version );
	wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() .'/assets/plugins/fancybox/source/jquery.fancybox.css', array(), $theme_version );
	wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() .'/assets/plugins/owl.carousel/assets/owl.carousel.css', array(), $theme_version );
//	Page level plugin styles END

//	Theme styles START
	wp_enqueue_style( 'components-style', get_stylesheet_directory_uri() .'/assets/pages/css/components.css', array(), $theme_version );
	wp_enqueue_style( 'slider-style', get_stylesheet_directory_uri() .'/assets/pages/css/slider.css', array(), $theme_version );
	wp_enqueue_style( 'page-min-style', get_stylesheet_directory_uri() .'/assets/corporate/css/style.min.css', array(), $theme_version );
	wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() .'/assets/corporate/css/theme.min.css', array(), $theme_version );
	wp_enqueue_style( 'page-style', get_stylesheet_directory_uri() .'/assets/corporate/css/style.css', array(), $theme_version );
	wp_enqueue_style( 'portfolio-style', get_stylesheet_directory_uri() .'/assets/pages/css/portfolio.css', array(), $theme_version );
	wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() .'/assets/corporate/css/style-responsive.css', array(), $theme_version );
	wp_enqueue_style( 'red-style', get_stylesheet_directory_uri() .'/assets/corporate/css/themes/red.css', array(), $theme_version );
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() .'/assets/corporate/css/custom.css', array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'webrex_register_styles' );
/**
 * Enqueue scripts and styles.
 */
function webrex_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'webrex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'webrex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
//	Load javascripts at bottom, this will reduce page load time
//	BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES)
//	[if lt IE 9]
	wp_enqueue_script( 'respond-script', get_template_directory_uri() . '/assets/plugins/respond.min.js', array(),  $theme_version);
//	<![endif]-->
	wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/plugins/jquery.min.js', array(),  $theme_version);
	wp_enqueue_script( 'jquery-migrate-script', get_template_directory_uri() . '/assets/plugins/jquery-migrate.min.js', array(),  $theme_version);
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array(),  $theme_version);
	wp_enqueue_script( 'back-top-script', get_template_directory_uri() . '/assets/corporate/scripts/back-to-top.js', array(),  $theme_version);
//	END CORE PLUGINS

//	BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE)
	wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/assets/plugins/fancybox/source/jquery.fancybox.pack.js', array(),  $theme_version);
	wp_enqueue_script( 'jquery-mixitup-script', get_template_directory_uri() . '/assets/plugins/jquery-mixitup/jquery.mixitup.min.js', array(),  $theme_version);
	wp_enqueue_script( 'layout-script', get_template_directory_uri() . '/assets/corporate/scripts/layout.js', array(),  $theme_version);
	wp_enqueue_script( 'portfolio-script', get_template_directory_uri() . '/assets/pages/scripts/portfolio.js', array(),  $theme_version);
	wp_enqueue_script( 'carousel-script', get_template_directory_uri() . '/assets/plugins/owl.carousel/owl.carousel.min.js', array(),  $theme_version);
	wp_enqueue_script( 'bs-carousel-script', get_template_directory_uri() . '/assets/pages/scripts/bs-carousel.js', array(),  $theme_version);
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/pages/scripts/custom.js', array(),  $theme_version);
//	END PAGE LEVEL JAVASCRIPTS
}
add_action( 'wp_enqueue_scripts', 'webrex_scripts' );

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


add_action( 'init', 'prowp_register_my_post_types' );
function prowp_register_my_post_types() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'labels' => array( 'name' => 'Portfolio' ),
		'taxonomies' => array( 'category' ),
		'menu_icon' => 'dashicons-images-alt2',
		'rewrite' => array( 'slug' => 'portfolio' ),
		'supports' => array( 'title', 'editor', 'author','thumbnail', 'comments' )
);
		register_post_type( 'portfolio', $args );
}


add_action( 'init', 'register_about_us_post_type' );
function register_about_us_post_type() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'labels' => array( 'name' => 'About Us' ),
		'taxonomies' => array( 'category' ),
		'menu_icon' => 'dashicons-megaphone',
		'rewrite' => array( 'slug' => 'about-us' ),
		'supports' => array( 'title', 'editor', 'author','thumbnail', 'comments' )
	);
	register_post_type( 'about-us', $args );
}