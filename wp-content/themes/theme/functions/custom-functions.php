<?php

add_action('wp_ajax_my_register_user', 'my_register_user', 0);
add_action('wp_ajax_nopriv_my_register_user', 'my_register_user');

function my_register_user() {
	$new_user_name = stripcslashes($_POST['new_user_name']);
	$new_user_email = stripcslashes($_POST['new_user_email']);
	$new_user_link = stripcslashes($_POST['new_user_link']);
	$new_user_password = $_POST['new_user_password'];
	$user_data = array(
		'user_login' => $new_user_name,
		'user_email' => $new_user_email,
		'user_pass' => $new_user_password,
		'role' => 'contributor'
	);
	$user_id = wp_insert_user($user_data);



	if (!is_wp_error($user_id)) {
		update_user_meta( $user_id, 'organization', 'github' );
		update_user_meta( $user_id, 'user_link', $new_user_link );
		echo 'Success !!! we have Created an account for you.';
	} else {
		if (isset($user_id->errors['empty_user_login'])) {
			$notice_key = 'User Name and Email are mandatory';
			echo $notice_key;
		} elseif (isset($user_id->errors['existing_user_login'])) {
			echo'Sorry! User name already exist.';
		} else {
			echo'Error please the form carefully.';
		}
	}
	die;
}
