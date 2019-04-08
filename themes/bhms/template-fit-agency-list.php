<?php
/*
Template Name: Fit list of Agency

 */

get_header(); ?>
<section class="template-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12  mainPage_wrapper"><!-- Begin: mainPage_wrapper -->
				<div class="panel">
					<div class="panel-heading"><?php the_title(); ?></div>
					<div class="paragraph page-para">
						<div class="each-category">
							<span class="agency_list_heading">
								<?php
									if (qtranxf_getLanguage() == 'en') {
										echo 'List of Hajj Agency';
									// run code here if the current language is English
									} elseif (qtranxf_getLanguage() == 'bn') {
										echo 'হজ্ব এজেন্সীর তালিকা';
									// run code here if the current language is German
									}
								?> 
							</span>
							<ul style="display:none;padding-left:25px !important;">
								<?php
								$term_id = 20;
								$taxonomy_name = 'category';
								$term_children = get_term_children( $term_id, $taxonomy_name );

								foreach ( $term_children as $child ) {
									$term = get_term_by( 'id', $child, $taxonomy_name );
									$list_of_fit = apply_filters('the_content', $term->name);
									echo '<li><a class="more2" href="' . home_url('agency-list-by-category-and-year'). '?type='.$term->slug.'">' . $list_of_fit . '</a></li>';
								}
								?>
							</ul>
						</div>

						<div class="each-category">
							<span class="agency_list_heading">
							<?php
								if (qtranxf_getLanguage() == 'en') {
									echo 'List of Umrah Agency';
								// run code here if the current language is English
								} elseif (qtranxf_getLanguage() == 'bn') {
									echo 'ওমরাহ্‌ এজেন্সীর তালিকা';
								// run code here if the current language is German
								}
							?>                        
							</span>
							<ul style="display: none;padding-left:25px !important;">
								<?php
								$term_id = 23;
								$taxonomy_name = 'category';
								$term_children = get_term_children( $term_id, $taxonomy_name );

								foreach ( $term_children as $child ) {
									$term = get_term_by( 'id', $child, $taxonomy_name );
									$list_of_fit = apply_filters('the_content', $term->name);
									echo '<li><a class="more2" href="' . home_url('agency-list-by-category-and-year'). '?type='.$term->slug.'">' . $list_of_fit . '</a></li>';
								}
								?>
							</ul>
						</div>
					</div>
					<center>
						<?php
						if (function_exists("pagination")) {
							pagination($additional_loop->max_num_pages);
						}
						?>
					</center>
				</div><!-- End: mainPage_inner -->
			</div><!-- End: mainPage_wrapper -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".agency_list_heading").addClass('agency_list_heading_inactive');

        $(".agency_list_heading").on('click', function () {
            var curr_class = $(this).attr('class').split(' ')[1];
            if (curr_class == 'agency_list_heading_inactive') {
                $(this).removeClass('agency_list_heading_inactive');
                $(this).addClass('agency_list_heading_active');
                $(this).parent().find('ul').show();
            } else {
                $(this).removeClass('agency_list_heading_active');
                $(this).addClass('agency_list_heading_inactive');
                $(this).parent().find('ul').hide();
            }
        })
    })
</script>
