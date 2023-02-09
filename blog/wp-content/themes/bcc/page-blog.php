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
		while ( have_posts() ) :
			the_post(); ?>

			<!-- Hero Section -->
			<section class="category">
        <div class="container">
          <h1><?php the_field('page_headline'); ?> <span id="location"></span></h1>
          <p><?php the_field('page_subhead'); ?></p>
        </div>
      </section>

			<section class="alert">
        <div class="container">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time-white@2x.png" width="23" height="23" /> All our services can be ordered for you within 2 hours!</p>
        </div>
      </section>

			<?php get_template_part( 'template-parts/block', 'products' ); ?>

			<?php get_template_part( 'template-parts/block', 'suppliers' ); ?>

			<?php get_template_part( 'template-parts/block', 'steps' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

			<?php get_template_part( 'template-parts/block', 'whyus' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
