<?php
include "../_variables.php";
$page_name = "Business Insurance - Business Cost Comparison";
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
    <section class="hero d-none d-md-block hero--card headline">
      <div class="container h-100">
        <div class="row no-gutters">
          <div class="hero__title">
            <h1>Business Insurance</h1>
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
            <form id="pform" action="<?php echo $domain; ?>/form/lead-insurance.php" method="post">
              <div id="loading" style="display: none">
                <div class="d-flex align-items-center">
                  <strong>Please wait while we process your data...</strong>
                  <div class="spinner-border text-light ml-2" role="status" aria-hidden="true"></div>
                </div>
              </div>
              <input type="hidden" name="redirect_url" value="<?php echo $domain; ?>/business-insurance/thank-you/" />

              <div class="pform-title">
                <h2>Search The Market For Business Insurance Quotes</h2>
                <h6>Thousands of happy customers nationwide</h6>
              </div>

              <div id="pformholder">
                <!-- Progress Bar -->
                <div id="progress" class="progress">
                  <span class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                </div>

                <!-- Step -->
                <div id="step0" class="tab">
                  <div class="form-group position-relative">
                    <p class="tab-title">I would like a quote for:</p>
                    <div class="form-row cp_container">
                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Commercial Combined Insurance" onClick="nextPrev(1)" required />
                          <span class="checkmark">Commercial Combined Insurance</span>
                        </label>
                      </div>
                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Aesthetics, Beauty & Cosmetic Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Aesthetics, Beauty & Cosmetic Insurance</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Cyber Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Cyber Insurance</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Key Man Insurance & Business Protection" onClick="nextPrev(1)" />
                          <span class="checkmark">Key Man Insurance & Business Protection</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Motor Trade Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Motor Trade Insurance</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Property Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Property Insurance</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Pub, Restaurant, Hotel, Takeaway & Nightclub Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Pub, Restaurant, Hotel, Takeaway & Nightclub
                            Insurance</span>
                        </label>
                      </div>

                      <div class="col-6 col-lg-6">
                        <label class="radio_container">
                          <input type="radio" name="pay_1" value="Retailers Insurance" onClick="nextPrev(1)" />
                          <span class="checkmark">Retailers Insurance</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="step2" class="tab">
                  <p class="tab-title">My details are</p>

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
                          <input type="text" name="last_name" id="inputLname" class="form-control" placeholder="Surname" required />
                          <label for="inputLname">Surname</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-md-3">
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input name="postcode" id="inputPostcode" placeholder="Postcode" maxlength="8" required class="form-control" />
                          <label for="inputPostcode">Postcode</label>
                        </div>
                      </div>
                      <div class="col-12 col-md">
                        <div class="form-label-group">
                          <input type="text" name="company" id="inputCompany" class="form-control" placeholder="Company Name" required />
                          <label for="inputCompany">Company Name</label>
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

                <div id="step1" class="tab">
                  <p class="tab-title">What I'm looking for is</p>

                  <!-- Form Input -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <textarea name="message" id="message" class="form-control" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!--- Step --->

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

    <!--

 <section class="reviews_sm_new">
     <div class="container">
          <div class="col-md-12">
		     <h3 class="text-center">How Customers Rate Our Service</h3>
		 </div>
            <div class="rating_widget">
                 <div class="trustpilot-widget" data-locale="en-GB" data-template-id="539ad60defb9600b94d7df2c" data-businessunit-id="5ea848eccb64ec000115ec6f" data-style-height="630px" data-style-width="100%" data-theme="light" data-stars="4,5"> <a href="https://uk.trustpilot.com/review/cash4gold-now.com" target="_blank" rel="noopener">Trustpilot</a></div>
            </div>
		 
		 
    
     </div>
 </section>
-->

    <section class="single-column">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto text-center">
            <p>
              Business Cost Comparison has a job of saving you money on
              private business insurance. All over the UK, people are
              switching their business insurance providers to save money, so
              we've built partnerships with insurers to save you from wasting
              your time price-hunting.
            </p>
            <p>
              We go the extra mile to make your search short and simple. We've
              cut any unnecessary details out of our contact form, and we
              arrange for your chosen service provider to call you directly,
              so you don't have to think about doing any of the research
              yourself.
            </p>
            <p>
              Our customer service team is always one call away, and are
              always ready to answer any questions you may have during the
              process.
            </p>
            <p>
              Below, you'll find a list of specific policies. That way, you
              can decide in your own time what fits your needs:
            </p>
            <!--
  <h3>Aesthetics, Beauty &amp; Cosmetic Insurance</h3>
  <p>Aesthetics, Beauty and Cosmetic Insurance is taken out to protect staff and clients from the
  usual risks in this industry, as well as more general issues like theft. This can be tailor-made for
  companies who work with make-up, hair, cosmetic surgery, tanning, tattoos and more.</p>
