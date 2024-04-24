<section style="position: relative;z-index: 5;background: #FF8478;padding: 100px 0;box-shadow: 0 0 40px rgba(0,0,0,0.5);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3><?php the_field('origin_title','option');?></h3>
			</div>
			<div class="col-12 col-md-6" style="padding-right:120px;">
				<p class="bold"><?php the_field('origin_introduction','option');?></p>
				<p><i>Background like a zine. Or layered paper with shadow</i></p>
			</div>
			<div class="col-12 col-md-6" style="padding-right:120px;">
				<?php the_field('origin_bodycopy','option');?>
			</div>
		</div>
	</div>
</section>