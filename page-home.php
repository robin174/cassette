<?php
/**
* Template Name: Page - Home
* @package cassette
*/

get_header(); ?>

	<?php get_template_part('template-parts/home-welcome'); ?>
			
	<!-- Homepage Builder -->
	<?php while(has_sub_field('homepage_builder')): ?>
		<?php if(get_row_layout() == 'template_select'): // Template Select ?>

			<?php if(get_sub_field('ts_options') == 'slider') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-heroslider.php'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'introduction') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-introduction'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'origin') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-origin'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'download') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-download'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'calculator') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-calculator'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'newsletter') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-emailnewsletter'); ?>
				<?php } ?>
			<?php endif; ?>

		<?php endif; ?>
	<?php endwhile; ?>

<?php get_footer(); ?>