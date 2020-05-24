<?php
/*
Template Name: User List
*/
get_header();
?>

<table>
    <thead>
    <tr>
        <th>User Name</th>
        <th>User GitHub Link</th>
    </tr>
    </thead>
    <tbody>
	<?php


	for ( $i = 0; $i < count( get_users() ); $i ++ ) {
		if ( get_user_meta( get_users()[ $i ]->id )['organization'][0] === 'github' ) {

			$user_name = get_user_meta( get_users()[ $i ]->id )['nickname'][0];
			$user_link = get_user_meta( get_users()[ $i ]->id )['user_link'][0];

			echo '	<tr>
					<td data-column="User Name">' . $user_name . '</td>
					<td data-column="User GitHub Link">' . $user_link . '</td>
					</tr>
				 ';
		}
	}


	?>
    </tbody>
</table>


<?php
get_footer();
?>
