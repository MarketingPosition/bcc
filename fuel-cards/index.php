<?php
include "../_variables.php";
$page_name = "Fuel Cards - Business Cost Comparison";
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

    <section class="usp-banner d-md-none usp-hero--card">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col d-flex justify-content-md-end">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="We compare all leading suppliers" class="blur-up lazyload" />
              <p>We compare all leading suppliers</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="We go the extra mile to make your switch quick" class="blur-up lazyload" />
              <p>We go the extra mile to make your switch quick</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Lock in and fix your price today" class="blur-up lazyload" />
              <p>Lock in and fix your price today</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--card">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Fuel Cards</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>We compare all leading suppliers</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>We go the extra mile to make your switch quick</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>Lock in and fix your price today</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="pform" action="<?php echo $domain; ?>/form/lead-fuel.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/fuel-cards/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Fuel Card Quotes</h2>
                <h6>Search in Under 45 Seconds</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <p class="tab-title">
                      Are you currently using fuel cards?
                    </p>

                    <div class="form-row">
                      <div class="col-12 col-md-6 offset-md-3">
                        <label class="radio_container">
                          <input type="radio" name="using_fuel" value="Yes" onclick="autoNext()" required />
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6 offset-md-3 fuel_q1_container">
                        <label class="radio_container">
                          <input type="radio" name="using_fuel" value="No" onclick="autoNext()" />
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step -->
                <div id="step1" class="tab">
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <p class="tab-title">Type of fuel card</p>

                    <div class="form-row">
                      <div class="col-12 col-md-6 offset-md-3">
                        <label class="radio_container">
                          <input type="radio" name="fuel_type" value="Petrol" onclick="autoNext()" required />
                          <span class="checkmark">Petrol</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6 offset-md-3">
                        <label class="radio_container">
                          <input type="radio" name="fuel_type" value="Diesel" onclick="autoNext()" />
                          <span class="checkmark">Diesel</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6 offset-md-3 fuel_q2_container">
                        <label class="radio_container">
                          <input type="radio" name="fuel_type" value="Dual Fuel" onclick="autoNext()" />
                          <span class="checkmark">Dual Fuel</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step -->
                <div id="step2" class="tab">
                  <!-- Form Input -->
                  <div class="form-group position-relative fuel_q3_container">
                    <p class="tab-title">
                      Number of vehicles that require fuel card
                    </p>

                    <div class="form-row">
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="radio" name="vehicles" value="<3" onclick="autoNext()" required />
                          <span class="checkmark">Less than 3</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="radio" name="vehicles" value="3-9" onclick="autoNext()" />
                          <span class="checkmark">3-9</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="radio" name="vehicles" value="10-24" onclick="autoNext()" />
                          <span class="checkmark">10-24</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="radio" name="vehicles" value="25+" onclick="autoNext()" />
                          <span class="checkmark">25+</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step -->
                <div id="step3" class="tab">
                  <!-- Form Input -->
                  <div class="form-group position-relative fuel_q4_container">
                    <p class="tab-title">
                      Type of vehicles
                      <small class="d-block">(multiple selection available)</small>
                    </p>

                    <div class="form-row group_container">
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="checkbox" name="type_vehicle" value="Cars" required />
                          <span class="checkmark">Cars</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="checkbox" name="type_vehicle" value="Vans/LGV's" />
                          <span class="checkmark">Vans/LGV's</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="checkbox" name="type_vehicle" value="Trucks/LGVs" />
                          <span class="checkmark">Trucks/LGVs</span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="checkbox" name="type_vehicle" value="Other" />
                          <span class="checkmark">Other</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step4" class="tab">
                  <div class="form-group position-relative fuel_q5_container">
                    <p class="tab-title">Type of business</p>
                    <div class="form-row">
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Limited Company" onclick="autoNext()" required />
                          <span class="checkmark">Limited Company</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Partnership" onclick="autoNext()" required />
                          <span class="checkmark">Partnership</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="company_type" value="Sole Trader" onclick="autoNext()" required />
                          <span class="checkmark">Sole Trader</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step5" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">Average Fuel Spend A Month</p>
                    <div class="form-row">
                      <div class="col-6">
                        <label class="radio_container">
                          <input type="radio" name="spend" value="<£250" onclick="autoNext()" required />
                          <span class="checkmark">Less than £250</span>
                        </label>
                      </div>
                      <div class="col-6">
                        <label class="radio_container">
                          <input type="radio" name="spend" value="£250 - £500" onclick="autoNext()" required />
                          <span class="checkmark">£250 - £500</span>
                        </label>
                      </div>
                      <div class="col-6">
                        <label class="radio_container">
                          <input type="radio" name="spend" value="£500 - £1000" onclick="autoNext()" required />
                          <span class="checkmark">£500 - £1000</span>
                        </label>
                      </div>
                      <div class="col-6">
                        <label class="radio_container">
                          <input type="radio" name="spend" value="£1000-£3000" onclick="autoNext()" required />
                          <span class="checkmark">£1000-£3000</span>
                        </label>
                      </div>
                      <div class="col-6 mx-auto fuel_q6_container">
                        <label class="radio_container">
                          <input type="radio" name="spend" value="£3000+" onclick="autoNext()" required />
                          <span class="checkmark">£3000+</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step6" class="tab">
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
                  </div>
                </div>

                <!--- Step --->
                <div id="step7" class="tab">
                  <p class="tab-title">
                    Finally! Tell us a little bit about yourself
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
                          <input type="tel" id="inputPhone" name="phone" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control" />
                          <label for="inputPhone">Phone</label>
                        </div>
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
                <h2>1. Complete Your details</h2>
                <p>Fill in our form in under a minute</p>
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
                <h2>2. Recieve a Quote</h2>
                <p>We will be in touch to answer any questons</p>
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
                <h2>3. Make the Switch</h2>
                <p>Confirm and we'll take care of the rest</p>
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
            <h6>We care about smaller businesses.</h6>
            <p>
              Transportation fuel costs can really vary and be unpredictable.
              More businesses prefer to lock in the best available rates by
              purchasing fuel cards. Key benefits include saving money with
              wholesale prices, as well as reduce administrative work for
              employees, especially in accounting. There are also the added
              benefits of security where fuel cards can be locked to specific
              drivers. Better control over how much is spent and over a
              certain time period. All provided with online reporting to
              review everything from consumption to driver behaviour.
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

            <h5>Over 10,000 happy customers</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We offer fixed prices</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We compare all UK's leading providers</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We do all the work</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Switching is easier than you think.</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Sit back and start saving!</h5>
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

  <script src="<?php echo $domain; ?>/assets/js/lazysizes.min.js" async=""></script>
  <script src="<?php echo $domain; ?>/assets/js/ls.blur-up.min.js" async=""></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>

  <script src="https://webservices.data-8.co.uk/javascript/loader.ashx?key=A6MB-LSUE-TIYA-JBRS&load=InternationalTelephoneValidation,EmailValidation" defer></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js" defer></script>
  <script src="https://webservices.data-8.co.uk/javascript/jqueryvalidation_min.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/utm_form-1.2.0.min.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/main.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/form-fuel.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>