<?php
include "../_variables.php";
$page_name = "Commercial Cleaning - Business Cost Comparison";
$section_name = "";
$page_description = "";
include $root . "/_header.php";
?>
<link rel="stylesheet" href="<?php echo $domain; ?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="css/slick/slick.css" charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/site.css" charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" charset="UTF-8">

<style>
  .logo_sm_section {
    display: none;
  }

  @media (max-width:767px) {
    .logo_sm_section {
      display: block !important;
      padding: 0px 0px;
    }

    .desktop_logo {
      display: none;
    }

    .providers-logos {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
    }

    .providers-logos__item {
      flex: 0 0 25%;
    }

    .providers-logos .img-fluid {
      max-width: 100%;
      height: auto;
    }


  }
</style>
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
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9N73MT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--[if IE]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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

      <div class="position-relative d-none d-md-block" style="width: 180px;height: 60px;">
        <div class="trustpilot-widget position-absolute" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="5aaa806f2e48e5000196374f" data-style-height="60px" data-style-width="150px" data-theme="dark" style="top: 0;">
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
              <a class="dropdown-item" href="/commercial-cleaning">Commercial Cleaning</a>

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
              <p>Professional cleaners in your area</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="We go the extra mile to make your switch quick" class="blur-up lazyload" />
              <p>Safe &amp; Effective</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Lock in and fix your price today" class="blur-up lazyload" />
              <p>Free Estimates</p>
            </div>

          </div>
        </div>
      </div>
    </section>



  </header>



  <main id="content">

    <section class="hero d-none d-md-block hero--energy ">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Local Business Cleaning Services</h1>
          </div>
        </div>
        <div class="usp-hero row no-gutters d-none d-md-flex">

          <div class="col d-flex justify-content-center">

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-compare.svg" height="28" alt="Compare more partners" />
              <p>Professional cleaners in your area</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-collection.svg" height="28" alt="Compare more partners" />
              <p>Safe &amp; Effective</p>
            </div>

            <div class="usp-banner__item">
              <img src="<?php echo $domain; ?>/assets/images/icon-contract.svg" height="28" alt="Compare more partners" />
              <p>Free Estimates</p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <section class="pform">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 mx-auto">

            <form id="pform" action="<?php echo $domain; ?>/form/lead-commercialcleaning2.php" method="post">
              <div id="loading" style="display:none;">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/commercial-cleaning/thank-you/">

              <div class="pform-title">
                <h2>Search for Local Commercial Cleaners
                  <!--Search The Market For Commercial Cleaning Quotes-->
                </h2>
                <!--<h6>FIND CLEANING PARTNERS USING OUR 45 SECOND FORM</h6>-->
              </div>
              <?php
              if (!empty($_REQUEST['error'])) {
                echo '<div class="alert alert-danger">' . $_REQUEST['error'] . '</div>';
              }
              ?>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <!-- Form Input -->
                  <div class="form-group position-relative">

                    <p class="tab-title">Are you currently with a commercial cleaning company?</p>

                    <div class="form-row energy_container group_container">
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" id="energy_type1" value="Yes" onClick="autoNext()" required>
                          <span class="checkmark">
                            Yes
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" id="energy_type2" value="No" onClick="autoNext2(1)">
                          <span class="checkmark">
                            No
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="energy_type" id="energy_type3" value="Looking To Switch" onClick="autoNext()">
                          <span class="checkmark">
                            Looking To Switch
                          </span>
                        </label>
                      </div>
                    </div>

                  </div>
                </div>

                <div id="step1" class="tab">

                  <p class="tab-title">How much are you currently paying for your commercial cleaning?</p>

                  <!-- Form Input -->
                  <div class="form-row currently_paying_container group_container">
                    <div class="col-12 col-lg-4">
                      <label class="radio_container with-icon">
                        <input type="radio" name="currently_paying" id="currently_paying1" value="Under £500" onClick="autoNext()" required>
                        <span class="checkmark">
                          Under £500
                        </span>
                      </label>
                    </div>
                    <div class="col-12 col-lg-4">
                      <label class="radio_container with-icon">
                        <input type="radio" name="currently_paying" id="currently_paying2" value="Over £500" onClick="autoNext2(1)">
                        <span class="checkmark">
                          Over £500
                        </span>
                      </label>
                    </div>
                    <div class="col-12 col-lg-4">
                      <label class="radio_container with-icon">
                        <input type="radio" name="currently_paying" id="currently_paying3" value="I do not know" onClick="autoNext()">
                        <span class="checkmark">
                          I don't know
                        </span>
                      </label>
                    </div>
                  </div>


                </div>

                <div id="step2" class="tab">

                  <p class="tab-title">When is your contract due for renewal?</p>

                  <!-- Form Input -->
                  <div class="form-group position-relative renewal_container">
                    <label>When is your contract due for renewal?</label>
                    <div class="row">
                      <input name="renewal_dd" type="hidden" value="1" id="inputdd" class="form-control" placeholder="DD" inputmode="numeric" pattern="[0-9]*" max="31" required autocomplete="off">
                      <div class="col col-lg-6">
                        <div class="form-label-group">
                          <!--<input name="renewal_mm" id="inputmm" placeholder="MM" inputmode="numeric" pattern="[0-9]*" max="12" required autocomplete="off" class="form-control">--><select name="renewal_mm" class="form-control" id="inputmm" aria-label="Month">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                          <!-- <label for="inputmm">MM</label>-->
                        </div>
                      </div>
                      <div class="col col-lg-6">
                        <div class="form-label-group">
                          <!-- <input name="renewal_yyyy" id="inputyy" placeholder="YYYY" inputmode="numeric" pattern="[0-9]*" min="2020" max="2050" required autocomplete="off" class="form-control">-->
                          <select name="renewal_yyyy" class="form-control" id="inputyy" aria-label="Year">
                            <option value="">Year</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                          </select>
                          <!--  <label for="inputyy">YYYY</label>-->
                        </div>
                      </div>
                    </div>
                  </div>


                </div>

                <div id="step3" class="tab">

                  <p class="tab-title">How often would you like your business cleaned per week?</p>
                  <!-- Form Input -->
                  <div class="form-group position-relative">

                    <div class="form-row energy_container group_container">
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="cleaned_time" id="cleaned_time1" value="Once" onClick="autoNext()" required>
                          <span class="checkmark">
                            Once
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="cleaned_time" id="cleaned_time2" value="Three" onClick="autoNext()">
                          <span class="checkmark">
                            Three
                          </span>
                        </label>
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="radio_container with-icon">
                          <input type="radio" name="cleaned_time" id="cleaned_time3" value="Five+" onClick="autoNext()">
                          <span class="checkmark">
                            Five+
                          </span>
                        </label>
                      </div>
                    </div>

                  </div>


                </div>

                <!--- Step --->
                <div id="step4" class="tab">

                  <p class="tab-title">Tell us a little bit about your business</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="row mb-md-3">
                      <div class="col-12 col-md-6">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required>
                          <label for="inputCompany">Company Name</label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control">
                          <label for="inputPostcode">Postcode</label>
                        </div>
                      </div>
                    </div>

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

                  <div class="act-btn"><button type="button" id="prevBtn" onClick="nextPrev(-1)" class="btn btn-link text-black-50" tabindex="-1">
                      < Back</button>
                        <button type="button" id="nextBtn" onClick="nextPrev(1)" class="btn-main btn-submit" tabindex="0">Continue</button></div>
                </div>
              </div>
            </form>


          </div>

        </div>
      </div>
    </section>

    <!--
