<?php
/**
 * Template Name: Marketing Form
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/form-mkting.js"></script>
		<?php
		while ( have_posts() ) :
			the_post(); ?>


			<?php get_template_part( 'template-parts/block', 'mktingform' ); ?>

<section class="alert">
        <div class="container">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time-white@2x.png" width="23" height="23" /> It only takes 60 seconds - that's all!</p>
        </div>
      </section>

	<?php the_content(); ?>
			<?php get_template_part( 'template-parts/block', 'steps-mkting' ); ?>

	


		<?php endwhile; ?>

<?php


get_footer();
