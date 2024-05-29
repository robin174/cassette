<section class="org--content-welcome">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">

				<section><!-- set height I guess or jus tcontent + padding -->
					<!-- Introducing -->
					<span class="introducing d-block"><?php the_field('intro_verb','option');?></span>
					<!-- Logo -->
					<img style="width: 840px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-dk.svg" alt="Cassette logo">
					<!-- Description -->
					<h2 style="font-size:1.8rem;line-height: 1.4;"><?php the_field('intro_description','option');?></</h2>
					<!-- Call to action button-->
					<p>Button</p>
				</section>

			</div>
		</div>
	</div>
</section>