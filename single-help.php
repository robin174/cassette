<?php
/**
* The template for displaying a single post
* @package cassette
*/
get_header(); ?>

<section class="templ--page-main">
	<section class="org--content-post">

		<div class="mol--single-header">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-3 align-self-center">
						<figure>
                            <img class="mw-100" src="<?php the_field('unit_post_cover'); ?>" />
                        </figure>
					</div>
					<div class="col-12 col-lg-9 align-self-center">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-10">
								<div class="mol--single-title">
									<h1><?php the_title(); ?></h1>
									<h5><span>Last updated</span> <?php the_modified_date(); ?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mol--single-breadcrumb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<span><i class="fa-sharp fa-solid fa-house"></i><a href="<?php echo get_permalink( get_page_by_path( 'Help Docs' ) ); ?>" title="Help Docs">Help Docs</a>&nbsp;&nbsp;/&nbsp;&nbsp;<?php $terms = get_the_terms($post->ID, 'level'); $term_names = wp_list_pluck($terms, 'name'); echo implode(', ', $term_names); ?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php the_title();?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="mol--single-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-3">
						<div class="mol--single-navigation">
							<h4>Table of contents</h4>
							<ul class="atm--single-navitem">
								<?php while(has_sub_field('post_builder')): ?>
									<?php if(get_row_layout() == 'post_subheading'): // Subheading: Select ?>
										<?php if(get_sub_field('unit_subheading_select') == 'subheadingh2') : ?>
											<li><a href="#<?php the_sub_field('unit_subheading_anchor');?>"><?php the_sub_field('unit_subheading_text');?></a></h2>
										<?php endif; ?></li>
									<?php endif; ?>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-9">
						<article>
							<?php get_template_part('template-parts/builder-post'); ?>
						</article>
					</div>
				</div>
			</div>
		</div>

	</section>
</section>

<?php get_footer(); // to counter php close tag issue