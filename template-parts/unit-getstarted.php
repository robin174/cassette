<section class="org--gs-item d-flex">
	<div class="mol--gs-number">
		<span><?php the_sub_field('repeater_gs_number');?>&period;</span>
	</div>
	<div class="flex-grow-1">
		<h2><i class="<?php the_sub_field('repeater_gs_icon');?>"></i><?php the_sub_field('repeater_gs_title');?></h2>
		<p><?php the_sub_field('repeater_gs_descr');?></p>
		<h5 class="ut--uc">Explore</h5>

		<?php if( have_rows('repeater_gs_item')): ?>
			<ul>
				<?php while( have_rows('repeater_gs_item')): the_row(); ?>
					<li><?php the_sub_field('repeater_gs_bullet');?></li>
				<?php endwhile; ?>	
			</ul>	
		<?php endif; ?>
	</div>
</section>