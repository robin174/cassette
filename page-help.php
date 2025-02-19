 <?php
/**
* Template Name: Page - Help
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-blog">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="mol--content-help">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-8">
						
						<div class="row justify-content-center">
							<div class="col-12 col-lg-4 mol--help-cat">
								<h3>Get Started</h3>
								<?php
						            $args=array(
						 				'post_type' => 'help',
										'order' => 'ASC',
										'post_status' => 'publish',
										'level' => 'get-started',
						            );
						            $my_query = null;
						            $my_query = new WP_Query($args);
						            if(!empty($my_query->have_posts()) ) { ?>
						            	<ul class="mol--help-pages">
								            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
								            	<li><i class="fa-sharp fa-lg fa-solid fa-file-lines"></i><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							            	<?php endwhile; ?>
										</ul>
						            <?php } else { ?>
						            	<span class="atm--coming-soon">Coming soon.</span>
						            <?php } wp_reset_query(); ?>
							</div>
							<div class="col-12 col-lg-4 mol--help-cat">
							    <h3>Features</h3>
								<?php
						            $args=array(
						 				'post_type' => 'help',
										'order' => 'ASC',
										'post_status' => 'publish',
										'level' => 'feature',
						            );
						            $my_query = null;
						            $my_query = new WP_Query($args);
						            if(!empty($my_query->have_posts()) ) { ?>
						            	<ul class="mol--help-pages">
								            <?php 
								            while ($my_query->have_posts()) : $my_query->the_post(); ?>
								            	<li><i class="fa-sharp fa-lg fa-solid fa-file-lines"></i><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								            <?php endwhile; ?>
								        </ul>
								    <?php } else { ?> 
								    	<span class="atm--coming-soon">Coming soon.</span>
						       		<?php } wp_reset_query(); ?>
							</div>
							<div class="col-12 col-lg-4 mol--help-cat">
							    <h3>Advanced</h3>
								<?php
						            $args=array(
						 				'post_type' => 'help',
										'order' => 'ASC',
										'post_status' => 'publish',
										'level' => 'advanced',
						            );
						            $my_query = null;
						            $my_query = new WP_Query($args);
						            if(!empty($my_query->have_posts()) ) { ?>
						            	<ul class="mol--help-pages">
								            <?php 
								            while ($my_query->have_posts()) : $my_query->the_post(); ?>
								            	<li><i class="fa-sharp fa-lg fa-solid fa-file-lines"></i><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								            <?php endwhile; ?>
								        </ul>
								    <?php } else { ?> 
								    	<span class="atm--coming-soon">Coming soon.</span>
						       		<?php } wp_reset_query(); ?>
							</div>
				    	</div>

					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>