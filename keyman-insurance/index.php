<?php
include "../_variables.php";
$page_name = "Business Protection Insurance - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

</head>

<body class="aa">
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

  <header class="header">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand d-none d-md-block" href="<?php echo $domain; ?>/">
        <img src="<?php echo $domain; ?>/assets/images/logo-bcc.svg" width="182" alt="BusinessCostComparison" class="d-none d-md-block" />
      </a>

      <a class="navbar-brand d-md-none" href="<?php echo $domain; ?>/">
        <img src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" height="40" alt="BusinessCostComparison" class="d-md-none mr-2" />
        <img src="<?php echo $domain; ?>/assets/images/tp-logo.svg" height="40" alt="BusinessCostComparison" class="d-md-none lazyload" />
      </a>

      <div class="position-relative d-none d-md-block" style="width: 180px; height: 60px">
        <div class="trustpilot-widget position-absolute" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="5aaa806f2e48e5000196374f" data-style-height="60px" data-style-width="150px" data-theme="dark" style="top: 0">
          <a href="https://uk.trustpilot.com/review/businesscostcomparison.co.uk" target="_blank" rel="noopener">Trustpilot</a>
        </div>
      </div>

      <a class="ml-auto d-md-none" href="tel:03300589414"><img src="<?php echo $domain; ?>/assets/images/phone-icon.svg" height="38" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $domain; ?>/">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">We compare</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/business-energy">Business Energy</a>

              <a class="dropdown-item" href="/waste">Business Waste</a>

              <a class="dropdown-item" href="/business-card-payments">Card Payments</a>

              <a class="dropdown-item" href="/epos">EPOS Systems</a>

              <a class="dropdown-item" href="/business-voip">Business VOIP</a>

              <a class="dropdown-item" href="/business-loans">Business Loans</a>

              <a class="dropdown-item" href="/business-healthcare-insurance">Business Health Insurance</a>

              <a class="dropdown-item" href="/business-marketing">Business Marketing</a>

              <a class="dropdown-item" href="/business-broadband">Business Broadband</a>

              <a class="dropdown-item" href="/cyber-security">Cyber Security</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo $domain; ?>/#about">About us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo $domain; ?>/blog">Blog</a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="usp-banner d-md-none usp-hero--protection">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col d-flex justify-content-md-end">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Save Money" class="blur-up lazyload" />
              <p>Protect Your Business Today</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="FCA Regulated Partners" class="blur-up lazyload" />
              <p>We Compare The Top UK Insurers</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="FREE Expert Advice" class="blur-up lazyload" />
              <p>Get Free Expert Advice</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--protection">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>
              Compare Keyman Insurance Quotes
              <!--Business Protection Insurance-->
            </h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>Save Money</p>
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
            <form id="pform" action="<?php echo $domain; ?>/form/lead-protection2.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/keyman-insurance/thank-you/" />

              <div class="pform-title" style="max-width: 100%">
                <h2>Save Money & Time On Key Person Insurance</h2>
                <h6 class="mx-auto" style="max-width: 500px">
                  Get a no-obligation quote & expert advice from one of our
                  trusted Key Person insurance partners
                </h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">Type of business</p>
                    <div class="form-row protectionq1_container">
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Limited Company" onClick="autoNext()" required />
                          <span class="checkmark">Limited Company</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Partnership" onClick="autoNext()" required />
                          <span class="checkmark">Partnership</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Sole Trader" onClick="autoNext()" required />
                          <span class="checkmark">Sole Trader</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">
                  <div class="form-group position-relative">
                    <div class="form-input">
                      <p class="tab-title text-left">What is your gender?</p>
                      <div class="form-row protectionq2_container">
                        <div class="col-6 col-lg-6">
                          <label class="radio_container">
                            <input type="radio" name="gender" id="g1" value="Male" onClick="autoNext()" required />
                            <span class="checkmark">Male</span>
                          </label>
                        </div>
                        <div class="col-6 col-lg-6">
                          <label class="radio_container">
                            <input type="radio" name="gender" id="g2" value="Female" onClick="autoNext()" required />
                            <span class="checkmark">Female</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Form Input -->
                </div>

                <div id="step2" class="tab">
                  <div class="form-group position-relative">
                    <div class="form-input">
                      <p class="tab-title text-left">
                        Smoked in last 12 months?
                      </p>
                      <div class="form-row protectionq2_container">
                        <div class="col-6 col-lg-6">
                          <label class="radio_container">
                            <input type="radio" name="smoking" value="yes" required />
                            <span class="checkmark">Yes</span>
                          </label>
                        </div>
                        <div class="col-6 col-lg-6">
                          <label class="radio_container">
                            <input type="radio" name="smoking" value="no" />
                            <span class="checkmark">No</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Form Input -->
                  <div class="form-group position-relative dob_container">
                    <p class="tab-title text-left">
                      What is your Date of Birth?
                    </p>
                    <div class="row">
                      <div class="col col-lg-4">
                        <div class="form-label-group">
                          <input name="dob_dd" id="inputdd" class="form-control" placeholder="DD" inputmode="numeric" pattern="[0-9]*" max="31" required autocomplete="off" />
                          <label for="inputdd">DD</label>
                        </div>
                      </div>
                      <div class="col col-lg-4">
                        <div class="form-label-group">
                          <input name="dob_mm" id="inputmm" placeholder="MM" inputmode="numeric" pattern="[0-9]*" max="12" required autocomplete="off" class="form-control" />
                          <label for="inputmm">MM</label>
                        </div>
                      </div>
                      <div class="col col-lg-4">
                        <div class="form-label-group">
                          <input name="dob_yyyy" id="inputyy" placeholder="YYYY" inputmode="numeric" pattern="[0-9]*" min="1930" max="2004" required autocomplete="off" class="form-control" />
                          <label for="inputyy">YYYY</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step3" class="tab">
                  <p class="tab-title">
                    Tell us a little bit about your business
                  </p>
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <div class="form-input protectionq8_container">
                      <div class="row mb-md-3">
                        <div class="col-12 col-md-6">
                          <div class="form-label-group">
                            <input name="company" id="inputCompany" placeholder="Company" required class="form-control" />
                            <label for="inputCompany">Company</label>
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
                </div>

                <!--- Step --->
                <div id="step4" class="tab">
                  <p class="tab-title">
                    Finally! Tell us a little bit about yourself
                  </p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="first_name" id="inputFname" class="form-control" placeholder="First Name" required />
                          <label for="inputFname">First Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="last_name" id="inputLname" class="form-control" placeholder="Last Name" required />
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
                          <input type="tel" id="inputPhone" name="phone" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control" required />
                          <label for="inputPhone">Phone</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="button" id="prevBtn" onClick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1">
                    < Back </button>
                      <button type="button" id="nextBtn" onClick="nextPrev(1)" class="btn-main btn-submit" tabindex="0">
                        Continue
                      </button>
                </div>
              </div>
              <input type="hidden" name="contact_state_claim_cert_url" id="contact_state_claim_cert_url" value="" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <section style="display: none !important">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-12 text-center">
            <img src="<?php echo $domain; ?>/keyman-insurance/logos.png" />
          </div>
          <!--<div class="col-2 col-md-2 text-center">
         	<img src="<?php echo $domain; ?>/keyman-insurance/In_1.png">
         </div>
         <div class="col-2 col-md-2 text-center">
         	<img src="<?php echo $domain; ?>/keyman-insurance/In_2.png">
         </div>
         <div class="col-2 col-md-2 text-center">
         	<img src="<?php echo $domain; ?>/keyman-insurance/In_3.png">
         </div>
         <div class="col-2 col-md-2 text-center">
         	<img src="<?php echo $domain; ?>/keyman-insurance/In_4.png">
         </div>
         <div class="col-2 col-md-2 text-center">
         	<img src="<?php echo $domain; ?>/keyman-insurance/In_5.png">
         </div>-->
        </div>
      </div>
    </section>

    <section class="logo-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="logos-slider slick-slider">
              <div>
                <img src="images/Legal-General-slide@2x.jpg" class="img-fluid" />
              </div>
              <div>
                <img src="images/Royal-London-slide@2x.jpg" class="img-fluid" />
              </div>
              <div>
                <img src="images/aig-logoe@2x.jpg" class="img-fluid" />
              </div>
              <div><img src="images/Aviva_logo.jpg" class="img-fluid" /></div>
              <div>
                <img src="images/LVE-slide@2x.jpg" class="img-fluid" />
              </div>

              <div>
                <img src="images/Scottish-Widows-slide@2x.jpg" class="img-fluid" />
              </div>
              <div>
                <img src="images/zurich-logo.jpg" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="background: #000; color: #fff">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-12 text-center" style="padding: 5px; font-size: 20px">
            Did you know 52% of UK businesses would cease trading if they lost
            a key person in under 1 year*
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
                <p>
                  We will match you with a verified partner suited
                  specifically to your needs.
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
                <h2>3. Receive a Quote</h2>
                <p>
                  Confirm and we'll take care of the rest. One of our matched
                  partners will be in touch with a quote and expert advice.
                </p>
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
            <h2>Business Protection Insurance</h2>
            <h6>We care for your employees.</h6>
            <p>
              We help hundreds of small, medium and corporate sized businesses
              by providing no obligation quotations on key person insurance
              and solutions. Did you know more employers and company directors
              are looking to provide their employees with protection at a time
              of ill health or even death by having business protection
              insurance. This can also assist with recruitment & retention. We
              only work with heavily regulated partners by the FCA, who we
              verify and trust and we know can provide the best quote and best
              service.
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
              <p>
                Don't just save money, but acquire expert advice on existing
                cover you have.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <div class="our-usps__detail">
              <h5>Over 15 Yrs Experience</h5>
              <p>
                Experience matters. Our partners have over 15 years worth of
                knowledge to offer.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <div class="our-usps__detail">
              <h5>Save Money!</h5>
              <p>
                Time is money. Not only do we save you money, but also time,
                which equals more cost savings.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <div class="our-usps__detail">
              <h5>Heavily Regulated & Verified Partners</h5>
              <p>
                We only work with FCA approved partners when it comes to
                finance.
              </p>
            </div>
          </div>
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
            <p>
              BusinessCostComparison.co.uk helps you find and compare the best
              products and services from 100's of approved partners.
            </p>
            <p>
              We have thousands of happy customers nationwide and fully
              understand the need for small and medium size businesses to keep
              costs under control.
            </p>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-xs-12">
          <div class="footer__item">
            <h6>Get in touch</h6>
            <p>
              Business Cost Comparison<br />
              Northern Design Centre,<br />
              Abbott's Hill,<br />
              Gateshead NE8 3DF
            </p>
            <p class="mb-0">
              <span class="text-green">Phone:</span>
              <a href="tel:03300589414">03300 589 414</a>
            </p>
            <p>
              <span class="text-green">Email:</span>
              <a href="mailto:info@businesscostcomparison.co.uk">info@businesscostcomparison.co.uk</a>
            </p>
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
            <a href="https://www.facebook.com/businesscostcomparison" rel="Follow us on Facebook" target="_blank"><img src="<?php echo $domain; ?>/assets/images/facebook.svg" width="48" height="48" /></a>
            <a href="https://twitter.com/BizCostComp" rel="Follow us on Twitter" target="_blank"><img src="<?php echo $domain; ?>/assets/images/twitter.svg" width="48" height="48" /></a>
            <a href="https://www.linkedin.com/company/business-cost-comparison/" rel="Follow us on Linkedin" target="_blank"><img src="<?php echo $domain; ?>/assets/images/linkedin.svg" width="48" height="48" /></a>
            <a href="https://www.instagram.com/businesscostcomparison/" rel="Follow us on instagram" target="_blank"><img src="<?php echo $domain; ?>/assets/images/instagram.svg" width="48" height="48" /></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-lg-8 mx-auto text-lg-center">
          <div class="footer__item">
            <p>&copy; 2020 Business Cost Comparison.</p>
            <p class="mb-0">
              *Statistics based on the state of the nation study by Legal and
              General.
            </p>
            <p class="mb-0">
              You can change your mind at any time but, for now, we will
              assume you are happy for us to store and access cookies on your
              device for the purposes described.
              <a href="<?php echo $domain; ?>/cookies/">Cookie Policy</a> /
              <a href="<?php echo $domain; ?>/privacy-policy/">Read Policy & T&C's</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo $domain; ?>/assets/js/lazysizes.min.js"></script>
  <script src="<?php echo $domain; ?>/assets/js/ls.blur-up.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://webservices.data-8.co.uk/javascript/loader.ashx?key=A6MB-LSUE-TIYA-JBRS&load=InternationalTelephoneValidation,EmailValidation"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://webservices.data-8.co.uk/javascript/jqueryvalidation_min.js"></script>

  <script src="<?php echo $domain; ?>/assets/js/utm_form-1.2.0.min.js"></script>

  <script src="assets/js/slick.min.js" type="text/javascript"></script>
  <script>
    $(".logos-slider").slick({
      dots: false,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2500,
      //speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1400,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 2,
            infinite: false,
            dots: true,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
          },
        },
      ],
    });
  </script>
  <script src="<?php echo $domain; ?>/assets/js/main.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/form-protection.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->

  <!-- Embed this code on every page of your website -->
  <script>
    (function(w, d, s, o, f, js, fjs) {
      w["ContactStateCertify"] = o;
      w[o] =
        w[o] ||
        function() {
          (w[o].q = w[o].q || []).push(arguments);
        };
      (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
      js.id = o;
      js.src = f;
      js.async = 1;
      fjs.parentNode.insertBefore(js, fjs);
    })(
      window,
      document,
      "script",
      "cscertify",
      "https://js.contactstate.com/certify-latest.js"
    );
    cscertify("init", {
      landing_page_id: "e39d2fa8-b416-4955-929a-43af2d507662",
    });
    // In the standard integration, we can attach Contact State directly to the form using the attach call
    cscertify("attach", {
      form_id: "pform"
    });
  </script>
</body>

</html>