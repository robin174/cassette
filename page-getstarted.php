<?php
/**
* Template Name: Page - Get Started
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">

	<section class="org--content-getstarted">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-xl-9">
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
					<?php if( have_rows('repeater_gs')): ?>
						<?php while( have_rows('repeater_gs')): the_row(); ?>
							<?php get_template_part('template-parts/unit-getstarted'); ?>
						<?php endwhile; ?>		
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>