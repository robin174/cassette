<?php if(get_field('download_introduction', 'option')) : ?>
	<section class="org--content-introduction" style="background-image: url(<?php the_field('introduction_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-introduction">
<?php endif; ?>
	<?php if(get_field('introduction_select', 'option') == 'colorblock') : ?>
		<div class="org--content-introduction-inner" style="background:<?php the_field('introduction_overlay','option'); ?>">
	<?php elseif (get_field('introduction_select', 'option') == 'colorgradient') : ?>
		<div class="org--content-introduction-inner" style="background:<?php the_field('introduction_gradient','option'); ?>">
	<?php endif; ?>	

			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<h3><?php the_field('introduction_heading','option'); ?></h3>
						<p><?php the_field('introduction_description','option'); ?></p>
					</div>
					<div class="col-12 col-md-6">
						<figure>
							<img src="">Image
						</figure>
					</div>
				</div>
			</div>

		</div>
	</section>