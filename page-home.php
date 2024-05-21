<?php
/**
* Template Name: Page - Home
* @package cassette
*/

get_header(); ?>

	<section style="min-height: 600px;background: linear-gradient(90deg, rgba(255,95,95,0.2) 0%, rgba(255,128,120,0.2) 25%, rgba(227,189,159,0.2) 50%, rgba(64,206,188,0.2) 75%, rgba(37,131,131,0.2) 100%);">
		<div class="container">
			<div class="row">
				<div class="background-white" style="padding: 50px;">
					<div style="margin-bottom:30px;">
						<span class="introducing d-block"><?php the_field('intro_verb','option');?></span>
						<img style="width: 840px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-dk.svg" alt="Cassette logo">
					</div>
					<div style="margin-bottom:20px; padding-right: 180px;">
						<h2 style="font-size:1.8rem;line-height: 1.4;"><?php the_field('intro_description','option');?></</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
			
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
			<?php elseif(get_sub_field('ts_options') == 'newsletter') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-emailnewsletter'); ?>
				<?php } ?>
			<?php endif; ?>

		<?php endif; ?>
	<?php endwhile; ?>

<?php get_footer(); ?>