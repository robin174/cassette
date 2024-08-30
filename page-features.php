<?php
/**
* Template Name: Page - Features
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-features">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="mol--content-feature">
			<?php get_template_part('template-parts/builder-feature'); ?>
		</section>

	</div>
</div>

<?php get_footer(); ?>