 <?php
/**
* Template Name: Page - Downloads
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">
	
	<section class="org--content-downloads">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xl-8 col-xxl-7">
					<section class="mol--content-introduction">
						<?php if(get_field('atm_page_name')) : ?>
							<h1><?php the_field('atm_page_name'); ?></h1>
						<?php endif; ?>	
						<?php if(get_field('atm_page_intro')) : ?>
							<p><?php the_field('atm_page_intro'); ?></p>
						<?php endif; ?>	
					</section>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xl-9 col-xxl-8">
					
					To test // Downloads

				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>