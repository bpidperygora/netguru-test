<?php
get_header();

?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <main id="main">
        <div class="page_header">
            <h1 class="page_header_title"><?=get_the_title(); ?></h1>
        </div>
        <div class="wrapper">
            <div class="content">
				<?= the_content(); ?>
            </div>
        </div>
    </main>
<?php
endwhile;
else :
	get_template_part( '404' );
endif;
?>


<?php
get_footer();
?>
