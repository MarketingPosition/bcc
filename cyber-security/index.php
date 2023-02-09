<?php
include "../_variables.php";
$page_name = "Cyber Security - Dark Web Report - Business Cost Comparison";
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


  <section class="usp-banner d-md-none usp-hero--cyber">
    <div class="container-fluid">

      <div class="row align-items-center">
        <div class="col d-flex justify-content-md-end">

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Takes minutes!" class="blur-up lazyload" />
            <p>Takes minutes!</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="FREE Exposure Report" class="blur-up lazyload" />
            <p>FREE Exposure Report</p>
          </div>

          <div class="usp-banner__item">
            <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Cyber Security Experts" class="blur-up lazyload" />
            <p>Cyber Security Experts</p>
          </div>

        </div>
      </div>
    </div>
  </section>



  </header>



  <main id="content">

    <section class="hero d-none d-md-block hero--cyber ">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Cyber Security - Dark Web Report</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">

          <div class="col d-flex justify-content-center">

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>Takes minutes!</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>FREE Exposure Report</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>Cyber Security Experts</p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <section class="pform">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-cyber.php" method="post">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/cyber-security/thank-you/">

              <div class="pform-title" style="max-width:100%;">
                <h2>How Secure is your Business, are your details exposed on the Dark Web?</h2>
                <h6>Get a FREE Dark Web Audit on your Business in minutes!</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">

                  <p class="tab-title">What is your domain name?</p>
                  <!-- Form Input -->
                  <div class="form-group position-relative">
                    <div class="form-input">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-label-group">
                            <input type="text" type="text" placeholder="Your Domain" name="domain" id="inputdomain" class="form-control" required>
                            <label for="inputdomain">Your Domain</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!--- Step --->
                <div id="step1" class="tab">

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
                <div id="step2" class="tab">

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
                <h2>1. Provide your details</h2>
                <p>Provide your business details in under 1 minute.</p>
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
                <h2>2. Dark Web Audit</h2>
                <p>We will match you with a verified partner who will run a FREE search on the Dark Web for you.</p>
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
                <h2>3. Receive a Report</h2>
                <p>You will receive an exposure report via email within minutes and a follow up courtesy call from our partner.</p>
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
            <h2>Cyber Security Threats & Data Breaches</h2>
            <h6></h6>
            <p>You may believe that the Dark Web has nothing to do with you. But you’d be wrong.
              A FREE live search by one of our partners will go deep into the underbelly of the net to discover your company’s exposure on the Dark Web.

              Did you know that even with a firewall in place you could still be vulnerable?
              Do you think that the Dark Web has nothing to do with you or your business?
              Do you know how much it will cost your company if you’re responsible for a data breach under the new GDPR laws?

              Thanks to constantly evolving malware and the importance of safeguarding data it has never been more important to address your IT security.

              Submit your details and one of our trusted partners can identify your vulnerabilities and provide a bespoke solution to protect your assets and online presence, allowing your business to grow safely and securely.
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
              <h5>Vulnerability Scanning</h5>
              <p>By speaking to our partner they can reveal open ports and holes</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>Dark Web Monitoring</h5>
              <p>Bespoke reports detailing your company's exposure to scammers and hackers</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>Phishing Testing & Training</h5>
              <p>Keep your staff up to date and vigilant</p>
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <div class="our-usps__detail">
              <h5>GDPR Training</h5>
              <p>Outline risk of breach and how to correctly process data securely.</p>
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

  <script src="<?php echo $domain; ?>/assets/js/form-cyber.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->

</body>

</html>