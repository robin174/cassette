<?php
/**
* Template Name: Page - Get Started
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">

	<section class="org--content-getstarted">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-xl-9">
					<section class="mol--content-introduction">
						<h1><?php the_field('atm_page_name'); ?></h1>
						<p><?php the_field('atm_page_intro'); ?></p>
					</section>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-xxl-10">
					<?php if( have_rows('repeater_gs')): ?>
						<?php while( have_rows('repeater_gs')): the_row(); ?>

							<section class="org--gs-item d-flex">
								<div class="mol--gs-number">
									<span><?php the_sub_field('repeater_gs_number');?>&period;</span>
								</div>
								<div class="flex-grow-1">
									<h2><i class="<?php the_sub_field('repeater_gs_icon');?>"></i><?php the_sub_field('repeater_gs_title');?></h2>
									<p><?php the_sub_field('repeater_gs_descr');?></p>
									<h5 class="ut--uc">Explore</h5>

									<?php if( have_rows('repeater_gs_item')): ?>
										<ul>
											<?php while( have_rows('repeater_gs_item')): the_row(); ?>
												<li><?php the_sub_field('repeater_gs_bullet');?></li>
											<?php endwhile; ?>	
										</ul>	
									<?php endif; ?>
								</div>
							</section>

						<?php endwhile; ?>		
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer(); ?>