<?php if(get_field('download_background', 'option')) : ?>
	<section class="org--content-download" style="background-image: url(<?php the_field('download_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-download">
<?php endif; ?>
	<?php if(get_field('download_select', 'option') == 'colorblock') : ?>
		<div class="org--content-download-inner" style="background:<?php the_field('download_overlay','option'); ?>">
	<?php elseif (get_field('download_select', 'option') == 'colorgradient') : ?>
		<div class="org--content-download-inner" style="background:<?php the_field('download_gradient','option'); ?>">
	<?php endif; ?>	

		<div>
			<h3 class="ut--uc"><?php the_field('download_heading','option'); ?></h3>
			<p><?php the_field('download_description','option'); ?></p>
		</div>
			<div class="container-fluid">
				<div class="mol--content-download">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-8 justify-content-center">

							<!-- Alternative: CSS:
							https://css-tricks.com/equal-columns-with-flexbox-its-more-complicated-than-you-might-think/ -->
							<section class="mol--cassette-inlay">
								<div class="row g-0">
									<div class="col-12 atm--inlay-header">
										<span id="release-number"></span>
									</div>
								</div>
								<div class="row g-0">
									<div class="col-6 atm--inlay-half">
										<div class="atm--inlay-letter">
											<span>A</span>
										</div>
										<div class="atm--inlay-content">
											Add vector drawing: Apple logo
										</div>
										<div class="atm--inlay-download">
											<a type="button" class="atm--download" id='url-mac' href=''><i class="fa-sharp fa-regular fa-download"></i>Download for macOS</a>
										</div>
									</div>
									<div class="col-6">
										<div class="atm--inlay-letter">
											<span>B</span>
										</div>
										<div class="atm--inlay-content">
											Add vector drawing: Windows logo
										</div>
										<div class="atm--inlay-download">
											<a type="button" class="atm--download" id='url-windows' href=''><i class="fa-sharp fa-regular fa-download"></i>Download for Windows</a>
										</div>
									</div>
								</div>
							</section>

							<script>
								fetch("https://api.github.com/repos/configwizard/greenfinch.react/releases/latest")
								.then(response => response.json())
								.then(data => {
									console.log(data)
									// https://www.digitalocean.com/community/tutorials/how-to-use-the-javascript-fetch-api-to-get-data
									// https://copyprogramming.com/howto/how-to-append-button-values-to-a-link-url-with-javascript
									document.querySelector("#release-number").innerHTML = data.name
									document.querySelector("#url-mac").href = data.assets[0].browser_download_url
									document.querySelector("#url-windows").href = data.assets[1].browser_download_url
								})
							</script>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>