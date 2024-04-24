<section class="templ--page-main">

	<?php if(get_field('intro_section_background', 'option')) : ?>
		<section style="position: relative;z-index: 10; background-image: url(<?php the_field('intro_section_background','option'); ?>); background-repeat: repeat; background-position:center; box-shadow: 0 0 40px rgba(0,0,0,0.2);">
	<?php else : ?>
		<section style="position: relative;z-index: 10; box-shadow: 0 0 40px rgba(0,0,0,0.2);">
	<?php endif; ?>
		<?php if(get_field('intro_section_select', 'option') == 'colorblock') : ?>
			<div style="background:<?php the_field('intro_section_overlay','option'); ?>">
		<?php elseif (get_field('intro_section_select', 'option') == 'colorgradient') : ?>
			<div style="background:<?php the_field('intro_section_gradient','option'); ?>">
		<?php endif; ?>	

			<!-- Background image or colour, and background overlay/gradient -->
			<!-- Main space image or colour, and overlay/gradient -->
			<div class="container">
				<div class="row g-0">

					<?php if(get_field('main_section_background', 'option')) : ?>
						<section style="background-image: url(<?php the_field('main_section_background','option'); ?>); background-repeat: repeat; background-position:center; box-shadow: 0 0 30px rgba(0,0,0,0.2);">
					<?php else : ?>
						<section style="box-shadow: 0 0 30px rgba(0,0,0,0.2);">
					<?php endif; ?>
						<?php if(get_field('main_section_select', 'option') == 'colorblock') : ?>
							<div style="background:<?php the_field('main_section_overlay','option'); ?>">
						<?php elseif (get_field('main_section_select', 'option') == 'colorgradient') : ?>
							<div style="background:<?php the_field('main_section_gradient','option'); ?>">
						<?php endif; ?>	

								<div class="container-grid">
									<aside class="grid-border d-flex flex-column">
						               	<div class="flex-fill" style="background:linear-gradient(180deg, rgba(255,95,95,1) 0%, rgba(255,128,120,1) 25%, rgba(227,189,159,1) 50%, rgba(64,206,188,1) 75%, rgba(37,131,131,1) 100%);"></div>
						            </aside>
									<header class="d-flex justify-content-between">
										<span><i class="fa-sharp fa-lg fa-solid fa-corner fa-flip-horizontal"></i></span>
										<span><i class="fa-sharp fa-lg fa-solid fa-plus"></i></span>
										<span><i class="fa-sharp fa-lg fa-solid fa-corner"></i></span>
									</header>
						            <!-- Template for 1 column, 2 column and 3 column -->
						            <main>
										<div style="margin-bottom:30px;">
											<span class="introducing d-block"><?php the_field('intro_verb','option');?></span>
											<img style="width: 840px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cassette-dk.svg" alt="Cassette logo">
										</div>
										<div style="margin-bottom:20px; padding-right: 180px;">
											<h2 style="font-size:1.8rem;line-height: 1.4;"><?php the_field('intro_description','option');?></</h2>
										</div>
										<div style="margin-bottom:60px; padding-right: 180px;">
											<a class="button atm--button-primary" href="/downloads">
												<span>Download Cassette</span><i class="fas fa-arrow-right"></i>
											</a>
										</div>
										<div class="d-flex">
											<figure>
												<img style="width:100px;margin-right:10px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-VersionLogo-GF-v2.png">
											</figure>
											<figure>
												<img style="width:100px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-VersionLogo-Cassette.png">
											</figure>
										</div>
											
						            </main>
						            <footer class="d-flex justify-content-between">
										<span><i class="fa-sharp fa-lg fa-solid fa-corner fa-flip-horizontal fa-flip-vertical"></i></span>
										<span><i class="fa-sharp fa-lg fa-solid fa-plus"></i></span>
										<span><i class="fa-sharp fa-lg fa-solid fa-corner fa-flip-vertical"></i></span>
						            </footer>
						            <aside class="grid-half d-flex flex-column">
						            	<div class="flex-fill" style="background: #FF8478;"></div>
						                <div class="flex-fill" style="background: #40D3C1;"></div>
						            </aside>
								</div>
						</div>
					</section>
				

				</div>
			</div>
		</div>
	</section>
