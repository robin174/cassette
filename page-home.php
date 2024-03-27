<?php
/**
* Template Name: Page - Home
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">

	<!-- Homepage Builder -->
	<?php while(has_sub_field('homepage_builder')): ?>
		<?php if(get_row_layout() == 'template_select'): // Template Select ?>

			<?php if(get_sub_field('ts_options') == 'slider') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<section>
						<div class="container-fluid">
							<div class="row justify-content-center">
								<div class="col-12">
									<?php get_template_part('template-parts/hero-slider-home'); ?>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'introduction') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/section-introduction'); ?>xx
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'newsletter') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/section-email-newsletter'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'download') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/section-download'); ?>
				<?php } ?>
			<?php endif; ?>	

		<?php endif; ?>
	<?php endwhile; ?>

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

</section>

<?php get_footer(); ?>