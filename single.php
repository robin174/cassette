<?php
/**
* The template for displaying a single post
* @package cassette
*/
get_header(); ?>


<section class="templ--page-main">
	<section class="org--content-single">
		<div class="container-fluid">

			<?php /* FEATURED IMAGE TBC
			<section class="mol--content-featured position-absolute" style="top:0; left:0; z-index: 1000;">
				<figure class="atm--figure-featured">
					<?php the_post_thumbnail(); ?>
				</figure>
			</section>
			*/ ?>
			<?php /* BLOPG INTRODUCTION TBC
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-xl-9">
					<section>
						<!-- Post header -->
					</section>
				</div>
			</div>
			*/ ?>
			<div class="container-fluid">
				<article>
					<?php get_template_part('template-parts/post-builder'); ?>
				</article>
			</div>
			
		</div>
	</section>

</section>

<?php get_footer(); // to counter php close tag issue