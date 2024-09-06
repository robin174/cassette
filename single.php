<?php
/**
* The template for displaying a single post
* @package cassette
*/
get_header(); ?>

<section class="templ--page-main">
	<section class="org--content-post">

		<div class="mol--single-header">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-3 align-self-center">
						<figure>
                            <img class="mw-100" src="<?php the_field('unit_post_cover'); ?>" />
                        </figure>
					</div>
					<div class="col-12 col-lg-9 align-self-center">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-10">
								<section class="mol--single-title">
									<span class="atm--title-short"><?php the_title(); ?></span>
									<h1><?php the_field('unit_post_title'); ?></h1>
									<h5><?php echo get_the_date( 'M'.' / '.'y' ); ?></h5>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mol--single-introduction">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<section class="mol--single-synopsis">
							<p class="atm--single-synopsis"><?php the_field('unit_post_intro'); ?></p>
						</section>
					</div>
				</div>
			</div>
		</div>
		<div class="mol--single-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-3">
						<section class="mol--single-tldr">
							<h4>TL;DR</h4>
							<?php get_template_part('template-parts/single-tldr'); ?>
						</section>
					</div>
					<div class="col-12 col-lg-9">
						<article>
							<?php get_template_part('template-parts/builder-post'); ?>
						</article>
					</div>
				</div>
			</div>
		</div>

	</section>
</section>

<?php get_footer(); // to counter php close tag issue