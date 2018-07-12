<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bhmp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

<!-- Favicons -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/favicon.ico" rel="icon">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php esc_url( bloginfo( 'template_url' ) ); ?>/css/responsive.css" rel="stylesheet">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74754532-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body data-spy="scroll" data-target="#navbar-example">
<div id="preloader"></div>
<header>
<!-- header-area start -->
<div class="container">
	<div class="row">
	  <div class="col-md-12 col-sm-12">
		<!-- Brand -->
		<a class="page-scroll site-logo" href="<?php echo home_url('/'); ?>">
		<?php if(qtrans_getLanguage() == "en"){ ?>
			<img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/site-logo.png" alt="" title="">
		<?php } else { ?>
			<img src="<?php esc_url( bloginfo( 'template_url' ) ); ?>/img/site-logo-bn.png" alt="" title="">
		<?php } ?>		  
		</a>
		<form class="top-search-form" action="<?php echo home_url('/'); ?>">
			<input type="text" autocomplete="off" name="s" class="top-search" placeholder="বাংলা"/>
			<button type="submit" class="search-button"><i class="fa fa-search"></i></button>
		</form>
		<div class="topLanguage">
		<?php echo qtrans_generateLanguageSelectCode('dropdown'); ?>
		</div>
	  </div>
	</div>
</div>
<div id="sticker" class="header-area">
  <div class="container">
	<div class="row">
	  <div class="col-md-12 col-sm-12">

		<!-- Navigation -->
		<nav class="navbar navbar-default">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  </div>
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <?php $defaults = array(
				'theme_location'  => 'header-menu',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse main-menu bs-example-navbar-collapse-1',
				'container_id'    => 'navbar-example',
				'menu_class'      => 'nav navbar-nav',
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
		  <!-- navbar-collapse -->
		</nav>
		<!-- END: Navigation -->
	  </div>
	</div>
  </div>
</div>
<!-- header-area end -->
</header>
<!-- header end -->
