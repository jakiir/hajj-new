<?php 
/*
Single Post Template: News
*/
 get_header(); ?>
	<?php if (have_posts()) : ?>
		<div id="main-top">
			<div class="main-top-left">
				<h4><?php the_title(); ?></h4>
			</div>
			<?php if (is_file(STYLESHEETPATH . '/subscribe.php' )) include(STYLESHEETPATH . '/subscribe.php' ); else include(TEMPLATEPATH . '/subscribe.php' ); ?>
		</div>
		<div id="main" class="clear">
			<div id="content">
			    <?php the_post(); ?>
                <?php the_content(); ?>
				<?php endif; ?>
			</div><!--end content-->
<?php get_sidebar(); ?>

</div><!--end main-->
	<div id="main-bottom"></div>
<?php get_footer(); ?>




