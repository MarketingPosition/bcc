<?php
include "../_variables.php";
$page_name = "Business Loans - Business Cost Comparison";
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

  <section class="usp-banner d-md-none usp-hero--loans">
    <div class="container-fluid">

      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="We partner with trusted finance companies only" class="blur-up lazyload" />
            <p>We partner with trusted finance companies only</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="We partner with trusted finance companies only" class="blur-up lazyload" />
            <p>We partner with trusted finance companies only</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Merchant cash advances to pay back little and often also available" class="blur-up lazyload" />
            <p>Merchant cash advances to pay back little and often also available</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  </header>



  <main id="content">

    <section class="hero d-none d-md-block hero--loans ">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Business Loans</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">

          <div class="col d-flex justify-content-center">

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>We partner with trusted finance companies only</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>We partner with trusted finance companies only</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Merchant cash advances to pay back little and often also available</p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <section class="pform">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-loans.php" method="post">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-loans/thank-you/">

              <div class="pform-title">
                <h2>Need a Merchant Cash Advance or Business Loan?</h2>
                <h6>Check your eligibility (in under 90 secs!)</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab" style="height:150px;">

                  <p class="tab-title">Firstly, how much would you like to borrow? <small class="d-block">(from £3,500 to £150,000+)</small></p>

                  <div class="form-group position-relative">
                    <div class="form-group">
                      <div class="form-label-group mb-4">
                        <input name="loanAmount" id="inputLoan" placeholder="Loan/Advance Amount" inputmode="numeric" pattern="[0-9]*" min="3500" required class="form-control">
                        <label for="inputLoan">Loan/Advance Amount</label>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="step1" class="tab">

                  <p class="tab-title">How many months have you been trading?</p>
                  <p class="tab-title"><small>(We can only serve businesses who have been trading 5 months or more)</small></p>

                  <div class="form-group position-relative">
                    <div class="form-row q1_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="tradingtime" value="Less than 6 months" required="" onclick="autoNext()">
                        <span class="checkmark">Less than 6 months</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="tradingtime" value="6 months to 2 years" onclick="autoNext()">
                        <span class="checkmark">6 months to 2 years</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="tradingtime" value="Over 2 Years" onclick="autoNext()">
                        <span class="checkmark">Over 2 Years</span>
                      </label>
                    </div>
                  </div>

                </div>

                <div id="step2" class="tab">

                  <p class="tab-title">How quickly do you need the funds?</p>

                  <div class="form-group position-relative">
                    <div class="form-row q2_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="requiredate" value="ASAP" required="" onclick="autoNext()">
                        <span class="checkmark">ASAP</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="requiredate" value="Month" onclick="autoNext()">
                        <span class="checkmark">Within a month</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="requiredate" value="Not Sure" onclick="autoNext()">
                        <span class="checkmark">Not Sure</span>
                      </label>
                    </div>
                  </div>

                </div>

                <div id="step3" class="tab">

                  <p class="tab-title">Great and how do you plan on using the funds?</p>

                  <div class="form-group position-relative">
                    <div class="form-row q3_container">
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Stock/Inventory Purchasing" required="" onclick="autoNext()">
                        <span class="checkmark">Inventory / Stock Purchase</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Expansion/Renovation/Refurbishment" onclick="autoNext()">
                        <span class="checkmark">Expansion / Renovation</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Equipment" onclick="autoNext()">
                        <span class="checkmark">Equipment / Machinery</span>
                      </label>

                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Debt Consolidation" onclick="autoNext()">
                        <span class="checkmark">Debt Consolidation</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Cash Flow" onclick="autoNext()">
                        <span class="checkmark">Cash Flow / Working Capital</span>
                      </label>
                      <label class="col-6 col-md-4 checkbox_container">
                        <input type="radio" name="funduse" value="Future projects" onclick="autoNext()">
                        <span class="checkmark">Other</span>
                      </label>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step4" class="tab">
                  <p class="tab-title">Tell us a little bit about your business</p>

                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <div class="form-input">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-label-group">
                            <input name="company" id="inputCompany" placeholder="Company" required class="form-control">
                            <label for="inputCompany">Company</label>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-label-group">
                            <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control">
                            <label for="inputPostcode">Postcode</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
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

                  <p class="tab-title">Finally! Tell us a little bit about yourself</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="firstname" id="inputFname" class="form-control" placeholder="First Name" required>
                          <label for="inputFname">First Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="lastname" id="inputLname" class="form-control" placeholder="Last Name" required>
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
                          <input type="tel" id="inputPhone" name="phone1" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control">
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
                <h2>1. Provide some information</h2>
                <p>Fill in our form in under 90 secs</p>
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
                <h2>2. Check your eligibility</h2>
                <p>Our finance partner will check your eligibility for a business loan.</p>
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
                <h2>3. Get Funded</h2>
                <p>One of our trusted finance partners will be in touch to finalise</p>
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
            <h2>Business Loans</h2>
            <h6>Manage your business loan with small regular repayments.</h6>
            <p>These small business loans are designed to provide much-needed working capital. Business loan customers can repay on a little and often basis, usually daily or weekly to help with cash flow management. You don’t have to worry about a large monthly repayment on a fixed date each month.</p>

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


            <h5>Over 10,000 happy customers</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>We partner with Capify, a trusted business loans company with a 4.7 score on Trustpilot!</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>Unsecured business loans available for all credit scores</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>Raise from £3,500 to £150,000+</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>Pay back little and often.</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Personal Touch & UK Support</h5>
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

  <script src="<?php echo $domain; ?>/assets/js/form-loans.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->



</body>

</html>