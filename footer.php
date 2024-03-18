<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package cassette
*/ 
?>
		</main><!-- end main -->
		<div class="mol--post-break">
			<div>
				<div class="mol--line-01">
					&nbsp;
				</div>
				<div class="mol--line-02">
					&nbsp;
				</div>
				<div class="mol--line-03">
					&nbsp;
				</div>
				<div class="mol--line-04">
					&nbsp;
				</div>
			</div>
		</div>
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
	                		<div class="org__unit-logo">
	                			 <div class="row">
	                				<div class="col-12">
	                					TEST
	                					<?php if ( is_front_page() && is_home() ) : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette.svg" alt="Cassette logo">
	                					<?php else : ?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette.svg" alt="Cassette logo"></a>
										<?php endif; ?>
	                				</div>
	                			</div>
	                		</div>
	                		<div class="org__unit">
	                			<div class="row">
	                				<div class="col-12 col-lg-6 d-flex align-items-center">
	                					<p class="atm__description"><?php the_field('f_con_description', 'option'); ?></p>
	                				</div>
	                				<div class="col-12 col-lg-3 d-flex align-items-center">
	                					<section>
	                						<h4>Email</h4>
											<span><a href="mailto:<?php the_field('f_con_email', 'option'); ?>" target="_blank" title="Email <?php the_title();?>"><?php the_field('f_con_email', 'option'); ?></a></span>
										</section>
	                				</div>
	                				<div class="col-12 col-lg-3 d-flex align-items-center">
	                					<section>
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
											<?php if( get_field('f_con_twitter', 'option') ): ?>
												<a href="<?php the_field('f_con_twitter', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on Twitter" target="_blank"><i class="fa-brands fa-2x fa-github"></i></a>
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
	                		<div class="org__unit_copyright">
	                			<div class="row">
				    				<div class="col-12">
				    					<p class="atm__copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('f_con_copyright', 'option'); ?></p>
				    				</div>
				                </div>
	                		</div>
	                	</div>
	                </div>
            	</div>
			</div>
		</footer>

		<script>hljs.highlightAll(); hljs.initLineNumbersOnLoad();</script>

		<!-- <script defer data-domain="greenfinch.app" src="https://plausible.io/js/script.js"></script> -->
		<?php wp_footer(); ?>
	</body>
</html>