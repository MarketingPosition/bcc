<?php
include "../_variables.php";
$page_name = "EPOS Systems | Business Cost Comparison";
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

  <section class="usp-banner d-md-none usp-hero--card-3 headline">
    <div class="container-fluid">
      <h2 class="text-white">Card Payment Terminals</h2>
      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">
          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="No Hidden Costs or Upfront Payments" class="blur-up lazyload" />
            <p>No Hidden Costs or Upfront Payments</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Quick, secure process" class="blur-up lazyload" />
            <p>Quick, secure process</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="We Work With Reliable Partners" class="blur-up lazyload" />
            <p>We Work With Reliable Partners</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--card-3 headline">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>EPOS Systems from £65/month</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>No Hidden Costs or Upfront Payments</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Quick, secure process</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>We Work With Reliable Partners</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform pform-card-payment">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-epos.php" method="post" novalidate="novalidate">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/epos/thank-you/">

              <div class="pform-title">
                <h2>Search The Market For An EPOS Quote</h2>
                <h6>Search Over 20 Partners in Under 45 Seconds</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20%</span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab" style="display: block;">

                  <p class="tab-title">Do you currently have an EPOS System?</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-6">
                        <input type="radio" name="pay_1" value="No" class="d-none" checked="">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Yes" onclick="autoNext()" required="" aria-required="true">
                          <span class="checkmark">
                            Yes
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="No" onclick="autoNext()">
                          <span class="checkmark">
                            No
                          </span>
                        </label>
                      </div>

                    </div>
                  </div>

                </div>

                <!-- Step -->
                <div id="step1" class="tab">

                  <p class="tab-title">What type of system are you looking for?</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <input type="radio" name="pay_3" value="none" class="d-none" checked="">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Complete EPOS System" onclick="autoNext()" required="" aria-required="true">
                          <span class="checkmark">
                            EPOS System
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="EPOS Software Only" onclick="autoNext()">
                          <span class="checkmark">
                            EPOS Software Only
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="pay_3" value="Unsure" onclick="autoNext()">
                          <span class="checkmark">
                            Unsure
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>



                <div id="step2" class="tab">

                  <p class="tab-title">What business sector do you operate in?</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="form-row revenue_container">
                      <div class="col-12 col-md-4">
                        <input type="radio" name="business_type" value="none" class="d-none" checked="">
                        <label class="radio_container">
                          <input type="radio" name="business_type" value="Hospitality" onclick="autoNext()" required="" aria-required="true">
                          <span class="checkmark">
                            Hospitality
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="business_type" value="Retail" onclick="autoNext()">
                          <span class="checkmark">
                            Retail
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-md-4">
                        <label class="radio_container">
                          <input type="radio" name="business_type" value="Other" onclick="autoNext()">
                          <span class="checkmark">
                            Other
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>


                </div>

                <!--- Step --->
                <div id="step3" class="tab">

                  <p class="tab-title">Tell us about your business</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required="" aria-required="true">
                          <label for="inputCompany">Company Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required="" class="form-control" aria-required="true">
                          <label for="inputPostcode">Postcode</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step4" class="tab">

                  <p class="tab-title">Finally! Tell us a little bit about yourself</p>

                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="first_name" id="inputFname" class="form-control" placeholder="First Name" required="" aria-required="true">
                          <label for="inputFname">First Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="last_name" id="inputLname" class="form-control" placeholder="Last Name" required="" aria-required="true">
                          <label for="inputLname">Last Name</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" aria-required="true">
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
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1" style="visibility: hidden;">&lt; Back</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn-main btn-submit" tabindex="0" style="visibility: hidden;">Continue</button>
                </div>

                <p class="secure text-center"><img class="mb-1" src="/assets/images/lock-icon.png" width="14"> Privacy Secure</p>

                <div id="consent2" class="pb-4">
                  <div id="consent" class="consent" style="display: none;">
                    By selecting "Get Quote", you confirm that you have read and agree with our Privacy Policy, our Terms &amp; Conditions and agree to be contacted by a TFLI partner by Telephone, Email &amp; SMS to discuss your options.
                  </div>
                </div>
              </div>
              <input type="hidden" name="USOURCE" value=""><input type="hidden" name="UMEDIUM" value=""><input type="hidden" name="UCAMPAIGN" value=""><input type="hidden" name="UCONTENT" value=""><input type="hidden" name="UTERM" value=""><input type="hidden" name="IUSOURCE" value=""><input type="hidden" name="IUMEDIUM" value=""><input type="hidden" name="IUCAMPAIGN" value=""><input type="hidden" name="IUCONTENT" value=""><input type="hidden" name="IUTERM" value=""><input type="hidden" name="IREFERRER" value="direct"><input type="hidden" name="LREFERRER" value="direct"><input type="hidden" name="ILANDPAGE" value="https%3A//businesscostcomparison.co.uk/get-a-quote/%3Flocation%3DWirral"><input type="hidden" name="VISITS" value="19">
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
              <img src="<?php echo $domain; ?>/assets/images/epos/epos-systems-1.jpg" class="lazyload blur-up" />
            </div>
          </div>
          <div class="col-lg-6 col-12 order-lg-1">
            <div class="text-holder">
              <h2>
                Simplify Business with an All-In-One Electronic Point of Sale
                (EPOS)
              </h2>
              <h6>Keep yourself and your staff safe.</h6>
              <p>
                A modern, state-of-the art EPOS System gives you the power to
                simplify your business processes and make managing the
                day-to-day easier - all whilst making things smoother and
                safer for your customers and staff. With EPOS you can create
                dashboards and see your real-time data online, meaning you can
                keep track of your business performance here and now. The same
                goes for stock levels, staff rotas, and even individual team
                members' pay and performance. We're helping companies like
                yours across the country get equipped to do business in
                today's world - and our partners can tailor your EPOS software
                to suit your business, whatever game you're in.
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
                <h2>1. Tell us about your needs</h2>
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
                <h2>2. Find a card machine</h2>
                <p>
                  We’ll put you in touch with an advisor who’ll find you the
                  best machine for your needs.
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
                <h2>3. Job done!</h2>
                <p>
                  Get your EPOS machine delivered, and start making money!
                </p>
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
              With a far wider range of EPOS options available nowadays, we
              understand there's a lot out there - which can make it difficult
              to know which option to choose. Whether you're looking to avoid
              hidden fees or you don't want to be tied down to a long term
              contract, we can help you find the perfect solution for your
              needs, no matter the size of your business.
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

            <h5>We'll work with any sized business</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Easy setup process</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Top UK Partners</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>No Hidden Cost or Deposit</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Competitive Rates</h5>
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
              <img src="<?php echo $domain; ?>/assets/images/epos/epos-system-3.jpg" class="lazyload blur-up" />
            </div>
          </div>
          <div class="testimonials-block__text col-lg-6 col-12 bg-primary">
            <div class="text-holder">
              <p class="quote">"Find The Best UK EPOS System Providers"</p>
              <p class="author mb-5">
                So nobody is over-paying their provider.
              </p>
              <p class="mb-4">
                We work with partenrs who provide the best of the best in EPOS
                solutions to small-and-medium-sized businesses just like yours
                across the UK. We'll get you sorted with the perfect system -
                whether that means personalised pricing, a bespoke EPOS
                software for your company, or just the correctly matched
                off-the-shelf system set up quickly and easily with no upfront
                cost. Plus, we always make sure that our customers are looked
                after: you'll see unlimited support before, during, and after
                the setup - and if there are any issues down the line,
                replacement parts should pose no issues.
              </p>
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