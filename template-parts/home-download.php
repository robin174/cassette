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
			<h3><?php the_field('download_heading','option'); ?></h3>
			<p><?php the_field('download_description','option'); ?></p>
		</div>
			<div class="container-fluid">
				<div class="mol--content-download">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-8 justify-content-center">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<span class="atm--release-number" id="release-number"></span>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row g-3">
									<div class="col-4">
										<div class="mol--download-gradient">
											<div class="mol--download-gradient-inner">
												<i class="fa-brands fa-4x fa-apple"></i>
												<a type="button" class="atm--download" id='url-mac' href=''><i class="fa-sharp fa-regular fa-download"></i>Download for macOS</a>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="mol--download-gradient">
											<div class="mol--download-gradient-inner">
												<i class="fa-brands fa-4x fa-windows"></i>
												<a type="button" class="atm--download" id='url-windows' href=''><i class="fa-sharp fa-regular fa-download"></i>Download for Windows</a>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="mol--download-gradient">
											<div class="mol--download-gradient-inner">
												<i class="fa-brands fa-4x fa-linux"></i>
												<a type="button" class="atm--download" id='url-linux' href=''><i class="fa-sharp fa-regular fa-download"></i>Download forLinux</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<script>
								fetch("https://api.github.com/repos/getCassette-io/release/releases/latest")
								.then(response => response.json())
								.then(data => {
									console.log(data)
									// https://www.digitalocean.com/community/tutorials/how-to-use-the-javascript-fetch-api-to-get-data
									// https://copyprogramming.com/howto/how-to-append-button-values-to-a-link-url-with-javascript
									document.querySelector("#release-number").innerHTML = data.name
									document.querySelector("#url-mac").href = data.assets[0].browser_download_url
									document.querySelector("#url-windows").href = data.assets[1].browser_download_url
									document.querySelector("#url-linux").href = data.assets[2].browser_download_url
								})
							</script>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>