 <?php
/**
* Template Name: Page - Roadmap
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">
	
	<section class="org--content-roadmap">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xl-8 col-xxl-7">
					<section class="mol--content-introduction">
						<h1><?php the_field('atm_page_name'); ?></h1>
						<p><?php the_field('atm_page_intro'); ?></p>
					</section>
				</div>
			</div>
		</div>
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

</section>

<?php get_footer(); ?>