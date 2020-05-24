<?php
/*
 * Cleanup
 */

// setup WP

if ( ! function_exists( 'setup' ) ) {
	function setup() {

		// Gutenberg
		add_theme_support( 'wp-block-styles' );

		// theme cannot support extra-wide blocks
		//add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );
		add_editor_style( 'theme/css/editor.css' );

		// Theme
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		update_option( 'thumbnail_size_w', 285 ); /* internal max-width of col-3 */
		update_option( 'small_size_w', 350 ); /* internal max-width of col-4 */
		update_option( 'medium_size_w', 730 ); /* internal max-width of col-8 */
		update_option( 'large_size_w', 1110 ); /* internal max-width of col-12 */

		if ( ! isset( $content_width ) ) {
			$content_width = 1100;
		}

		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );

		add_theme_support( 'automatic-feed-links' );
	}
}
add_action( 'init', 'setup' );


// Less stuff in <head>

if ( ! function_exists( 'cleanup_head' ) ) {
	function cleanup_head() {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'index_rel_link' );
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}
add_action( 'init', 'cleanup_head' );


// remove some style and scripts

define( 'WPCF7_LOAD_CSS', false );
define( 'WPCF7_AUTOP', false );

function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );

function my_deregister_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}

add_action( 'wp_enqueue_scripts', 'my_deregister_style' );

//
// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists( 'show_less_login_info' ) ) {
	function show_less_login_info() {
		return "<strong>ERROR</strong>: Stop guessing!";
	}
}
add_filter( 'login_errors', 'show_less_login_info' );
//
//// Do not generate and display WordPress version
//
if ( ! function_exists( 'remove_generator' ) ) {
	function remove_generator() {
		return '';
	}
}
add_filter( 'the_generator', 'no_generator' );

