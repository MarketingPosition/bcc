<?php
/**
 * Template Name: Thank You Business PMI
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

<style>
	.page-id-1569 #quoteform{
		background-image: url('/wp-content/themes/bcc/assets/images/business-pmi.jpg');
	}
</style>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<section id="quoteform" class="native-form" style="padding: 4em 0;">
				<div class="container">
					<div class="thank-you-content">
					<h1 style="font-size: 30px;">There’s just one final step before receiving your quote.</h1>
					<p>To verify your details, our verified Health Insurance partner needs to <span class="text-primary">give you a call.</span></p> 
					<p>This is to confirm your information and help compare quotes for you across providers.</p>
					<p>They’ll be in touch very shortly (or in the morning if it’s late!) for a quick chat.</p>
					<p class="text-primary">Please keep your phone handy!</p>

					<?php the_content(); ?>
					</div>
				</div>
			</section>

			<?php get_template_part( 'template-parts/block', 'whyus-card-payments-pmi' ); ?>
			<?php get_template_part( 'template-parts/block', 'steps-payments-pmi' ); ?>


		<?php endwhile; ?>

<?php
get_footer();
