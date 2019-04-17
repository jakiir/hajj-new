<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bhmp
 */

get_header();
?>
<!-- Start Slider Area -->
<div id="home" class="slider-area">
	<div class="bend niceties preview-2">
		<img id="preloadingSlider" src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/slider_image_01.jpg" alt="" title="" />
		<div id="ensign-nivoslider" class="slides" style="display:none;">
			<?php 
			$slider_args = array(
				'post_type' => 'main_slider',
				'post_status' => 'publish',
				'posts_per_page' => 3
			);
			$slider_array = get_posts( $slider_args );						
			if ( !empty($slider_array) ) {
				$inc=1;
				foreach($slider_array as $slider_data) {
					$postId = $slider_data->ID;
					$slider_img = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'single-post-thumbnail' );
					?>	
					<img src="<?php echo $slider_img[0]; ?>" alt="" title="#slider-direction-<?php echo $inc; ?>" />
					<?php 
					$inc++;
				}
			}
			?>
		</div>		
		<!-- Slider Footer Info -->
		<div class="slider-info">
			<div class="col-md-4">
				<div class="slider-info-inner">
					<h4>Haj Flight Starts in</h4>
					<p>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Days</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Hours</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Minutes</span>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="slider-info-inner">
					<h4>Haj Starts in</h4>
					<p>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Days</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Hours</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Minutes</span>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="slider-info-inner">
					<h4>Return Flight Starts in</h4>
					<p>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Days</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Hours</span>
						<span class="slider-info-time">60</span> <span class="slider-info-text">Minutes</span>
					</p>
				</div>
			</div>
		</div>
		<div class="slider-search-box">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="tab-menu">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active">
							<a href="#pilgrim-search" role="tab" data-toggle="tab" aria-expanded="false">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Pilgrim Search
								<?php } else { ?>
									হজযাত্রী অনুসন্ধান
								<?php } ?>
							</a>
						</li>
						<li class="">
							<a href="#agency-search" role="tab" data-toggle="tab" aria-expanded="true">
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Agency Search
								<?php } else { ?>
									এজেন্সী অনুসন্ধান
								<?php } ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="pilgrim-search">
						<div class="tab-inner">
							<form method="get" action="https://prp.pilgrimdb.org/web/pilgrim-search" target="_blank">
								<span class="fa fa-search"></span>
								<input type="text" name="q" class="search-box" autocomplete="off" placeholder="<?php if(qtrans_getLanguage() == "en"){ ?>Enter Pilgrim Tracking Number<?php } else { ?>হজযাত্রীর ট্র্যাকিং নম্বর লিখুন<?php } ?>"/>
								<button type="submit" class="search-button">
									<?php if(qtrans_getLanguage() == "en"){ ?>
										Search
									<?php } else { ?>
										অনুসন্ধান
									<?php } ?>
								</button>
							</form>
						</div>
					</div>
					<div class="tab-pane" id="agency-search">
						<div class="tab-inner">
							<form method="get" action="https://prp.pilgrimdb.org/web/pilgrim-search" target="_blank">
								<span class="fa fa-search"></span>
								<input type="text" name="q" class="search-box" autocomplete="off" placeholder="<?php if(qtrans_getLanguage() == "en"){ ?>Enter Pilgrim Tracking Number<?php } else { ?>হজযাত্রীর ট্র্যাকিং নম্বর লিখুন<?php } ?>"/>
								<button type="submit" class="search-button">
									<?php if(qtrans_getLanguage() == "en"){ ?>
										Search
									<?php } else { ?>
										অনুসন্ধান
									<?php } ?>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider Footer Info -->
	</div>
	<!-- End Slider Area -->

	<!-- Start Notice Board area -->
	<div id="notice_board" class="notice-area area-padding">
		<div class="container">
			<div class="row">
				<!-- single-well start-->
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="well-left">
						<div class="single-well">
							<p class="head-title">
								<span class="main-title">
									<?php if(qtrans_getLanguage() == "en"){ ?>
										Notice Board
									<?php } else { ?>
										নোটিশ বোর্ড
									<?php } ?>
								</span>
								<span class="view-all">
									<a href="<?php echo home_url('/notices/'); ?>">
										View All <i class="fa fa-angle-right"></i>
									</a>
								</span>
							</p>
							<ul class="notice-area-content">
								<?php 
								$notice_args = array(
									'post_type' => 'notices',
									'post_status' => 'publish',
									'posts_per_page' => 4
								);
								$get_all_notice = get_posts( $notice_args );						
								if ( !empty($get_all_notice) ) {
									$inc=1;
									foreach($get_all_notice as $get_notice) {
										$postId = $get_notice->ID;
										$post_tile = $get_notice->post_title;
										?>	
										<li>
											<?php /*?><span class="notice-date-time">
												<?php echo $exp_post_tile[1]; ?>
											</span><?php */?>
											<?php echo $post_tile; ?>
										</li>
										<?php 
										$inc++;
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<!-- single-well end-->
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="well-middle">
						<div class="single-well">
							<p class="head-title">
								<span class="main-title">
									<?php if(qtrans_getLanguage() == "en"){ ?>
										Message for Pilgrims
									<?php } else { ?>
										হজযাত্রীর জন্য বার্তা
									<?php } ?>
								</span>
							</p>
							<div class="pilgrim-area">
								<!-- Start testimonials Start -->
								<div class="testimonial-content text-center">
									<!-- start testimonial carousel -->
									<div class="testimonial-carousel">
										<?php 
										$pilgrims_args = array(
											'post_type' => 'messages',
											'post_status' => 'publish',
											'posts_per_page' => 4,
											'order' => 'ASC',
										);
										$pilgrims_array = get_posts( $pilgrims_args );						
										if ( !empty($pilgrims_array) ) {
											$inc=0;
											foreach($pilgrims_array as $pilgrims_data) {
												$postId = $pilgrims_data->ID;
												$post_title = $pilgrims_data->post_title;
												$post_content = wp_trim_words( $pilgrims_data->post_content, 30, null );
												$member_pic_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'single-post-thumbnail' );
												$member_pic = get_stylesheet_directory_uri().'/img/no-image.jpg';
												if (!empty($member_pic_arr[0])) {
													$member_pic = $member_pic_arr[0];
												}
												if(qtrans_getLanguage() == "en"){
													$messages_designation = get_post_meta( $postId, 'messages_designation_en', true );
												} else { 										
													$messages_designation = get_post_meta( $postId, 'messages_designation_bn', true );
												} 
												?>
												<div class="single-testi">
													<div class="testi-text">
														<div class="pilgrim-item">
															<div class="pilgrim-member">
																<span class="pilgrim-pic">
																	<img src="<?php echo $member_pic; ?>" class="img-circle" width="30" height="30"/>
																</span>
																<span class="pilgrim-info">
																	<h3><?php echo $post_title; ?></h3>
																	<p><?php echo $messages_designation; ?></p>
																</span>
															</div>
															<div class="pilgrim-feed"><?php echo $post_content; ?><a href="<?php echo get_permalink( $postId ); ?>">
															<?php if(qtrans_getLanguage() == "en"){ ?>
																more
															<?php } else { ?>
																আরো
															<?php } ?>
															</a></div>
														</div>
													</div>
												</div>
												<?php 
												$inc++;
											}
										}
										?>
										<!-- End single item -->
									</div>
								</div>
								<!-- End testimonials end -->
							</div>
						</div>
					</div>
				</div>
				<!-- End col-->
			</div>
		</div>
	</div>
	<!-- End Notice area -->

	<!-- start application Process area -->
	<div id="applicationProcess" class="application-process-area area-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>
							<?php if(qtrans_getLanguage() == "en"){ ?>
								Pre-application Process
							<?php } else { ?>
								প্রাক-নিবন্ধনের ধাপ
							<?php } ?>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 col-no-padding odd">
					<div class="process-top">
						<div class="process-number">১</div>
						<div class="process-icon"><img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/draft.jpg" class="img-responsive" width="40" height="auto"/></div>
						<div class="process-rule">যা লাগবে</div>
					</div>
					<ul class="application-step">
						<li>জাতীয় পরিচয়পত্র</li>
						<li>১৮ বছরের নীচের হজযাত্রীর জন্য জন্মনিবন্ধন সনদ</li>
						<li>প্রবাসী বাংলাদেশীদের, প্রবাস সংক্রান্ত কাগজপত্র</li>
						<li>মোবাইল নম্বর</li>
						<li>প্রাক-নিবন্ধনের জন্য সরকার নির্ধারিত ফি ও জামানতের টাকা</li>
					</ul>
					<div class="application-next-instr">এসব কাগজ ও টাকাসহ ধাপ-২ অনুসরণ করুন</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 col-no-padding even">
					<div class="process-top">
						<div class="process-number">২</div>
						<div class="process-icon"><img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/contacting-icon.png" class="img-responsive" width="100" height="auto"/></div>
						<div class="process-rule">কোথায় যেতে হবে</div>
					</div>
					<div class="application-next-instr">সরকারি হজযাত্রীদের জন্যঃ</div>
					<ul class="application-step">
						<li>ইউনিয়ন তথ্যসেবা কেন্দ্র</li>
						<li>জেলা প্রশাসকের কার্যালয়</li>
						<li>ইসলামিক ফাউন্ডেশণের কার্যালয়</li>
						<li>পরিচালক, হজ অফিস, ঢাকা।</li>
					</ul>
					<div class="application-next-instr">বেসরকারি হজযাত্রীদের জন্যঃ</div>
					<ul class="application-step">
						<li>ধর্ম বিষয়ক মন্ত্রণালয়ের অনুমোদিত বৈধ হজ এজেন্সির সংঙ্গে যোগাযোগ করুন।</li>
					</ul>
					<div class="application-next-instr">এবং ধাপ-৩ অনুসরণ করুন।</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 col-no-padding odd">
					<div class="process-top">
						<div class="process-number">৩</div>
						<div class="process-icon"><img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/home-icon.png" class="img-responsive" width="56" height="auto"/></div>
						<div class="process-rule">টাকা জমা</div>
					</div>
					<ul class="application-step">
						<li>ধাপ-২ থেকে প্রাপ্ত ট্র্যাকিং নম্বরযুক্ত কাগজ সহ ফি ও জামানতের টাকা নির্ধারিত ব্যাংকে জমা দিন।</li>
					</ul>
					<div class="application-next-instr">নির্ধারিত সময়ের মধ্যে টাকা জমা না দিলে ধাপ-১ থেকে শুরু করুন।</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 col-no-padding even">
					<div class="process-top">
						<div class="process-number">৪</div>
						<div class="process-icon"><img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/mobile-icon.png" class="img-responsive" width="42" height="auto"/></div>
						<div class="process-rule">নিশ্চিতকরন</div>
					</div>
					<ul class="application-step">
						<li>ব্যাংক থেকে হজের প্রাক-নিবন্ধন সনদ এবং আপনার মোবাইল নম্বরে এস এম এস পেলে নিশ্চিত হবেন যে, আপনার প্রাক-নিবন্ধন সম্পন্ন হয়েছে।</li>
						<li>এছাড়াও আপনি অপনার ট্র্যাকিং নম্বর দিয়ে হজের ওয়েবসাইটে অনুসন্ধানের মাধ্যমে আপনার টাকা জমা দেওয়ার বিষয়টি নিশ্চিত হতে পারবেন।</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End application Process table area -->

	<!-- start usefull-link area -->
	<div id="usefullLink" class="usefull-link-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="area-padding">
						<div class="section-headline text-left">
							<h2>
								<?php if(qtrans_getLanguage() == "en"){ ?>
									Useful Links
								<?php } else { ?>
									গুরুত্বপূর্ণ ওয়েবসাইট
								<?php } ?>
							</h2>
						</div>
						<div class="team-top">
							<!-- start testimonial carousel -->
							<div class="usefull-carousel">
								<?php 
									$menuLocations = get_nav_menu_locations();
									$menuID = $menuLocations['usefull-menu'];
									$primaryNav = wp_get_nav_menu_items($menuID);
									foreach ( $primaryNav as $navItem ) {
										$postId = $navItem->object_id;
										$usfull_thum = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'single-post-thumbnail' );
										$usefull_pic = '';
										if (!empty($usfull_thum[0])) {
											$usefull_pic = $usfull_thum[0];
										}
									if(!empty($usefull_pic)){
								?>
								<div class="single-link">
									<div class="single-team-member">
										<div class="team-img">
											<a href="<?php echo $navItem->url; ?>" title="<?php echo $navItem->title; ?>">
												<img src="<?php echo $usefull_pic; ?>" class="img-responsive"/>
											</a>
											<div class="team-social-icon text-center">
												<ul>
													<li>
														<a href="<?php echo $navItem->url; ?>" title="<?php echo $navItem->title; ?>">
															<i class="fa fa-link"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="team-content text-left">
											<h4><a href="<?php echo $navItem->url; ?>" title="<?php echo $navItem->title; ?>"><?php echo $navItem->title; ?> <i class="fa fa-angle-right"></i></a></h4>
										</div>
									</div>
								</div>
								<?php 
									}
									}
								?>
								<!-- End column -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					 <?php get_sidebar(); ?>
			    </div>
			</div>
		</div>
	</div>
	<!-- End usefull-link area -->
	
	<!-- Start download-app area -->
	<div id="downloadApp" class="app-area area-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-left google-play-area">
						<h2>
							<?php if(qtrans_getLanguage() == "en"){ ?>
								Download the Hajj Guide App
							<?php } else { ?>
								হজ গাইড অ্যাপ ডাউনলোড করুন
							<?php } ?>
						</h2>
						<p>
							If you would like to learn more about the rituals of Hajj, please download our Hajj Guide app fromt he Play Store.
						</p>
						<div class="col-lg-3 col-md-3 col-sm-3 col-sx-12 pull-left">
							<a target="_blank" href="https://itunes.apple.com/sa/app/haj-guide/id1387764857?mt=8">
								<img class="img-responsive" src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/apple-store-logo.png" align="Pilgrim guide mobile app">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-sx-12 pull-left">
							<a href="https://play.google.com/store/apps/details?id=com.bat.pilgrimguide" target="_blank" alt="Hajj Guide" title="Hajj Guide">
								<img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/google-pay-pilgrim-guide.png" class="img-responsive"/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Download App area -->
	
	<!-- our-hajj-info-area start -->
	<div class="hajj-info-area">
		<div class="hajj-info-container">
			<div class="container">
				<!-- section-heading end -->
				<div class="row">
					<?php
						$the_slug = 'hajj-info';
						$hajj_info_args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'page',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$hajj_info_posts = get_posts($hajj_info_args);
						if( $hajj_info_posts ) :
						  $postId = $hajj_info_posts[0]->ID;
						  $quota = get_post_meta($postId, 'hajj_info_quota', true);
						  $quota_total = get_post_meta($postId, 'hajj_info_quota_total', true);
						  $govt_registered_title = get_post_meta($postId, 'hajj_info_govt_registered_title', true);
						  $govt_registered_title_total = get_post_meta($postId, 'hajj_info_govt_registered_title_total', true);
						  $pvt_registered_title = get_post_meta($postId, 'hajj_info_pvt_registered_title', true);
						  $pvt_registered_total = get_post_meta($postId, 'hajj_info_pvt_registered_total', true);
					?>
					<div class="col-md-4 col-sm-4 col-xs-12 hajj-item hajj-item-1">
						<h2><?php echo $quota_total; ?></h2>
						<p><?php echo $quota; ?></p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 hajj-item hajj-item-2">
						<h2><?php echo $govt_registered_title_total; ?></h2>
						<p><?php echo $govt_registered_title; ?></p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 hajj-item hajj-item-3">
						<h2><?php echo $pvt_registered_total; ?></h2>
						<p><?php echo $pvt_registered_title; ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- our-hajj-info-area end -->
</div>
<?php
get_footer();
