<section>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12">
				<section class="org--slider-hero">

					<section class="splide">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev">
								<i class="fa-sharp fa-solid fa-lg fa-angle-left"></i>
							</button>
							<button class="splide__arrow splide__arrow--next">
								<i class="fa-sharp fa-solid fa-lg fa-angle-right"></i>
							</button>
					  	</div>
						<div class="splide__track">
							<ul class="splide__list">

								<?php if( have_rows('repeater_slider_hero', 'option') ): ?>
									<?php while( have_rows('repeater_slider_hero', 'option')): the_row(); ?>

										<li class="splide__slide">
											<div class="mol--slider-content d-flex">
												<div class="align-self-center">
													<div>
														<h4 class="ut--uc"><?php  bloginfo('name'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_sub_field('slider_section', 'option'); ?></h4>
														<h1><?php the_sub_field('slider_title', 'option'); ?></h1>
														<p><?php the_sub_field('slider_description', 'option'); ?></p>
													</div>
													<?php if(get_sub_field('slider_button_primary', 'option')) { ?>
													<div class="mol-slider-content-buttons">
														<a class="button atm--button-primary" href="<?php the_sub_field('slider_but_prim_dest', 'option'); ?>">
															<span><?php the_sub_field('slider_but_prim_text', 'option'); ?></span><i class="fa-sharp fa-solid fa-arrow-right"></i>
														</a>
														<?php if(get_sub_field('slider_button_secondary', 'option')) { ?>
															<a class="button atm--button-secondary" href="<?php the_sub_field('slider_but_sec_dest', 'option'); ?>">
																<span><?php the_sub_field('slider_but_sec_text', 'option'); ?></span>
															</a>
														<?php } ?>
													</div>
													<?php } ?>
												</div>
											</div>
										</li>
										
									<?php endwhile; ?>		
								<?php endif; ?>

							</ul>
						</div>
					</section>
				
				</section>
			</div>
		</div>
	</div>
</section>


	<!-- Splide (JS)
	 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide/splide.min.js" type="text/javascript"/></script>
	<script type="text/javascript">
		var splide = new Splide( '.splide', {
			type: 'loop',
			speed: 700,
			autoplay: true,
			perPage: 1
		});
		splide.mount();
	</script>

</section>