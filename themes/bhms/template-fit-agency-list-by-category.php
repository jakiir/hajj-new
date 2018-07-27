<?php
/*
Template Name: Fit list of Agency by Category and Year
 */
$type = isset($_GET['type'])?$_GET['type']:'';
get_header(); ?>
<section class="template-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-theme">
				 <div class="panel-heading">
					<?php echo apply_filters('the_content', get_category_by_slug($type)->name); ?>
				 </div>

                    <div class="paragraph page-para">					
                        <?php
                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                        if ( get_query_var('page') ) $paged = get_query_var('page');

                        $query = new WP_Query( array(
                            'post_type' => 'fit_agency_list',
                            'category_name'=>$type,
                            'posts_per_page' =>20,
                            'paged' => $paged
                        ) );

                        if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="panle-body notice-box">
								<h3><?php the_title(); ?></h3>
								<p class="notice-box-time"><?php the_time('F j, Y') ?></p>
									<?php echo get_the_post_thumbnail($post_id, 'all-news', array('class' => 'news-imgage')); ?>
									<?php the_content(); ?>
									<?php
									if(get_field('file_fit_agency'))
									{
										echo '<a  href= '. get_field('file_fit_agency') .' target="_blank" class="more2 btn notice-box-btn" >বিস্তারিত তথ্য ডাউনলোড করার জন্য এইখানে ক্লিক করুন</a>';
									}
									else {

									}
									?>
								</div> <!-- End: panle-body -->
                            <?php endwhile; wp_reset_postdata(); ?>

                            <!-- show pagination here -->
                        <?php else : ?>
                            <!-- show 404 error here -->
                        <?php endif; ?>
                    </div>
                    <center>
                        <?php
                        if (function_exists("pagination")) {
                            pagination($additional_loop->max_num_pages);
                        }
                        ?>
                    </center>

                </div>

            </div><!-- End: content -->

        </div><!-- End: mainPage_inner -->
    </div><!-- End: mainPage_wrapper -->
	</div>
</section>

<?php get_footer(); ?>