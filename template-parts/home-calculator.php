<?php if(get_field('calculator_background', 'option')) : ?>
	<section class="org--content-calculator text-center" style="background-image: url(<?php the_field('calculator_background','option'); ?>); background-repeat: repeat;">
<?php else : ?>
	<section class="org--content-calculator text-center">
<?php endif; ?>
	<?php if(get_field('calculator_select', 'option') == 'colorblock') : ?>
		<div class="org--content-calculator-inner" style="background:<?php the_field('download_overlay','option'); ?>">
	<?php elseif (get_field('download_select', 'option') == 'colorgradient') : ?>
		<div class="org--content-calculator-inner" style="background:<?php the_field('download_gradient','option'); ?>">
	<?php endif; ?>	

		<div>
			<h3><?php the_field('calculator_heading','option'); ?></h3>
			<p><?php the_field('calculator_description','option'); ?></p>
		</div>
			<div class="container-fluid">
				<div class="mol--content-download">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 col-xl-6 justify-content-center">

							<div class="d-flex justify-content-center">
						        <!-- Toggle Switch -->
							    <div class="toggle-switch">
							        <span>USD</span>
							        <input type="checkbox" id="currency-toggle" class="toggle-btn" />
							        <span>GAS</span>
							    </div>
							</div>
							<div class="d-flex flex-row">
							    <!-- Storage Price Slider -->
							    <div id="calculator_value" class="mt-2">512 MB</div>
							    <input type="range" id="range" min="0" max="20" step="1" value="10" class="form-range mt-4" />
							    <div id="calculator_price_value" class="mt-2">0.00000000</div>
							</div>
							<div class="d-flex">
								<p>Add source of data.
							</div>
							<script>

							    async function getNetworkInfo() {
							        const response = await fetch('https://rest.fs.neo.org/v1/network-info');
							        const data = await response.json();
							        return data;
							    }
							    async function getUsdToGasRate() {
								    try {
								        const response = await fetch('https://api.ghostmarket.io/api/v2/currencyRates?currency=USD');
								        const data = await response.json();
								        console.log("Currency API Response:", data); // Log the API response to understand its structure

								        // Find the GAS rate in the currencyRates array
								        const gasRate = data.currencyRates.find(rate => rate.symbol === "GAS");
								        
								        // Return the GAS price in USD if available, otherwise log an error
								        if (gasRate && gasRate.price) {
								            return gasRate.price;
								        } else {
								            console.error("GAS rate not found in response. Defaulting to 1.");
								            return 1; // Default rate if GAS rate is not found
								        }
								    } catch (error) {
								        console.error("Error fetching USD to GAS rate:", error);
								        return 1; // Default rate if there's an error
								    }
								}
							    async function initializeCalculator() {
								    const networkInfo = await getNetworkInfo();
								    const usdToGasRate = await getUsdToGasRate(); // Now using the API-provided rate for GAS

								    let storagePrice = networkInfo.storagePrice || 100000;
								    let epochDuration = networkInfo.epochDuration || 240;
								    let timePerBlock = 15;
								    let isGas = document.getElementById("currency-toggle").checked;

								    const calculatorValue = document.querySelector("#calculator_value");
								    const calculatorPriceValue = document.querySelector("#calculator_price_value");
								    const calculator = document.querySelector("#range");

								    function updateCalculatorValue(value) {
								        let capacity = Math.pow(2, value); // capacity in bytes
								        let priceInGas = ((capacity / 1024) * storagePrice * (30 * 24 * 60 * 60) / epochDuration / timePerBlock / 1e12);
								        
								        // Calculate displayed price based on selected currency
								        let displayedPrice = isGas ? priceInGas : priceInGas * usdToGasRate;

								        // Format capacity
								        let measurement = 'MB';
								        if (capacity < 1024) {
								            measurement = 'MB';
								        } else if (capacity < 1048576) {
								            measurement = 'GB';
								            capacity /= 1024;
								        } else {
								            measurement = 'TB';
								            capacity /= 1024 * 1024;
								        }
								        calculatorValue.textContent = `${capacity.toFixed(2)} ${measurement}`;
								        calculatorPriceValue.textContent = `${displayedPrice.toFixed(8)} ${isGas ? 'GAS' : 'USD'}`;
								    }

								    // Initial calculation
								    updateCalculatorValue(calculator.value);

								    // Update value on slider input
								    calculator.addEventListener('input', (e) => {
								        updateCalculatorValue(e.target.value);
								    });

								    // Update value on currency toggle
								    document.getElementById("currency-toggle").addEventListener("change", (e) => {
								        isGas = e.target.checked;
								        updateCalculatorValue(calculator.value);
								    });
								}

							    document.addEventListener("DOMContentLoaded", initializeCalculator);
							</script>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>