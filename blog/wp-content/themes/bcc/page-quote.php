<?php
/**
 * Template Name: Quote
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
		while ( have_posts() ) :
			the_post();
			?>

			<?php // get_template_part( 'template-parts/block', 'form' ); ?>

			<?php

			get_template_part( 'template-parts/block', 'form-instant-quote-with-business-type-option' );

			?>

			<?php // get_template_part( 'template-parts/block', 'whyus' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
