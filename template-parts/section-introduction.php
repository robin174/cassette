<?php if(get_field('introduction_background', 'option')) : ?>
	<section class="org--content-introduction" style="background-image: url(<?php the_field('introduction_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-introduction">
<?php endif; ?>
	<?php if(get_field('introduction_select', 'option') == 'colorblock') : ?>
		<div class="org--content-introduction-inner" style="background:<?php the_field('introduction_overlay','option'); ?>">
	<?php elseif (get_field('introduction_select', 'option') == 'colorgradient') : ?>
		<div class="org--content-introduction-inner" style="background:<?php the_field('introduction_gradient','option'); ?>">
	<?php endif; ?>	

			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 align-self-center">
						<div class="d-flex justify-content-end">
							<figure style="padding:100px;">
								<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-VersionLogo-Cassette.png">
							</figure>
						</div>
					</div>
					<div class="col-12 col-md-6 align-self-center">
						<div>
							<h3><?php the_field('introduction_heading','option'); ?></h3>
							<p><?php the_field('introduction_description','option'); ?></p>
							<section class="org--content-introduction">
								<a class="button atm--button-primary" href="/labs">
									<span>Get Started with Neo</span><i class="fas fa-arrow-right"></i>
								</a>
								<a class="button atm--button-secondary" href="/labs">
									<span>Explore our Roadmap</span>
								</a>
								</section>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>