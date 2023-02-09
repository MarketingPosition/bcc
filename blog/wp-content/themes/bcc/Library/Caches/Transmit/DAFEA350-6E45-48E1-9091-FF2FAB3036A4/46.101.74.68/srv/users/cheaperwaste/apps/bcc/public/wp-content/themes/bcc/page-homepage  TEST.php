<?php

/**
 * Template Name: Homepage Test
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcctheme
 */

get_header();
?>

<?php
while (have_posts()) :
	the_post(); ?>

	<!-- Hero Section -->
	<section class="hero1">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hero-content">
						<h1 class="text-white">Helping SME’s & Startups <span class="nobr"><br>Get the Best Deal</span></h1>
						<p class="text-white">Price comparison for business</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Service Switcher -->

	<section class="services">
		<div class="container">
			<div class="tabs">
				<nav>
					<a class="icon1">Business Enery</a>
					<a class="icon2">Business Waste</a>
					<a class="icon3">Card Payments</a>
					<a class="icon4">Marketing</a>
					<a class="icon5" style="pointer-events: none;visibility: hidden;">Telecoms</a>
					<a class="icon6" style="pointer-events: none;visibility: hidden;">Coming Soon</a>
					<a class="icon6" style="pointer-events: none;visibility: Hidden;">Coming Soon</a>
				</nav>
				<!-- Business Energy Tab -->
				<div class="content">
					<div class="row">
						<div class="col-md-6">
							<h3>Business Energy</h3>
							<div class="bullets">
								<ul>
									<li>We compare 20+ energy suppliers</li>
									<li>Fast, Simple & Convenient</li>
									<li>We do it all</li>
								</ul>
							</div>
							<div class="button-wrapper">
								<a href="/business-energy-quote/" class="green-button">Get A Quote</a>
							</div>
						</div>
						<div class="col-md-6 col-energy">
							<p>"They have been incredibly<br>
								accommodating and helpful<br>
								I would recommend..."</p>
							<p class="author">Paul Skevington, Owner Nectar Bar and Kitchen</p>
							<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo">
						</div>
					</div>
				</div>
				<!-- Business Waste Tab -->
				<div class="content">
					<div class="row">
						<div class="col-md-6">
							<h3>Business Waste</h3>
							<div class="bullets">
								<ul>
									<li>We compare 20+ energy suppliers</li>
									<li>Fast, Simple & Convenient</li>
									<li>We do it all</li>
								</ul>
							</div>
							<div class="button-wrapper">
								<a href="/waste-collection/" class="green-button">Get A Quote</a>
							</div>
						</div>
						<div class="col-md-6 col-waste">
							<p>"I highly recommend this company.
								Business Cost Comparison found me
								the cheapest quote for my waste
								collections. The service is easy
								to use and very quick."</p>
							<p>Lucy</p>
							<a href="https://uk.trustpilot.com/users/5b05c6d34de5666d34c83fa8" target="_blank"><img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo"></a>
						</div>
					</div>
				</div>
				<!-- Card Payments Tab -->
				<div class="content">
					<div class="row">
						<div class="col-md-6">
							<h3>Card Payments</h3>
							<div class="bullets">
								<ul>
									<li>Most Affordable Rates</li>
									<li>Top Payment Provider Partners</li>
									<li>Simple Setup</li>
									<li>Latest Technology</li>
								</ul>
							</div>
							<div class="button-wrapper">
								<a href="/business-payment-quote/" class="green-button">Get A Quote</a>
							</div>
						</div>
						<div class="col-md-6 col-energy">
							<p>Great company to work with!</p>
							<p style="color: white;">Steven James</p>
							<a href="https://uk.trustpilot.com/users/5c8277c595ede5a837a2b126" target="_blank"><img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo"></a>
						</div>
					</div>
				</div>
				<!-- Marketing Tab -->
				<div class="content">
					<div class="row">
						<div class="col-md-6">
							<h3>Marketing</h3>
							<div class="bullets">
								<ul>
									<li>We work with highly accredited agencies</li>
									<li>20+ Years of experience in marketing</li>
									<li>Google Premium Partners</li>
									<li>Innovative with digital technology – Chatbots, VR, AR + more</li>
									<li>Transparent Business Relationships</li>
								</ul>
							</div>
							<div class="button-wrapper">
								<a href="/business-marketing-quote/" class="green-button">Get A Quote</a>
							</div>
						</div>
						<div class="col-md-6 col-waste">
							<p>Fast and reliable, managed to find me a supplier who was able to provide services to my rural area.</p>
							<p>Dave Weston</p>
							<a href="https://uk.trustpilot.com/users/5c8278e6f46be39dce34e4b4" target="_blank"><img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Mobile Accordion -->

	<section class="mobile-accordion">
		<dl class="accordion">
			<!-- Business Energy Tab -->
			<dt class="tab1"><a href="">Business Energy</a></dt>
			<dd>
				<h3>Business Energy</h3>
				<div class="bullets">
					<ul>
						<li>We compare 20+ energy suppliers</li>
						<li>Fast, Simple & Convenient</li>
						<li>We do it all</li>
					</ul>
				</div>
				<div class="accordion-mob-bgr mob-bgr-nrg">
					<h3>Find out how much<br>
						you could <strong>save</strong></h3>
					<div class="button-wrapper">
						<a href="/business-energy-quote/" class="green-button">Get A Quote</a>
					</div>
				</div>
			</dd>
			<!-- Business Waste Tab -->
			<dt class="tab2"><a href="">Business Waste</a></dt>
			<dd>
				<h3>Business Waste</h3>
				<div class="bullets">
					<ul>
						<li>We compare 20+ energy suppliers</li>
						<li>Fast, Simple & Convenient</li>
						<li>We do it all</li>
					</ul>
				</div>
				<div class="accordion-mob-bgr mob-bgr-waste">
					<h3>Find out how much<br>
						you could <strong>save</strong></h3>
					<div class="button-wrapper">
						<a href="/waste-collection/" class="green-button">Get A Quote</a>
					</div>
				</div>
			</dd>
			<!-- Card Payments Tab -->
			<dt class="tab3"><a href="">Card Payments</a></dt>
			<dd>
				<h3>Card Payments</h3>
				<div class="bullets">
					<ul>
						<li>Most Affordable Rates</li>
						<li>Top Payment Provider Partners</li>
						<li>Simple Setup</li>
						<li>Latest Technology</li>
					</ul>
				</div>
				<div class="accordion-mob-bgr mob-bgr-waste">
					<h3>Find out how much<br>
						you could <strong>save</strong></h3>
					<div class="button-wrapper">
						<a href="/business-payment-quote/" class="green-button">Get A Quote</a>
					</div>
				</div>
			</dd>
			<!-- Marketing Tab -->
			<dt class="tab4"><a href="">Marketing</a></dt>
			<dd>
				<h3>Marketing</h3>
				<div class="bullets">
					<ul>
						<li>We work with highly accredited agencies</li>
						<li>20+ Years of experience in marketing</li>
						<li>Google Premium Partners</li>
						<li>Innovative with digital technology – Chatbots, VR, AR + more</li>
						<li>Transparent Business Relationships</li>
					</ul>
				</div>
				<div class="accordion-mob-bgr mob-bgr-waste">
					<h3>Find out how much<br>
						you could <strong>save</strong></h3>
					<div class="button-wrapper">
						<a href="/business-marketing-quote/" class="green-button">Get A Quote</a>
					</div>
				</div>
			</dd>

		</dl>
	</section>

	<!-- Our Services -->

	<section class="how-we-work">
		<div class="container">
			<h2 class="mb-5">How we work</h2>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<h3>1. Submit our quote form</h3>
					<p>We’ve already created a short form, it<br>
						wont take long to complete. It’s all<br>
						simple details, like the service you<br>
						want and where you are in the world.</p>
				</div>
				<div class="col-lg-4 col-sm-6">
					<h3>2. We’ll look at all the options</h3>
					<p>We’ll look through our records and<br>
						hand pick the cheapest, most local<br>
						or highest-quality provider in your chosen service.</p>
				</div>
				<div class="col-lg-4 col-sm-6">
					<h3>3. We’ll do the rest</h3>
					<p>We’ll get in touch and give you<br>
						our pick so you can start saving! </p>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial -->

	<section class="testimonials-new">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>How our customers rate our services…</p>
					<h2>“They have been incredibly accommodating<Br>
						and helpful - I would recommend…”</h2>
					<p class="author">Paul Skevington, Owner Nectar Bar and Kitchen</p>
					<div class="img-wrapper"><img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- What makes us ‘us’? -->
	<section class="sme" id="about-us">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>What makes us ‘us’?</h3>
					<p class="mb-1"><span class="highlight">We care about smaller businesses.</span></p>
					<p>We understand how SME’s have a small margin for error in their funds and that having the most<br>
						efficient option all round is very important.There’s a stigma around switching a provider, as it’s seen as<br>
						time-consuming and complex - but we do it differently.We’ve cut all the unnecessary details out of our<br>
						form and we contact you directly, so you don’t have to worry about a thing.</p>
					<div class="img-wrapper">
						<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/business-comparison-logo.png" alt="Business Cost Comparison Logo">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Counter Section -->

	<section class="achievements">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Our achievements so far…</h2>
				</div>
			</div>
			<div class="row">
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="counter">
						<p><i class="fas fa-check-circle fa-3x"></i></p>
						<h2 class="timer count-title count-number" data-to="5000" data-speed="2000"></h2>
						<p class="count-text ">Successfully helped over<br>
							15,000 businesses save<br>
							on their costs.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="counter">
						<p><i class="fas fa-check-circle fa-3x"></i></p>
						<h2 class="timer count-title count-number" data-to="40" data-speed="2000"></h2>
						<p class="count-text ">Our Waste customers save on<br>
							average 40% on their waste<br>
							management bills</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="counter">
						<p><i class="fas fa-check-circle fa-3x"></i></p>
						<h2 class="timer count-title count-number" data-to="20000" data-speed="2000"></h2>
						<p class="count-text ">20,000 visitors<br>
							each month</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Blog Section -->

	<section class="new-blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>In our Blog</h2>
					<p>Discover free tips, guides, and the latest business news</p>
				</div>
			</div>
			<div class="first-row row">
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-1.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3><a href="<?php echo $domain; ?>/alternate-energy-which-is-the-best/">Alternate Energy: Which is the best?</a></h3>
					<p class="text">Alternate Energy: Which is the best? There are ...</p>
					<p class="stamp"><span>Guide</span> 05 March 2019</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-3.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3><a href="<?php echo $domain; ?>/british-gas-the-latest-big-6-company-to-hike-prices/">British Gas- The latest big 6 company to hike prices</a></h3>
					<p class="text">British Gas- The latest big 6 company to hike prices Millions of ...</p>
					<p class="stamp"><span>News</span> 19 February 2019</p>
				</div>
			</div>
			<!-- Second Row --->
			<div class="second-row row">
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-2.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3><a href="<?php echo $domain; ?>/what-happened-to-the-new-energy-price-cap/">What happened to the new energy price cap?</a></h3>
					<p class="text">What happened to the new energy price cap? Around fifteen ...</p>
					<p class="stamp"><span>News</span> 07 February 2019</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-4.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3><a href="<?php echo $domain; ?>/energy-and-brexit-what-will-change/">Energy and Brexit: What will change?</a></h3>
					<p class="text">Energy and Brexit: What will change? The UK has become dependent ...</p>
					<p class="stamp"><span>News</span> 11 January 2019</p>
				</div>
			</div>
			<!-- Third Row -->
			<div class="row">
				<div class="col-12">
					<h4><a href="/blog/">+ Read more blog posts</a></h4>
				</div>
			</div>
		</div>
	</section>

	<!-- Mailchimp -->

	<!-- Begin Mailchimp Signup Form -->

	<section class="mailchimp">
		<div class="container">
			<div id="mc_embed_signup">
				<form action="https://businesscostcomparison.us20.list-manage.com/subscribe/post?u=f30f05067d23ceeaff858cef4&amp;id=5b736821a8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<label for="mce-EMAIL">
							<h2>Subscribe To Our Newsletter</h2>
						</label>
						<p>Receive the latest news, blog updates, tips and more direct to your inbox</p>
						<div class="input-wrapper">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your Email Address" required>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f30f05067d23ceeaff858cef4_5b736821a8" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Keep Me Updated" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!--End mc_embed_signup-->

<?php endwhile; ?>

<?php
get_footer();
