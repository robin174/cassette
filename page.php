<?php
/**
* The template for displaying all pages.
* @package cassette
*/

get_header(); ?>

<section class="templ--page-main">

	<?php if (is_page('Inst')) { ?>
		<section class="org--content-inst">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-10">
						<section class="mol--content-inst">
							<h2>Inst</h2>
							<p>STATUS: signed up, Merchant account applied for (Account 'under review')</p>
							<p>Offers a widget. Do we want a widget opr do we want an API?<br>
							<a href="https://inst.money/#/" target="_blank">https://inst.money/#/</a></p>
							<p>Flamingo use Inst: <a href="https://flamingo.finance/on-ramp">https://flamingo.finance/on-ramp</a></p>
							<p>On-ramps docs: <a href="https://flamingo.finance/on-ramp">https://inst.money/#/business-onRamps</a></p>

							<div>
								<iframe
								 	src="https://pay.inst.money/buyCrypto/fastBuy?embedded=true&authorization=[your_api_key]"
									allow="accelerometer; autoplay; camera; gyroscope; payment"
									width="350"
									height="560"
									frameborder="0">
								</iframe>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
	<?php } elseif (is_page('Shop')) { ?>
		<section class="org--content-shop">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-10">
						<section class="mol--content-shop">
						</section>
					</div>
				</div>
			</div>
		</section>

	<?php } elseif (is_page('Alchemy Pay')) { ?>
		<section class="org--content-alchemy">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-10">
						<section class="mol--content-alchemy">
							<h2>Alchemy Pay</h2>
							<p>STATUS: submitted request for info</p>
							<p>API available:<br>
								<a href="https://alchemypay.readme.io/docs/api-integration" target="_blank">https://alchemypay.readme.io/docs/api-integration</a></p>

							<p>Might be able to get a temporary modal for on-ramping customers using this:<br>
							<a href="https://ramptest.alchemypay.org/?crypto=USDT&network=BSC&appId=f83Is2y7L425rxl8&sign=TUqyu6jxuhLsO7qtJmGplbI3CSGHNyvrETmlWDagGytpQio3VWFgGUcOxW2Ts6TQX3lyDQTwj%2F96uqSPXxQtieX2bZ2ddWacM3tIA%2Fo58Mc%3D&address=0xeaf936e4bd0cf40958e74fce896e976459a83b90" target="_blank">Ramp Test / Alchemy Pay Link</a> <br>
							and this<br>
							<a href="https://alchemypay.readme.io/docs/on-ramp-custom-parameters" target="_blank">On-ramp-custom-parameters</a><br>
							but we can't charge a commission by doing that so not the best option</p>

							<iframe height="625" title="AlchemyPay On/Off Ramp Widget"
								src="https://ramptest.alchemypay.org/?apiKey=[YOUR_TEST_API_KEY]&[QUERY_PARAMETERS]" 
								frameborder="no" allowtransparency="true" allowfullscreen="" 
								style="display: block; width: 100%; max-height: 625px; max-width: 500px;">
								</iframe>

						</section>
					</div>
				</div>
			</div>
		</section>
	<?php } else { ?>
		<section class="org--content-default">

			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-9">
						<section class="org--content-introduction">
						<h1><?php the_title();?></h1>
						<p>Sample page.</p>
						<!-- A transparent white block / full width at 50-70% would work well on the background -->
						<a class="button atm--button-primary" href="/labs">
							<span>Discover more</span><i class="fas fa-arrow-right"></i>
						</a>
						<a class="button atm--button-secondary" href="/labs">
							<span>Secondary button</span>
						</a>
						</section>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

</section>

<?php get_footer(); ?>