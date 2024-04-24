<?php
/**
* Template Name: Page - Home
* @package cassette
*/

get_header(); ?>

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

	<section style="position: relative;z-index: 5;background: #FF8478;padding: 100px 0;box-shadow: 0 0 40px rgba(0,0,0,0.5);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3><?php the_field('origin_title');?></h3>
				</div>
				<div class="col-12 col-md-6" style="padding-right:120px;">
					<p class="bold"><?php the_field('origin_introduction');?></p>
					<p><i>Background like a zine. Or layered paper with shadow</i></p>
				</div>
				<div class="col-12 col-md-6" style="padding-right:120px;">
					<p class="norm">Individuals curated and distributed music compilations on cassette tapes, bypassing traditional music distribution channels and creating personalized experiences. This physical act of sharing, inherently decentralized, foreshadowed the digital data distribution networks that would emerge later.</p>
					<p class="norm">In parallel, the anarchistic ethos of the cipher punks of the same era laid the groundwork for what would become the bedrock of today's digital decentralization movements. Advocating for privacy, anonymity, and security in the digital realm through the use of cryptography, the cipher punks envisioned a world where individuals could communicate and transact without the oversight of central authorities. This philosophy directly influenced the development of decentralized money, most notably bitcoin, and the broader blockchain technology, which champions decentralization, transparency, and peer-to-peer exchanges.</p>
					<p class="norm">Cassette, as a decentralized file-sharing platform, embodies this spirit of autonomy and innovation. It draws from the symbolic act of sharing mixtapes, integrating it with the digital ethos of decentralization heralded by the cipher punks, thereby contributing to the evolving narrative of data sovereignty and the democratization of content distribution in the blockchain era.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Homepage Builder -->
	<?php while(has_sub_field('homepage_builder')): ?>
		<?php if(get_row_layout() == 'template_select'): // Template Select ?>

			<?php if(get_sub_field('ts_options') == 'slider') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-heroslider.php'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'introduction') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-introduction'); ?>
				<?php } ?>
			<?php elseif(get_sub_field('ts_options') == 'download') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-download'); ?>
				<?php } ?>
			<?php endif; ?>	
			<?php elseif(get_sub_field('ts_options') == 'newsletter') : ?>
				<?php if(get_sub_field('ts_visible')) { ?>
					<?php get_template_part('template-parts/home-emailnewsletter'); ?>
				<?php } ?>
		<?php endif; ?>
	<?php endwhile; ?>

</section>

<?php get_footer(); ?>