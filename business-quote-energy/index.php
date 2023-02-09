<?php session_start(); ?>
<?php include_once('header.php'); ?>

<header class="py-4 text-center">
<a href="/business-quote-energy/"><img src="assets/images/BCC-LOGO-pound-blue.png" class="img-fluid" alt="Energy Saving Compare" width="200"></a>
</header>

<section class="top-banner p-0">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h6>The UK's <strong>Number 1</strong> Energy Saving Comparison Site</h6>
			</div>
		</div>
	</div>
</section>

<section id="hero" class="hero mb-5">
  <div class="container form-wrapper">

    <div class="row py-4">
      <div class="col-12">
        <h1 class="text-center">Search The Market For Business Energy Quotes</h1>
        <div class="subhead text-center font-20">
          Search over 20 suppliers in under 60 seconds
        </div>
      </div>
    </div>

    <div class="row usp-top">
      <div class="col-sm-6 col-md-3 usp-top__item">
        <img src="/business-quote-energy/assets/images/tick.svg" alt="USP Checkbox" width="25"> <p>Benefit From Fixed Prices</p>
      </div>
      <div class="col-sm-6 col-md-3 usp-top__item">
        <img src="/business-quote-energy/assets/images/tick.svg" alt="USP Checkbox" width="25"> <p>Effortless Switching Process</p>
      </div>
      <div class="col-sm-6 col-md-3 usp-top__item">
        <img src="/business-quote-energy/assets/images/tick.svg" alt="USP Checkbox" width="25"> <p>Make Massive Savings</p>
      </div>
      <div class="col-sm-6 col-md-3 usp-top__item">
        <img src="/business-quote-energy/assets/images/tick.svg" alt="USP Checkbox" width="25"> <p>Let Us Do All The Hard Work</p>
      </div>
    </div>

    <div class="row p-0">
    	<div class="col-12">
    		<?php include("./parts/slider.php");  ?>
    	</div>
    </div>


    <div class="row">
      <div class="col-12">
        <?php include_once("parts/form.php"); ?>
      </div>
    </div>

  </div>
</section>

<section class="why-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <img class="d-md-none img-fluid" src="assets/images/energy-img.jpg" alt="Why Choose Us Image">
      </div>
      <div class="col-md-6 why-section_bg">
        <h2>Why Choose Us?</h2>
        <ul class="bullets">
          <li>Over 10,000 happy customers</li>
          <li>We offer fixed prices</li>
          <li>We compare over 20 energy suppliers</li>
          <li>Switching is easier than you think.</li>
          <li>Sit back and start saving!</li>
          <li>We do all the work</li>
        </ul>
        <?php include ("parts/button.php"); ?>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <h2>We’ve tried to make <span class="highlight">switching as easy as possible,</span> so nobody is over-paying for their company energy.</h2>
        <p>A lot of companies, from SMEs to huge multinational conglomerates, don’t look at their energy alternatives. Some think it’s complicated, extremely time-consuming and definitely not worth the hassle, which is untrue.<br /><br />
When you’re spending £5,000+ as a small to medium-sized business, finding a perfect fit for your company is essential. We go the extra mile to make your switch quick, easy and convenient.<br /><br />
We’ve cut any unnecessary details out of our form, and we contact you directly, so you don’t have to worry about a thing. Our customer service team are always one call away and are always ready to answer any questions you may have during the process. During the switch, the company can also run as normal, because your new provider contacts the old one to make it fast and easy for everyone involved, especially you.</p>
        <?php include ("parts/button.php"); ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-light-blue">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center width-600">3 Simple Steps to Cheaper, Affordable Business Energy Rates.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">

        <div class="blurb">
          <img class="blurb-img-top" src="assets/images/step1.png" alt="Step 1">
          <div class="blurb-body">
            <h5 class="blurb-title">Complete your details</h5>
            <p class="blurb-text">Fill in our form in under a minute</p>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <div class="blurb">
          <img class="blurb-img-top" src="assets/images/step2.png" alt="Step 2">
          <div class="blurb-body">
            <h5 class="blurb-title">Receive a quote</h5>
            <p class="blurb-text">We will be in touch</p>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <div class="blurb">
          <img class="blurb-img-top" src="assets/images/step3.png" alt="Step 3">
          <div class="blurb-body">
            <h5 class="blurb-title">Make the switch</h5>
            <p class="blurb-text">Confirm and we’ll take care of the rest</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h2>Switching is <span class="highlight">easier</span><br /> than you think.</h2>
         <p>A lot of companies also stick to what they know.<br /><br />
          The “Big 6” have been running the market for a while now, and with the growing popularity of comparison sites, times are changing. The market is slowly being shared as more and more are learning about their options, which is only a good thing. Competitiveness in the industry keeps prices low, and gives everyone the choice to find their favourite provider.<br /><br />
          Truth is, smaller energy companies can often produce much better value for money, and have much better customer service. See what works for you.
          </p>
          <?php include("./parts/button.php"); ?>
        </div>
       <div class="col-md-6">
         <img src="assets/images/footer-image.jpg" class="img-fluid" alt="Cta Image Footer">
       </div>
     </div>
   </div>
</section>



<?php include_once('footer.php'); ?>
