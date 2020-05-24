<?php
/*
Template Name: Test template
*/
get_header();
?>

<h1><?= get_the_title(); ?></h1>

<p>
	<?
	global $post;
	$content = $post->post_content;
	echo $content
	?>
</p>


<div class="posts">

<?
$args = array(
	'post_type'      => 'post',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'posts_per_page' => 3,
	'category_name'  => 'test_entries'
);
$category_id = get_cat_ID('Test Entries');
$category_link =  get_category_link( $category_id );

$q    = new WP_Query( $args );
if ( $q->have_posts() ) {
	while ( $q->have_posts() ) {
		$q->the_post();

		echo '<h2>' . get_the_title() . '</h2>';

	}
	wp_reset_postdata();
	echo '<a href=' . $category_link . '>Show more</a>';
}
?>
</div>

<?
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>

<?php
get_footer();
?>
