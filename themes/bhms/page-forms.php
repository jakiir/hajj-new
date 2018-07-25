<?php
/**
 * Template Name: Form Download
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
<section id="form-download-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="form-download">
					<h2>
					<?php if(qtrans_getLanguage() == "en"){ ?>
						Form Downloads
					<?php } else { ?>
						ফরম ডাউনলোড
					<?php } ?>
					</h2>
					<?php
					if ( get_query_var('paged') ) $paged = get_query_var('paged');  
					if ( get_query_var('page') ) $paged = get_query_var('page');
					 
					$query = new WP_Query( array( 'post_type' => 'forms','posts_per_page' =>10, 'paged' => $paged, 'orderby'=>'date', 'order'=>'ASC') );
					 
					if ( $query->have_posts() ) : 						
						$sl=0; ?>
					<table action="" class="table table-striped form-download-table">
						<thead>
							<tr>
								<th width="10%">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									SL
								<?php } else { ?>
									ক্রম
								<?php } ?>
								
								</th>
								<th width="10%">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Form No.
								<?php } else { ?>
									ফরম নং
								<?php } ?>
								</th>
								<th width="50%">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Form Name
								<?php } else { ?>
									ফরমের নাম
								<?php } ?>
								</th>
								<th width="15%">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Date
								<?php } else { ?>
									তারিখ
								<?php } ?>
								</th>
								<th width="15%">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Downloads
								<?php } else { ?>
									ডাউনলোড
								<?php } ?>
								</th>
							</tr>
						</thead>
						<tbody>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<tr>
								<td><?php echo ++$sl?></td>
								<td><?php if(get_field('form_number')){ echo get_field('form_number'); } ?></td>
								<td><?php the_title();?></td>
								<td><?php echo get_the_date( 'Y-m-d' );?></td>
								<td>
									<?php if(get_field('form_file_upload')){ ?>
										<a href="<?php echo get_field('form_file_upload');?>" target="_blank" title="Download Form"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a>
									<?php } ?>
								</td>
							</tr>
							<?php endwhile;  ?>
						</tbody>
					</table>					                        
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
