<section id="nrg_quoteform" class="native-form" style='background-image: url("<? echo get_template_directory_uri(); ?>/assets/images/energybg3.jpg") !important;'>
		<div class="container" >

			<div class="form-holder">

				<div class="step-lead-holder">

					<div class="step-lead-header">

						<h1>
							Search The Market For<br>
							Business Energy Quotes
							<!--<span class="brand-color">
								You Save!
							</span>-->
						</h1>
						<!--<p class="quote-form-lead-text">
						Complete our short form and we’ll get you the best quote in minutes.
					</p>-->
					<p class="brand-color">SEARCH OVER 20 SUPPLIERS UNDER 45 SECONDS</p>

					</div>
					<div class="step-lead-position">
						<a id="nrg_pos1" type="button" class="step-lead-position-item step-complete step-active" disabled="disabled">Step 1</a>
						<a id="nrg_pos2" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 2</a>
						<a id="nrg_pos3" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 3</a>
						<a id="nrg_pos4" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 4</a>
						<a id="nrg_pos5" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 5</a>
					</div>
					<div class="step-lead-row">

						<!-- form#tele_form.step-lead-form>fieldset#tele_step$[style="display:none;"]*6>p+div.row>label*2>input:checkbox+span+small -->
									<!-- novalidate="novalidate"    return validate('6')  -->
						<form id="nrg_form" class="step-lead-form" action="/thank-you-energy" method="POST" onsubmit="return check(this)">
							<fieldset class="step-lead-item" id="nrg_step1" style="display: block;">
								<p>
									What would you like to compare?<br/>

								</p>
								<div class="row">
								<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="nrg_question1" value="gas" required="">
										<span>Gas <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/flame-grey.png" style="height:30px;width:28px;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="nrg_question1" value="dual" required="">
										<span>Dual/Both <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/dual-grey.png" style="height:30px;width:40px;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio">
										<input type="radio" name="nrg_question1" value="electric" required="">
										<span>Electric <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/bolt-grey.png" style="height:30px;width:23px;"/></span>
									</label>
								</div>
								<span id="step1err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="#" data-step="2" onclick="nextStep()" >Next Step</a>
								</div>
							</fieldset>

							<fieldset class="step-lead-item" id="nrg_step2" style="display: none;">

								<p>
									Who is your current Energy Supplier
								</p>
								<div class="row">
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="britishgas" required="">
										<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/britishgas.png" style="height:100%;width:100%;" /></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="edf" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/edf.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="eon" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/eon.png" style="height:100%;width:100%;"/></span>
									</label>

								</div>
								<div class="row">
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="scottishpower" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/scottishpower.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="sse" required="">
										<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/sse.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="npower" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/npower.png" style="height:100%;width:100%;"/></span>
									</label>

								</div>
								<div class="row">
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="opus" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/opus.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="extraenergy" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/extraenergy.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="dontknow" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/dontknow.png" style="height:100%;width:100%;"/></span>
									</label>
								</div>

								<div class="row">
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="dualenergy" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/dualenergy.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="crown" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/crown.png" style="height:100%;width:100%;"/></span>
									</label>
									<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
										<input type="radio" name="nrg_question2" value="total" required="">
										<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/total.png" style="height:100%;width:100%;"/></span>
									</label>
								</div>


								<div id="nrg_more" style="display:none;">

									<div class="row">
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="utilitywarehouse" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/utilitywarehouse.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="havenpower" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/havenpower.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="ovoenergy" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/ovoenergy.png" style="height:100%;width:100%;"/></span>
										</label>

									</div>
									<div class="row">
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="ecotricity" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/Ecotricity.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="hudson" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/hudson.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="gazprom" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/gazprom.png" style="height:100%;width:100%;"/></span>
										</label>

									</div>
									<div class="row">
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="yorkshiregasandpower" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/yorkshiregasandpower.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="unitedgasandpower" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/unitedgasandpower.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="cng" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/cng.png" style="height:100%;width:100%;"/></span>
										</label>

									</div>
									<div class="row">
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="axisforbusiness" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/axisforbusiness.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="coronaenergy" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/coronaenergy.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="goodenergyforhome" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/goodenergyforhome.png" style="height:100%;width:100%;"/></span>
										</label>

									</div>
									<div class="row">

										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="utilitaforhome" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/utilitaforhome.png" style="height:100%;width:100%;"/></span>
										</label>
										<label class="col-4 col-md-4 step-lead-radio" style="padding: 1px;">
											<input type="radio" name="nrg_question2" value="bglite" required="">
											<span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img/bglite.png" style="height:100%;width:100%;"/></span>
										</label>

									</div>

								</div>

								<center>
									<a id="nrg_moreless" onclick="showMoreOptions()" href="javascript:void(0)">
										--Show More--
									</a>
								</center>

								<span id="step3err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="#" data-step="3" onclick="nextStep()">Next</a>
									<a class="step-lead-btn prev-btn" href="javascript:void(0)" data-step="1" onclick="nextStep()">Previous</a>
								</div>

							</fieldset>

							<fieldset class="step-lead-item" id="nrg_step3" style="display: none;">

								<p>
									Please give us a little bit of information regarding your current contract.
								</p>
								<div class="step-lead-flex">

									<label class="step-lead-input">
										<div>
											<span>How much is your monthly bill usually? (ex VAT)</span>
											<input type="text" id="nrg_bill" name="nrg_bill" onkeyup="" />
											<span id="nrg_bill_err"></span>
										</div>
									</label>
									<label class="step-lead-input" style="margin-bottom:0.5rem;background-color:#f4f4f4;">
										<div>
											<span>What is your contract renewal date?</span>
											<input type="date" id="nrg_contract_date" name="nrg_contract_date" />
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

								<p>
									Tell us a little bit about your business
								</p>
								<div class="step-lead-flex">



									<label class="step-lead-input">
										<div>
											<span>Company Name</span>
											<input type="text" id="nrg_company" name="nrg_company" onkeyup="blankVal()" />
											<span id="nrg_company_err"></span>
										</div>
									</label>


									<label class="step-lead-input ">
										<div>
											<span>Postcode</span>
											<input type="text" id="nrg_postcode" name="nrg_postcode" onkeyup="postcodeVal()" />
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

								<p>
									Tell us a little bit about yourself
								</p>
								<div class="step-lead-flex">

									<label class="step-lead-input">
										<div>
											<span>First Name</span>
											<input type="text" id="nrg_first_name" name="nrg_first_name" onkeyup="blankVal()" />
											<span id="nrg_first_name_err"></span>
										</div>
									</label>
									<label class="step-lead-input">
										<div>
											<span>Last Name</span>
											<input type="text" id="nrg_last_name" name="nrg_last_name" onkeyup="blankVal()" />
											<span id="nrg_last_name_err"></span>
										</div>
									</label>
									<label class="step-lead-input">
										<div>
											<span>Best Phone Number</span>
											<input type="text" id="nrg_phone" name="nrg_phone" onkeyup="phoneVal()"/>
											<span id="nrg_phone_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									<label class="step-lead-input " style="margin-bottom:0.5rem;background-color:#f4f4f4;">
										<div>
											<span>Email Address</span>
											<input type="text" id="nrg_email" name="nrg_email" onkeyup="emailVal()" />
											<span id="nrg_email_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>

									<div class="step-lead-action">
										<button class="step-lead-btn next-btn" type="submit" data-step="7" onclick="this.disabled=true; this.form.submit();">Get Quote!</button>
										<a class="step-lead-btn prev-btn" href="#" data-step="4" onclick="nextStep()">Previous</a>
									</div>

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
