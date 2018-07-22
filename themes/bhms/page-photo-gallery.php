<?php
/**
 * Template Name: Gallery
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

<section id="gallery-section">
	<div class="container">
		<div class="row">
		<?php	 
		$query = new WP_Query( array( 'post_type' => 'photo_gallery','posts_per_page' => 12 ) );
		if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); 
				$this_year = get_the_date('Y');						
				$allYear[$this_year][] = get_the_ID();
			endwhile; wp_reset_postdata(); 
			endif; ?>
			<div class="col-md-12">
				<div class="text-center">
					<button class="btn gallery-filter-btn filter-button" data-filter="all">All</button>
					<?php $inc=1; foreach($allYear as $key_year=>$eachYear): ?>
						<button class="btn gallery-filter-btn filter-button" data-filter="<?php echo $key_year; ?>"><?php echo $key_year; ?></button>
					<?php $inc++; endforeach; ?>
				</div>

				<div class="gallery-heading">
					<h2>Albums</h2>
				</div>
			</div>
			
			<div class="gallery-body">
			<?php $inc=1; foreach($allYear as $key_year=>$eachYear): ?>
			<?php 
			foreach($eachYear as $key=>$post_id): 
				$content_post = get_post($post_id);
				$content = $content_post->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]&gt;', $content);
				$post_title = $content_post->post_title;
				$post_title = apply_filters('the_content', $post_title);
				$post_title = str_replace(']]>', ']]&gt;', $post_title);
				$postDate = $content_post->post_date;
			?>
				<div class="gallery-album col-sm-4 col-xs-6 filter <?php echo $key_year; ?>">
					<?php echo $content; ?>
					<div class="gallery-album-caption">
						<h3><?php echo $post_title; ?></h3>
						<!--<p>13 Photos</p>-->
					</div>
				</div>
				<?php endforeach; ?>
				<?php $inc++; endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php
//get_sidebar();
get_footer();
?>

<script>
	$(document).ready(function(){
	    $(".filter-button").click(function() {
	        var value = $(this).attr('data-filter');
	        if(value == "all") {
	            $('.filter').show('1000');
	        } else {
	            $(".filter").not('.'+value).hide('3000');
	            $('.filter').filter('.'+value).show('3000');
	        }
	    });
	    
	    if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
		}

		$(this).addClass("active");
	});
</script>
