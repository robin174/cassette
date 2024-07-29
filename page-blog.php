 <?php
/**
* Template Name: Page - Blog
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-roadmap">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="mol--content-blog">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-9">
						
						<div class="row g-0">
							<?php
					            $args=array(
					 				'post_type' => 'post',
									'order' => 'DESC',
									'post_status' => 'publish',
					            );
					            $my_query = null;
					            $my_query = new WP_Query($args);
					            if( $my_query->have_posts() ) {
					            while ($my_query->have_posts()) : $my_query->the_post(); ?>
					            	<div class="col-3 text-center">
				            			<figure>
				                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="mw-100" src="<?php the_field('unit_post_cover'); ?>"></a>
				                        </figure>
				                        <?php if(in_category('Uncategorized')) { ?>
					            			<span class="d-block atm--post-category">-</span>
					            		<?php } else { ?>
					            			<span class="d-block atm--post-category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ''; } ?></span>
					            		<?php } ?>
				                        <span class="d-block atm--post-title"><a href="<?php the_permalink(); ?>"><?php the_field('unit_post_title'); ?></a><!-- FYI This is not the title of the post --></span>
				                        <span class="atm--post-date"><?php echo get_the_date( 'M'.' / '.'y' ); ?></span>
					            	</div>
					            <?php endwhile; }
					        wp_reset_query();  // Restore global post data stomped by the_post().
					        ?>
				    	</div>


					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>