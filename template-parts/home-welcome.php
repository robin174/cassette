<section class="org--content-welcome">
	<div class="org--content-welcome-inner">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-xl-8 justify-content-center">

					<section><!-- set height I guess or jus tcontent + padding -->
						<!-- Introducing -->
						<span class="introducing d-block"><?php the_field('intro_verb','option');?></span>
						<!-- Logo -->
						<img class="mw-100" style="width: 840px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-dk.svg" alt="Cassette logo">
						<!-- Description -->
						<h2 style="font-size:1.8rem;line-height: 1.4;"><?php the_field('intro_description','option');?></</h2>
						<!-- Call to action button-->
						<p>Button</p>
					</section>

				</div>
			</div>
		</div>
	</div>
</section>