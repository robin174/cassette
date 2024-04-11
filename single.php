<?php
/**
* The template for displaying a single post
* @package cassette
*/
get_header(); ?>


<section class="templ--page-main">
	<section class="org--content-single">
		<div class="container">
			<div class="row">
				<div class="col-12">
					Intro space
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3">
					<section class="mol--post-tldr">
						<h4>TL:DR</h4>
						<?php get_template_part('template-parts/post-tldr'); ?>
					</section>
				</div>
				<div class="col-12 offset-md-1 col-md-8">
					<article>
						<?php get_template_part('template-parts/post-builder'); ?>
					</article>
				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); // to counter php close tag issue