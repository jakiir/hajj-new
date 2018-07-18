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
			<div class="col-md-12">
				<div class="text-center">
					<button class="btn gallery-filter-btn filter-button" data-filter="all">All</button>
					<button class="btn gallery-filter-btn filter-button" data-filter="2018">2018</button>
					<button class="btn gallery-filter-btn filter-button" data-filter="2017">2017</button>
					<button class="btn gallery-filter-btn filter-button" data-filter="2016">2016</button>
					<button class="btn gallery-filter-btn filter-button" data-filter="2015">2015</button>
				</div>

				<div class="gallery-heading">
					<h2>Albums</h2>
				</div>
			</div>
			
			<div class="gallery-body">
				<div class="gallery-album col-sm-4 col-xs-6 filter 2018">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2018) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2018">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2018) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2018">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2018) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2015">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2015) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2015">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2015) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2016">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2016) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2016">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2016) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2017">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2017) Jeddah</h3>
						<p>13 Photos</p>
					</div>
				</div>

				<div class="gallery-album col-sm-4 col-xs-6 filter 2017">
					<img src="http://fakeimg.pl/365x365/" class="img-responsive" alt="">
					<div class="gallery-album-caption">
						<h3>Hajj 1437 (2017) Jeddah</h3>
						<p>13 Photos</p>
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
