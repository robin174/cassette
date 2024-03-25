 <?php
/**
* Template Name: Page - Roadmap
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">
	
	<section class="org--content-roadmap">
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
				<div class="col-11 col-xl-10 col-xxl-9">
					<?php if( have_rows('repeater_rm')): ?>
						<?php while( have_rows('repeater_rm')): the_row(); ?>
							<section class="org--rm--item">
								<div class="mol--gs--inner">
									<div class="atm--rm-marker d-flex justify-content-center align-items-center">
										<i class="fa-2x fa-sharp fa-solid fa-play"></i>
									</div>
									<div>
										<div class="atm--rm-status d-flex justify-content-center align-items-center">
											<?php if(get_sub_field('repeater_rm_status') == 'live') { ?>
												<div class="pulsatingDot"></div>
											<?php } elseif (get_sub_field('repeater_rm_status') == 'completed') { ?>
												<i class="fa-sharp fa-2x fa-solid fa-circle-check"></i>
											<?php } elseif (get_sub_field('repeater_rm_status') == 'future') { ?>
												<i class="fa-sharp fa-2x fa-solid fa-crystal-ball"></i>
											<?php } ?>
										</div>
										<h2><?php the_sub_field('repeater_rm_title');?><span class="ut--secondary">&nbsp|&nbsp</span><?php the_sub_field('repeater_rm_year');?></h2>
										<p><?php the_sub_field('repeater_rm_descr');?></p>
										<?php if( have_rows('repeater_rm_item')): ?>
											<ul>
												<?php while( have_rows('repeater_rm_item')): the_row(); ?>
													<li>
														<?php if(get_sub_field('repeater_rm_complete')) : ?>
															<i class="fa-solid fa-sm fa-circle-check"></i></i>
														<?php else : ?>
															<i class="fa-regular fa-sm fa-circle">&nbsp;</i>
														<?php endif; ?>
														<?php the_sub_field('repeater_rm_bullet');?>
													</li>
												<?php endwhile; ?>	
											</ul>	
										<?php endif; ?>
										<?php if (get_sub_field('repeater_rm_logo')): ?>
											<div>
												<figure class="rm--logo">
													<img class="mw-100" src="<?php the_sub_field('repeater_rm_logo');?>">
												</figure>
											</div>
										<?php endif; ?>
									</div>
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