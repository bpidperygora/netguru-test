<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/

if ( ! defined('ABSPATH') ) {
	exit;
}
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/custom-functions.php';
require get_template_directory() . '/functions/custom-shortcodes.php';
