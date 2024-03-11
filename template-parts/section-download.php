<?php if(get_field('download_background', 'option')) : ?>
	<section class="org--content-download" style="background-image: url(<?php the_field('download_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-download">
<?php endif; ?>
		<div class="org--content-download-inner" style="background:<?php the_field('download_overlay','option'); ?>">
			<div class="container-fluid" >
				<div class="mol--content-download">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-9 justify-content-center">
							<h3 class="ut--uc"><?php the_field('download_heading','option'); ?></h3>
							<p><?php the_field('download_description','option'); ?></p>
							<p>ADD DOWNLOAD STUFF HERE</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>