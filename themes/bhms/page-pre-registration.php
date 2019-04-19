<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bhmp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="sigle-page area-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-headline text-left">
								<?php
								if ( is_singular() ) :
									the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
									?>
									<div class="entry-meta">
										<?php
										bhmp_posted_on();
										bhmp_posted_by();
										?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
							</div>
							<?php //bhmp_post_thumbnail(); ?>
							<div class="entry-content">
								<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bhmp' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bhmp' ),
									'after'  => '</div>',
								) );
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php bhmp_entry_footer(); ?>
							</footer><!-- .entry-footer -->
						</div>
					</div>
				</div>
			</div>
		<?php
			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<style>
    @charset "utf-8";
    .wrapper_hajj_reg{ margin:auto;}
    .wrapper_hajj_reg *{ padding:0px; margin:0px;}
    .wrapper_hajj_reg a{
        text-decoration:none; color:#000
    }
    .wrapper_hajj_reg #rectangle {
        width: 300px;
        height: 120px;
        border:1px dashed #000000;
        margin:auto;
        background:#999999;
        margin-top:10px;
    }
    .wrapper_hajj_reg #rectangle_title{
        height: 50px;
        border:1px dashed #000000;
        margin:auto;
        #background:#999999;
        margin-top:10px;
        padding:5px;
        color:#000;
        text-align:center;
    }

    .wrapper_hajj_reg #circle {
        width: 150px;
        height: 150px;
        background: url(http://www.hajj.gov.bd/wp-content/uploads/2016/03/server.png) no-repeat center #d0a202;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 75px;
        margin:auto;
        margin-top:10px;
    }
    .wrapper_hajj_reg #circle p{ text-align:center; padding-top:60px; font-weight:bolder}
    .wrapper_hajj_reg #rectangle_circle_title{width: 300px;
        height: 45px;
        border:1px dashed #000000;
        margin:auto;
        #background:#999999;
        margin-top:5px;
        padding:5px;
    }
    .wrapper_hajj_reg #rectangle_circle_title p{text-align:center;}

</style>
<?php
//get_sidebar();
get_footer();
