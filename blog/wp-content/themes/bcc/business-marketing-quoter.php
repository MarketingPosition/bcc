<?php
/**
 * Template Name: Business Marketing Quote
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
			the_post(); 
			the_content();
		endwhile;
		
		?>
	
	<?php get_template_part( 'template-parts/block', 'marketingNew' ); ?>
	
	<section class="how-works_mrkt">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>How Does It Work?</h2>
					<div class="how-works_mrkt-text">We talk with elite agencies about their experience and the typical conversion rates achievable in <span class="highlight">multiple industries.</span><br><br>
	Our team of analysts collate data and benchmark results to help SME’s <span class="highlight">find the right agency to help maximise sales.</span><br><br>
	Our network allows businesses to fast track their growth by communicating and partnering with agencies that are <span class="highlight">transparent, progressive and experienced.</span></div>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/uploads/2020/03/marketing.jpg" class="img-fluid">
				</div>
			</div>
		</div>		
	</section>
	
	<?php get_template_part( 'template-parts/block', 'steps-mkting' ); ?>
	

<?php

get_footer();