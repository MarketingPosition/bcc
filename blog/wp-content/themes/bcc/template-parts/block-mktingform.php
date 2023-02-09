<section id="mkt_quoteform" class="native-form">
		<div class="container">

			<div class="form-holder">

				<div class="step-lead-holder">
				
					<div class="step-lead-header">
				
						<h1>
							Need Help Online?,
							<span class="brand-color">
								Our friends can help!
							</span>
						</h1>
						<p class="quote-form-lead-text">
							Complete our simple form and one of our partner agencies will be in touch!
						</p>
				
					</div>
					<div class="step-lead-position">
						<a id="mkt_pos1" type="button" class="step-lead-position-item step-complete step-active" disabled="disabled">Step 1</a>
						<a id="mkt_pos2" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 2</a>
						<a id="mkt_pos3" type="button" class="step-lead-position-item step-complete " disabled="disabled">Step 3</a>
					</div>
					<div class="step-lead-row">
									
						<!-- form#tele_form.step-lead-form>fieldset#tele_step$[style="display:none;"]*6>p+div.row>label*2>input:checkbox+span+small -->
									
						<form id="mkt_form" class="step-lead-form" novalidate="novalidate" action="/thank-you-marketing" method="POST" onsubmit="return check(this)">
							<fieldset class="step-lead-item" id="mkt_step1" style="display: block;">
								<p>
									What type of Marketing are you interested in? <small>(Choose all that apply)</small>
								</p>
								<div class="row">
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="checkbox" name="mkt_question1" value="leads" required="">
										<span>Inbound Lead Generation</span>
										<small>SEO / Google Ads / Etc</small>
									</label>
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="checkbox" name="mkt_question1" value="branding" required="">
										<span>Branding &amp; Awareness</span>
									</label>
								</div>
								<div class="row">
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="checkbox" name="mkt_question1" value="ecommerce" required="">
										<span>E-Commerce</span>
									</label>
									<label class="col-6 col-md-6 step-lead-radio">
										<input type="checkbox" name="mkt_question1" value="messenger" required="">
										<span>Messenger Marketing</span>
									</label>
								</div>
								<div class="row">
									<label class="col-12 col-md-12 step-lead-radio">
										<input type="checkbox" name="mkt_question1" value="notsure" required="">
										<span>Not Sure</span>
									</label>
								</div>
								<span id="step1err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="javascript:void('next step');" data-step="2" onclick="nextStep()" >Next Step</a>
								</div>
							</fieldset>
									
							<fieldset class="step-lead-item" id="mkt_step2" style="display: none;">
								<p>
									Tell us a little bit about you &amp; your business
								</p>
								<div class="step-lead-flex">
									
									<label class="step-lead-input">
										<div>
											<span>First Name</span>
											<input type="text" id="mkt_first_name" name="first_name" onkeyup="blankVal()" />
											<span id="mkt_first_name_err"></span>
										</div>
									</label>
									<label class="step-lead-input">
										<div>
											<span>Last Name</span>
											<input type="text" id="mkt_last_name" name="last_name" onkeyup="blankVal()" />
											<span id="mkt_last_name_err"></span>
										</div>
									</label>
									
									<label class="step-lead-input">
										<div>
											<span>Company Name</span>
											<input type="text" id="mkt_company" name="company" onkeyup="blankVal()" />
											<span id="mkt_company_err"></span>
										</div>
									</label>
									
									
									<label class="step-lead-input ">
										<div>
											<span>Email Address</span>
											<input type="text" id="mkt_email" name="email" onkeyup="emailVal()" />
											<span id="mkt_email_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									
								</div>
								<span id="step2err" style="color:red;"></span>
								<div class="step-lead-action">
									<a class="step-lead-btn next-btn" href="#" data-step="3" onclick="nextStep()">Next</a>
									<a class="step-lead-btn prev-btn" href="#" data-step="1" onclick="nextStep()">Previous</a>
								</div>
									
							</fieldset>
									
							<fieldset class="step-lead-item" id="mkt_step3" style="display: none;"> 
								<p>
									Finally what is your best Contact Phone Number and website (if applicable)
								</p>

								<div class="step-lead-flex">

									<label class="step-lead-input">
										<div>
											<span>Best Phone Number</span>
											<input type="text" id="mkt_phone" name="phone" onkeyup="phoneVal()"/>
											<span id="mkt_phone_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>
									<label class="step-lead-input">
										<div>
											<span>Website (if applicable)</span>
											<input type="text" id="mkt_website" name="website" onkeyup="blankVal()"/>
											<span id="mkt_website_err" style="color:red;font-size:12px;"></span>
										</div>
									</label>

								</div>

								<div class="step-lead-action">
									<button class="step-lead-btn next-btn" type="submit" id="thesubmit" onclick="this.disabled=true; this.form.submit();">Get Quote!</button>
									<a class="step-lead-btn prev-btn" href="#" data-step="2" onclick="nextStep()">Previous</a>
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

