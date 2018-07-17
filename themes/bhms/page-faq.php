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
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="plus-minus text-success glyphicon glyphicon-plus"></i>
										বেসরকারি ব্যবস্থাপনায় প্রাক-নিবন্ধন কতদিন চালু থাকবে?
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body pd15">
									বেসরকারি ব্যবস্থাপনায় প্রাক-নিবন্ধন আগামী ১৯ ফেব্রূয়ারি, ২০১৭ খ্রি. শুরু হবে, যা প্রতি কার্যদিবসে সকাল ১০ টা হতে বিকাল ৫টা পর্যন্ত চলবে। জাতীয় হজ ও ওমরাহ নীতি-২০১৭ খ্রি. অনুযায়ী (১৪৩৮ হিজরি) প্রাক নিবন্ধন চলমান থাকবে। ২০১৭ সালের প্রাক নিবন্ধন বিষয়ক ইউজার ম্যানুয়ালটি ডাউনলোড করুন ।
									<div class="padtop10">
										<a href="#" class="btn btn-warning faq-btn">ডাউনলোড করুন</a>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="plus-minus text-success glyphicon glyphicon-plus"></i>
										বেসরকারি ব্যবস্থাপনায় প্রাক-নিবন্ধন কতদিন চালু থাকবে?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body pd15">
									বেসরকারি ব্যবস্থাপনায় প্রাক-নিবন্ধন আগামী ১৯ ফেব্রূয়ারি, ২০১৭ খ্রি. শুরু হবে, যা প্রতি কার্যদিবসে সকাল ১০ টা হতে বিকাল ৫টা পর্যন্ত চলবে। জাতীয় হজ ও ওমরাহ নীতি-২০১৭ খ্রি. অনুযায়ী (১৪৩৮ হিজরি) প্রাক নিবন্ধন চলমান থাকবে। ২০১৭ সালের প্রাক নিবন্ধন বিষয়ক ইউজার ম্যানুয়ালটি ডাউনলোড করুন ।
									<div class="padtop10">
										<a href="#" class="btn btn-warning faq-btn">ডাউনলোড করুন</a>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="plus-minus text-success glyphicon glyphicon-plus"></i>
										এক সাথে সকল ভাউচারের অর্থ পরিশোধ করতে হবে, নাকি আলাদা আলাদাভাবে ভাউচার পরিশোধ করা যাবে?
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body pd15">
									বেসরকারি ব্যবস্থাপনায় প্রাক-নিবন্ধন আগামী ১৯ ফেব্রূয়ারি, ২০১৭ খ্রি. শুরু হবে, যা প্রতি কার্যদিবসে সকাল ১০ টা হতে বিকাল ৫টা পর্যন্ত চলবে। জাতীয় হজ ও ওমরাহ নীতি-২০১৭ খ্রি. অনুযায়ী (১৪৩৮ হিজরি) প্রাক নিবন্ধন চলমান থাকবে। ২০১৭ সালের প্রাক নিবন্ধন বিষয়ক ইউজার ম্যানুয়ালটি ডাউনলোড করুন ।
									<div class="padtop10">
										<a href="#" class="btn btn-warning faq-btn">ডাউনলোড করুন</a>
									</div>
								</div>
							</div>
						</div>
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
