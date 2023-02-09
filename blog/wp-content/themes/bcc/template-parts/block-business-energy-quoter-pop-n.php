<?php

/*
    * Overrides 16 April 19 - Pop Creative
    *
    * Hey, to whoever's going to be working here next. Tariq's asked us to update the /business-energy-quoter/ page for a split test.
    *
    * I didn't want to mess with the existing structure so I've bundled the css/js and structure in this one template so you can choose what to do with the assets.
    *
    * Thanks,
    * Tim
    *
    * timord@popcreative.co.uk
    */

?>

<style>
    /* Reuseable components */
    .page-id-1669 ul.checked-list {
        padding-left: 50px;
        list-style: none;
        line-height: 1.4;
    }

    .page-id-1669 ul.checked-list li {
        position: relative;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .page-id-1669 ul.checked-list li:before {
        content: '\f00c';
        font-family: FontAwesome;
        color: #FFF;
        font-size: 10px;
        padding: 5px 7px;
        background: #00a853;
        border-radius: 50%;
        top: 0px;
        left: -50px;
        position: absolute;
    }

    .page-id-1669 ul.checked-list.has-title li:before {
        top: 10px;
    }

    .page-id-1669 ul.checked-list li .title {
        font-size: 20px;
        color: #00a853;
        margin-bottom: 5px;
    }


    /* Top hero section with form */
    .page-id-1669 .native-form {
        background-image: url('<?php echo $domain; ?>/wp-content/uploads/2019/04/bcc-energy-top-banner.jpg');
    }

    .page-id-1669 .native-form #nrg_quoteform .container {
        padding: 0;
    }

    .page-id-1669 .native-form .quote-2 .bullet-holder {
        padding: 0;
    }

    .page-id-1669 .native-form .quote-2 .bullet-holder h1 {
        font-size: 1.25em;
        font-weight: 300;
        margin-bottom: 50px;
    }

    .page-id-1669 .native-form .step-lead-header {
        position: relative;
        border-radius: 0;
        margin-top: 30px;
    }

    .page-id-1669 .native-form .step-lead-header:before {
        background-image: none;
        position: absolute;
        content: "We'll beat any quote";
        top: -35px;
        left: 0;
        right: 0;
        width: 100%;
        height: auto;
        background-color: #000b69;
        color: #FFF;
        padding: 10px 5px;
    }

    .page-id-1669 .native-form .step-lead-header p {
        display: none;
    }

    .page-id-1669 .native-form .step-lead-position-item.step-active {
        background-color: #00a853;
    }

    .page-id-1669 .native-form #nrg_step1 .step-lead-action .step-lead-btn.next-btn {
        float: none;
    }

    .page-id-1669 .native-form .step-lead-row {
        border-radius: 0;
        padding-bottom: 15px;
    }



    /* Supplier logos banner section */
    .page-id-1669 .supplier-logos-banner {
        padding: 3em 0;
    }

    .page-id-1669 .supplier-logos-banner .supplier-logos-wrapper {
        overflow-x: auto;
    }


    /* Reasons to switch tariff section */
    .page-id-1669 .why-switch-tariffs {
        padding: 3em 0;
    }

    .page-id-1669 .why-switch-tariffs .reasons-to-switch h2 {
        margin-bottom: 1.5em;
    }


    /* Trust pilot widget */
    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    .page-id-1669 .trust-pilot-widget {
        background-color: #FFF;
        text-align: center;
        border: 1px solid #EEE;
    }

    .page-id-1669 .trust-pilot-widget .header {
        padding: 1em 3em;
    }

    .page-id-1669 .trust-pilot-widget .review-slides {
        position: relative;
        margin: auto;
        padding: 0 0.5em 2em 0.5em;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .slide {
        display: none;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .slide .quote {
        font-style: italic;
        font-size: 19px;
        height: 130px;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .slide .quote.big-quote {
        font-size: 18px;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .slide .reviewer {
        display: block;
        margin-bottom: 30px;
        color: #00a853;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .dot {
        /*cursor: pointer;*/
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #FFF;
        border: 1px solid #CCC;
        border-radius: 50%;
        display: inline-block;
        -webkit-transition: background-color 0.6s ease;
        -o-transition: background-color 0.6s ease;
        transition: background-color 0.6s ease;
    }

    .page-id-1669 .trust-pilot-widget .review-slides .dot.active {
        background-color: #00a853;
        border: 1px solid #00a853;
    }

    .page-id-1669 .trust-pilot-widget .footer {
        background-color: #499b49;
        padding: 2em 3em;
        color: #FFF;
    }

    .page-id-1669 .trust-pilot-widget .footer .stars {
        margin: 10px 0 8px 0;
    }

    .page-id-1669 .trust-pilot-widget .footer .stars .star {
        display: inline-block;
        padding: 1px 5px;
        background: #3c8348;
    }


    /* Energy Saving FAQs section */
    .page-id-1669 .energy-saving-faqs {
        padding: 3em 0;
        margin-bottom: 60px;
    }

    .page-id-1669 .energy-saving-faqs h2 {
        display: block;
        margin-bottom: 1em;
        padding-bottom: 1em;
        border-bottom: 1px solid #EEE;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -webkit-box-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        -webkit-box-pack: justify;
        justify-content: space-between;
        cursor: pointer;
        border: none;
        outline: none;
        width: 100%;
        text-align: left;
        background-color: #FFF;
        padding: 10px 0;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion h3 {
        display: inline-block;
        font-size: 1.25em;
        color: #00a853;
        max-width: 80%;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion .icon {
        display: inline-block;
        position: relative;
        background-color: #00a853;
        color: #FFF;
        border-radius: 50%;
        width: 35px;
        height: 35px;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion .icon:before {
        content: "+";
        position: absolute;
        font-size: 20px;
        top: 2px;
        left: 12px;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion.active .icon:before {
        content: "-";
        top: -4px;
        left: 14px;
        font-size: 26px;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion.active .icon,
    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion:hover .icon {
        background-color: #000b69;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .panel {
        display: none;
        padding: 0 60px 15px 0;
        background-color: #FFF;
        overflow: hidden;
        text-align: left;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .panel p {
        font-size: 16px;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .panel a {
        color: #00a853;
        text-decoration: underline;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion-block {
        border-bottom: 1px solid #EEE;
    }

    .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion.active+.panel {
        display: block !important;
    }

    /* Bottom energy CTA banner */
    .page-id-1669 .bottom-energy-cta-banner {
        padding: 6em 0;
        background-image: url('<?php echo $domain; ?>/wp-content/uploads/2019/04/bottom-cta-banner-bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }

    .page-id-1669 .bottom-energy-cta-banner .text-overlay {
        text-align: center;
    }

    .page-id-1669 .bottom-energy-cta-banner .text-overlay h3 {
        max-width: 580px;
        color: #FFF;
        margin: 0 auto 30px auto;
        font-size: 3em;
    }

    .page-id-1669 .bottom-energy-cta-banner .text-overlay .btn {
        font-size: 16px;
        padding: 1.25em 4.5em;
        border-radius: 60px;
    }

    /* Styles above 'md' breakpoint */
    @media(min-width: 768px) {

        /* Top hero section with form */
        .page-id-1669 .native-form .quote-2 .bullet-holder ul li {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .page-id-1669 .native-form #nrg_step1 .step-lead-action .step-lead-btn.next-btn {
            padding: 1.5em 5em;
        }


        /* Trust pilot widget */
        .page-id-1669 .trust-pilot-widget-bg {
            background-image: url('<?php echo $domain; ?>/wp-content/uploads/2019/04/trust-pilot-widget-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
            padding: 4em;
        }

        .page-id-1669 .trust-pilot-widget {
            border: 0;
        }

        .page-id-1669 .trust-pilot-widget .review-slides {
            padding: 0 3em 2em 3em;
        }

        .page-id-1669 .trust-pilot-widget .review-slides .slide .quote {
            font-size: 26px;
        }

        .page-id-1669 .trust-pilot-widget .review-slides .slide .quote.big-quote {
            font-size: 20px;
        }


        /* Energy Saving FAQs section */
        .page-id-1669 .energy-saving-faqs .faqs-accordion-block .accordion h3 {
            font-size: 1.5em;
        }
    }


    /* Styles above 'lg' breakpoint */
    @media(min-width: 992px) {

        /* Top hero section with form */
        .page-id-1669 .native-form {
            padding: 30px 0;
        }

        .page-id-1669 .native-form .quote-2 .bullet-holder h1 {
            font-size: 1.45em;
            max-width: 400px;
        }

        .page-id-1669 .native-form .step-lead-header {
            margin-top: 0;
        }

        .page-id-1669 .native-form .step-lead-header h1 {
            padding: 0 2.5em;
        }

        .page-id-1669 .native-form .step-lead-header:before {
            background-image: url('<?php echo $domain; ?>/wp-content/uploads/2019/04/beat-any-quote-badge.png');
            position: absolute;
            background-size: 120px 120px;
            width: 120px;
            height: 120px;
            top: -60px;
            right: -55px;
            content: "";
            left: auto;
            background-color: transparent;
        }

        .page-id-1669 .native-form #nrg_step1 .step-lead-action .step-lead-btn.next-btn {
            padding: 1.5em 5em;
        }


        /* Supplier logos banner section */
        .page-id-1669 .supplier-logos-banner .supplier-logos-wrapper img {
            max-width: 100%;
            height: auto;
        }

        /* Trust pilot widget */
        .page-id-1669 .trust-pilot-widget .review-slides .slide .quote {
            height: 125px;
        }


        /* Reasons to switch tariff section */
        .page-id-1669 .why-switch-tariffs .reasons-to-switch {
            padding: 3em;
        }


        /* Bottom energy CTA banner */
        .page-id-1669 .bottom-energy-cta-banner {
            padding: 10em 0;
        }
    }
</style>

<section id="quoteform" class="native-form">
    <div class="container quote-2">
        <div class="row align-items-lg-center">
            <div class="col-lg-6 order-lg-2">
                <?php get_template_part('template-parts/block', 'NATIONform1'); ?>
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="bullet-holder">
                    <h1>
                        Search The Market For
                        Business Energy Quotes
                        Search Over 20 Suppliers
                    </h1>

                    <ul class="checked-list">
                        <li>We compare the Big 6 &amp; local suppliers</li>
                        <li>Nationwide coverage</li>
                        <li>Cheaper than going direct</li>
                        <li>Premium switching service guaranteed</li>
                        <li>Over 10,000 businesses trust us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="supplier-logos-banner">
    <div class="container">
        <div class="supplier-logos-wrapper">
            <img src="<?php echo content_url('/uploads/2019/04/banner-of-supplier-logos.png') ?>" alt="Supplier Logos">
        </div>
    </div>
</section>


<section class="why-switch-tariffs">
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

<?php

/*
    * I didn't want to edit the original form so I'm overwriting the main heading text underneath.
    * I'm also removing the word 'Step' in the 5 step process.
    */

?>

<script>
    // Top hero section with form
    var energyQuoteFormTitle = document.querySelector('.page-id-1669 .step-lead-header h1');
    var formStepBtns = document.querySelectorAll('.page-id-1669 .step-lead-position a');
    var firstNextStepFormBtn = document.querySelector('.page-id-1669 #nrg_step1 .step-lead-action a.step-lead-btn.next-btn');

    energyQuoteFormTitle.innerHTML = 'Search Over 20 Suppliers<br /> in Under <span class="brand-color">45 Seconds</span>';

    formStepBtns.forEach(function(btn) {
        var removeStepWording = btn.innerText.replace('Step ', '');

        btn.innerText = removeStepWording;
    });

    firstNextStepFormBtn.innerText = 'NEXT';


    // Slider functionality for Trustpilot reviews
    // var slideIndex = 1;
    // showSlides(slideIndex);

    var slideIndex = 0;
    showSlides();

    // Pager controls
    function currentSlide(n) {
        //showSlides(slideIndex = n);
    }

    // function showSlides(n) {
    //     var i;
    //     var slides = document.querySelectorAll(".page-id-1669 .review-slides .slide");
    //     var dots = document.querySelectorAll(".page-id-1669 .review-slides .dot");
    //     if (n > slides.length) {slideIndex = 1}
    //     if (n < 1) {slideIndex = slides.length}
    //     for (i = 0; i < slides.length; i++) {
    //         slides[i].style.display = "none";
    //     }
    //     for (i = 0; i < dots.length; i++) {
    //         dots[i].className = dots[i].className.replace(" active", "");
    //     }
    //     slides[slideIndex-1].style.display = "block";
    //     dots[slideIndex-1].className += " active";
    // }


    function showSlides() {
        var i;
        var slides = document.querySelectorAll(".page-id-1669 .review-slides .slide");
        var dots = document.querySelectorAll(".page-id-1669 .review-slides .dot");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";

        setTimeout(showSlides, 6000);
    }


    // Accordion functionality for FAQ section
    var acc = document.querySelectorAll(".energy-saving-faqs .faqs-accordion-block .accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            document.querySelector(".energy-saving-faqs .faqs-accordion-block .accordion.active").classList.remove('active');
            this.classList.toggle("active");
        });
    }
</script>