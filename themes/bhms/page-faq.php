<?php
/**
 * Template Name: FAQ
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
<section id="faq-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="faq-section">
					<h2>
						হজ এজেন্সীদের কাজের সুবিধার্তে তাঁদের বিভিন্ন প্রশ্নের উত্তর নিচে দেয়া হল :
					</h2>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<?php 
							$entries = get_post_meta( get_the_ID(), 'hajj_faq_question_answer', true );
							if(!empty($entries)):
							$inc=1;
							foreach($entries as $key => $entry ) : ?>								
								<div class="panel panel-default">
									<?php if ( isset( $entry['question'] ) ) : ?>
									<div class="panel-heading" role="tab" id="heading<?php echo $inc; ?>">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $inc; ?>" aria-expanded="true" aria-controls="collapse<?php echo $inc; ?>">
												<i class="plus-minus text-success glyphicon glyphicon-plus"></i>
												প্রশ্ন : <?php echo esc_html( $entry['question'] ); ?>
											</a>
										</h4>
									</div>
									<?php endif; ?>
									<?php if ( isset( $entry['answer'] ) ) : ?>
									<div id="collapse<?php echo $inc; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $inc; ?>">
										<div class="panel-body pd15">
											উত্তর : <?php echo esc_html( $entry['question'] ); ?>
											<?php if ( isset( $entry['download_file'] ) && !empty($entry['download_file']) ): ?>
											<div class="padtop10">
												<a href="<?php echo $entry['download_file']; ?>" class="btn btn-warning faq-btn">ডাউনলোড করুন</a>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
								</div>								
						<?php $inc++; endforeach; ?>
						<?php else : ?>
							Not found FAQ
						<?php endif; ?>
					</div>
				</div>
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

function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".plus-minus")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

});
</script>
