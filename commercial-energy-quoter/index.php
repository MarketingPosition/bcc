<?php
include "../_variables.php";
$page_name = "Commercial Energy - Business Cost Comparison";
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

    <section class="usp-banner d-md-none usp-hero--energy">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col d-flex justify-content-md-end">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="We compare over 20 energy partners" class="blur-up lazyload" />
              <p>We compare over 20 energy partners</p>
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
    <section class="hero d-none d-md-block hero--energy">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Commercial Energy</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">
          <div class="col d-flex justify-content-center">
            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>We compare over 20 energy partners</p>
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
            <form id="pform" action="<?php echo $domain; ?>/form/lead-energy.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-energy/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Commercial Energy Quotes</h2>
                <h6>Search Over 20 Partners in Under 45 Seconds</h6>
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
                      What type of cover are you looking for?
                    </p>

                    <div class="form-row energy_container group_container">
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" value="Gas" onclick="autoNext()" required />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/form/gas-icon.svg" />
                            <img class="hover-image" src="<?php echo $domain; ?>/assets/images/form/gas-icon-hover.svg" />
                            Gas
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" value="Dual" onclick="autoNext()" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/form/gas-icon.svg" />
                            <img class="hover-image" src="<?php echo $domain; ?>/assets/images/form/gas-icon-hover.svg" />
                            Dual/Both
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" value="Electric" onclick="autoNext()" />
                          <span class="checkmark">
                            <img src="<?php echo $domain; ?>/assets/images/form/electric-icon.svg" />
                            <img class="hover-image" src="<?php echo $domain; ?>/assets/images/form/electric-icon-hover.svg" />
                            Electric
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step1" class="tab">
                  <p class="tab-title">Who is your current Energy Supplier</p>

                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="britishgas" name="supplier_img" value="britishgas" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/britishgas.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/britishgas.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="edf" name="supplier_img" value="edf" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/edf.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/edf.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="eon" name="supplier_img" value="eon" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/eon.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/eon.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="scottishpower" name="supplier_img" value="scottishpower" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/scottishpower.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/scottishpower.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="sse" name="supplier_img" value="sse" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/sse.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/sse.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                      <div class="col-4 col-md-4 col-lg-2">
                        <label class="radio_container with-logo">
                          <input type="radio" id="npower" name="supplier_img" value="npower" onclick="supplierCheck()" />
                          <span class="checkmark">
                            <noscript><img src="<?php echo $domain; ?>/assets/images/suppliers/npower.png" alt="Our Supplier" title="Our Supplier" /></noscript>
                            <img data-src="<?php echo $domain; ?>/assets/images/suppliers/npower.png" alt="Our Supplier" title="Our Supplier" class="lazyload blur-up" />
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group position-relative">
                    <label>Or choose a supplier from the list...</label>
                    <select id="suppliers" name="supplier" class="select-css" onchange="supplierCheck('list')" required>
                      <option value="">All Providers</option>
                      <option value="britishgas">British Gas</option>
                      <option value="edf">EDF</option>
                      <option value="eon">E.ON</option>
                      <option value="scottishpower">ScottishPower</option>
                      <option value="sse">SSE</option>
                      <option value="npower">npower</option>
                      <option value="opus">Opus Energy</option>
                      <option value="extraenergy">Extra Energy</option>
                      <option value="dualenergy">Dual Energy</option>
                      <option value="crown">Crown Energy</option>
                      <option value="total">Total</option>
                      <option value="utilitywarehouse">
                        Utility Warehouse
                      </option>
                      <option value="havenpower">Haven Power</option>
                      <option value="ovoenergy">OVO Energy</option>
                      <option value="ecotricity">Ecotricity</option>
                      <option value="hudson">Hudson Energy</option>
                      <option value="gazprom">Gazprom</option>
                      <option value="yorkshiregasandpower">
                        Yorkshire Gas and Power
                      </option>
                      <option value="unitedgasandpower">
                        UGP - United Gas & Power
                      </option>
                      <option value="cng">CNG</option>
                      <option value="axisforbusiness">
                        Axis for Business
                      </option>
                      <option value="coronaenergy">Corona Energy</option>
                      <option value="goodenergyforhome">Good Energy</option>
                      <option value="utilita">Utilita Energy</option>
                      <option value="bglite">British Gas Lite</option>
                      <option value="Other">Other</option>
                      <option value="dontknow">I don't know</option>
                    </select>
                  </div>
                </div>

                <div id="step2" class="tab">
                  <p class="tab-title">
                    Please provide us with information regarding your current
                    contract.
                  </p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <label>How much is your monthly bill usually? (ex VAT)</label>
                    <div class="form-input">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-label-group">
                            <input placeholder="Enter Your Bill" name="bill" id="inputbill" inputmode="numeric" pattern="[0-9]*" min="1" class="form-control" required />
                            <label for="inputbill">Enter Your Bill</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Form Input -->
                  <div class="form-group position-relative renewal_container">
                    <label>When is your contract due for renewal?</label>
                    <div class="row">
                      <div class="col col-lg-3">
                        <div class="form-label-group">
                          <input name="renewal_dd" id="inputdd" class="form-control" placeholder="DD" inputmode="numeric" pattern="[0-9]*" max="31" required autocomplete="off" />
                          <label for="inputdd">DD</label>
                        </div>
                      </div>
                      <div class="col col-lg-3">
                        <div class="form-label-group">
                          <input name="renewal_mm" id="inputmm" placeholder="MM" inputmode="numeric" pattern="[0-9]*" max="12" required autocomplete="off" class="form-control" />
                          <label for="inputmm">MM</label>
                        </div>
                      </div>
                      <div class="col col-lg-3">
                        <div class="form-label-group">
                          <input name="renewal_yyyy" id="inputyy" placeholder="YYYY" inputmode="numeric" pattern="[0-9]*" min="2020" max="2050" required autocomplete="off" class="form-control" />
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

    <section class="logo-block text-center d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-12 py-5">
            <img src="<?php echo $domain; ?>/assets/images/banner-of-supplier-logos.png" class="img-fluid blur-up lazyload" />
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
              A lot of companies, from SMEs to huge multinational
              conglomerates, don’t look at their energy alternatives. Some
              think it’s complicated, extremely time-consuming and definitely
              not worth the hassle, which is untrue. When you’re spending
              £5,000+ as a small to medium sized business, finding a perfect
              fit for your company is essential. We go the extra mile to make
              your switch quick, easy and convenient.
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

            <h5>We compare over 20 energy partners</h5>
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
              <p class="quote">"Switching is easier than you think."</p>
              <p class="author mb-5">
                So nobody is over-paying for their company energy
              </p>
              <p class="mb-4">
                We understand how SME’s have a small margin for error in their
                funds and that having the most efficient option all round is
                very important. There’s a stigma around switching a provider,
                as it’s seen as time-consuming and complex - but we do it
                differently. We’ve cut all the unnecessary details out of our
                form and we contact you directly, so you don’t have to worry
                about a thing.
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

  <script src="<?php echo $domain; ?>/assets/js/form.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>