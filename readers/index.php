<?php
include "../_variables.php";
$page_name = "Card Readers - Business Cost Comparison";
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

    <section class="usp-banner d-md-none usp-hero--card-2">
      <div class="container-fluid">
        <h2 class="text-white">Card Payment Terminals</h2>
        <div class="row align-items-center">
          <div class="col d-flex justify-content-md-end">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="No hidden costs and competitive rates" class="blur-up lazyload" />
              <p>No hidden costs and competitive rates</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Quick, secure & hassle free process" class="blur-up lazyload" />
              <p>Quick, secure & hassle free process</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="We work with trusted and reliable partners only" class="blur-up lazyload" />
              <p>We work with trusted and reliable partners only</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--card-2">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Card Readers</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>No hidden costs and competitive rates</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Quick, secure & hassle free process</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>We work with trusted and reliable partners only</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform pform-card-payment">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="pform" action="<?php echo $domain; ?>/form/lead-merchant.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/payments/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Card Reader Quotes</h2>
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
                      Do you currently have a card reader?
                    </p>
                    <div class="form-row cp_container">
                      <div class="col-6 col-lg-4 offset-lg-2">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="yes" onclick="nextPrev(1)" required />
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="no" onclick="nextPrev(2)" />
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">
                  <p class="tab-title">Who is your current provider?</p>

                  <div class="form-group">
                    <div class="form-row supplier_container">
                      <div class="col-6 col-md-4 col-lg-3">
                        <input type="radio" name="pay_2" value="none" class="d-none" checked />
                        <label class="radio_container with-logo">
                          <input type="radio" id="worldpay" name="pay_2" value="worldpay" onclick="nextPrev(2)" required />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/worldpay.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="paypal" name="pay_2" value="paypal" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/paypal.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="izettle" name="pay_2" value="izettle" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/izettle.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="barclays" name="pay_2" value="barclays" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/barclays-logo.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="firstdata" name="pay_2" value="firstdata" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/firstdata.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="paymentsense" name="pay_2" value="paymentsense" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/paymentsense.png" />
                          </span>
                        </label>
                      </div>

                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="shopify" name="pay_2" value="shopify" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/shopify.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="stripe" name="pay_2" value="stripe" onclick="nextPrev(2)" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/stripe.png" />
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4 col-lg">
                        <label class="radio_container">
                          <input type="radio" id="other" name="pay_2" value="other" onclick="nextPrev(2)" />
                          <span class="checkmark" style="font-size: 1rem">
                            Other/Not Sure
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step2" class="tab">
                  <p class="tab-title">
                    What type of system are you looking for?
                  </p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <input type="radio" name="pay_3" value="none" class="d-none" checked />
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Epos System" onclick="autoNext()" required />
                          <span class="checkmark"> Epos System </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Online or phone" onclick="autoNext()" />
                          <span class="checkmark"> Online or phone </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Card terminal only" onclick="autoNext()" />
                          <span class="checkmark"> Card terminal only </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="All of the above" onclick="autoNext()" />
                          <span class="checkmark"> All of the above </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Unsure" onclick="autoNext()" />
                          <span class="checkmark"> Unsure </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step3" class="tab">
                  <p class="tab-title">
                    How much do you aim to process by card per month?
                  </p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="above100k" onclick="autoNext()" required />
                          <span class="checkmark"> Above £100,000 </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="50to100k" onclick="autoNext()" />
                          <span class="checkmark"> £50,000 - £100,000 </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="10to50k" onclick="autoNext()" />
                          <span class="checkmark"> £10,000 - £50,000 </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="1to10k" onclick="autoNext()" />
                          <span class="checkmark"> £1,000 - £10,000 </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="under1k" onclick="autoNext()" />
                          <span class="checkmark"> Under £1,000 </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="unsure" onclick="autoNext()" />
                          <span class="checkmark"> Unsure </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step4" class="tab">
                  <p class="tab-title">
                    What business sector do you operate in?
                  </p>

                  <!-- Form Input -->
                  <div class="form-group">
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
                <div id="step5" class="tab">
                  <p class="tab-title">Tell us about your business</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required />
                          <label for="inputCompany">Company Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control" />
                          <label for="inputPostcode">Postcode</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step6" class="tab">
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

    <section class="text-image info-content">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 col-12 order-lg-2">
            <div class="image-holder">
              <img src="<?php echo $domain; ?>/assets/images/smarter-payments-image.jpg" class="lazyload blur-up" />
            </div>
          </div>
          <div class="col-lg-6 col-12 order-lg-1">
            <div class="text-holder">
              <h2>Smarter Payments.</h2>
              <h6>Keep yourself and your staff safe.</h6>
              <p>
                When it comes to meeting your customers' needs, allowing them
                to pay for your goods and services in their preferred way is
                surely a key concern for any business. And in 2020 the
                preferred method is likely to be using a debit or credit card,
                or contactless on a mobile device. It's more important than
                ever now to ensure you're set up with a card reader. It’s not
                just to increase convenience for the customer over the
                counter, but also to keep yourself and your staff safe - and
                to make things easier when it comes to balancing the books!
                Modern day card readers are a far cry from the clunky till
                systems of old - they offer a seamless and near-instant
                payment interface, making the point-of-sale experience sleek,
                comfortable and efficient on both sides. Gone are the days of
                ringing or settling up with your customer; now, things can be
                as simple as a tap and a smile!'
              </p>
            </div>
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
                  We will find and match you with the most cost effective and
                  best Card Payment Provider for your business needs.
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
                  Your matched Card Payment Provider will be in touch with a
                  quotation.
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

    <section class="payment-logos">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/visa.svg" class="lazyload blur-up img-fluid" />
          </div>
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/mastercard.svg" class="lazyload blur-up img-fluid" />
          </div>
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/contactless.svg" class="lazyload blur-up img-fluid" />
          </div>
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/maestro.svg" class="lazyload blur-up img-fluid" />
          </div>
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/applepay.svg" class="lazyload blur-up img-fluid" />
          </div>
          <div class="col-4 col-lg-2 mb-3 mb-lg-0">
            <img src="<?php echo $domain; ?>/assets/images/gpay.svg" class="lazyload blur-up img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <section class="single-column">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto text-center">
            <h2>Going The Extra Mile</h2>
            <h6>We care about smaller businesses.</h6>
            <p>
              There's a far wider range of card readers available nowadays,
              which can make it difficult to know which option to choose.
              Whether you're looking to avoid hidden fees or you don't want to
              be tied down to a long term contract, we can help you find the
              perfect solution for your needs, no matter the size of your
              business.
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

            <h5>Wide Range of Accepted Cards</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Easy App Integration</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>We partner with Take Payments</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>No Hidden Costs</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>For Small & Large Businesses</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Secure & Hassle Free</h5>
          </div>
        </div>
      </div>
    </section>

    <section class="text-image testimonials-block">
      <div class="container">
        <div class="row no-gutters">
          <div class="testimonials-block__image col-lg-6 col-12">
            <div class="image-holder">
              <img src="<?php echo $domain; ?>/assets/images/testimonials-card-2.jpg" class="lazyload blur-up" />
            </div>
          </div>
          <div class="testimonials-block__text col-lg-6 col-12 bg-primary">
            <div class="text-holder">
              <p class="quote">"Find The Best UK Card Reader Providers"</p>
              <p class="author mb-5">
                So nobody is over-paying their provider.
              </p>
              <p class="mb-4">
                There's a far wider range of card readers available nowadays,
                which can make it difficult to know which option to choose.
                Whether you're looking to avoid hidden fees or you don't want
                to be tied down to a long term contract, we can help you find
                the perfect solution for your needs, no matter the size of
                your business.
              </p>
              <a href="#pform" class="btn-main btn-quote"><span></span> Quick Quote</a>
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

  <script src="<?php echo $domain; ?>/assets/js/form-card.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>