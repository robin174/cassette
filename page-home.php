<?php
/**
* Template Name: Page - Home
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">

	<section>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php get_template_part('template-parts/hero-slider-home'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="org--content-default">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10">
					<section class="mol--content-default">
						Main content
					</section>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/section-inst'); ?>

	<?php get_template_part('template-parts/section-download'); ?>

	<?php get_template_part('template-parts/section-email-newsletter'); ?>
	
</section>

<?php get_footer(); ?>