<?php
include "../_variables.php";
$page_name = "Find Digital Marketing Agencies - Business Cost Comparison";
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


  <section class="usp-banner d-md-none usp-hero--marketing">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">
          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="All offer FREE AUDITS" class="blur-up lazyload" />
            <p>All offer FREE AUDITS</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Google Certified Partners" class="blur-up lazyload" />
            <p>Google Certified Partners</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="UK based agencies" class="blur-up lazyload" />
            <p>UK based agencies</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </header>

  <main id="content">
    <section class="hero d-none d-md-block hero--marketing">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Find Digital Marketing Agencies</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>All offer FREE AUDITS</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>Google Certified Partners</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>UK based agencies</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pform pform-marketing">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="pform" action="<?php echo $domain; ?>/form/lead-market.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-marketing/thank-you-comparison/" />

              <div class="pform-title">
                <h2>Find Agencies Now</h2>
                <h6>
                  Find Google, Microsoft and Facebook partners Under 45
                  Seconds
                </h6>
              </div>
              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <!-- Form Input -->

                  <p class="tab-title">
                    What channels are you interested in?
                    <small class="d-block">(select multiple if applicable)</small>
                  </p>

                  <div class="form-group position-relative">
                    <div class="form-row mkt1_container">
                      <label class="col-12 col-md-6 offset-md-3 radio_container">
                        <input type="checkbox" name="mkt_question1[]" value="ppc" id="mkt_ppc" onchange="mkt_check()" required />
                        <span class="checkmark">
                          PPC (Paid Advertising)
                        </span>
                      </label>
                      <label class="col-12 col-md-6 offset-md-3 radio_container">
                        <input type="checkbox" name="mkt_question1[]" value="seo" id="mkt_seo" onchange="mkt_check()" />
                        <span class="checkmark"> SEO (Organic search) </span>
                      </label>
                      <label class="col-12 col-md-6 offset-md-3 radio_container">
                        <input type="checkbox" name="mkt_question1[]" value="website" id="mkt_web" onchange="mkt_check()" />
                        <span class="checkmark">
                          Website and conversion optimisation
                        </span>
                      </label>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step1" class="tab">
                  <p class="tab-title">
                    Which PPC channel(s) are you considering?
                  </p>
                  <div class="form-group position-relative">
                    <div class="form-row mkt2_container">
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="Google ads" />
                        <span class="checkmark"> Google ads </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="Bing ads" />
                        <span class="checkmark"> Bing ads </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="Display advertising" />
                        <span class="checkmark"> Display advertising </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="Facebook" />
                        <span class="checkmark"> Facebook </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="Other" />
                        <span class="checkmark"> Other </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="checkbox" name="mkt_channel[]" value="guidance" />
                        <span class="checkmark">
                          I'm looking for guidance from the pro
                        </span>
                      </label>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step2" class="tab">
                  <p class="tab-title">
                    How long have you been running PPC activities?
                  </p>
                  <div class="form-group position-relative">
                    <div class="form-row mkt3_container">
                      <label class="col-12 col-md-6 radio_container">
                        <input type="radio" name="mkt_length" value="Over 6 months" onclick="autoNext()" />
                        <span class="checkmark"> Over 6 months </span>
                      </label>
                      <label class="col-12 col-md-6 radio_container">
                        <input type="radio" name="mkt_length" value="Less than 6 months" onclick="autoNext()" />
                        <span class="checkmark"> Less than 6 months </span>
                      </label>
                      <label class="col-12 col-md-6 radio_container">
                        <input type="radio" name="mkt_length" value="Just started" onclick="autoNext()" />
                        <span class="checkmark"> Just started </span>
                      </label>
                      <label class="col-12 col-md-6 radio_container">
                        <input type="radio" name="mkt_length" value="Not doing any PPC" onclick="autoNext()" />
                        <span class="checkmark"> Not doing any PPC </span>
                      </label>
                    </div>
                  </div>
                </div>

                <!--- Step --->
                <div id="step3" class="tab">
                  <p class="tab-title">
                    What's your approximate monthly budget
                  </p>
                  <div class="form-group position-relative">
                    <div class="form-row mkt4_container">
                      <label class="col-12 col-md-4 radio_container">
                        <input type="radio" name="mkt_budget" value="Less than 500" onclick="autoNext()" />
                        <span class="checkmark"> Less than £500 </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="radio" name="mkt_budget" value="£501 - £1000" onclick="autoNext()" />
                        <span class="checkmark"> £501 - £1000 </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="radio" name="mkt_budget" value="£1000 - £5000" onclick="autoNext()" />
                        <span class="checkmark"> £1000 - £5000 </span>
                      </label>
                      <label class="col-12 col-md-4 offset-md-2 radio_container">
                        <input type="radio" name="mkt_budget" value="£5000 - £10000" onclick="autoNext()" />
                        <span class="checkmark"> £5000 - £10,000 </span>
                      </label>
                      <label class="col-12 col-md-4 radio_container">
                        <input type="radio" name="mkt_budget" value="£10000+" onclick="autoNext()" />
                        <span class="checkmark"> £10,000+ </span>
                      </label>
                    </div>
                  </div>
                </div>

                <div id="step4" class="tab">
                  <h6 class="tab-title">
                    Great we have found agencies for you!
                  </h6>
                  <p class="text-center">
                    To choose the right agency tell us a bit about your
                    business
                  </p>

                  <!-- Form Input -->
                  <div class="form-group position-relative mb-3">
                    <div class="form-input">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="form-label-group">
                            <input name="company" id="inputCompany" placeholder="Company" required class="form-control" />
                            <label for="inputCompany">Company</label>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-label-group">
                            <input name="website" id="inputWebsite" placeholder="Website" required class="form-control" />
                            <label for="inputWebsite">Website</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-12 col-md-6 mb-4 mb-lg-0">
                        <select id="operation" name="mkt_operation" class="select-css" required>
                          <option value="" disabled="disabled" selected="selected">
                            Scale of operation
                          </option>
                          <option value="Local">Local</option>
                          <option value="Nationwide">Nationwide</option>
                          <option value="International">International</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
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
                  <p class="tab-title">
                    Final Step - Fill in the below to receive your Digital
                    Agency quotes:
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
                  <input type="hidden" name="testmode" value="0" />
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

    <section class="logo-block text-center">
      <div class="container">
        <div class="row">
          <div class="col-12 py-5">
            <h4>Our Partners Specialise In</h4>
            <img src="<?php echo $domain; ?>/assets/images/clients-logo.png" class="img-fluid d-none d-sm-block blur-up lazyload" />
            <img img src="<?php echo $domain; ?>/assets/images/clients-mob.jpg" class="img-fluid d-inline d-sm-none blur-up lazyload" />
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
                <h2>2. We’ll find a match</h2>
                <p>
                  We will match you with a partner agency suited specifically
                  to your marketing needs
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
                <p>One of our agency partners will be in touch</p>
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
            <p>
              We talk with elite agencies about their experience and the
              typical conversion rates achievable in multiple industries. Our
              team of analysts collate data and benchmark results to help
              SME’s find the right agency to help maximise sales. Our network
              allows businesses to fast track their growth by communicating
              and partnering with agencies that are transparent, progressive
              and experienced.
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

            <h5>Network of Google, Microsoft & Facebook partners</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>All offer FREE AUDITS</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Decades of combined experience</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>Takes just 60 seconds</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>All core types of digital advertising covered</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">
            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />

            <h5>UK based agencies</h5>
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
              <p class="quote">"Fast and reliable"</p>
              <p class="author mb-5">Dave Weston</p>
              <p class="mb-4">
                Fast and reliable, managed to find me a supplier who was able
                to provide services to my rural area.
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

  <script src="<?php echo $domain; ?>/assets/js/form-marketing-short.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>