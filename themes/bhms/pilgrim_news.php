<?php
/**
 * Template Name: News and Info
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bhmp
 */

get_header();
?>
<section class="template-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-theme">
				 <div class="panel-heading"><?php the_title(); ?></div>
					<?php 
					if ( get_query_var('paged') ) $paged = get_query_var('paged');  
					if ( get_query_var('page') ) $paged = get_query_var('page');
					 
					$query = new WP_Query( array( 'post_type' => 'newsinfo', 'category_name' => 'Pilgrim News', 'posts_per_page' =>12, 'paged' => $paged ) );
					if ( $query->have_posts() ) : 
					while ( $query->have_posts() ) : $query->the_post();
					$post_id = get_the_ID();
					$file_upload_news = get_field('file_upload_news&info');
					?>
					<div class="panle-body notice-box">
						<p class="notice-box-time"><?php echo the_time('F j, Y'); ?></p>
						<h2><?php the_title(); ?></h2>
						<p><?php echo get_the_post_thumbnail($post_id, 'all-news', array('class' => 'news-imgage')); ?>
						<?php the_content(); ?></p>
						<?php 
							if($file_upload_news)
							{
								echo '<a  href= '. $file_upload_news .' target="_blank" class="more2 btn notice-box-btn" >বিস্তারিত তথ্য ডাউনলোড করার জন্য এইখানে ক্লিক করুন</a>';
							}
						?>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>                        
						<!-- show pagination here -->
					<?php else : ?>
						<!-- show 404 error here -->
					<?php endif; ?>
					<center>
					 <?php 
					 if (function_exists("pagination")) {
						 pagination($additional_loop->max_num_pages);
						} 
					?>
				   </center>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
//get_sidebar();
get_footer();
?>
