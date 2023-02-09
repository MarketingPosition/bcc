<?php
include "../_variables.php";
$page_name = "Business Telecoms - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

<!----My Custom css---->
<style>
  @media (min-width: 992px) {
    .pform .tab {
      height: auto !important;
    }

    .steps {
      padding-bottom: 2rem;
    }

    .single-column {
      padding: 2rem 0;
    }

    .our-usps {
      padding: 0rem 0;
    }

    .steps__item__content {
      padding: 1.75rem 2.5rem 1rem;
    }

    .w-products {
      padding: 2rem 0 2rem;
    }
  }

  .steps {
    padding: 2rem 0 0;
  }

  .single-column.pb-2 {
    padding-top: 0px;
    padding-bottom: 2rem !important;
  }

  @media (min-width: 768px) {
    .steps__item__title h2 {
      margin-bottom: 1.5rem;
    }
  }

  @media (min-width: 768px) {
    .pform span.is-invalid {
      line-height: 0px;
      margin-top: 10px;
    }
  }
</style>
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

    <section class="usp-banner d-md-none usp-hero--voip">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col d-flex justify-content-md-end">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="FREE Calls, Handsets and Installation" class="blur-up lazyload" />
              <p>FREE Calls, Handsets and Installation</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="We offer a price match guarantee" class="blur-up lazyload" />
              <p>We offer a price match guarantee</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="No hidden charges or upfront costs" class="blur-up lazyload" />
              <p>No hidden charges or upfront costs</p>
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
            <h1>Business Telecoms</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>FREE Calls, Handsets and Installation</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>We offer a price match guarantee</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>No hidden charges or upfront costs</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="pform" action="<?php echo $domain; ?>/form/lead-voip.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-voip/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Cloud Based Phone System Quotes</h2>
                <h6>Search Over 20 Partners in Under 45 Seconds</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">
                      Do you have an existing telephone system?
                    </p>
                    <div class="form-row voipq1_container">
                      <div class="col-6 col-lg-4 offset-lg-2">
                        <label class="radio_container">
                          <input type="radio" name="voipq1" value="yes" onClick="autoNext()" required />
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="voipq1" value="no" onClick="autoNext()" />
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">
                  <p class="tab-title">
                    How many users do you need to connect?
                  </p>

                  <div class="form-row voipq2_container">
                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="1" required="" onClick="autoNext()" />
                      <span class="checkmark">1</span>
                    </label>
                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="2-5" onClick="autoNext()" />
                      <span class="checkmark">2-5</span>
                    </label>

                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="6-10" onClick="autoNext()" />
                      <span class="checkmark">6-10</span>
                    </label>

                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="11-20" onClick="autoNext()" />
                      <span class="checkmark">11-20</span>
                    </label>

                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="21-50" onClick="autoNext()" />
                      <span class="checkmark">21-50</span>
                    </label>

                    <label class="col-6 col-md-4 checkbox_container">
                      <input type="radio" name="voipq2" value="51+" onClick="autoNext()" />
                      <span class="checkmark">51+</span>
                    </label>
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
                          <input type="tel" id="inputPhone" name="phone1" inputmode="numeric" placeholder="Phone" pattern="[0-9]*" minlength="11" maxlength="15" class="form-control" required />
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
                <h2>2. Automatically Matched</h2>
                <p>
                  We will match you with a partner suited specifically to your needs
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
                <p>Confirm and we'll take care of the rest</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="single-column">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto text-center">
            <h2>Business Telecoms</h2>
            <!--  <h6>We care about smaller businesses.</h6> -->
            <p>
              We help Small, Medium and Large organisations getting the best
              deal tailored to their needs. Whether you are a business with a
              high number of virtual meetings and webinars or a SME in need to
              connect your staff and clients, we provide first in class
              customised solutions for you. We work across any industries,
              including healthcare, estate agency, restaurants, building &
              trade, retail shops and more, to save on their phone systems and
              move to the cloud. Get in touch for a FREE quote today!
            </p>

            <noscript><img src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/logo-bcc-color.svg" alt="BusinessCostComparison" title="BusinessCostComparison" width="136" class="lazyload blur-up" />
          </div>
        </div>
      </div>
    </section>

    <section class="single-column pb-2 d-none">
      <div class="container">
        <h2 class="text-center pb-4">How Our Customers Rate Our Service</h2>
        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="54ad5defc6454f065c28af8b" data-businessunit-id="5aaa806f2e48e5000196374f" data-style-height="240px" data-style-width="100%" data-theme="light" data-stars="4,5">
          <a href="https://uk.trustpilot.com/review/businesscostcomparison.co.uk" target="_blank" rel="noopener">Trustpilot</a>
        </div>
        <!-- End TrustBox widget -->
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

            <h5>No obligation quote</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>No hidden costs</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Speak to a telecoms consultant</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We do all the work for you</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Sit back and save</h5>
          </div>
        </div>
      </div>
    </section>

    <section class="w-products w-products--voip">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 mx-auto">
            <div class="row">
              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-handsets.jpg" alt="FREE Handsets" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-handsets.jpg" alt="FREE Handsets" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>FREE Handsets</h3>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-install.jpg" alt="FREE Installation" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-install.jpg" alt="FREE Installation" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>FREE Installation</h3>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-freecalls.jpg" alt="Food Waste" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-freecalls.jpg" alt="Food Waste" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>FREE Calls</h3>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-cost.jpg" alt="No Upfront Costs" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-cost.jpg" alt="No Upfront Costs" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>No Upfront Costs</h3>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-match.jpg" alt="Price Match" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-match.jpg" alt="Price Match" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>Price Match Guarantee</h3>
                </div>
              </div>

              <div class="w-products__item">
                <a href="#pform" title="Get FREE Quote Now">
                  <noscript><img src="<?php echo $domain; ?>/assets/images/voip/voip-support.jpg" alt="24/7 Support Available" title="" width="328" /></noscript>
                  <img data-src="<?php echo $domain; ?>/assets/images/voip/voip-support.jpg" alt="24/7 Support Available" title="" width="328" class="lazyload blur-up" />
                </a>
                <div class="w-products__content">
                  <h3>24/7 Support Available</h3>
                </div>
              </div>
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
              You can change your mind at any time but, for now, we will
              assume you are happy for us to store and access cookies on your
              device for the purposes described.
              <a href="<?php echo $domain; ?>/cookies/">Cookie Policy</a>
              /
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

  <script src="<?php echo $domain; ?>/assets/js/form-voip.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>