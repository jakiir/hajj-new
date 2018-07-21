<?php
/**
 * Template Name: Contact Us
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
<!-- Start contact Area -->
  <div id="contact" class="contact-area">
	<div class="contact-head">		
		<?php if(qtrans_getLanguage() == "en"){ ?>
			For any information regarding Pre-registration or Hajj, <br/>please call <span>+8809602666707</span>
		<?php } else { ?>
			প্রাক-নিবন্ধন অথবা হজ সম্পর্কিত যে কোন তথ্যের জন্য নিম্নের নম্বরে <br/>ফোন করুনঃ<span>+৮৮০৯৬০২৬৬৬৭০৭</span>
		<?php } ?>
	</div>
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              If you have any observation about Hajj Management System,<br/>
			  Please call following numbers:
            </div>
          </div>
        </div>
		<br/><br/>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="contact-box">
					<div class="row">					
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="contact-box-title">Dhaka</div>
							<div class="panel panel-default">								
								<div class="panel-body">
									<div class="contact-title">
										Director, Hajj Office, Dhaka
									</div>
									<div class="contact-no">
										Phone: 8958462, Fax: 8920960
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="contact-box-title">Saudi Arabia</div>
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Bangladesh Hajj Mission, Makkah
									</div>
									<div class="contact-no">
										Phone: 00-966-2-5413980, 5413981, Fax: 00-966-2-5413982
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">					
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Secretary, Ministry of Religious Affairs
									</div>
									<div class="contact-no">
										Phone: 8958462, Fax: 8920960
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Bangladesh Hajj Mission, Jeddah
									</div>
									<div class="contact-no">
										Phone: 00-966-2-6876908, Fax: 00-966-2-6881780
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">					
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Assistant Hajj Officer
									</div>
									<div class="contact-no">
										Phone: 7912391
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Bangladesh Hajj Mission, Madinah
									</div>
									<div class="contact-no">
										Phone: 00-966-04-8667220
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">					
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="contact-title">
										Health Section, Hajj office
									</div>
									<div class="contact-no">
										Phone: +88-027912132
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="contact-form-area">
			<h2 class="contact-form-title"><?php the_title(); ?></h2>
			<?php echo do_shortcode('[contact-form-7 id="6417" title="Contact form 1"]'); ?>
		</div>
   
		<div class="contact-google-map">
            <!-- Start Map -->
              <div id="google-map" data-latitude="23.8504999" data-longitude="90.41150619999996"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
<?php
//get_sidebar();
get_footer();
?>