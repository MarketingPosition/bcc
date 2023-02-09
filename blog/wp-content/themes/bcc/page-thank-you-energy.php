<?php
/**
 * Template Name: Thank You Energy
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
error_reporting(0);
ini_set('display_errors', 0); 

get_header();


?>

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<section id="quoteform" class="native-form" style='background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/energybg3.jpg") !important; padding: 4em;'>
			      <div class="container">
									<div class="thank-you-content">
										<?php the_content(); ?>
									
									</div>
							</div>
			</section>

			<?php get_template_part( 'template-parts/block', 'whyus-energy' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

		<?php endwhile; ?>

<?php


require_once ('LL_BCC_Energy_API_S.php');

get_footer();
?>