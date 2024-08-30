<?php
/**
* The template for displaying a single post
* @package cassette
*/
get_header(); ?>

<section class="templ--page-main">
	<section class="org--content-post">


		<!-- Header -->
		<section class="mol--post-intro">
			<div class="container">
				<div class="row g-0 justify-content-center">
					<div class="d-none col-12 col-md-4 align-self-center">
						<figure>
                            <img class="mw-100" src="<?php the_field('unit_post_cover'); ?>" />
                        </figure>
					</div>
					<div class="col-12 col-md-8 align-self-center">
						<section class="mol--post-title">
							<h1><?php the_field('unit_post_title'); ?></h1>
							<!-- <span>Date</span> -->
						</section>
					</div>
				</div>
			</div>
		</section>
		

		<!-- Introduction with TL:DNR or Navigation (anchors to h2/h3/h4) -->
		<section>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-8">
						<section class="mol--post-synopsis">
							<p class="atm--post-synopsis"><?php the_field('unit_post_intro'); ?></p>
						</section>
					</div>
				</div>
			</div>
		</section>

		<!-- And then the page builder -->				
		<article>
			<?php get_template_part('template-parts/builder-post'); ?>
		</article>


		<?php /*
		<div class="row justify-content-center">
			<div class="d-none col-12 col-lg-4 col-xl-3">
				<section class="mol--post-tldr">
					<!-- <h4>TL;DR</h4> -->
					<?php get_template_part('template-parts/post-tldr'); ?>
				</section>
			</div>
			<!-- with TLDR <div class="col-12 offset-xl-1 col-lg-8"> -->
			<div class="col-12 col-lg-8">
				<article>
					<?php get_template_part('template-parts/builder-post'); ?>
				</article>
			</div>
		</div>
		*/ ?>

	</section>
</section>

<?php get_footer(); // to counter php close tag issue