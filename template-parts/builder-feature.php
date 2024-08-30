<!-- All Post Builder -->
<?php while(has_sub_field('feature_builder')): ?>

	<?php if(get_row_layout() == 'feature_block'): // Feature block ?>

		<?php if(get_sub_field('feature_coming_soon')) { ?>
			<div class="container-fluid org--feature-block atm--comingsoon">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-8">
						<div class="mol--feature-block d-flex">
							<!-- add flexbox section in here... with fixed width per height to a proportion of 1/6.75) -->
							<div class="atm--cassette-spine d-flex align-items-center justify-content-between">
								In development... <span>C<span><!-- if not text AND an image... it won't be as fiddily-->
							</div>

							<?php if(get_sub_field('feature_position_select') == 'imageleft' ) { ?>
								<div class="row">
									<div class="col-12 col-md-6 align-self-center order-1">
										<img class="mw-100" src="<?php the_sub_field('feature_image');?>">
									</div>
									<div class="col-12 col-md-6 align-self-center order-2">
										<h2><?php the_sub_field('feature_title');?></h2>
										<p><?php the_sub_field('feature_description');?></p>
									</div>
								</div>
							<?php } elseif(get_sub_field('feature_position_select') == 'imageright' ) { ?>
								<div class="row">
									<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
										<h2><?php the_sub_field('feature_title');?></h2>
										<p><?php the_sub_field('feature_description');?></p>
									</div>
									<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
										<img class="mw-100" src="<?php the_sub_field('feature_image');?>">
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<div class="container-fluid org--feature-block">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-8">
						<div class="mol--feature-block">
							<?php if(get_sub_field('feature_position_select') == 'imageleft' ) { ?>
								<div class="row">
									<div class="col-12 col-md-6 align-self-center order-1">
										<img class="mw-100" src="<?php the_sub_field('feature_image');?>">
									</div>
									<div class="col-12 col-md-6 align-self-center order-2">
										<h2><?php the_sub_field('feature_title');?></h2>
										<p><?php the_sub_field('feature_description');?></p>
									</div>
								</div>
							<?php } elseif(get_sub_field('feature_position_select') == 'imageright' ) { ?>
								<div class="row">
									<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
										<h2><?php the_sub_field('feature_title');?></h2>
										<p><?php the_sub_field('feature_description');?></p>
									</div>
									<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
										<img class="mw-100" src="<?php the_sub_field('feature_image');?>">
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php endif; ?>
	<?php if(get_row_layout() == 'feature_advert'): // Feature advert ?>
		<div class="container-fluid org--feature-block" style="background-color: <?php the_sub_field('feature_image_bgcolor');?>;">
			<div class="row justify-content-center">
				<div class="col-11 col-lg-10 col-xxl-8">
					<div class="mol--feature-advert">
						<img class="mw-100" src="<?php the_sub_field('feature_image_advert');?>">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if(get_row_layout() == 'feature_template'): // Feature Select ?>
		<div class="container-fluid org--feature-block">
			<div class="row justify-content-center">
				<div class="col-12"> 
					<div class="mol--feature-select">
						<!-- Add select -->
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php endwhile; ?>