<section class="desktop_logo single-column pb-5 steps">
	<div class="container">
	<h2 class="text-center pb-4">Businesses Our Partners Have Worked With</h2>
		<div class="row">
			<div class="col-12">
				<div class="logos-slider slick-slider">
				  <div><img src="logos/NHS.png" class="img-fluid"></div>
				  <div><img src="logos/Specsavers.png" class="img-fluid"></div>
				  <div><img src="logos/Hyundai.png" class="img-fluid"></div>
				  <div><img src="logos/Volvo-1.png" class="img-fluid"></div>
				  
				</div>
			</div>
		</div>
	</div>
</section>
-->
    <section class="service-section">
      <div class="container">
        <h2 class="text-center pb-4">Our Partners work with:</h2>
        <div class="row">
          <div class="col-12">
            <div class="logos-slider slick-slider slick-initialized">
              <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 836px; transform: translate3d(0px, 0px, 0px);">
                  <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 209px;" tabindex="0"><img src="logos/NHS.png" class="img-fluid"></div>
                  <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 209px;" tabindex="0"><img src="logos/Specsavers.png" class="img-fluid"></div>
                  <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 209px;" tabindex="0"><img src="logos/Hyundai.png" class="img-fluid"></div>
                  <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 209px;" tabindex="0"><img src="logos/Volvo-1.png" class="img-fluid"></div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="service-section">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <h2>Types of cleaning services offered</h2>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Offices</h3>
              <p>Offices of all sizes cleaned under Covid-19</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Pubs, Bars, Restaurants</h3>
              <p>Professional cleaning services for pubs, restaurants and bars</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Retail</h3>
              <p>Keep your customers happy with a clean and disinfected shop</p>
            </div>
          </div>


          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Schools, Nurseries, Universities</h3>
              <p>We care about protecting our youths against germs and bacteria</p>
            </div>
          </div>


          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Health & Fitness</h3>
              <p>Avoid bacteria in fitness studios and other leisure venues</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Medical Facilities</h3>
              <p>We offer maximum hygiene in medical spaces</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Religious Facilities</h3>
              <p>Make your place of worship clean and safe</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="features-box">
              <h3>Other</h3>
              <p>Stadiums, hotels, auto dealerships, and more.</p>
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
                <h2>1. Fill in your details</h2>
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
                <h2>2. We find you professional cleaners near you</h2>
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
                <h2>3. Job done!</h2>
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
            <p>During these unprecedented times, it is more important than ever that we keep our working spaces clean and safe. We help UK businesses meet the hygiene standards based on COVID-19 guidelines by providing highly professional and cost-competitive cleaning services, no matter your sector or business size. We go the extra mile to make this quick, easy and convenient for you. Get in touch for a free quote today.</p>

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


            <h5>We compare award winning companies</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>We do all the work</h5>
          </div>

          <div class="col-12 col-md-4 col-lg-2 text-left text-md-center">

            <noscript><img src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" /></noscript>
            <img data-src="<?php echo $domain; ?>/assets/images/tick.svg" alt="Icon" title="Icon" width="44" class="lazyload blur-up" />


            <h5>Straight forward & helpful.</h5>
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
              <p class="quote">"Straight forward & helpful."</p>
              <p class="author mb-5">So nobody is over-paying for their companies commercial cleaning</p>
              <p class="mb-4">We understand how SME’s have a small margin for error in their funds and that having the most efficient option all round is very important. Finding a commercial cleaning company has never been easier. On some occasions, businesses may look to switch cleaning companies due to a poor quality service but worry as it's seen as time-consuming and complex - but we do it differently. We’ve cut all the unnecessary details out of our form and we contact you directly, so you don’t have to worry about a thing.</p>
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
            <p>BusinessCostComparison.co.uk helps you find and compare the best products and services from 100's of approved partners.</p>
            <p>We have thousands of happy customers nationwide and fully understand the need for small and medium size businesses to keep costs under control.</p>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-xs-12">
          <div class="footer__item">
            <h6>Get in touch</h6>
            <p>Business Cost Comparison<br>
              Northern Design Centre,<br>
              Abbott's Hill,<br>
              Gateshead NE8 3DF</p>
            <p class="mb-0"><span class="text-green">Phone:</span> <a href="tel:03300589414">03300 589 414</a></p>
            <p><span class="text-green">Email:</span> <a href="mailto:info@businesscostcomparison.co.uk">info@businesscostcomparison.co.uk</a></p>
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
            <a href="https://www.facebook.com/businesscostcomparison" rel="Follow us on Facebook" target="_blank"><img src="<?php echo $domain; ?>/assets/images/facebook.svg" width="48" height="48"></a>
            <a href="https://twitter.com/BizCostComp" rel="Follow us on Twitter" target="_blank"><img src="<?php echo $domain; ?>/assets/images/twitter.svg" width="48" height="48"></a>
            <a href="https://www.linkedin.com/company/business-cost-comparison/" rel="Follow us on Linkedin" target="_blank"><img src="<?php echo $domain; ?>/assets/images/linkedin.svg" width="48" height="48"></a>
            <a href="https://www.instagram.com/businesscostcomparison/" rel="Follow us on instagram" target="_blank"><img src="<?php echo $domain; ?>/assets/images/instagram.svg" width="48" height="48"></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-lg-8 mx-auto text-lg-center">
          <div class="footer__item">
            <p>&copy; 2020 Business Cost Comparison.</p>
            <p class="mb-0">You can change your mind at any time but, for now, we will assume you are happy for us to store and access cookies on your device for the purposes described. <a href="<?php echo $domain; ?>/cookies/">Cookie Policy</a> / <a href="<?php echo $domain; ?>/privacy-policy/">Read Policy & T&C's</a></p>
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

  <script src="<?php echo $domain; ?>/assets/js/form-cleaning2.js" defer></script>


  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>