<h3>Commercial Combined Insurance</h3>
  <p>Commercial combined insurance is a more general form of cover, which protects you from a
  number of common risks and accidents. It can be personalised, but we see this as a good
  ‘one-size-fits-all' policy for small businesses especially. Because it's so flexible, it takes the least
  time to work out for everybody involved, making it the fastest and most convenient option.</p>
  <h3>Cyber Insurance</h3>
  <p>Cyber Insurance protects your business from technical problems, accidental or malicious. This
  includes things like data breaches, cyber-attacks, and general IT system crashes. This is
  calculated by metrics like loss of income, loss of reputation, or value of damaged systems. This
  can be personalised depending on your business's industry, or by how much cover you'd like.</p>
  <h3>Key Man Insurance &amp; Business Protection</h3>
  <p>If your business depends on a small group of highly-specialised staff, or one very important
  individual, this is the policy for you. Key Man or Key Person Insurance is a specific policy which
  protects a business from loss of income or expertise, in the event of an essential employee's
  death or illness. This includes cover for potential losses, recruitment costs and other
  complications that would appear if the Key Person is unable to work.</p>
  <h3>Motor Trade Insurance</h3>
  <p>Motor Trade Insurance provides cover to companies who are in the automotive industry,
  including those who buy, sell, repair or drive road vehicles of all kinds. This protects staff in
  vehicles, whether owned by the company or a client, and also includes general protection from
  things like equipment damage. This cover is highly personalised, so we'd recommend talking to
  one of our consultants about what exactly you need.</p>
  <h3>Property Insurance</h3>
  <p>Property Insurance covers your work building, but is customisable depending on your needs.
  These policies can range from protection from theft, natural damage due to extreme weather
  and more.</p>
  <h3>Pub, Restaurant, Hotel, Takeaway &amp; Nightclub Insurance</h3>
  <p>Pub, Restaurant, Hotel, Takeaway and Nightclub Insurance protects the hospitality industry from
  common risks and accidents. You can get financial protection from things like a customer injury,
  stock damage or theft. Pubs, restaurants and takeaways can have very different needs, so we
  let you pick which specific cover you'd like.</p>
 <h3>Retailers Insurance</h3>
  <p>Retailers' insurance policies can stop you from paying the price when something in your shop
  goes wrong. Damage to stock, shop floor damage and unforeseen customer claims can all be
  covered, depending on your policy.</p>
-->
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Aesthetics, Beauty &amp; Cosmetic Insurance</h3>
              <p>
                Aesthetics, Beauty and Cosmetic Insurance is taken out to
                protect staff and clients from the usual risks in this
                industry, as well as more general issues like theft. This can
                be tailor-made for companies who work with make-up, hair,
                cosmetic surgery, tanning, tattoos and more.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img13.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Commercial Combined Insurance</h3>
              <p>
                Commercial combined insurance is a more general form of cover,
                which protects you from a number of common risks and
                accidents. It can be personalised, but we see this as a good
                ‘one-size-fits-all' policy for small businesses especially.
                Because it's so flexible, it takes the least time to work out
                for everybody involved, making it the fastest and most
                convenient option.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img12.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Cyber Insurance</h3>
              <p>
                Cyber Insurance protects your business from technical
                problems, accidental or malicious. This includes things like
                data breaches, cyber-attacks, and general IT system crashes.
                This is calculated by metrics like loss of income, loss of
                reputation, or value of damaged systems. This can be
                personalised depending on your business's industry, or by how
                much cover you'd like.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img11.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Key Man Insurance & Business Protection</h3>
              <p>
                If your business depends on a small group of
                highly-specialised staff, or one very important individual,
                this is the policy for you. Key Man or Key Person Insurance is
                a specific policy which protects a business from loss of
                income or expertise, in the event of an essential employee's
                death or illness. This includes cover for potential losses,
                recruitment costs and other complications that would appear if
                the Key Person is unable to work.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img10.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Motor Trade Insurance</h3>
              <p>
                Motor Trade Insurance provides cover to companies who are in
                the automotive industry, including those who buy, sell, repair
                or drive road vehicles of all kinds. This protects staff in
                vehicles, whether owned by the company or a client, and also
                includes general protection from things like equipment damage.
                This cover is highly personalised, so we'd recommend talking
                to one of our consultants about what exactly you need.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img9.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Property Insurance</h3>
              <p>
                Property Insurance covers your work building, but is
                customisable depending on your needs. These policies can range
                from protection from theft, natural damage due to extreme
                weather and more.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img8.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Pub, Restaurant, Hotel, Takeaway & Nightclub Insurance</h3>
              <p>
                Pub, Restaurant, Hotel, Takeaway and Nightclub Insurance
                protects the hospitality industry from common risks and
                accidents. You can get financial protection from things like a
                customer injury, stock damage or theft. Pubs, restaurants and
                takeaways can have very different needs, so we let you pick
                which specific cover you'd like.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img7.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="row text-row">
          <div class="col-lg-7">
            <div class="text-col">
              <h3>Retailers Insurance</h3>
              <p>
                Retailers' insurance policies can stop you from paying the
                price when something in your shop goes wrong. Damage to stock,
                shop floor damage and unforeseen customer claims can all be
                covered, depending on your policy.
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="img-col">
              <img src="images/img6.jpg" alt="" />
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

  <script src="<?php echo $domain; ?>/assets/js/form-insurance.js" defer></script>

  <!-- TrustBox script -->
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <!-- End TrustBox script -->

  <style>
    .checkbox_container .checkmark,
    .radio_container .checkmark {
      min-height: 80px;
    }

    .pform-card-payment .tab {
      height: auto !important;
    }
  </style>
</body>

</html>