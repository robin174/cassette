<?php if(get_field('newsletter_background', 'option')) : ?>
	<section class="org--content-newsletter" style="background-image: url(<?php the_field('newsletter_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-newsletter">
<?php endif; ?>
	<?php if(get_field('newsletter_select', 'option') == 'colorblock') : ?>
		<div class="org--content-newsletter-inner" style="background:<?php the_field('newsletter_overlay','option'); ?>">
	<?php elseif (get_field('newsletter_select', 'option') == 'colorgradient') : ?>
		<div class="org--content-newsletter-inner" style="background:<?php the_field('newsletter_gradient','option'); ?>">
	<?php endif; ?>	
			<div class="container-fluid" >
				<div class="mol--content-newsletter">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-9 justify-content-center">
							
							<h3 class="ut--uc"><?php the_field('newsletter_heading','option'); ?></h3>
							<p><?php the_field('newsletter_description','option'); ?></p>

							<!-- ORIGINAL -->
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

							<!-- From MailChimp -->
							<div id="mc_embed_shell">
							    <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
								<style type="text/css">
							    	#mc_embed_signup{background:#fff; false;clear:left; font:14px Helvetica,Arial,sans-serif; width: 600px;}
							    	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
							        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
								</style>
								<div id="mc_embed_signup">
								    <form action="https://getcassette.us18.list-manage.com/subscribe/post?u=0e1673d9b7bae2600be77f1a8&amp;id=8e8b4b9ecd&amp;f_id=0095c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								        <div id="mc_embed_signup_scroll"><h2>Subscribe</h2>
								            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
								            <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span></div>
									        <div id="mce-responses" class="clear foot">
									            <div class="response" id="mce-error-response" style="display: none;"></div>
									            <div class="response" id="mce-success-response" style="display: none;"></div>
									        </div>
										    <div aria-hidden="true" style="position: absolute; left: -5000px;">
										        /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
										        <input type="text" name="b_0e1673d9b7bae2600be77f1a8_8e8b4b9ecd" tabindex="-1" value="">
										    </div>
										    <div class="optionalParent">
										        <div class="clear foot">
										            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
										            <p style="margin: 0px auto;"><a href="http://eepurl.com/iNioy6" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p>
										        </div>
										    </div>
								    	</div>
									</form>
								</div>
								<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


