<?php
/**
 * Template Name: Notice Board
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
$type = isset($_GET['type'])?$_GET['type']:'';
?>
<section id="notice-board-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="notice-board-side-menu">
					<li class="<?php if($type =='mora_notice'):?>active<?php endif; ?>">
						<a href="?type=mora_notice">
							MORA
						</a>
					</li>
					<li class="<?php if($type =='dhaka_notice'):?>active<?php endif; ?>">
						<a href="?type=dhaka_notice">
							Hajj Office, Dhaka
						</a>
					</li>
					<li class="<?php if($type =='jeddah_notice'):?>active<?php endif; ?>">
						<a href="?type=jeddah_notice">
							Hajj Office, Jeddah
						</a>
					</li>
					<li class="<?php if($type =='ba_notice'):?>active<?php endif; ?>">
						<a href="?type=ba_notice">
							Business Automation
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="notice-board-tabs">
					<?php
					$query = new WP_Query( array( 'post_type' => 'notices','category_name'=>$type ) );
					$allYear = [];
					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); 
					$this_year = get_the_date('Y');						
					$allYear[$this_year][] = get_the_ID();
					endwhile; wp_reset_postdata();?>
					<?php endif; ?>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs notice-board-tab" role="tablist">
						<?php $inc=1; foreach($allYear as $key_year=>$eachYear): ?>
						<li role="presentation" class="<?php if($inc==1):?>active<?php endif; ?>">
							<a href="#notice_<?php echo $key_year; ?>" aria-controls="notice_<?php echo $key_year; ?>" role="tab" data-toggle="tab" class="btn notice-board-tab-btn">
								<?php echo $key_year; ?>
							</a>
						</li>
						<?php $inc++; endforeach; ?>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content notice-board-tab-content">
				<?php $inc=1; foreach($allYear as $key_year=>$eachYear): ?>
					<div role="tabpanel" class="tab-pane <?php if($inc==1):?>active<?php endif; ?>" id="notice_<?php echo $key_year; ?>">
						<div class="panel">	
							<?php 
							foreach($eachYear as $key=>$post_id): 
								$content_post = get_post($post_id);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								$postDate = $content_post->post_date;
								$file_circular = get_post_meta( $post_id, 'file_circular', true );
							?>
							<div class="panle-body notice-box">
								<p class="notice-box-time"><?php echo date('F j, Y',strtotime($postDate)); ?></p>
								<h2><?php echo $content_post->post_title; ?></h2>
								<p><?php echo get_the_post_thumbnail($post_id, 'all-news', array('class' => 'news-imgage')); ?>
                                <?php echo $content; ?></p>
								<?php 
									if($file_circular)
									{
										echo '<a  href= '. $file_circular .' target="_blank" class="more2 btn notice-box-btn" >বিস্তারিত তথ্য ডাউনলোড করার জন্য এইখানে ক্লিক করুন</a>';
									}
								?>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<?php $inc++; endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
//get_sidebar();
get_footer();
?>
