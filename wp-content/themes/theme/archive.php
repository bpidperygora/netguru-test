<?php
get_header();
?>

<h1>
	<?= the_archive_title(); ?>
</h1>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?= '<h2>' . get_the_title() . '</h2>' ?>

<?php endwhile; ?>
<?php
else :
	get_template_part('404');
endif;
?>


<?php
get_footer();
?>
