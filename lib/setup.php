<?php
/**
 * Neat functions and definitions
 * @package Neat
 */
if ( ! function_exists( 'neat_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function neat_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/* * Let WordPress manage the document title.*/
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );
	}
}
add_action( 'after_setup_theme', 'neat_setup' );
/**
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 * @since  1.0.0
 */
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    	// wp_enqueue_script('jquery'); // Enqueue Wordpress it!
        wp_deregister_script('jquery'); // Deregister WordPress jQuery
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js', array(), '3.0');
        wp_register_script('bundlejs', get_template_directory_uri() . '/dist/bundle.js'); // Custom scripts
    }

}


/**
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 * @since  1.0
 */
add_action('wp_enqueue_scripts', 'theme_styles'); // Add Theme Stylesheet
function theme_styles()
{
    //minifited and concated
    wp_register_style('bundlecss', get_template_directory_uri() . '/dist/bundle.css', array(), '1.0', 'all');
    wp_enqueue_style('bundlecss'); // Enqueue it!

}
/**
 * Comment Reply js to load only when thread_comments is active
 * @since  1.0.0
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_comments_reply' );
function theme_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
