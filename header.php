<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package cassette
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />

		<!-- Google tag (gtag.js) -->
		<!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3D32WBVSWG"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-3D32WBVSWG');
			</script>  -->

		<!-- Slider: Splide
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/splide/css/splide.min.css">

		<!-- Highlight JS (code syntax highlighting)
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js" integrity="sha512-D9gUyxqja7hBtkWpPWGt9wfbfaMGVt9gnyCvYa+jojwwPHLCzUm5i8rpk7vD7wNee9bA35eYIjobYPaQuKS1MQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js" integrity="sha512-axd5V66bnXpNVQzm1c7u1M614TVRXXtouyWCE+eMYl8ALK8ePJEs96Xtx7VVrPBc0UraCn63U1+ARFI3ofW+aA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/tokyo-night-dark.min.css" integrity="sha512-dSQLLtgaq2iGigmy9xowRshaMzUHeiIUTvJW/SkUpb1J+ImXOPNGAI7ZC8V5/PiN/XN83B8uIk4qET7AMhdC5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- Font Awesome
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="https://kit.fontawesome.com/6b4fb8a528.js" crossorigin="anonymous"></script>

        <!-- Adobe Font : Pragmatica
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="https://use.typekit.net/xhv0zds.css">

        <!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SN59VN9949"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-SN59VN9949');
		</script>

		<?php wp_head(); ?>
	</head>

	<?php if(is_page()) : ?>
		<body <?php body_class(); ?> style="background:url(<?php the_field('bg_image_page','option'); ?>); background-position: top center;">
	<?php elseif(is_single()) : ?>
		<body <?php body_class(); ?> style="background:url(<?php the_field('bg_image_post','option'); ?>); background-position: top center;">
	<?php endif; ?>
		<header> 
			<nav class="navbar navbar-expand-lg navbar-offcanvas"> 
				<div class="container-fluid">
					<?php if ( is_front_page() && is_home() ) : ?>
						<?php /* <h1><?php bloginfo( 'name' ); ?></h1> */ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-wh.svg" alt="Cassette logo">
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-wh.svg" alt="Cassette logo"></a>
						<?php /*
						<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						*/ ?>
					<?php endif; ?>

					<div class="d-lg-none">
						<button class="btn btn-primary atmButtonNav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars"></i></button>
					</div>
					
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
					 	<div class="offcanvas-header">
					 		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-wh.svg" alt="Cassette logo">
					    	<?php /* <h2 id="offcanvasRightLabel">Logo</h2> */ ?>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-lg fa-times"></i></button>
					 	</div>
						<div class="offcanvas-body">
							<?php cassette_nav(); ?>
					    </div>
					</div>

				</div> 
			</nav> 
		</header>
		<?php if(is_page()) : ?>
			<main style="background-color: <?php the_field('bg_overlay_page','option'); ?>;">
		<?php elseif(is_single()) : ?>
			<main style="background-color: <?php the_field('bg_overlay_post','option'); ?>;">
		<?php endif; ?>
