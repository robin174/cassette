 <?php
/**
* Template Name: Page - Roadmap
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-roadmap">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="page--test">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-xl-9 col-xxl-8">
						<?php if( have_rows('repeater_rm')): ?>
							<?php while( have_rows('repeater_rm')): the_row(); ?>
								<?php get_template_part('template-parts/unit-roadmap'); ?>
							<?php endwhile; ?>		
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>