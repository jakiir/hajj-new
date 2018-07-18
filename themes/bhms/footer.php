<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bhmp
 */

?>
<!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
		  <div class="col-md-3 col-sm-3 col-xs-6">
			<div class="footer-content">
              <div class="footer-head">
                <h4>Usefull Links</h4>
			  </div>
				<?php $defaults = array(
					'theme_location'  => 'usefull-menu',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          =>''
				);
				?>				 
				<?php wp_nav_menu( $defaults ); ?>
			</div>
		  </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
			<div class="footer-content">
              <div class="footer-head">
                <h4>Resources</h4>
			  </div>
				  <?php $defaults = array(
					'theme_location'  => 'resource-menu',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          =>''
				);
				?>				 
				<?php wp_nav_menu( $defaults ); ?>
			</div>
		  </div>
          <!-- end single footer -->
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Help Desk</h4>
                <div class="footer-contacts">
                  <p>
					<?php if(qtrans_getLanguage() == "en"){ ?>
						+8809602666707
					<?php } else { ?>
						+৮৮০৯৬০২৬৬৬৭০৭
					<?php } ?>
				  </p>
                  <p>info@hajj.gov.bd</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="footer-content subscrib-area">
              <div class="footer-head">
                <h4>Subscribe to Our Newsletter</h4>
                <p>
					<?php if(qtrans_getLanguage() == "en"){ ?>
						This site is being updated regularly by different stakeholder. Your suggestions to improve the site will be highly appreciated. Please send us the suggestions to<br>
						<a href="http://www.hajj.gov.bd/feedback/" target="_blank">info@hajj.gov.bd</a>
					<?php } else { ?>
						এই সাইটটি বিভিন্ন স্টেকহোল্ডারদের দ্বারা নিয়মিত আপডেট করা হচ্ছে. সাইট উন্নত করতে আপনার পরামর্শ প্রয়োজন, আমাদের পরামর্শ পাঠান <a href="http://www.hajj.gov.bd/feedback/" target="_blank">info@hajj.gov.bd</a>
					<?php } ?>
                </p>
                <p>
					<div class="subcribe-area">
						<i class="fa fa-envelope"></i>
						<?php echo es_subbox( $namefield = "NO", $desc = "", $group = "Public" ); ?>
					</div>
				</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
				<?php if(qtrans_getLanguage() == "en"){ ?>
					Managed by Business Automation Ltd on behalf of Ministry Of Religious Affairs
				<?php } else { ?>
					ধর্ম বিষয়ক মন্ত্রণালয়ের পক্ষে বিজনেস অটোমেশন লিমিটেড কতৃক পরিচালিত
				<?php } ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/venobox/venobox.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/knob/jquery.knob.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/parallax/parallax.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/appear/jquery.appear.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/isotope/isotope.pkgd.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJIbxO_nt_3juVyVtQtqd9vmCLB7MfbcE"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/contactform/contactform.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/js/moment.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/js/moment-timezone.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/js/moment-timezone-with-data.min.js"></script>
  <script src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/js/main.js"></script>
  <script type="text/javascript">
	window.onload = date_time('bn-clock','Asia/Dhaka');
	window.onload = date_time('ksa-clock','Asia/Riyadh');
  </script>
  <?php wp_footer(); ?>
</body>
</html>
