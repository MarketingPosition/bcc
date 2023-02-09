<?php
/**
 * Template Name: Energy A/B Push
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/form-mkt.js"></script>
		<?php
		while ( have_posts() ) :
			the_post(); ?>

<!--<section class="alert">
        <div class="container">
          <p>We compare over 20 energy suppliers for the best price - with over 10,000 happy customers!</p>
        </div>
      </section>-->

			<?php get_template_part( 'template-parts/block', 'LEAPIform' ); ?>

<section class="alert">
        <div class="container">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time-white@2x.png" width="23" height="23" /> It only takes 45 seconds - that's all!</p>
        </div>
      </section>

		<?php get_template_part( 'template-parts/block', 'whyus-energy' ); ?>

			<?php get_template_part( 'template-parts/block', 'suppliers-energy' ); ?>

			<?php get_template_part( 'template-parts/block', 'steps-energy' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>



			<?php //get_template_part( 'template-parts/block', 'video45' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
