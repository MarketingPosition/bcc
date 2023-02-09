<?php
include "../_variables.php";
$page_name = "Card Payments - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>

<script src="https://www.googleoptimize.com/optimize.js?id=OPT-PRC7HCZ"></script>
<!-- Hotjar Tracking Code for <?php echo $domain; ?>/ -->
<script>
  (function(h, o, t, j, a, r) {
    h.hj = h.hj || function() {
      (h.hj.q = h.hj.q || []).push(arguments)
    };
    h._hjSettings = {
      hjid: 746648,
      hjsv: 6
    };
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
  })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
<!-- Twitter universal website tag code -->
<script>
  ! function(e, t, n, s, u, a) {
    e.twq || (s = e.twq = function() {
        s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
      }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
      a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
  }(window, document, 'script');
  // Insert Twitter Pixel ID and Standard Event data below
  twq('init', 'o6evo');
  twq('track', 'PageView');
</script>
<!-- End Twitter universal website tag code -->
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

  <section class="usp-banner d-md-none usp-hero--card headline">
    <div class="container-fluid">

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

    <section class="hero d-none d-md-block hero--card headline ">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Business Card Payments</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">

          <div class="col d-flex justify-content-center">

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>Competitive transaction rates</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Reliable Card Machines</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>Easy Website Integration for E-commerce</p>
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
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-card-payments/thank-you/">

              <div class="pform-title">
                <h2>Search The Market For Card Payment System Quotes</h2>
                <h6>Get your free quote within minutes!</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">Do you currently take card payments?</p>
                    <div class="form-row cp_container">
                      <div class="col-6 col-lg-4 offset-lg-2">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="yes" onClick="nextPrev(1)" required>
                          <span class="checkmark">Yes</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="no" onClick="nextPrev(2)">
                          <span class="checkmark">No</span>
                        </label>
                      </div>
                      <div class="col-md-12">
                        <div class="card-logo">
                          <div class="logo-box">
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/visa.svg" alt=""></div>
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/mastercard.svg" alt=""></div>
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/contactless.svg" alt=""></div>
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/maestro.svg" alt=""></div>
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/applepay.svg" alt=""></div>
                            <div class="logo-item"><img src="<?php echo $assets; ?>/images/gpay.svg" alt=""></div>
                          </div>
                        </div>

                        <div class="partners-logo">
                          <h4>In partnership with</h4>
                          <hr>
                          <div class="p-logo">
                            <div class="p-box">
                              <img src="<?php echo $assets; ?>/images/partners-logo1.png" alt="">
                            </div>
                            <div class="p-box">
                              <img src="<?php echo $assets; ?>/images/partners-logo2.png" alt="">
                            </div>
                            <div class="p-box">
                              <img src="<?php echo $assets; ?>/images/partners-logo3.png" alt="">
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">

                  <p class="tab-title">Who is your current provider?</p>

                  <div class="form-group">
                    <div class="form-row supplier_container">
                      <div class="col-6 col-md-4 col-lg-3">
                        <input type="radio" name="pay_2" value="none" class="d-none" checked>
                        <label class="radio_container with-logo">
                          <input type="radio" id="worldpay" name="pay_2" value="worldpay" onClick="nextPrev(2)" required>
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/worldpay.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="paypal" name="pay_2" value="paypal" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/paypal.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="izettle" name="pay_2" value="izettle" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/izettle.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <label class="radio_container with-logo">
                          <input type="radio" id="barclays" name="pay_2" value="barclays" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/barclays-logo.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="firstdata" name="pay_2" value="firstdata" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/firstdata.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="paymentsense" name="pay_2" value="paymentsense" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/paymentsense.png">
                          </span>
                        </label>
                      </div>

                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="takepayments" name="pay_2" value="takepayments" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/takepayments.jpg">
                          </span>
                        </label>
                      </div>
                      <div class="col-6 col-md-4 col-lg">
                        <label class="radio_container with-logo">
                          <input type="radio" id="sumup" name="pay_2" value="sumup" onClick="nextPrev(2)">
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/suppliers/sumup.png">
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4 col-lg">
                        <label class="radio_container">
                          <input type="radio" id="other" name="pay_2" value="other" onClick="nextPrev(2)">
                          <span class="checkmark" style="font-size:1rem;">
                            Other/Not Sure
                          </span>
                        </label>
                      </div>

                    </div>

                  </div>

                </div>

                <div id="step2" class="tab">

                  <p class="tab-title">What type of system are you looking for?</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <input type="radio" name="pay_3" value="none" class="d-none" checked>
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Epos System" onClick="autoNext()" required>
                          <span class="checkmark">
                            Epos System
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Online or phone" onClick="autoNext()">
                          <span class="checkmark">
                            Online or phone
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Card terminal only" onClick="autoNext()">
                          <span class="checkmark">
                            Card terminal only
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="All of the above" onClick="autoNext()">
                          <span class="checkmark">
                            All of the above
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Unsure" onClick="autoNext()">
                          <span class="checkmark">
                            Unsure
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="step3" class="tab">

                  <p class="tab-title">How much do you aim to process by card per month?</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="above100k" onClick="autoNext()" required>
                          <span class="checkmark">
                            Above £100,000
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="50to100k" onClick="autoNext()">
                          <span class="checkmark">
                            £50,000 - £100,000
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="10to50k" onClick="autoNext()">
                          <span class="checkmark">
                            £10,000 - £50,000
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="1to10k" onClick="autoNext()">
                          <span class="checkmark">
                            £1,000 - £10,000
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="under1k" onClick="autoNext()">
                          <span class="checkmark">
                            Under £1,000
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_4" value="unsure" onClick="autoNext()">
                          <span class="checkmark">
                            Unsure
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="step4" class="tab">

                  <p class="tab-title">What business sector do you operate in?</p>

                  <!-- Form Input -->
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

                  <p class="tab-title">Tell us about your business</p>

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
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control">
                          <label for="inputPostcode">Postcode</label>
                        </div>
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
                    </div>
                  </div>

                </div>

                <div class="form-actions">
                  <button type="button" id="prevBtn" onClick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1">
                    < Back</button>
                      <button type="button" id="nextBtn" onClick="nextPrev(1)" class="btn-main btn-submit" tabindex="0">Continue</button>
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
                <p>We will find and match you with the most cost effective and best Card Payment Provider for your business needs.</p>
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
                <p>Your matched Card Payment Provider will be in touch with a quotation.</p>
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
            <h2>Going The Extra Mile</h2>
            <h6>We care about smaller businesses.</h6>
            <p>There's a far wider range of card readers available nowadays, which can make it difficult to know which option to choose. Whether you're looking to avoid hidden fees or you don't want to be tied down to a long term contract, we can help you find the perfect solution for your needs, no matter the size of your business.</p>

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
              <img src="<?php echo $domain; ?>/assets/images/testimonials-bg-2.jpg" class="lazyload blur-up" />
            </div>
          </div>
          <div class="testimonials-block__text col-lg-6 col-12 bg-primary">
            <div class="text-holder">
              <p class="quote">"Find The Best UK Card Reader Providers"</p>
              <p class="author mb-5">So nobody is over-paying their provider.</p>
              <p class="mb-4">There's a far wider range of card readers available nowadays, which can make it difficult to know which option to choose. Whether you're looking to avoid hidden fees or you don't want to be tied down to a long term contract, we can help you find the perfect solution for your needs, no matter the size of your business.</p>
              <a href="#pform" class="btn-main btn-quote"><span></span> Quick Quote</a>
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

  <script src="<?php echo $domain; ?>/assets/js/form-card.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->



</body>

</html>