<section class="org--rm--item">
	<?php /*  if <?php the_sub_field('repeater_rm_title');?> === 'Q1' and <?php the_sub_field('repeater_rm_year');?> === '2022', add 2022 year marker... loop into 2025 
		<section class="mol--rm--inner-year"><figure><img src="">// Add a test here</figure></section>
		elseif Q1 + 2023, Q1 + 2024, Q1 + 2025, end if
		Needs this needs to be on the inside, as we need the line and potentially the play icon. TOTEST
	*/ ?>
	<div class="mol--rm--inner">
		<div class="atm--rm-marker d-flex justify-content-center align-items-center">
			<i class="fa-2x fa-sharp fa-solid fa-play"></i>
		</div>
		<div>
			<div class="atm--rm-status d-flex justify-content-center align-items-center">
				<?php if(get_sub_field('repeater_rm_status') == 'live') { ?>
					<div class="pulsatingDot"></div>
				<?php } elseif (get_sub_field('repeater_rm_status') == 'completed') { ?>
					<i class="fa-sharp fa-2x fa-solid fa-circle-check"></i>
				<?php } elseif (get_sub_field('repeater_rm_status') == 'future') { ?>
					<i class="fa-sharp fa-2x fa-solid fa-crystal-ball"></i>
				<?php } ?>
			</div>
			<h2><?php the_sub_field('repeater_rm_title');?><span class="ut--secondary">&nbsp|&nbsp</span><?php the_sub_field('repeater_rm_year');?></h2>
			<p><?php the_sub_field('repeater_rm_descr');?></p>
			<?php if( have_rows('repeater_rm_item')): ?>
				<h5 class="ut--uc">Key Points</h5>
				<ul class="atm--list-nobullet">
					<?php while( have_rows('repeater_rm_item')): the_row(); ?>
						<li>
							<?php if(get_sub_field('repeater_rm_complete')) : ?>
								<i class="fa-solid fa-sm fa-circle-check">&nbsp;</i>
							<?php else : ?>
								<i class="fa-regular fa-sm fa-circle">&nbsp;</i>
							<?php endif; ?>
							<?php the_sub_field('repeater_rm_bullet');?>
						</li>
					<?php endwhile; ?>	
				</ul>	
			<?php endif; ?>
			<?php if (get_sub_field('repeater_rm_logo')): ?>
				<div>
					<figure class="rm--logo">
						<img class="mw-100" src="<?php the_sub_field('repeater_rm_logo');?>">
					</figure>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>