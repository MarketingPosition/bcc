<section class="form-ab">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col1" style="background-color: #F8F8F8;">
                <div class="title">
                    <h1 class="omnes">
                        <!--Search Over <span class="highlight">20 Suppliers</span><br />
              of Business Energy <br />
              in Under <span class='highlight'>45 Seconds</span>-->
                        <?php the_field('push_ab_title'); ?>
                    </h1>
                </div>

                <ul class="bullet_points">
                    <li>We compare the Big 6 & local suppliers</li>
                    <li>Nationwide coverage</li>
                    <li>Cheaper than going direct</li>
                </ul>

                <div class="ab_holder">
                    <?php get_template_part('template-parts/block', 'LEAPIform-A-B'); ?>
                </div>
            </div>
            <div class="col-lg-4 col2" style="background-color: #EEEEEE;">
                <div class="banner">
                    <div class="banner_top">
                        <p>UK's Independent Comparison Team</p>
                        <p>"Superb Service"</p>
                    </div>
                    <a href="https://uk.trustpilot.com/review/businesscostcomparison.co.uk" target="_blank">
                        <div class="trust">
                            <small class="reviews">
                                Trust score 9.3 | 1,700 reviews
                            </small>
                            <div class="the_stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <img src="<?php echo $domain; ?>/wp-content/uploads/2019/04/trustpilot-logo-white.png" alt="Trustpilot White Logo" width="85" height="auto">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="supplier-logos-banner" style="display: none;">
    <div class="container">
        <div class="supplier-logos-wrapper">
            <img src="<?php echo content_url('/uploads/2019/04/banner-of-supplier-logos.png') ?>" alt="Supplier Logos">
        </div>
    </div>
</section>


<section class="why-switch-tariffs" style="display: none;">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xl-6">
                <div class="reasons-to-switch">
                    <h2>Switching your energy tariff has never been easier!</h2>

                    <ul class="checked-list has-title">
                        <li>
                            <div class="title">It's easy</div>

                            We compare over dozens of business energy tariffs to offer the best deal and quality service available.
                        </li>

                        <li>
                            <div class="title">Guaranteed cheaper energy bills</div>

                            Our customers typically save on average 40% &amp; if we can't beat the price - we'll give you £1,000<sup>*</sup>
                        </li>

                        <li>
                            <div class="title">Simple Renewal Process</div>

                            We offer a hassle-free renewal, so you can save money every year!
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="trust-pilot-widget-bg">
                    <div class="trust-pilot-widget">
                        <div class="header">
                            <img src="<?php echo content_url('/uploads/2019/04/trustpilot-logo.png') ?>" alt="Trustpilot Logo" width="180" height="auto">
                        </div>

                        <div class="review-slides">
                            <div class="slide">
                                <p class="quote">
                                    "They have been incredibly accommodating and helpful I would recommend..."
                                </p>

                                <small class="reviewer">
                                    Paul Skevington - Owner Nectar Bar and Kitchen
                                </small>
                            </div>

                            <div class="slide">
                                <p class="quote">
                                    "No troubles at all.<br />We highly recommend them to anyone."
                                </p>

                                <small class="reviewer">
                                    Jay Kavanagh - MD Treds
                                </small>
                            </div>

                            <div class="slide">
                                <p class="quote big-quote">
                                    "A definite 5 stars.<br />I was dealt with in a polite and professional manner and have nothing but praise for the company."
                                </p>

                                <small class="reviewer">
                                    Anne Ridge - PA Push Group
                                </small>
                            </div>

                            <div class="pagers">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>

                        <div class="footer">
                            <small class="reviews-summary">
                                Trust score 9.3 | 1,700 reviews
                            </small>

                            <div class="stars">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>

                            <img src="<?php echo content_url('/uploads/2019/04/trustpilot-logo-white.png') ?>" alt="Trustpilot White Logo" width="85" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="energy-saving-faqs">
    <div class="container">
        <h2>Energy Saving FAQs</h2>

        <div class="faqs-accordion-block">
            <div class="accordion-block">
                <button class="accordion active">
                    <h3>How long will it take to switch?</h3>

                    <span class="icon"></span>
                </button>

                <div class="panel">
                    <p>
                        Once you've selected the best deal for you and confirmed your switch it takes between 4 and 6 weeks for your new contract to go live. We will notify your supplier and manage the process on your behalf.
                    </p>
                </div>
            </div>

            <div class="accordion-block">
                <button class="accordion">
                    <h3>Will my business be disrupted when I switch?</h3>

                    <span class="icon"></span>
                </button>

                <div class="panel">
                    <p>
                        The transfer is 100% efficient; your energy will not be cut off as a result of switching. We’ll liaise with your existing supplier and negotiate the switch on your behalf.
                    </p>
                </div>
            </div>

            <div class="accordion-block">
                <button class="accordion">
                    <h3>How much could I save by switching my energy provider?</h3>

                    <span class="icon"></span>
                </button>

                <div class="panel">
                    <p>
                        On average, our customers save over £1,000 per switch. What impacts such huge savings include usage, location and length of contract which we will review.
                    </p>

                    <p>
                        The best way to find out how much you can really save is to call our team on our free landline on 0333 344 7476 or complete our <a href="<?php echo $domain; ?>/business-energy-quoter#nrg_quoteform">comparison form</a> to start saving.
                    </p>
                </div>
            </div>

            <div class="accordion-block">
                <button class="accordion">
                    <h3>What do I have to do to switch my business energy supplier?</h3>

                    <span class="icon"></span>
                </button>

                <div class="panel">
                    <p>
                        Simply <a href="<?php echo $domain; ?>/business-energy-quoter#nrg_quoteform">compare suppliers</a> with our team of experts and choose the best deal. Once you're happy, we’ll take care of the rest.
                    </p>
                </div>
            </div>

            <div class="accordion-block">
                <button class="accordion">
                    <h3>Do energy prices change depending on your location?</h3>

                    <span class="icon"></span>
                </button>

                <div class="panel">
                    <p>
                        Yes. Electricity and gas prices vary depending on your region. Fortunately we compare the Big 6 and local suppliers so you not only save but receive a premium quality service too.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bottom-energy-cta-banner">
    <div class="container">
        <div class="text-overlay">
            <h3>Let us compare providers &amp; start saving you money</h3>

            <a class="btn" href="#nrg_quoteform">GET STARTED</a>
        </div>
    </div>
</section>