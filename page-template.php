 <?php
/**
* Template Name: Page - Template
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-template">

		<section class="intro--test">
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
		</section>

		<section class="page--test">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-xl-9 col-xxl-8">
						
						To test

					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>