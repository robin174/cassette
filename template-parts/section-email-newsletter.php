<?php if(get_field('newsletter_background', 'option')) : ?>
	<section class="org--content-newsletter" style="background-image: url(<?php the_field('newsletter_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-newsletter">
<?php endif; ?>
		<div class="org--content-newsletter-inner" style="background:<?php the_field('newsletter_overlay','option'); ?>">
			<div class="container-fluid" >
				<div class="mol--content-newsletter">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-9 justify-content-center">
							<h3 class="ut--uc"><?php the_field('newsletter_heading','option'); ?></h3>
							<p><?php the_field('newsletter_description','option'); ?></p>

							<form class="row g-0 justify-content-center align-items-center">
							 	<div class="col-9">
									<label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
									<div class="input-group">
										<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email address">
									</div>
								</div>

								<div class="col-3 d-grid">
							    	<button type="submit" class="btn btn-primary">Submit</button>
							  	</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>