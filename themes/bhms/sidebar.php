<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bhmp
 */

//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
//}
?>

<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	
	<div style="background:#F1F1F1;padding:8px 17px 17px;">
		<div class="section-headline text-left">
			<h2>
				<?php if(qtrans_getLanguage() == "en"){ ?>
					Weather
				<?php } else { ?>
					আবহাওয়া
				<?php } ?>
			</h2>
		</div>
		<div class="weather text-left">
			<div class="weather-inner" style="margin-bottom: 10px;">
				<?php 
					echo do_shortcode( '[awesome-weather location="Dhaka" units="C" size="wide" background_by_weather="1" inline_style="width:100%;" hide_stats="1" custom_bg_color="#ffffff" text_color="#000"]' );
				?>
			</div>

			<div class="weather-inner">
				<?php 
					echo do_shortcode( '[awesome-weather location="Mecca" units="C" size="wide" background_by_weather="1" inline_style="width:100%;" hide_stats="1" custom_bg_color="#ffffff" text_color="#000"]' );
				?>

			</div>
		</div>
	</div>

	<div class="globalClock">
		<div class="cont-header"><h2><?php _e ('<!--:en-->Local Time<!--:--><!--:bn-->স্থানীয় সময়<!--:-->') ?></h2></div>
		<div class="col-sm-12 col-md-6 col-lg-6 top-pad" style="text-align:center;">
		 <h3>Dhaka</h3>
		 <iframe src="http://free.timeanddate.com/clock/i492yixc/n73/szw80/szh80/hoced1c24/hbw10/cf100/hgr0/fiv0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hwm2/hhcf00/hhs1/hmc090/hms1/hscddd/hss1" frameborder="0" width="82" height="87"></iframe>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 top-pad" style="text-align:center;">
		<h3>Makkah</h3>
		<iframe src="http://free.timeanddate.com/clock/i492yixc/n151/szw80/szh80/hoc090/hbw10/cf100/hgr0/fiv0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hwm2/hhc090/hhs1/hmcff0/hms1/hscddd/hss1" frameborder="0" width="82" height="87">
		</iframe>
		</div>
   </div>
</aside><!-- #secondary -->
