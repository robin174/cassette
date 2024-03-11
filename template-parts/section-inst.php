<?php if(get_field('instm_texture', 'option')) : ?>
	<section class="org--content-inst" style="background:<?php the_field('instm_background','option'); ?>; background-image: url(<?php the_field('instm_texture','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-inst" style="background:<?php the_field('inst_background','option'); ?>;">
<?php endif; ?>
		<div class="org--content-inst-inner">
			<div class="container">
				<div class="mol--content-download">
					<div class="row justify-content-center">
						<div class="col-12 col-md-4 col-xl-3 justify-content-center">
							<figure>
								<img class="mw-100 atm--inst-logo" src="<?php the_field('instm_logo','option'); ?>">
							</figure>
						</div>
						<div class="col-12 col-md-8 col-xl-9 justify-content-center">
							<h3 class="ut--uc"><?php the_field('instm_heading','option'); ?></h3>
							<p><?php the_field('instm_description','option'); ?></p>
							<h2>Inst</h2>
							<p><a href="https://merchants.inst.money/user/login" target="_blank">Merchant accounts</a> offering on-ramps.</p>
							<a class="button atm--button-primary" href="/inst">
								<span>Inst</span><i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>