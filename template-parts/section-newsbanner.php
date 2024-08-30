<?php if(get_field('bn_con_select','option') == 'bannerdefault') : ?>
	<section class="mol--news-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 d-flex justify-content-between collapse atm--banner-default">
					<div class="flex-grow-1" style="padding:12px 0;">
						<span class="atm--news-text"><i class="fa-sharp fa-lg fa-solid fa-megaphone"></i><?php the_field('bn_def_text','option'); ?></span>
					</div>
					<div style="background: rgba(0,0,0,0.2); padding:12px 0; ">
						<span class="atm--news-link"><a href="<?php the_field('bn_df_link','option'); ?>">Find out more</a></span>
					</div><!-- Need to think how to split the full width so the right block leads to the right -->
				</div>
			</div>
		</div>
	</section>
	<!-- 
		Ticker Version 01: https://codepen.io/lewismcarey/pen/GJZVoG
		Ticker Version 02 (in-use): https://blog.hubspot.com/website/scrolling-text-css 
	-->
	<?php /* Version 01
	<?php elseif(get_field('bn_con_select','option') == 'bannerticker') : ?>
		<div class="mol--ticker-wrap">
			<div class="mol--ticker">
				<div class="mol--ticker__item"><?php the_field('bn_tick_text','option'); ?>&nbsp;<a href="<?php the_field('bn_tick_link','option'); ?>"><?php the_field('bn_tick_cta','option'); ?></a></div>
			</div>
		</div>
	<?php endif; ?> 
	*/ ?>
	<?php elseif(get_field('bn_con_select','option') == 'bannerticker') : ?>
		<div class="mol--ticker2-wrap">
			<div class="mol--ticker2">
				<div><?php the_field('bn_tick_text','option'); ?>&nbsp;<a href="<?php the_field('bn_tick_link','option'); ?>"><?php the_field('bn_tick_cta','option'); ?></a></div>
			</div>
		</div>
	
<?php endif; ?> 