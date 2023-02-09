	<section id="pay_quoteform" class="native-form">
		<div class="container">

			<div class="form-holder">

				<div class="step-lead-holder">
				
					<div class="step-lead-header">
				
						<h1 style="font-weight: 500;">
							Compare Card Payment Solutions
							</span>
						</h1>
						<p class="quote-form-lead-text">
							Complete our simple form in less than <span class="brand-color" style="font-weight: 500;font-size: 22px;">45 seconds</span> and we'll get you the best quote for your Card Payment System!
						</p>
				
					</div>
					<div class="step-lead-position">
						<a id="pay_pos1" type="button" class="step-lead-position-item step-complete step-active" disabled="disabled">Step 1</a>
						<a id="pay_pos2" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 2</a>
						<a id="pay_pos3" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 3</a>
						<a id="pay_pos4" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 4</a>
					</div>
					<div class="step-lead-row">
									
						<!-- form#tele_form.step-lead-form>fieldset#tele_step$[style="display:none;"]*6>p+div.row>label*2>input:checkbox+span+small -->
									
						<form id="pay_form" class="step-lead-form" novalidate="novalidate" action="/thank-you-pay" method="POST" onsubmit="return check(this)">
							<fieldset class="step-lead-item" id="pay_step1" style="display: block;">
								<p class="col-12 col-md-12">
									Do you currently take card payments?
								</p>
								<div class="row">
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="radio" name="pay_question1" value="yes" required="" onchange="checkStep1()">
										<span>Yes</span>
									</label>
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="radio" name="pay_question1" value="no" required="" onchange="checkStep1()">
										<span>No</span>
									</label>
								</div>


								<div id="paymentsYes" class="row" style="display:none;">

									<p class="col-12 col-md-12">
										Who is your current supplier?
									</p>

									<div class="row">

										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="worldpay" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/worldpay.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="paypal" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paypal.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="izettle" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/izettle.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="barclays" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/barclays.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="firstdata" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/firstdata.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="paymentsense" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paymentsense.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="shopify" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="stripe" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe.png" style="max-width:100%;"/></span>
										</label>
										<label class="col-6 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question2" value="other" required="" >
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dada.png" style="max-width:100%;"/></span>
										</label>
									</div>





								</div>

								<div id="paymentsNo" class="row" style="display:none;">
									<p class="col-12 col-md-12">
										What type of system are you looking for?
									</p>

									<div class="row">

										<label class="col-4 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question3" value="epos" required="" >
											<span>Epos System</span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question3" value="onlineorphone" required="" >
											<span>Online or phone</span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question3" value="cardterminal" required="" >
											<span>Card terminal only</span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question3" value="alloftheabove" required="" >
											<span>All of the above</span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio">
											<input type="radio" name="pay_question3" value="unsure" required="" >
											<span>Unsure</span>
										</label>
										
									</div>


								</div>


								<span id="step1err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" data-step="2" onclick="nextStep()" >Next Step</a><!-- href="javascript:void('next step');" -->
								</div>
							</fieldset>
									
							<fieldset class="step-lead-item" id="pay_step2" style="display: none;">
								<p class="col-12 col-md-12">
									What will be your total monthly revenue for credit/debit cards?
								</p>

								<div class="row">

									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="above100k" required="" >
										<span>Above £100,000</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="50to100k" required="" >
										<span>£50,000 - £100,000</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="10to50k" required="" >
										<span>£10,000 - £50,000</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="1to10k" required="" >
										<span>£1,000 - £10,000</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="under1k" required="" >
										<span>Under £1,000</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question4" value="unsure" required="" >
										<span>Unsure</span>
									</label>

								</div>
								<span id="step2err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="#" data-step="3" onclick="nextStep()">Next</a>
									<a class="step-lead-btn prev-btn" href="#" data-step="1" onclick="nextStep()">Previous</a>
								</div>
									
							</fieldset>
									
							<fieldset class="step-lead-item" id="pay_step3" style="display: none;"> 
								<p>
									What business sector do you operate in?
								</p>

								<div class="row">

									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question5" value="hospitality" required="" >
										<span>Hospitality</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question5" value="retail" required="" >
										<span>Retail</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question5" value="healthandleisure" required="" >
										<span>Health and Leisure</span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="pay_question5" value="other" required="" >
										<span>Other</span>
									</label>

								</div>
								<span id="step3err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="#" data-step="4" onclick="nextStep()">Next</a>
									<a class="step-lead-btn prev-btn" href="#" data-step="2" onclick="nextStep()">Previous</a>
								</div>
									
							</fieldset>

							<fieldset class="step-lead-item" id="pay_step4" style="display: none;"> 
								<p>
									Tell us a little bit about your business
								</p>

								<div class="step-lead-flex">
									<label class="step-lead-input">
										<div>
											<span>Company Name</span>
											<input type="text" id="pay_company" name="company" onkeyup="blankVal()"/>
											<span id="pay_company_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									<label class="step-lead-input ">
										<div>
											<span>Your Full Name</span>
											<input type="text" id="pay_fullnam" name="fullname" onkeyup="postcodeVal()" />
											<span id="pay_postcode_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									
									<label class="step-lead-input">
										<div>
											<span>Email Address</span>
											<input type="text" id="pay_email" name="email" onkeyup="emailVal()"/>
											<span id="pay_email_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									<label class="step-lead-input">
										<div>
											<span>Best Phone Number</span>
											<input type="text" id="pay_phone" name="phone" onkeyup="phoneVal()" pattern="[0-9]*" inputmode="numeric"/>
											<span id="pay_phone_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									
								</div>

								<span id="step4err" style="color:red;"></span>
								<div class="step-lead-action">
									<button class="step-lead-btn next-btn" type="submit" onclick="this.disabled=true; this.form.submit();">Get Quote!</button>
									<a class="step-lead-btn prev-btn" href="#" data-step="3" onclick="nextStep()">Previous</a>
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
								  if(!url) url = window.location.search;

								  var query = url.substr(1);
								  var result = {};
									if(!query){return result}

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
										type : "Organic",
										utm_source : "Unknown"
									
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
								
								var outType     = parsedStr.type || 'null';
								var outCampaign = parsedStr.utm_campaign || 'null';
								var outContent  = parsedStr.utm_content || 'null';
								var outMedium   = parsedStr.utm_medium || 'null';
								var outref      = document.referrer || 'null';
								var outSource   = parsedStr.utm_source || 'null';
								var outTerm     = parsedStr.ppc_keyword || 'null';
								var outGclid    = parsedStr.gclid || 'null';
								var outPaid     = parsedStr.paidSearch || 'null';
								var outTimestamp = parsedStr.timestamp || 'null';


								document.getElementById('utype').value=outType;
								document.getElementById('uref').value=outref;
								document.getElementById('ucamp').value=outCampaign;
								document.getElementById('ucont').value=outContent;
								document.getElementById('umed').value=outMedium;
								document.getElementById('usource').value=outSource;
								document.getElementById('uterm').value=outTerm;
								document.getElementById('ugclid').value=outGclid;
								document.getElementById('upsrch').value=outPaid;

	
							</script>

									
						</form>
									
					</div>
				</div>
				
			</div>

		</div>

	</section>