<?php
// Add Shortcode for registration user from GitHub

/**
 * @param $atts
 *
 * @return string
 */
function my_display_custom_post_type() {

	wp_enqueue_script( 'jquery.min.js' );
	wp_enqueue_script( 'work.js' );

	$string = '';

	$string .= '
	<form id="gitGetForm">
	    <input type="text" name="gitUserName" id="gitUserName" placeholder="Github username...">
	    <input type="submit" id="gitSubmit" value="Pull User Data">
	    <div id="gitUserData"></div>
    </form>
  ';
	return $string;

}

add_shortcode( 'git-user', 'my_display_custom_post_type' );