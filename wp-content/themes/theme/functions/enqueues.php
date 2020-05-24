<?php
/**!
 * Enqueues
 */

if ( ! function_exists( 'style_and_script' ) ) {
	function style_and_script() {

		///
		///  Styles
		///
		wp_register_style( 'main.css', get_template_directory_uri() . '/build/css/main.css', false, null );
		wp_enqueue_style( 'main.css' );


		///
		///  Scripts
		///

		wp_deregister_script( 'jquery' );

		wp_register_script( 'jquery.min.js', get_template_directory_uri() . '/build/js/jquery.min.js', false, null, true );


		//components

		wp_register_script( 'work.js', get_template_directory_uri() . '/build/js/work.js', false, null, true );

		wp_localize_script( 'work.js', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

//		------------------------------------------------------------------------------------

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'style_and_script', 100 );

