<?php
include "../_variables.php";
$page_name = "Business Energy Quoter - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<link rel="stylesheet" href="https://businesscostcomparison.co.uk/assets/css/energy-ab.css">
</head>

<body class="page-template-page-business-energy-quoter-A-B">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9N73MT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!--[if IE]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


	<header class="header position-relative py-3">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" width="200" height="54" alt="BusinessCostComparison" class="mr-2" />
			</a>
		</div>
	</header>


	<main id="content">

		<section class="form-ab">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col1" style="background-color: #F8F8F8;">
						<div class="title">
							<h1 class="omnes">
								Search Over <span class="highlight">20 Partners</span><br />
								of Business Energy <br />
								in Under <span class='highlight'>45 Seconds</span>
							</h1>
						</div>

						<ul class="bullet_points">
							<li>We compare the Big 6 & local partners</li>
							<li>Nationwide coverage</li>
							<li>Cheaper than going direct</li>
						</ul>

						<div class="ab_holder">
							<section id="nrg_quoteform" class="native-form">
								<div class="container">
									<div class="form-holder">
										<div class="step-lead-holder">
											<div class="step-lead-row">
												<form id="nrg_form" class="step-lead-form" action="<?php echo $domain; ?>/form/LL_BCC_Energy_API_S.php" method="POST" onsubmit="return check(this)">
													<input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-energy/thank-you/">
													<fieldset class="step-lead-item" id="nrg_step1" style="display: block;">
														<p class="question_title">
															What would you like to compare?<br />
														</p>
														<div class="row">
															<label class="col-4 col-md-4 step-lead-radio">
																<input type="radio" name="nrg_question1" value="Gas" required="">
																<span>Gas <img src="<?php echo $domain; ?>/assets/images/flame-grey.png" style="height:30px;width:28px;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio">
																<input type="radio" name="nrg_question1" value="Dual" required="">
																<span>Dual/Both <img src="<?php echo $domain; ?>/assets/images/dual-grey.png" style="height:30px;width:40px;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio">
																<input type="radio" name="nrg_question1" value="Electric" required="">
																<span>Electric <img src="<?php echo $domain; ?>/assets/images/bolt-grey.png" style="height:30px;width:23px;" /></span>
															</label>
														</div>
														<span id="step1err" style="color:red;"></span>
														<div class="step-lead-action">
															<a class="step-lead-btn next-btn" href="#" data-step="2" onclick="nextStep()">Next Step</a>
														</div>
													</fieldset>
													<fieldset class="step-lead-item" id="nrg_step2">
														<p class="question_title">
															Who is your current Energy Supplier?
														</p>
														<div class="row">
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="britishgas" required="">
																<span><img src="<?php echo $domain; ?>/assets/images/suppliers/britishgas.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="edf" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/edf.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="eon" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/eon.png" style="height:100%;width:100%;" /></span>
															</label>
														</div>
														<div class="row">
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="scottishpower" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/scottishpower.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="sse" required="">
																<span><img src="<?php echo $domain; ?>/assets/images/suppliers/sse.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="npower" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/npower.png" style="height:100%;width:100%;" /></span>
															</label>
														</div>
														<div class="row">
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="opus" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/opus.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="extraenergy" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/extraenergy.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="dontknow" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/dontknow.png" style="height:100%;width:100%;" /></span>
															</label>
														</div>
														<div class="row">
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="dualenergy" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/dualenergy.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="crown" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/crown.png" style="height:100%;width:100%;" /></span>
															</label>
															<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																<input type="radio" name="nrg_question2" value="total" required="">
																<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/total.png" style="height:100%;width:100%;" /></span>
															</label>
														</div>
														<div id="nrg_more" style="display:none;">
															<div class="row">
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="utilitywarehouse" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/utilitywarehouse.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="havenpower" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/havenpower.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="ovoenergy" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/ovoenergy.png" style="height:100%;width:100%;" /></span>
																</label>
															</div>
															<div class="row">
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="ecotricity" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/Ecotricity.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="hudson" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/hudson.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="gazprom" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/gazprom.png" style="height:100%;width:100%;" /></span>
																</label>
															</div>
															<div class="row">
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="yorkshiregasandpower" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/yorkshiregasandpower.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="unitedgasandpower" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/unitedgasandpower.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="cng" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/cng.png" style="height:100%;width:100%;" /></span>
																</label>
															</div>
															<div class="row">
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="axisforbusiness" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/axisforbusiness.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="coronaenergy" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/coronaenergy.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="goodenergyforhome" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/goodenergyforhome.png" style="height:100%;width:100%;" /></span>
																</label>
															</div>
															<div class="row">
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="utilita" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/utilitaforhome.png" style="height:100%;width:100%;" /></span>
																</label>
																<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
																	<input type="radio" name="nrg_question2" value="bglite" required="">
																	<span> <img src="<?php echo $domain; ?>/assets/images/suppliers/bglite.png" style="height:100%;width:100%;" /></span>
																</label>
															</div>
														</div>
														<div class="show_more">
															<a id="nrg_moreless" onclick="showMoreOptions()" href="javascript:void(0)">
																Show More
															</a>
														</div>
														<span id="step3err" style="color:red;"></span>
														<div class="step-lead-action">
															<a class="step-lead-btn next-btn" href="#" data-step="3" onclick="nextStep()">Next</a>
															<a class="step-lead-btn prev-btn" href="javascript:void(0)" data-step="1" onclick="nextStep()">Previous</a>
														</div>
													</fieldset>
													<fieldset class="step-lead-item" id="nrg_step3" style="display: none;">
														<p class="question_title">
															Please give us a little bit of information regarding your current contract.
														</p>
														<div class="step-lead-flex">
															<label class="step-lead-input">
																<div>
																	<span class="field_label">How much is your monthly bill usually? (ex VAT)</span>
																	<input placeholder="£" type="text" id="nrg_bill" name="nrg_bill" onkeyup="" />
																	<span id="nrg_bill_err"></span>
																</div>
															</label>
															<label class="step-lead-input" style="margin-bottom:0.5rem;background-color:#f4f4f4;">
																<div>
																	<span class="field_label">What is your contract renewal date?</span>
																	<input placeholder="dd/mm/yyyy" type="date" id="nrg_contract_date" name="nrg_contract_date" />
																	<span id="nrg_contract_date_err"></span>
																</div>
															</label>
														</div>
														<div class="step-lead-action">
															<a class="step-lead-btn next-btn" href="#" data-step="4" onclick="nextStep()">Next</button>
																<a class="step-lead-btn prev-btn" href="#" data-step="2" onclick="nextStep()">Previous</a>
														</div>
													</fieldset>
													<fieldset class="step-lead-item" id="nrg_step4" style="display: none;">
														<p class="question_title">
															Tell us a little bit about your business.
														</p>
														<div class="step-lead-flex">
															<label class="step-lead-input">
																<div>
																	<span class="field_label">Company Name</span>
																	<input placeholder="Google Limited" type="text" id="nrg_company" name="nrg_company" onkeyup="blankVal()" />
																	<span id="nrg_company_err"></span>
																</div>
															</label>
															<label class="step-lead-input ">
																<div>
																	<span class="field_label">Postcode</span>
																	<input placeholder="E.g. NP13 2NL" type="text" id="nrg_postcode" name="nrg_postcode" onkeyup="postcodeVal()" />
																	<span id="nrg_postcode_err" style="color:red;font-size:12px;"></span>
																</div>
															</label>
														</div>
														<span id="step2err" style="color:red;"></span>
														<div class="step-lead-action">
															<a class="step-lead-btn next-btn" href="#" data-step="5" onclick="nextStep()">Next</a>
															<a class="step-lead-btn prev-btn" href="#" data-step="3" onclick="nextStep()">Previous</a>
														</div>
													</fieldset>
													<fieldset class="step-lead-item" id="nrg_step5" style="display: none;">
														<p class="question_title">
															Tell us a little bit about yourself.
														</p>
														<div class="step-lead-flex">
															<label class="step-lead-input">
																<div>
																	<span class="field_label">First Name</span>
																	<input placeholder="John" type="text" id="nrg_first_name" name="nrg_first_name" onkeyup="blankVal()" />
																	<span id="nrg_first_name_err"></span>
																</div>
															</label>
															<label class="step-lead-input">
																<div>
																	<span class="field_label">Last Name</span>
																	<input placeholder="Smith" type="text" id="nrg_last_name" name="nrg_last_name" onkeyup="blankVal()" />
																	<span id="nrg_last_name_err"></span>
																</div>
															</label>
															<label class="step-lead-input">
																<div>
																	<span class="field_label">Best Phone Number</span>
																	<input placeholder="07799 123 456" type="text" id="nrg_phone" name="nrg_phone" onkeyup="phoneVal()" />
																	<span id="nrg_phone_err" style="color:red;font-size:12px;"></span>
																</div>
															</label>
															<label class="step-lead-input " style="margin-bottom:0.5rem;background-color:#f4f4f4;">
																<div>
																	<span class="field_label">Email Address</span>
																	<input placeholder="john.smith@gmail.com" type="text" id="nrg_email" name="nrg_email" onkeyup="emailVal()" />
																	<span id="nrg_email_err" style="color:red;font-size:12px;"></span>
																</div>
															</label>
															<div class="step-lead-action-submit">
																<button class="step-lead-btn next-btn" type="submit" data-step="7" onclick="this.disabled=true; this.form.submit();">Get Quote ></button>
																<!--<a class="step-lead-btn prev-btn" href="#" data-step="4" onclick="nextStep()">Previous</a>-->
															</div>
														</div>
													</fieldset>

													<!-- BEGIN UTM TRACKING -->
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
													<!--- END UTM TRACKING -->
													<!--<fieldset class="step-lead-item" id="nrg_step5" style="display: none;">

								<p>
									Step 5
								</p>
								<div class="step-lead-action">
									<button class="step-lead-btn next-btn"  data-step="6">Get Quote!</button>
									<a class="step-lead-btn prev-btn" href="#" data-step="4" onclick="nextStep()">Previous</a>
								</div>

							</fieldset>-->

													<!--<fieldset class="step-lead-item" id="nrg_step6" style="display: none;">
								<p>
									Finish.
								</p>
							</fieldset>-->


												</form>
											</div>
										</div>
									</div>
								</div>
							</section>

						</div>
					</div>
					<div class="col-lg-4 col2" style="background-color: #EEEEEE;">
						<div class="banner">
							<div class="banner_top">
								<p>UK's Independent Comparison Team</p>
								<p>"Superb Service"</p>
							</div>
							<a href="https://uk.trustpilot.com/review/businesscostcomparison.co.uk" target="_blank">
								<div class="trust">
									<small class="reviews">
										Trust score 9.3 | 1,700 reviews
									</small>
									<div class="the_stars">
										<span class="star">★</span>
										<span class="star">★</span>
										<span class="star">★</span>
										<span class="star">★</span>
										<span class="star">★</span>
									</div>
									<img src="<?php echo $domain; ?>/assets/images/trustpilot-logo-white.png" alt="Trustpilot White Logo" width="85" height="auto">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="energy-saving-faqs">
			<div class="container">
				<h2>Energy Saving FAQs</h2>

				<div class="faqs-accordion-block">
					<div class="accordion-block">
						<button class="accordion active">
							<h3>How long will it take to switch?</h3>

							<span class="icon"></span>
						</button>

						<div class="panel">
							<p>
								Once you've selected the best deal for you and confirmed your switch it takes between 4 and 6 weeks for your new contract to go live. We will notify your supplier and manage the process on your behalf.
							</p>
						</div>
					</div>

					<div class="accordion-block">
						<button class="accordion">
							<h3>Will my business be disrupted when I switch?</h3>

							<span class="icon"></span>
						</button>

						<div class="panel">
							<p>
								The transfer is 100% efficient; your energy will not be cut off as a result of switching. We’ll liaise with your existing supplier and negotiate the switch on your behalf.
							</p>
						</div>
					</div>

					<div class="accordion-block">
						<button class="accordion">
							<h3>How much could I save by switching my energy provider?</h3>

							<span class="icon"></span>
						</button>

						<div class="panel">
							<p>
								On average, our customers save over £1,000 per switch. What impacts such huge savings include usage, location and length of contract which we will review.
							</p>

							<p>
								The best way to find out how much you can really save is to call our team on our free landline on 0333 344 7476 or complete our <a href="<?php echo $domain; ?>/business-energy-quoter#nrg_quoteform">comparison form</a> to start saving.
							</p>
						</div>
					</div>

					<div class="accordion-block">
						<button class="accordion">
							<h3>What do I have to do to switch my business energy supplier?</h3>

							<span class="icon"></span>
						</button>

						<div class="panel">
							<p>
								Simply <a href="<?php echo $domain; ?>/business-energy-quoter#nrg_quoteform">compare partners</a> with our team of experts and choose the best deal. Once you're happy, we’ll take care of the rest.
							</p>
						</div>
					</div>

					<div class="accordion-block">
						<button class="accordion">
							<h3>Do energy prices change depending on your location?</h3>

							<span class="icon"></span>
						</button>

						<div class="panel">
							<p>
								Yes. Electricity and gas prices vary depending on your region. Fortunately we compare the Big 6 and local partners so you not only save but receive a premium quality service too.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="bottom-energy-cta-banner">
			<div class="container">
				<div class="text-overlay">
					<h3>Let us compare providers &amp; start saving you money</h3>

					<a class="btn" href="#nrg_quoteform">GET STARTED</a>
				</div>
			</div>
		</section>


	</main>

	<footer class="footer">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-3 col-xs-12">
					<div class="footer__item">
						<h6>About Us</h6>
						<p>BusinessCostComparison.co.uk helps you find and compare the best products and services from 100's of approved partners.</p>
						<p>We have thousands of happy customers nationwide and fully understand the need for small and medium size businesses to keep costs under control.</p>
					</div>
				</div>
				<div class="col-lg-3 offset-lg-1 col-xs-12">
					<div class="footer__item">
						<h6>Get in touch</h6>
						<p>Business Cost Comparison<br>
							Northern Design Centre,<br>
							Abbott's Hill,<br>
							Gateshead NE8 3DF</p>
						<p class="mb-0"><span class="text-green">Phone:</span> <a href="tel:03300589414">03300 589 414</a></p>
						<p><span class="text-green">Email:</span> <a href="mailto:info@businesscostcomparison.co.uk">info@businesscostcomparison.co.uk</a></p>
					</div>
				</div>
				<div class="col-lg-3 col-xs-12">
					<div class="footer__item">
						<h6>Opening hours</h6>
						<dl class="row">
							<dt class="col-3">Mon</dt>
							<dd class="col-9">09:00 - 17:30</dd>
							<dt class="col-3">Tues</dt>
							<dd class="col-9">09:00 - 17:30</dd>
							<dt class="col-3">Wed</dt>
							<dd class="col-9">09:00 - 17:30</dd>
							<dt class="col-3">Thu</dt>
							<dd class="col-9">09:00 - 17:30</dd>
							<dt class="col-3">Fri</dt>
							<dd class="col-9">09:00 - 17:30</dd>
							<dt class="col-3">Sat</dt>
							<dd class="col-9">Closed</dd>
							<dt class="col-3">Sun</dt>
							<dd class="col-9">Closed</dd>
						</dl>
					</div>
				</div>
				<div class="col-lg-2 col-xs-12">
					<div class="footer__item">
						<h6>Follow Us</h6>
						<a href="https://www.facebook.com/businesscostcomparison" rel="Follow us on Facebook" target="_blank"><img src="<?php echo $domain; ?>/assets/images/facebook.svg" width="48" height="48"></a>
						<a href="https://twitter.com/BizCostComp" rel="Follow us on Twitter" target="_blank"><img src="<?php echo $domain; ?>/assets/images/twitter.svg" width="48" height="48"></a>
						<a href="https://www.linkedin.com/company/business-cost-comparison/" rel="Follow us on Linkedin" target="_blank"><img src="<?php echo $domain; ?>/assets/images/linkedin.svg" width="48" height="48"></a>
						<a href="https://www.instagram.com/businesscostcomparison/" rel="Follow us on instagram" target="_blank"><img src="<?php echo $domain; ?>/assets/images/instagram.svg" width="48" height="48"></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-8 mx-auto text-lg-center">
					<div class="footer__item">
						<p>&copy; 2020 Business Cost Comparison.</p>
						<p class="mb-0">You can change your mind at any time but, for now, we will assume you are happy for us to store and access cookies on your device for the purposes described. <a href="<?php echo $domain; ?>/cookies/">Cookie Policy</a> / <a href="<?php echo $domain; ?>/privacy-policy/">Read Policy & T&C's</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?php echo $domain; ?>/assets/js/utm_form-1.2.0.min.js"></script>
	<script src="<?php echo $domain; ?>/assets/js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="<?php echo $domain; ?>/assets/js/form-mkt.js"></script>

</body>

</html>