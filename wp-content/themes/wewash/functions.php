<?php
/**
 * wewash functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wewash
 */
require_once('classes/bs4navwalker.php');
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wewash_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wewash, use a find and replace
		* to change 'wewash' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wewash', get_template_directory() . '/languages' );

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
		  'primary' => esc_html__('Menu górne', 'wewash'),
		  'footer-menu' => esc_html__('Menu w stopce', 'wewash'),
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
			'wewash_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'wewash_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wewash_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wewash_content_width', 640 );
}
add_action( 'after_setup_theme', 'wewash_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wewash_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer left column', 'wewash' ),
			'id'            => 'footer',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer right column', 'wewash' ),
			'id'            => 'footer2',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'wewash_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wewash_scripts() {
	wp_enqueue_style( 'wewash-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wewash-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wewash-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wewash_scripts' );

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


function wewash_enqueue_scripts()
{
  wp_enqueue_style('wewash-google-fonts', "https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap");
  wp_enqueue_style('wewash-bootstrap', get_template_directory_uri() . '/template/css/bootstrap.min.css', array(), null);
  wp_enqueue_style('wewash-slick', get_template_directory_uri() . '/template/css/slick.css', array(), null);
  wp_enqueue_style('wewash-slick-theme', get_template_directory_uri() . '/template/css/slick-theme.css', array(), null);
  wp_enqueue_script('wewash-jquery-js', get_template_directory_uri() . '/template/js/jquery.min.js', array(), null);
  wp_enqueue_script('wewash-slick-js', get_template_directory_uri() . '/template/js/slick.min.js', array(), null);
  wp_enqueue_script('wewash-bootstrap-js', get_template_directory_uri() . '/template/js/bootstrap.min.js', array(), null);
  wp_enqueue_script('wewash-custom-js', get_template_directory_uri() . '/template/js/custom.js', array(), null);
  wp_enqueue_style('wewash-custom-css', get_template_directory_uri() . '/template/css/custom.css', array(), null);
}
add_action('wp_enqueue_scripts', 'wewash_enqueue_scripts');

function wewash_custom_post_type() {
	register_post_type('wewash_projects',
		array(
			'labels'      => array(
				'name'          => __( 'Current Projects', 'textdomain' ),
				'singular_name' => __( 'Current Project', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'projects' ),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}
add_action('init', 'wewash_custom_post_type');

