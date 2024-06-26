<?php
/**
* Template Name: Page - Get Started
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-getstarted">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="mol--content-getstarted">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-8">
						<?php if( have_rows('repeater_gs')): ?>
							<?php while( have_rows('repeater_gs')): the_row(); ?>
								<?php get_template_part('template-parts/unit-getstarted'); ?>
							<?php endwhile; ?>		
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>