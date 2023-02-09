<?php
include "../_variables.php";
$page_name = "Business Broadband - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9N73MT" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <?php
  include $root . "/_nav.php";
  ?>

  <section class="usp-banner d-md-none usp-hero--voip">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">
          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="We offer a price match guarantee" class="blur-up lazyload" />
            <p>We offer a price match guarantee</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="No hidden charges or upfront costs" class="blur-up lazyload" />
            <p>No hidden charges or upfront costs</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Network-beating connection speeds" class="blur-up lazyload" />
            <p>Network-beating connection speeds</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--voip">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Business Broadband</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>We offer a price match guarantee</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>No hidden charges or upfront costs</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Network-beating connection speeds</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="pform" action="<?php echo $domain; ?>/form/lead-broadband.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-broadband/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Business Broadband Quotes</h2>
                <h6>START YOUR SEARCH IN UNDER 45 SECONDS</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">What are you looking for?</p>
                    <div class="form-row broadbandq1_container">
                      <div class="col-12 col-lg-6 offset-lg-3">
                        <label class="radio_container">
                          <input type="radio" name="broadband_q1" value="Broadband" onclick="autoNext()" required />
                          <span class="checkmark">Broadband</span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-6 offset-lg-3">
                        <label class="radio_container">
                          <input type="radio" name="broadband_q1" value="Phone Line" onclick="autoNext()" />
                          <span class="checkmark">Phone Line</span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-6 offset-lg-3">
                        <label class="radio_container">
                          <input type="radio" name="broadband_q1" value="Both" onclick="autoNext()" />
                          <span class="checkmark">Both</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">
                  <p class="tab-title">Great! Just a couple of details:</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-input">
                      <div class="row">
                        <div class="col-12">
                          <div id="input_broadband_q2">
                            <select name="broadband_q2" class="select-css">
                              <option value="" disabled="disabled" selected="selected">
                                For How Many Users?
                              </option>
                              <option value="1">1 User</option>
                              <option value="2">2 Users</option>
                              <option value="3">3 Users</option>
                              <option value="4">4 Users</option>
                              <option value="5">5 Users</option>
                              <option value="6">6 Users</option>
                              <option value="7">7 Users</option>
                              <option value="8">8 Users</option>
                              <option value="9">9 Users</option>
                              <option value="10+">10 or More Users</option>
                            </select>
                          </div>
                          <div id="input_broadband_q3" style="display: none">
                            <select name="broadband_q3" class="select-css">
                              <option value="" disabled="disabled" selected="selected">
                                For How Many Lines?
                              </option>
                              <option value="1">1 Line</option>
                              <option value="2">2 Lines</option>
                              <option value="3">3 Lines</option>
                              <option value="4">4 Lines</option>
                              <option value="5">5 Lines</option>
                              <option value="6">6 Lines</option>
                              <option value="7">7 Lines</option>
                              <option value="8">8 Lines</option>
                              <option value="9">9 Lines</option>
                              <option value="10+">10 or More Lines</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group position-relative">
                    <p class="tab-title">Do you have an existing package?</p>
                    <div class="form-row broadbandq4_container">
                      <div class="col-12 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="broadband_q4" value="Looking to Switch" onclick="autoNext()" required />
                          <span class="checkmark">Yes - I'm looking to switch</span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="broadband_q4" value="New Service" onclick="autoNext()" />
                          <span class="checkmark">No, This is a New Service</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step2" class="tab">
                  <p class="tab-title">
                    Tell us a little bit about your business
                  </p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md-6">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required />
                          <label for="inputCompany">Company Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control" />
                          <label for="inputPostcode">Postcode</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <select id="business_type" name="business_type" class="select-css" required>
                          <option value="" disabled="disabled" selected="selected">
                            Select business type
                          </option>
                          <option value="Shops and Retail">
                            Shops and Retail
                          </option>
                          <option value="Hair Beauty Cosmetics">
                            Hair Beauty Cosmetics
                          </option>
                          <option value="Food and Drink">
                            Food and Drink
                          </option>
                          <option value="Leisure and Accomodation">
                            Leisure and Accomodation
                          </option>
                          <option value="Medical">Medical</option>
                          <option value="Education and Training">
                            Education and Training
                          </option>
                          <option value="Factories and Manufacturing">
                            Factories and Manufacturing
                          </option>
                          <option value="Wholesale and Distribution">
                            Wholesale and Distribution
                          </option>
                          <option value="Building and Trade">
                            Building and Trade
                          </option>
                          <option value="Automotive and Transportation">
                            Automotive and Transportation
                          </option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step3" class="tab">
                  <p class="tab-title">
                    Lastly, Let us know how to get in touch
                  </p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="firstname" id="inputFname" class="form-control" placeholder="First Name" required />
                          <label for="inputFname">First Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="lastname" id="inputLname" class="form-control" placeholder="Last Name" required />
                          <label for="inputLname">Last Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required />
                          <label for="inputEmail">Email address</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="tel" id="inputPhone" name="phone1" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control" required />
                          <label for="inputPhone">Phone</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-12">
                        <label for="consent" class="mr-1">Please confirm you are happy to receive further
                          communication from us</label>
                        <input type="checkbox" name="consent" id="consent" value="Yes" required />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1">
                    < Back </button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn-main btn-submit" tabindex="0">
                        Continue
                      </button>
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
                <h2>1. Click</h2>
                <p>
                  Give us a few details about your needs above to get started.
                </p>
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
                <h2>2. Quote</h2>
                <p>
                  We’ll be in touch in no time with a quote for your perfect
                  package.
                </p>
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
                <h2>3. Connected!</h2>
                <p>
                  Confirm and we'll take care of the rest. Enjoy your upgraded
                  connection!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-center">
      <div class="container">
        <a href="<?php echo $domain; ?>/business-loans" class="btn btn-main">Get Started</a>
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
            <h2>Business Broadband</h2>
            <h6>We Care About Businesses Like Yours</h6>
            <p>
              There's never been a more important time to be present online.
              Whether you need an internet connection for effective
              communication internally, running a web presence for your
              business, or meeting customer needs and expectations, it's
              crucial to be connected. That's why we're now working with our
              partners to deliver affordable, highly rated business broadband
              to businesses like yours across the UK.
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
          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Over 10,000 Happy Customers</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>No Obligation Quote</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>No Hidden Costs</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Speak to a Real Expert</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We Do The Hard Work</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Sit Back And Save!</h5>
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

  <script src="<?php echo $domain; ?>/assets/js/form-broadband.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>