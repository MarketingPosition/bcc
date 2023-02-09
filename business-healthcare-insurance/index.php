<?php
include "../_variables.php";
$page_name = "Business Health Insurance - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

</head>

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

  <section class="usp-banner d-md-none usp-hero--health">
    <div class="container-fluid">

      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Save £1000's" class="blur-up lazyload" />
            <p>Save £1000's</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="FCA Regulated Partners" class="blur-up lazyload" />
            <p>FCA Regulated Partners</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="FREE Expert Advice" class="blur-up lazyload" />
            <p>FREE Expert Advice</p>
          </div>

        </div>
      </div>
    </div>
  </section>



  </header>



  <main id="content">

    <section class="hero d-none d-md-block hero--health ">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Business Health Insurance</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">

          <div class="col d-flex justify-content-center">

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>Save £1000's</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>FCA Regulated Partners</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>FREE Expert Advice</p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <section class="pform pform-health">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-health.php" method="post">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-healthcare-insurance/thank-you/">

              <div class="pform-title" style="max-width:100%;">
                <h2>Save Money & Time on Business Healthcare Insurance!</h2>
                <h6>Get a no-obligation quote & expert advice from one of our trusted private health partners</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">Do you have an existing policy?</p>
                    <div class="form-row healthq1_container">
                      <div class="col-6 col-lg-4 offset-lg-2">
                        <label class="radio_container">
                          <input type="radio" name="existing" value="yes" onclick="nextPrev(1)" id="existing-yes" required>
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="existing" id="existing-no" value="no" onclick="nextPrev(3)">
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">

                  <div class="form-group position-relative">
                    <div class="form-input">
                      <p class="tab-title">Who is your policy with?</p>
                      <div class="form-label-group healthq2_container">
                        <input name="provider" id="inputProvider" placeholder="Enter your provider" class="form-control">
                        <label for="inputProvider">Enter your provider</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group position-relative">
                    <div class="form-input">
                      <p class="tab-title">How many covered currently under your policy?</p>
                      <div class="form-label-group  healthq3_container">
                        <input type="tel" name="covered" id="inputCovered" placeholder="Enter amount here" class="form-control" inputmode="numeric" pattern="[0-9]*" minlength="1">
                        <label for="inputCovered">Enter amount here</label>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="step2" class="tab">

                  <div class="form-group position-relative">
                    <p class="tab-title">Do you have a broker or direct?</p>
                    <div class="form-row healthq4_container">
                      <div class="col-6 col-lg-4 offset-lg-2">
                        <label class="radio_container">
                          <input type="radio" name="broker" value="yes" onclick="nextPrev(1)">
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="broker" value="no" onclick="nextPrev(2)">
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group position-relative">
                    <p class="tab-title">When is your renewal date?</p>
                    <div class="form-row healthq5_container">
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="renewal" value="1 to 2 months" onclick="nextPrev(2)" required>
                          <span class="checkmark">1 to 2 months</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="renewal" value="3 to 6 months" onclick="nextPrev(2)">
                          <span class="checkmark">3 to 6 months</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="renewal" value="6 months+" onclick="nextPrev(2)">
                          <span class="checkmark">6 months+</span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="step3" class="tab">

                  <p class="tab-title">Let us know what you're after</p>
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <div class="form-input">
                      <div class="form-label-group healthq6_container">
                        <input type="text" name="employees" id="employees" placeholder="How many employees need to be covered?" required class="form-control" required>
                        <label for="employees">How many employees need to be covered?</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group position-relative">
                    <p class="tab-title">When do you need your policy for?</p>
                    <div class="form-row healthq7_container">
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="startdate" value="1 to 2 months" onclick="autoNext()" required>
                          <span class="checkmark">1 to 2 months</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="startdate" value="3 to 6 months" onclick="autoNext()">
                          <span class="checkmark">3 to 6 months</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="startdate" value="6 months+" onclick="autoNext()">
                          <span class="checkmark">6 months+</span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step4" class="tab">

                  <p class="tab-title">Tell us a little bit about your business</p>
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <div class="form-input healthq8_container">
                      <div class="row mb-md-3">
                        <div class="col-12">
                          <div class="form-label-group">
                            <input name="company" id="inputCompany" placeholder="Company" required class="form-control">
                            <label for="inputCompany">Company</label>
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


                </div>

                <!--- Step --->
                <div id="step5" class="tab">

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
                          <input type="tel" id="inputPhone" name="phone" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control" required>
                          <label for="inputPhone">Phone</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="form-actions">
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
                <h2>1. Complete Your details</h2>
                <p>Provide some details in under 1 minute.</p>
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
                <h2>2. Automatically Matched</h2>
                <p>We will match you with a verified partner suited specifically to your needs.</p>
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
                <h2>3. Receive a Quote</h2>
                <p>Confirm and we'll take care of the rest. One of our matched partners will be in touch with a quote and expert advice.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="single-column pb-5 d-none">
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
            <h2>Business Healthcare Insurance</h2>
            <h6>We care for your employees.</h6>
            <p>We help hundreds of small, medium and corporate sized businesses. by providing no obligation quotations on private healthcare insurance and healthcare solutions.
              Did you know more employers are looking to provide their employees with company benefits that are geared towards assisting their employees at a time of ill health and by providing private medical insurance as part of a benefits package this can also assist with recruitment & retention?
              We only work with heavily regulated partners by the FCA, who we verify and trust and we know can provide the best quote and best service.
            </p>

            <noscript><img src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" class="lazyload blur-up" />


          </div>
        </div>
      </div>
    </section>


    <section class="our-usps">
      <div class="container">
        <div class="row">

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>FREE Expert Advice & Quotation</h5>
              <p>Don't just save money, but acquire expert advice on existing cover you have.</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>Over 15 Yrs Experience</h5>
              <p>Experience matters. Our partners have over 15 years worth of knowledge to offer.</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>Save £1000's!</h5>
              <p>Time is money. Not only do we save you money, but also time, which equals more cost savings.</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>Heavily Regulated & Verified Partners</h5>
              <p>We only work with FCA approved partners when it comes to finance.</p>
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

  <script src="<?php echo $domain; ?>/assets/js/form-health.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->



</body>

</html>