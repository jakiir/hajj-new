<?php
/**
 * Template Name: Pilgrim
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
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ul class="nav nav-tabs">
				<li class="">
					<a href="#panel_1" data-toggle="tab" aria-expanded="false">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						প্রচ্ছদ
					</a>
				</li>
				<li class="active">
					<a href="#panel_2" data-toggle="tab" aria-expanded="true">
						<i class="fa fa-user" aria-hidden="true"></i>
						হজযাত্রী অনুসন্ধান
					</a>
				</li>
				<li class=""><a href="#panel_3" data-toggle="tab" aria-expanded="false">প্রাক্-নিবন্ধন</a></li>
				<li class=""><a href="#panel_d" data-toggle="tab" aria-expanded="false">হজ ২০১৮/ ১৪৩৯ হিজরি</a></li>
			</ul>
		</div>
		<div class="col-md-12">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade well" id="panel_1">
					<div class="row">
						<div class="col-md-12">
							<div class="pilgrim-search">
								<div class="form-group">
									<input class="form-control" placeholder="Search" type="text">
								</div>
							</div>
							জাতীয় হজ ও ওমরাহ নীতি ১৪৩৯ হিজরি (২০১৮খ্রি.)-এর ধারা ৩.১.৯ অনুযায়ী ২০১৮ সালে নিবন্ধনের সুযোগ পাবেন।
						</div>
					</div>
				</div>
				<div class="tab-pane fade active in" id="panel_2">
					<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
				</div>
				<div class="tab-pane fade" id="panel_3">
					<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
				</div>
				<div class="tab-pane fade" id="panel_4">
					<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
//get_sidebar();
get_footer();
?>
