<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bhmp
 */
?>
<div id="post-<?php the_ID(); ?>" class="sigle-page area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="section-headline text-left">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</div>
				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					bhmp_posted_on();
					bhmp_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php bhmp_post_thumbnail(); ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php bhmp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</div>