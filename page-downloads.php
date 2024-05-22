 <?php
/**
* Template Name: Page - Downloads
* @package cassette
*/

get_header(); ?>

<div class="templ--page-main">
	<div class="org--content-downloads">

		<?php get_template_part('template-parts/section-introduction'); ?>

		<section class="page--test">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-11 col-lg-10 col-xxl-9">
						
							<div class="row">
								<div class="col-12 text-center">
									<div class="mol--download-release">
										<span class="atm--release-number d-block" id="release-number"></span>
										<span class="atm--release-date d-block" id="release-date"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-lg-4">
									<div class="mol--download-gradient h-100">
										<div class="mol--download-gradient-inner h-100">
											<i class="fa-brands fa-4x fa-apple"></i>
											<h3>For macOS</h3>
											<a class="button atm--button-primary" id='url-mac' href=''>
												<span>Download macOS app</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="mol--download-gradient h-100">
										<div class="mol--download-gradient-inner h-100">
											<i class="fa-brands fa-4x fa-windows"></i>
											<h3>For Windows</h3>
											<a class="button atm--button-primary" id='url-windows' href=''>
												<span>Download Windows app</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="mol--download-gradient h-100">
										<div class="mol--download-gradient-inner h-100">
											<i class="fa-brands fa-4x fa-linux"></i>
											<h3>For Linux</h3>
											<a class="button atm--button-primary" id='url-linux' href=''>
												<span>Download Linux app</span>
											</a>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 text-center">
									<div class="mol--download-release">
										<p class="atmAdditional">For the latest release, visit our <a href="https://github.com/getCassette-io/release/releases/latest" title="Latest Cassette release on GitHub">GitHub</a>.</p>
									</div>
								</div>
							</div>
						<script>
							fetch("https://api.github.com/repos/getCassette-io/release/releases/latest")
							.then(response => response.json())
							.then(data => {
								console.log(data)

								const urlsByOS = {
								 	linux: [],
									windows: [],
									darwin: []
								};

								data.assets.forEach(asset => {
									const url = asset.browser_download_url;
									if (url.includes('linux')) {
										urlsByOS.linux.push(url);
									} else if (url.includes('windows')) {
										urlsByOS.windows.push(url);
									} else if (url.includes('darwin')) {
										urlsByOS.darwin.push(url);
									}
								});

								//Now we have the urls sorted into OSs, let's grab the one we want for each?
								const linuxLink = urlsByOS.linux.filter(url => url.includes('.AppImage'));
								const macLink = urlsByOS.darwin.filter(url => url.includes('.dmg'));
								const windowsLink = urlsByOS.windows.filter(url => url.includes('.exe'));

								// const datePublished = data.published_at.substring(0, 10);

								date = new Date(data.published_at);

								year = date.getFullYear();
								month = date.getMonth()+1;
								dt = date.getDate();

								if (dt < 10) {
								  dt = '0' + dt;
								}
								if (month < 10) {
								  month = '0' + month;
								}

								date = dt + '-' + month + '-' + year;

								document.querySelector("#release-number").innerHTML = data.name
								document.querySelector("#release-date").innerHTML = "Published: " + date
								document.querySelector("#url-mac").href = macLink
								document.querySelector("#url-windows").href = windowsLink
								document.querySelector("#url-linux").href = linuxLink

								console.log(urlsByOS);
							})
						</script>
						<?php /* <script>
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
						</script> */ ?>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer(); ?>