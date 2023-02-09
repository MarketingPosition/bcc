<?php

/**
 * Template Name: Home
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
	<section class="hero">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-lg-5 offset-1">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business-comparison.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/business-comparison@2x.png 2x" width="200" height="54">
					</div>
					<div class="hero-content">
						<p>Price Comparison <span class="text-primary">For Business</span></p>
						<h1>Helping SME’s & Startups <span class="nobr">Get the Best Deal</span></h1>
						<a href="/waste-collection" title="Learn More" class="btn btn-large">Learn More</a>
					</div>
					<div class="hero-quote">
						<p><em>"They have been incredibly accommodating and helpful – I would recommend..."</em></p>
						<p>Paul Skevington, Owner Nectar Bar and Kitchen</p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/trustpilot.png">
					</div>
				</div>
				<div class="col-xs-12 col-lg-6 hero-img"></div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/block', 'suppliers'); ?>

	<!-- Our Services -->
	<section class="our-services">
		<div class="container">
			<h2>Our Comparison Services</h2>
			<div class="row-slider owl-carousel">

				<div class="block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/waste-collection.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/waste-collection@2x.jpg 2x" alt="Waste Collection" class="block-img" width="370" height="160">
					<div class="block-content">
						<h3>Waste Collection <span class="sub-head">For Waste Management Services</span></h3>
						<p>Need more frequent waste collections? For anything from clinical, glass, recyclable, & general commercial waste</p>
						<a href="/waste-collection" title="Learn More" class="btn btn-small">Learn More</a>
					</div>
				</div>



				<div class="block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/energy.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/energy@2x.jpg 2x" alt="Hosting" class="block-img" width="370" height="160">
					<div class="block-content">
						<h3>Energy <span class="sub-head">Business Energy Services</span></h3>
						<p>Find the best energy supplier to suit your needs.</p>
						<a href="/business-energy-quote" title="Learn More" class="btn btn-small">Learn More</a>
					</div>
				</div>

				<div class="block">
					<img src="<?php echo $domain; ?>/wp-content/uploads/2018/10/bccmarketing.jpg" alt="Digital Marketing" class="block-img" width="370" height="160">
					<div class="block-content">
						<h3>Marketing <span class="sub-head">Digital Marketing Services</span></h3>
						<p>All businesses need Digital Marketing in this day and age.</p>
						<a href="#" title="Learn More" class="btn btn-disable">Coming Soon</a>
					</div>
				</div>

				<div class="block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-payment.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/card-payment@2x.jpg 2x" alt="Card Payment" class="block-img" width="370" height="160">
					<div class="block-content">
						<h3>Card Payment <span class="sub-head">Low cost payment solutions</span></h3>
						<p>For card payment solutions for startups and SME’s</p>
						<a href="#" title="Learn More" class="btn btn-disable">Coming Soon</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="our-steps">
		<div class="container">
			<?php get_template_part('template-parts/block', 'blogposts'); ?>
		</div>
	</section>

	<?php get_template_part('template-parts/block', 'testimonials'); ?>

<?php endwhile; ?>

<?php
get_footer();
