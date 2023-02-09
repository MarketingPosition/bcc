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
						<h1 class="text-white">Helping SME’s & Startups <span class="nobr">Get the Best Deal</span></h1>
						<p class="text-white">Price comparison for business</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Service Switcher -->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Business Energy</p>
					<p>Business Waste</p>
					<p>Comming Soon</p>
				</div>
				<div class="col-md-4">
					Business Enery
				</div>
				<div class="col-md-4">
					Trust Pilot
				</div>
			</div>
		</div>
	</section>


	<!-- Our Services -->

	<section class="services">
		<div class="container">
			<h2 class="mb-5">How we work</h2>
			<div class="row">
				<div class="col-md-4">
					<h3>1. Submit our quote form</h3>
					<p>We’ve already created a short form, it<br>
						wont take long to complete. It’s all<br>
						simple details, like the service you<br>
						want and where you are in the world.</p>
				</div>
				<div class="col-md-4">
					<h3>2. We’ll look at all the options</h3>
					<p>We’ll look through our records and<br>
						hand pick the cheapest, most local<br>
						or highest-quality provider in your chosen service.</p>
				</div>
				<div class="col-md-4">
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
					<p>Paul Skevington, Owner Nectar Bar and Kitchen</p>
					<div class="img-wrapper"><img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/trust-pilot.png" alt="Trustpilot Logo"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- What makes us ‘us’? -->
	<section class="sme">
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
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>In our Blog</h2>
					<p>Discover free tips, guides, and the latest business news</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-1.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>How to switch energy supplier</h3>
					<p>Our Waste customers save on average 40% on their waste management bills</p>
					<p><span>Guide</span>14 November 2018</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-3.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>How to choose the right current account for you</h3>
					<p>There’s a huge choice of current accounts available, so you’ll want to pick the one that meets your needs best.</p>
					<p><span>News</span>14 November 2018</p>
				</div>
			</div>
			<!-- New Row --->
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-2.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>20 was ways to save money all year round</h3>
					<p>There’s no time like the resent to start finding ways to save £££’s…</p>
					<p><span>News</span>26 November 2018</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2019/03/blog-4.jpg" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Top 10 energy saving tips</h3>
					<p>Follow these top tips to help you save money on your energy bills…</p>
					<p><span>News</span>26 November 2018</p>
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
