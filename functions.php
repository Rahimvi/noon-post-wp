<?php
/**
 * Noon Post functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Noon_Post
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'noonpost_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function noonpost_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Noon Post, use a find and replace
		 * to change 'noonpost' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'noonpost', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Primary', 'noonpost' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'noonpost_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		// Post Format
		function themename_post_formats_setup() {
			add_theme_support( 'post-formats', array( 'image', 'gallery' , 'video', 'audio') );
		   }
		   add_action( 'after_setup_theme', 'themename_post_formats_setup' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'noonpost_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function noonpost_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'noonpost_content_width', 640 );
}
add_action( 'after_setup_theme', 'noonpost_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function noonpost_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'noonpost' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'noonpost' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'CopyRight Text', 'noonpost' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'noonpost' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'noonpost_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function noonpost_scripts() {
	wp_enqueue_style( 'noonpost-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'noonpost-style', 'rtl', 'replace' );
	wp_enqueue_style( 'all', get_theme_file_uri("/assets/css/all.css"), array(), _S_VERSION );
	wp_enqueue_style( 'elegant', get_theme_file_uri("/assets/css/elegant-font-icons.css"), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri("/assets/css/bootstrap.min.css"), array(), _S_VERSION );
	wp_enqueue_style( 'owl', get_theme_file_uri("/assets/css/owl.carousel.css"), array(), _S_VERSION );
	wp_enqueue_style( 'style', get_theme_file_uri("/assets/css/style.css"), array(), _S_VERSION );
	wp_enqueue_style( 'custom', get_theme_file_uri("/assets/css/custom.css"), array(), _S_VERSION );

	wp_enqueue_script( 'noonpost-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jQuery-min', get_theme_file_uri('/assets/js/jquery-3.5.0.min.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_theme_file_uri('/assets/js/popper.min.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'ajax', get_theme_file_uri('/assets/js/ajax-contact.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'owl', get_theme_file_uri('/assets/js/owl.carousel.min.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'switch', get_theme_file_uri('/assets/js/switch.js') , array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'main', get_theme_file_uri('/assets/js/main.js') , array("jquery"), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'noonpost_scripts' );

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

