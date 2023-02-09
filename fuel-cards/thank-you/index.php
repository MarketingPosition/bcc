<?php
include "../../_variables.php";
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

  <header class="header position-absolute">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand d-none d-md-block" href="<?php echo $domain; ?>/">
        <img src="<?php echo $domain; ?>/assets/images/logo-bcc.svg" width="182" alt="BusinessCostComparison" class="mr-3" />
        <img src="<?php echo $domain; ?>/assets/images/tp-logo-white.svg" height="50" alt="BusinessCostComparison" class="d-none lazyload" />
      </a>

      <a class="navbar-brand d-md-none" href="<?php echo $domain; ?>/">
        <img src="<?php echo $domain; ?>/assets/images/logo-bcc.svg" height="40" alt="BusinessCostComparison" class="d-md-none mr-2" />
        <img src="<?php echo $domain; ?>/assets/images/tp-logo-white.svg" height="40" alt="BusinessCostComparison" class="d-none lazyload" />
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
  </header>

  <main id="content">
    <section class="hero hero--thanks" style="height: 200px"></section>

    <section class="single-column">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto text-center">
            <div class="thank-you-message">
              <h2 class="text-body">Thank You</h2>
              <h6>You will get an email confirmation.</h6>
              <p>
                Once we have verified your details, our recommended partner
                will contact you within 24 hours to discuss your requirements.
              </p>
            </div>
          </div>
        </div>
        <div class="cards w-75 mx-auto">
          <div class="card text-center bg-primary mb-4">
            <div class="card-body py-5">
              <h3 class="card-text h2 font-weight-bold text-white">
                <em>NEXT STEP:</em>
              </h3>
              <h2 class="card-title text-white">
                Save up to 40% on your business utility bill
              </h2>
              <p class="card-text text-white">
                Switching providers could have you saving money each month on
                your business electricity and gas. Let's take a look at what
                you could save...
              </p>
              <a href="<?php echo $domain; ?>/business-energy" class="btn btn-main">Show me my savings!</a>
            </div>
          </div>
          <div class="funnel-block row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-body text-center">
                  <div class="products__item__image bg-primary">
                    <noscript><img src="<?php echo $domain; ?>/assets/images/bulb-icon.svg" alt="Business Energy Savings" title="Business Energy Savings" width="35" /></noscript>
                    <img data-src="<?php echo $domain; ?>/assets/images/bulb-icon.svg" alt="Business Energy Savings" title="Business Energy Savings" width="35" class="lazyload blur-up" />
                  </div>
                  <h5 class="card-title">
                    Have You Considered Business Healthcare?
                  </h5>
                  <p>
                    Want to do more for your employees? We help hundreds of
                    small, medium and corporate sized businesses. by providing
                    no obligation quotations on private healthcare insurance
                    and healthcare solutions.
                  </p>
                  <a href="<?php echo $domain; ?>/business-healthcare-insurance" class="btn btn-main stretched-link">Find Out More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center pt-4">
            <h2>Why stop there?</h2>
            <p class="mb-3">
              You could also save even more on your business costs with our
              other services too!
            </p>
            <h6>Quick and simple – choose from below...</h6>

            <div class="col-lg-6 mx-auto mb-4">
              <div class="card">
                <div class="card-body text-center">
                  <div class="products__item__image bg-primary">
                    <noscript><img src="<?php echo $domain; ?>/assets/images/screen-icon.svg" alt="Business Marketing" title="Business Marketing" width="35" /></noscript>
                    <img data-src="<?php echo $domain; ?>/assets/images/screen-icon.svg" alt="Business Marketing" title="Business Marketing" width="35" class="lazyload blur-up" />
                  </div>
                  <h5 class="card-title">Business Marketing</h5>
                  <a href="<?php echo $domain; ?>/business-marketing" class="btn btn-main stretched-link">Get Quote</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mx-auto mb-4">
              <div class="card h-100">
                <div class="card-body text-center">
                  <div class="products__item__image bg-primary">
                    <noscript><img src="<?php echo $domain; ?>/assets/images/card-icon.svg" alt="Business Card Payment Solutions" title="Business Card Payment Solutions" width="35" /></noscript>
                    <img data-src="<?php echo $domain; ?>/assets/images/card-icon.svg" alt="Business Card Payment Solutions" title="Business Card Payment Solutions" width="35" class="lazyload blur-up" />
                  </div>
                  <h5 class="card-title">
                    Business Card Payment Solutions
                  </h5>
                  <a href="<?php echo $domain; ?>/business-card-payments" class="btn btn-main stretched-link">Get Quote</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mx-auto mb-4">
              <div class="card h-100">
                <div class="card-body text-center">
                  <div class="products__item__image bg-primary">
                    <noscript><img src="<?php echo $domain; ?>/assets/images/card-icon.svg" alt="Business Loans" title="Business Loans" width="35" /></noscript>
                    <img data-src="<?php echo $domain; ?>/assets/images/card-icon.svg" alt="Business Loans" title="Business Loans" width="35" class="lazyload blur-up" />
                  </div>
                  <h5 class="card-title">Business Loans</h5>
                  <a href="<?php echo $domain; ?>/business-loans" class="btn btn-main stretched-link">Check Today!</a>
                </div>
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

  <script src="<?php echo $domain; ?>/assets/js/utm_form-1.2.0.min.js" defer></script>

  <script src="<?php echo $domain; ?>/assets/js/main.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->
</body>

</html>