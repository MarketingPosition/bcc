<?php
/**
 * Template Name: Business PMI
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
	<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/form-pay.js"></script>

<style>
	.hero-title-pmi h1{
		color: #fff;
		font-size: 38px;
	    line-height: 50px;
	    max-width: 740px;
	    margin: auto;
	}
	.hero-title-pmi p{
		color: #fff;
	    font-size: 22px;
	    line-height: 30px;
	    padding: 23px 0;
	    max-width: 740px;
	    margin: auto;
	}
	.pmi-hero{
		background-image: url("/wp-content/themes/bcc/assets/images/business-pmi.jpg") !important;
	}
	.page-id-1546 #pay_form{
			display: none !important;
	}

</style>
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<?php //get_template_part( 'template-parts/block', 'pmi' ); ?>
			
			<?php get_template_part( 'template-parts/block' , 'pmi-form' ); ?>

		<section class="alert" style="background-color: #404040;">
	        <div class="container">
	          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time-white@2x.png" width="23" height="23" />  Fill in our 60-second form below and our trusted pmi partner will prepare a quote.</p>
	        </div>
      </section>

	<?php the_content(); ?>
	<?php get_template_part( 'template-parts/block' , 'whyus-card-payments-pmi'); ?>
	<?php get_template_part( 'template-parts/block', 'steps-payments-pmi' ); ?>
	

	

			

			<?php //get_template_part( 'template-parts/block', 'video45' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
