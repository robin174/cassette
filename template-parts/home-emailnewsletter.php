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
			<div class="container-fluid">
				<div class="mol--content-newsletter">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-8 justify-content-center">
							
							<h3><?php the_field('newsletter_heading','option'); ?></h3>
							<p><?php the_field('newsletter_description','option'); ?></p>

						    <!-- Mailchimp Sign-Up Form Embed Code -->
						    <div id="mc_embed_shell">
								<div class="mol--newsletter-form" id="mc_embed_signup">
								    <form action="https://getcassette.us18.list-manage.com/subscribe/post?u=0e1673d9b7bae2600be77f1a8&amp;id=8e8b4b9ecd&amp;f_id=0058c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								        <div class="d-flex" id="mc_embed_signup_scroll">
								            <input class="flex-grow-1 email helper_text" type="email" name="EMAIL" placeholder="Email address" class="required email" id="mce-EMAIL" required="" value="">
										    <div aria-hidden="true" style="position: absolute; left: -5000px;">
										        <input type="text" name="b_0e1673d9b7bae2600be77f1a8_8e8b4b9ecd" tabindex="-1" value="">
										    </div>
									        <div class="newsletter--signup">
									            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
									        </div>
									    </div>
									    <div class="d-block" id="mce-responses" >
										    <div class="response" id="mce-error-response" style="display: none;"></div>
										    <div class="response" id="mce-success-response" style="display: none;"></div>
										</div>
									</form>
								</div>
								<!-- Script required otherwise sends to Mailchimp UI and doesn't save email address -->
								<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
							</div>


							<?php /* Not working version
							<div class="mol--newsletter-form">
								<form action="https://getcassette.us18.list-manage.com/subscribe/post?u=0e1673d9b7bae2600be77f1a8&amp;id=8e8b4b9ecd&amp;f_id=0095c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							        <div class="d-flex" id="mc_embed_signup_scroll">
							            <input class="flex-grow-1 email helper_text" placeholder="Email address" type="email" name="EMAIL" id="mce-EMAIL required">
									    <div aria-hidden="true" style="position: absolute; left: -5000px;">
									        <input type="text" name="b_0e1673d9b7bae2600be77f1a8_8e8b4b9ecd" tabindex="-1" value="">
									    </div>
									    <div class="newsletter--signup">
									        <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
									    </div>
							    	</div>
								</form>
							</div>
							*/ ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


