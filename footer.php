<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package cassette
*/ 
?>
		</main><!-- end main -->
		
		<section class="org--brand-gradient">&nbsp;</section>

		<?php if(get_field('f_con_background', 'option')) : ?>
			<footer style="background-image: url(<?php the_field('f_con_background', 'option'); ?>);background-repeat: repeat;">
		<?php else : ?>
			<footer>
		<?php endif; ?>

		<?php if(get_field('f_con_select', 'option') == 'colorblock') : ?>
			<div class="org--footer-inner" style="background:<?php the_field('f_con_overlay','option'); ?>">
		<?php elseif (get_field('f_con_select', 'option') == 'colorgradient') : ?>
			<div class="org--footer-inner" style="background:<?php the_field('f_con_gradient','option'); ?>">
		<?php endif; ?>	
				<div class="container-fluid">
	                <div class="row">
	                	<div class="col-12">
	                		<div class="org--unit-logo">
	                			 <div class="row">
	                				<div class="col-12">
	                					<?php if ( is_front_page() && is_home() ) : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-wh.svg" alt="Cassette logo">
	                					<?php else : ?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-wh.svg" alt="Cassette logo">
											</a>
										<?php endif; ?>
	                				</div>
	                			</div>
	                		</div>
	                		<div class="org--unit">
	                			<div class="row">
	                				<div class="col-12 col-lg-6 d-flex align-items-center">
	                					<p class="atm--description"><?php the_field('f_con_description', 'option'); ?></p>
	                				</div>
	                				<div class="col-12 col-lg-3 d-flex align-items-center">
	                					<section class="mol--unit-contact">
	                						<h4>Email</h4>
											<span><a href="mailto:<?php the_field('f_con_email', 'option'); ?>" title="Email <?php bloginfo( 'name' ); ?>"><?php the_field('f_con_email', 'option'); ?></a></span>
											<!--
												<p><a href="cassette://3nRBKgGxniVjNzfNy2fUebnCLB7VDwSvgKErNH87bgCk/DQFY7ZVL6X1pFm9DADwWTG51RNYvLFQzuUzjNzY12DBz">Test</a></p>
											-->
										</section>
	                				</div>
	                				<div class="col-12 col-lg-3 d-flex align-items-center">
	                					<section class="mol--unit-contact">
											<h4>Social</h4>
											<!-- Discord -->
											<?php if( get_field('f_con_discord', 'option') ): ?>
												<a href="<?php the_field('f_con_discord', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on Discord" target="_blank"><i class="fa-brands fa-2x fa-discord"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-dicord inactive"></i>
											<?php endif; ?>
											<!-- Twitter -->
											<?php if( get_field('f_con_twitter', 'option') ): ?>
												<a href="<?php the_field('f_con_twitter', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on X" target="_blank"><i class="fa-brands fa-2x fa-x-twitter"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-x-twitter inactive"></i>
											<?php endif; ?>
											<!-- GitHub -->
											<?php if( get_field('f_con_github', 'option') ): ?>
												<a href="<?php the_field('f_con_github', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on GitHub" target="_blank"><i class="fa-brands fa-2x fa-github"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-github inactive"></i>
											<?php endif; ?>
											<!-- LinkedIn -->
											<?php if( get_field('f_con_linkedin', 'option') ): ?>
												<a href="<?php the_field('f_con_linkedin', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on LinkedIn" target="_blank"><i class="fa-brands fa-2x fa-linkedin"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-linkedin inactive"></i>
											<?php endif; ?>
										</section>
	                				</div>
	                			</div>
	                		</div>
	                		<div class="org--unit-copyright">
	                			<div class="row">
				    				<div class="col-12">
				    					<p class="atm--copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('f_con_copyright', 'option'); ?></p>
				    				</div>
				                </div>
	                		</div>
	                	</div>
	                </div>
            	</div>
			</div>
		</footer>

		<script>hljs.highlightAll(); hljs.initLineNumbersOnLoad();</script>
		<script defer add-file-types="AppImage" data-domain="getcassette.io" src="https://plausible.io/js/script.file-downloads.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>