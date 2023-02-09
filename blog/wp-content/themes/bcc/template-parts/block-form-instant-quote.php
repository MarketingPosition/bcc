<?php

/**
 * Instant price waste form.
 *
 * @package bcctheme
 */

?>

<style>
	#instant-price-message {
		margin: 15px 0;
	}

	#instant-price-message p {
		font-size: 14px;
		margin: 0 0 10px 0;
	}

	#pop__time-buffer-message.active+a[data-step="2"] {
		pointer-events: none;
		opacity: 0.75;
		cursor: not-allowed;
		background-color: #999;
	}
</style>

<section id="quoteform" class="native-form">
	<div class="container">
		<div class="form-holder">
			<div class="step-lead-holder">
				<div class="step-lead-header">
					<h1>We Compare, <span class="brand-color">You Save!</span></h1>

					<p class="quote-form-lead-text">
						Complete our simple form in less than 45 seconds and we'll get you the best quote from 200 suppliers!
					</p>
				</div>

				<div class="step-lead-position">
					<a href="#step-lead-1" type="button" class="step-lead-position-item step-active">Step 1</a>
					<a href="#step-lead-2" type="button" class="step-lead-position-item" disabled="disabled">Step 2</a>
					<a href="#step-lead-3" type="button" class="step-lead-position-item" disabled="disabled">Step 3</a>
					<a href="#step-lead-4" type="button" class="step-lead-position-item" disabled="disabled">Step 4</a>
					<a href="#step-lead-5" type="button" class="step-lead-position-item" disabled="disabled">Step 5</a>
				</div>

				<div class="step-lead-row">
					<form class="step-lead-form" novalidate="novalidate">
						<fieldset class="step-lead-item" id="step-lead-1" style="display: block;">
							<p>
								What type of waste do you need to dispose of? <small>(Choose all that apply)</small>
							</p>

							<div class="row">
								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="General" required="" />
									<span>General</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="Dry" required="" />
									<span>Dry Recycling</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="Food" required="" />
									<span>Food Waste</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="Glass" required="" />
									<span>Glass</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="Clinical" required="" />
									<span>Clinical</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="checkbox" name="question1" value="Hazardous" required="" />
									<span>Hazardous</span>
								</label>
							</div>

							<div class="step-lead-action">
								<span id="pop__time-buffer-message"></span>

								<a class="step-lead-btn next-btn" href="#" data-step="2">Next Step</a>
							</div>
						</fieldset>

						<fieldset class="step-lead-item" id="step-lead-2" style="display: none;">
							<p>
								How many bags a week do you currently dispose of?
							</p>

							<div class="row">
								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="1-2" checked="checked" required="" />
									<span>1-2</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="3-5" checked="checked" required="" />
									<span>3-5</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="6-9" required="" />
									<span>6-9</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="10-14" required="" />
									<span>10-14</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="15-20" required="" />
									<span>15-20</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio">
									<input type="radio" name="question2" value="Not sure" required="" />
									<span>Not sure</span>
								</label>
							</div>

							<div class="step-lead-action">
								<a class="step-lead-btn next-btn" href="#" data-step="3">Next</a>
								<a class="step-lead-btn prev-btn" href="#" data-step="1">Previous</a>
							</div>
						</fieldset>

						<fieldset class="step-lead-item" id="step-lead-3" style="display: none;">
							<p>
								How often would you like your bins collected?
							</p>

							<div class="row">
								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="1" required="" />
									<span>Once a week</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="2" required="" />
									<span>2 times weekly</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="3" checked="checked" required="" />
									<span>3 times weekly</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="Over 3" required="" />
									<span>Over 3 times a week</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="Fortnightly" required="" />
									<span>Fortnightly</span>
								</label>

								<label class="col-6 col-md-4 step-lead-radio mspace">
									<input type="radio" name="question3" value="Call-in" required="" />
									<span>Call-in basis</span>
								</label>
							</div>

							<div class="step-lead-action">
								<a class="step-lead-btn next-btn" href="#" data-step="4">Next</a>
								<a class="step-lead-btn prev-btn" href="#" data-step="2">Previous</a>
							</div>
						</fieldset>

						<fieldset class="step-lead-item" id="step-lead-4" style="display: block;">
							<p>
								Enter postcode
							</p>

							<label class="step-lead-input">
								<div>
									<span>Your postcode ensures quotes are as accurate as possible for your area.</span>
									<input type="text" name="postcode" id="postcodefield" placeholder="Enter your postcode" required="" />
								</div>
							</label>

							<div class="step-lead-action">
								<a id="myBtn" class="step-lead-btn check-btn" href="#" data-step="5">Next</a>
							</div>

							<div id="check-postcode" class="modal">
								<div class="modal-content">
									<p class="pulsate text-primary">
										Please Wait ...
									</p>

									<h4>Searching through our suppliers...</h4>

									<img src="<?php echo $domain; ?>/wp-content/uploads/2018/07/loading.gif" />

									<span class="next-btn" data-step="5"></span>
								</div>
							</div>
						</fieldset>

						<fieldset class="step-lead-item" id="step-lead-5" style="display: none;">
							<h3 id="pop__step-5-title" class="text-primary">Good News we found the best suppliers for you.</h3>

							<p id="pop__step-5-text">
								Fill in the last few details to get your free quote!
							</p>

							<div class="step-lead-flex">
								<label class="step-lead-input">
									<div>
										<span>First Name</span>
										<input type="text" id="first_name" name="first_name" data-rule-minlength="3" required="" />
									</div>
								</label>

								<label class="step-lead-input">
									<div>
										<span>Last Name</span>
										<input type="text" id="last_name" name="last_name" data-rule-minlength="3" required="" />
									</div>
								</label>

								<label class="step-lead-input">
									<div>
										<span>Company Name</span>
										<input type="text" id="companyname" name="company" data-rule-minlength="3" required="" />
									</div>
								</label>

								<label class="step-lead-input">
									<div>
										<span>Best Phone No.</span>
										<input type="tel" id="phonenumber" name="phonenumber" data-rule-minlength="11" data-rule-number="true" required="" />
										<span id="phonecheck" class="help-block"></span>
									</div>
								</label>

								<label class="step-lead-input">
									<div>
										<span>Email Address</span>
										<input type="email" id="emailaddress" name="email" data-rule-minlength="3" required="" />
									</div>
								</label>
							</div>

							<div class="step-lead-action">
								<input id="gclid" maxlength="255" name="gclid" size="20" type="hidden" />
								<input type="hidden" name="cloudamp__data__c">
								<input type="hidden" id="instant-price-field" name="instant-price" value="N/A">
								<input type="hidden" id="quote-container" name="container" value="N/A">
								<input type="hidden" id="quote-frequency" name="frequency" value="N/A">


								<div id="loading" class="modal">
									<div class="modal-content">
										<p class="pulsate text-primary">
											Please Wait ...
										</p>

										<h4>Your Form Is Being Processed ...</h4>

										<img src="<?php echo $domain; ?>/wp-content/uploads/2018/07/loading.gif" />

										<span class="next-btn" data-step="5"></span>
									</div>
								</div>

								<input type="submit" class="step-lead-btn next-btn submit-btn" value="Get Quote!" />
								<a class="step-lead-btn prev-btn" href="#" data-step="4">Previous</a>
							</div>
						</fieldset>

						<fieldset id="utmtracker">
							<input type="hidden" id="utype" value="" name="utmtype">
							<input type="hidden" id="ucamp" value="" name="utmcampaign">
							<input type="hidden" id="ucont" value="" name="utmcontent">
							<input type="hidden" id="umed" value="" name="utmmedium">
							<input type="hidden" id="usource" value="" name="utmsource">
							<input type="hidden" id="uterm" value="" name="utmterm">
							<input type="hidden" id="ugclid" value="" name="utmgclid">
							<input type="hidden" id="upsrch" value="" name="paidSearch">
							<input type="hidden" id="uref" value="" name="utmref">
						</fieldset>

						<script>
							function getJsonFromUrl(url) {
								if (!url) url = window.location.search;

								var query = url.substr(1);
								var result = {};
								if (!query) {
									return result
								}

								query.split("&").forEach(function(part) {

									var item = part.split("=");

									result[item[0]] = decodeURIComponent(item[1]);

								});

								return result;


							}

							var preparsedStr = getJsonFromUrl();
							var pStr = !Object.keys(preparsedStr).length;

							if (pStr) {

								preparsedStr = {
									type: "Organic",
									utm_source: "Unknown"

								};

							}

							//console.log(params);

							//check IF _llbb_utm is not set, if not,  set item

							//if (localStorage.getItem("_llbcc_utm") === null) {

							localStorage.setItem('_llbcc_utm', JSON.stringify(preparsedStr), 7);

							//} 

							//var parsedStr = JSON.parse(params);

							var parsedStr = JSON.parse(window.localStorage.getItem('_llbcc_utm'));

							//var len = sessions.length;


							//if(len > 0){
							//var lastSession = sessions[len-1];
							//parsedStr = lastSession.campaignData;
							//}				


							//if _llbb_utm is set then process:

							var outType = parsedStr.type || 'null';
							var outCampaign = parsedStr.utm_campaign || 'null';
							var outContent = parsedStr.utm_content || 'null';
							var outMedium = parsedStr.utm_medium || 'null';
							var outref = document.referrer || 'null';
							var outSource = parsedStr.utm_source || 'null';
							var outTerm = parsedStr.ppc_keyword || 'null';
							var outGclid = parsedStr.gclid || 'null';
							var outPaid = parsedStr.paidSearch || 'null';
							var outTimestamp = parsedStr.timestamp || 'null';


							document.getElementById('utype').value = outType;
							document.getElementById('uref').value = outref;
							document.getElementById('ucamp').value = outCampaign;
							document.getElementById('ucont').value = outContent;
							document.getElementById('umed').value = outMedium;
							document.getElementById('usource').value = outSource;
							document.getElementById('uterm').value = outTerm;
							document.getElementById('ugclid').value = outGclid;
							document.getElementById('upsrch').value = outPaid;
						</script>

						<fieldset class="step-lead-item" id="step-lead-6" style="display: none;">
							<div class="thank-you-message">
								<h3>Thank You</h3>

								<p>
									Once we have verified your details, our trusted supplier <strong class="text-primary">CheaperWaste will contact you directly within 1 hour</strong> to discuss the best deal for you.
								</p>

								<p>
									You will also get an <strong class="text-primary">email with your free quote.</strong>
								</p>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if (isset($_COOKIE['waste-form-timeout'])) : ?>
	<script>
		const countDownDate = <?php echo $_COOKIE['waste-form-timeout']; ?>;

		document.getElementById('pop__time-buffer-message').classList.add('active')

		var button = document.querySelector('a[data-step="2"]');

		var timer = setInterval(function() {

			let timeNow = new Date().getTime();

			let distance = countDownDate - timeNow;

			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((distance % (1000 * 60)) / 1000);

			document.getElementById('pop__time-buffer-message').innerHTML = '<p style="display: inline-block;"><small>Sorry, please wait ' + minutes + 'm ' + seconds + 's before submitting the form again.</small></p>';

			if (distance < 0) {
				clearInterval(timer);
				button.removeAttribute('tab-index', '-1');
				document.getElementById('pop__time-buffer-message').classList.remove('active');
				document.getElementById('pop__time-buffer-message').innerHTML = '';
			}
		}, 1000);
	</script>
<?php endif; ?>