<?php
include "../../_variables.php";
$page_name = "Business Waste - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9N73MT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php
  include $root . "/_nav.php";
  ?>

  <section class="usp-banner d-md-none usp-hero--waste">
    <div class="container-fluid">

      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="UK Nationwide Coverage" class="blur-up lazyload" />
            <p>UK Nationwide Coverage</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="1000's of free quotes provided" class="blur-up lazyload" />
            <p>1000's of free quotes provided</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/step-icon-12.png" height="28" alt="Cheaper than going direct!" class="blur-up lazyload" />
            <p>Cheaper than going direct!</p>
          </div>

        </div>
      </div>
    </div>
  </section>
  </header>




  <section class="hero d-none d-md-block hero--waste ">
    <div class="container h-100">
      <div class="row no-gutters">
        <div class="hero__title">
          <h1>General Waste Collection<span id="location"></span></h1>
        </div>
      </div>
      <div class="usp-hero row no-gutters d-none d-md-flex">

        <div class="col d-flex justify-content-center">

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="UK Nationwide Coverage" class="blur-up lazyload" />
            <p>UK Nationwide Coverage</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="1000's of free quotes provided" class="blur-up lazyload" />
            <p>1000's of free quotes provided</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/step-icon-12.png" height="28" alt="Cheaper than going direct!" class="blur-up lazyload" />
            <p>Cheaper than going direct!</p>
          </div>

        </div>

      </div>
    </div>
  </section>


  <main id="content">

    <section class="pform pform-waste ">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-waste-sf.php" method="post">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>

              <div class="pform-title">
                <h2>Get a free Waste Quote</h2>
                <h6>No Obligation Enquiry In Under 45 Seconds</h6>
              </div>

              <div id="pformholder">
                <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/waste/thank-you/">

                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <p class="tab-title">What type of waste do you need to dispose of? <small>(Choose all that apply)</small></p>
                  <div class="form-group position-relative">
                    <div class="form-row q1_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="General" required="">
                        <span class="checkmark">General</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="Dry" required="">
                        <span class="checkmark">Dry Recycling</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="Food" required="">
                        <span class="checkmark">Food Waste</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="Glass" required="">
                        <span class="checkmark">Glass</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="Clinical" required="">
                        <span class="checkmark">Clinical</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="checkbox" name="question1[]" value="Hazardous" required="">
                        <span class="checkmark">Hazardous</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">

                  <p class="tab-title">How many bags a week do you currently dispose of?</p>

                  <div class="form-group position-relative">
                    <div class="form-row q2_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="1-2" required="" onclick="autoNext()">
                        <span class="checkmark">1-2</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="3-5" onclick="autoNext()">
                        <span class="checkmark">3-5</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="6-9" onclick="autoNext()">
                        <span class="checkmark">6-9</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="10-14" onclick="autoNext()">
                        <span class="checkmark">10-14</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="15-20" onclick="autoNext()">
                        <span class="checkmark">15-20</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question2" value="Not sure" onclick="autoNext()">
                        <span class="checkmark">Not sure</span>
                      </label>
                    </div>
                  </div>

                </div>

                <div id="step2" class="tab">

                  <p class="tab-title">How often would you like your bins collected?</p>

                  <div class="form-group position-relative">
                    <div class="form-row q3_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="Once a week" required onclick="autoNext()">
                        <span class="checkmark">Once a week</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="2 times weekly" onclick="autoNext()">
                        <span class="checkmark">2 times weekly</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="3 times weekly" onclick="autoNext()">
                        <span class="checkmark">3 times weekly</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="Over 3 times a week" onclick="autoNext()">
                        <span class="checkmark">Over 3 times a week</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="Fortnightly" onclick="autoNext()">
                        <span class="checkmark">Fortnightly</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question3" value="One-off" onclick="autoNext()">
                        <span class="checkmark">One-off</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div id="step3" class="tab">

                  <p class="tab-title">Who is your current waste management provider?</p>

                  <div class="form-group position-relative">
                    <div class="form-row q4_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Biffa" required onclick="autoNext()">
                        <span class="checkmark">Biffa</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Cheaperwaste" onclick="autoNext()">
                        <span class="checkmark">Cheaperwaste</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Waste Managed" onclick="autoNext()">
                        <span class="checkmark">Waste Managed</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Direct365" onclick="autoNext()">
                        <span class="checkmark">Direct365</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Veolia" onclick="autoNext()">
                        <span class="checkmark">Veolia</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="1st Waste" onclick="autoNext()">
                        <span class="checkmark">1st Waste</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Ash Waste" onclick="autoNext()">
                        <span class="checkmark">Ash Waste</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Nationwide Waste" onclick="autoNext()">
                        <span class="checkmark">Nationwide Waste</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Bin Collections" onclick="autoNext()">
                        <span class="checkmark">Bin Collections</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Business Waste" onclick="autoNext()">
                        <span class="checkmark">Business Waste</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="question4" value="Other" onclick="autoNext()">
                        <span class="checkmark">Other</span>
                      </label>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step4" class="tab">

                  <p class="tab-title">Let us know about your business</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required>
                          <label for="inputCompany">Company Name</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <select id="business_type" name="business_type" class="select-css" required>
                          <option value="" disabled="disabled" selected="selected">Select business type</option>
                          <option value="Shops and Retail">Shops and Retail</option>
                          <option value="Hair Beauty Cosmetics">Hair Beauty Cosmetics</option>
                          <option value="Food and Drink">Food and Drink</option>
                          <option value="Leisure and Accomodation">Leisure and Accomodation</option>
                          <option value="Medical">Medical</option>
                          <option value="Education and Training">Education and Training</option>
                          <option value="Factories and Manufacturing">Factories and Manufacturing</option>
                          <option value="Wholesale and Distribution">Wholesale and Distribution</option>
                          <option value="Building and Trade">Building and Trade</option>
                          <option value="Automotive and Transportation">Automotive and Transportation</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step5" class="tab">

                  <p class="tab-title">Your postcode ensures quotes are as accurate as possible for your area.</p>

                  <div class="form-row">
                    <div class="col-lg-8 mx-auto">
                      <div class="form-label-group">
                        <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control">
                        <label for="inputPostcode">Postcode</label>
                      </div>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step6" class="tab">

                  <p class="tab-title">Finally! Tell us a little bit about yourself</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="first_name" id="inputFname" class="form-control" placeholder="First Name" required>
                          <label for="inputFname">First Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="last_name" id="inputLname" class="form-control" placeholder="Last Name" required>
                          <label for="inputLname">Last Name</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                          <label for="inputEmail">Email address</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="tel" id="inputPhone" name="phone" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control">
                          <label for="inputPhone">Phone</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <p style="font-size:12px;margin-top:15px">As your privacy is very important to us, we need to let you know by submitting this form you agree to be contacted via email, SMS or telephone by our trusted partner for waste management with free no obligation quotations for requested services. By clicking Get Quotes you also consent to our privacy policy.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="form-actions">
                  <input type="hidden" name="testmode" value="0" />
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1">
                    < Back</button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn-main btn-submit" tabindex="0">Continue</button>
                </div>
              </div>

            </form>


          </div>

        </div>
      </div>
    </section>


    <!--- Steps --->
    <section class="steps">
      <div class="container">
        <div class="steps__list row no-gutters">

          <div class="steps__item">
            <div class="steps__item__content">
              <div class="steps__item__image">
                <noscript><img src="<?php echo $domain; ?>/assets/images/step-icon-1.svg" width="35" /></noscript>
                <img data-src="<?php echo $domain; ?>/assets/images/step-icon-1.svg" width="35" class="blur-up lazyload" />
              </div>
              <div class="steps__item__title">
                <h2>1. Fill in our form</h2>
                <p>45 seconds to answer a few questions</p>
              </div>
            </div>
          </div>

          <div class="steps__item">
            <div class="steps__item__content">
              <div class="steps__item__image">
                <noscript><img src="<?php echo $domain; ?>/assets/images/step-icon-2.svg" width="35" /></noscript>
                <img data-src="<?php echo $domain; ?>/assets/images/step-icon-2.svg" width="35" class="blur-up lazyload" />
              </div>
              <div class="steps__item__title">
                <h2>2. Speak to an advisor</h2>
                <p>Waste management experts will get in touch and provide you with a no-obligation quote.</p>
              </div>
            </div>
          </div>

          <div class="steps__item">
            <div class="steps__item__content">
              <div class="steps__item__image">
                <noscript><img src="<?php echo $domain; ?>/assets/images/step-icon-3.svg" width="35" /></noscript>
                <img data-src="<?php echo $domain; ?>/assets/images/step-icon-3.svg" width="35" class="blur-up lazyload" />
              </div>
              <div class="steps__item__title">
                <h2>3. Receive Partner Quote</h2>
                <p>Get the best collection provider with the cheapest quote for your needs</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="single-column pb-5">
      <div class="container">
        <h2 class="text-center pb-4">How Our Customers Rate Our Service</h2>
        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="54ad5defc6454f065c28af8b" data-businessunit-id="5aaa806f2e48e5000196374f" data-style-height="240px" data-style-width="100%" data-theme="light" data-stars="4,5">
          <a href="https://uk.trustpilot.com/review/businesscostcomparison.co.uk" target="_blank" rel="noopener">Trustpilot</a>
        </div>
        <!-- End TrustBox widget -->
      </div>
    </section>


    <section class="single-column">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto text-center">
            <h2>Going The Extra Mile</h2>
            <h6>LUCY</h6>
            <p>I highly recommend this company. Business Cost Comparison found me the cheapest quote for my waste collections. The service is easy to use and very quick</p>

            <noscript><img src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" class="lazyload blur-up" />


          </div>
        </div>
      </div>
    </section>


    <section class="our-usps">
      <div class="container">
        <div class="row">

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>1000s of businesses who have saved on their costs</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Cheaper than going direct</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Suitable for all types of Business Waste</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Exclusive deals available from a top UK waste management provider</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>National coverage</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Collections start fast!</h5>
          </div>

        </div>
      </div>
    </section>


    <section class="w-products">
      <div class="container">

        <div class="row">
          <div class="col-12 col-md-10 mx-auto">
            <div class="row">

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/general-waste.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/general-waste@2x.jpg 2x" alt="General Waste" class="img-fluid" width="328" height="200"></a>
                <div class="w-products__content">
                  <h3>General Waste</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/dry-recyclable.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/dry-recyclable@2x.jpg 2x,
                          <?php echo $domain; ?>/assets/images/waste/dry-recyclable@2x.jpg 600w" alt="Dry Recycling" class="img-fluid" width="328" height="200">
                </a>
                <div class="w-products__content">
                  <h3>Dry Recycling</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/business-waste.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/business-waste@2x.jpg 2x" alt="Food Waste" class="img-fluid" width="328" height="200">
                </a>
                <div class="w-products__content">
                  <h3>Food Waste</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/glass.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/glass@2x.jpg 2x" alt="Glass" class="img-fluid" width="328" height="200">
                </a>
                <div class="w-products__content">
                  <h3>Glass</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/clinical.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/clinical@2x.jpg 2x" alt="Clinical" class="img-fluid" width="328" height="200">
                </a>
                <div class="w-products__content">
                  <h3>Clinical</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <img src="<?php echo $domain; ?>/assets/images/waste/hazardous.jpg" srcset="<?php echo $domain; ?>/assets/images/waste/hazardous@2x.jpg 2x" alt="Hazardous" class="img-fluid" width="328" height="200">
                </a>
                <div class="w-products__content">
                  <h3>Hazardous</h3>
                  <a href="#pform" title="Get FREE Quote Now" class="btn-main btn-quote"><span></span>Quick Quote</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include $root . "/_footer.php"; ?>

  <script src="<?php echo $domain; ?>/assets/js/lazysizes.min.js" async=""></script>
  <script src="<?php echo $domain; ?>/assets/js/ls.blur-up.min.js" async=""></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>

  <script src="https://webservices.data-8.co.uk/javascript/loader.ashx?key=A6MB-LSUE-TIYA-JBRS&load=InternationalTelephoneValidation,EmailValidation" defer></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js" defer></script>
  <script src="https://webservices.data-8.co.uk/javascript/jqueryvalidation_min.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/utm_form-1.2.0.min.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/main.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/form-waste.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->



</body>

</html>