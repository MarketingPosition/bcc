<?php

/**
 * Template Name: Category
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
	the_post();
?>

	<div id="waste-pages-pop">
		<section class="hero">
			<div class="container-fluid">
				<div class="hero-content">
					<h1>
						<?php the_field('page_headline'); ?> <span id="location"></span>

						<span class="nobr">
							<?php the_field('page_subhead'); ?>
						</span>
					</h1>

					<a href="<?php echo $domain; ?>/get-a-quote/?type=General" title="Get a free quote now" class="btn btn-large">
						Get a free quote now
					</a>

					<h3 class="sub-heading">
						<strong>WE GET YOU THE BEST DEAL AVAILABLE, WHY PAY MORE?</strong>
					</h3>
				</div>
			</div>
		</section>

		<section class="our-suppliers">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-2 col-lg-1 offset-md-2 offset-lg-3">
						<img src="<?php echo $domain; ?>/wp-content/themes/bcc/assets/images/pickup.svg" alt="We Compare More Suppliers Than Anyone Else" class="block-img" width="50" height="auto">
					</div>

					<div class="col-12 col-md-8">
						<p>
							<strong>We Compare More Suppliers Than Anyone Else</strong>
						</p>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('template-parts/block', 'whyus'); ?>

		<section class="small-cta">
			<div class="container">
				<a href="<?php echo $domain; ?>/get-a-quote/?type=General" title="Get a free quote now" class="btn btn-large">
					Get a free quote now
				</a>
			</div>
		</section>

		<?php get_template_part('template-parts/block', 'steps'); ?>

		<?php get_template_part('template-parts/block', 'products'); ?>
	</div>

<?php endwhile; ?>

<?php
get_footer();
