<?php
/**
* The template for displaying 404 pages (not found)
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">
	
	<section class="org--content-404">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xl-8 col-xxl-7">
					<section class="mol--content-introduction">
						<?php if(get_field('404_title','option')) : ?>
							<h1><?php the_field('404_title','option'); ?></h1>
						<?php endif; ?>	
						<?php if(get_field('404_description','option')) : ?>
							<p><?php the_field('404_description','option'); ?></p>
						<?php endif; ?>	
					</section>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xl-9 col-xxl-8">
					
					Mixtape image or jumbled cassette...etc<br>
					Add to Site settings, options

					<div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return to Homepage<i class="far fa-long-arrow-right"></i></a>
					</div> 

				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>