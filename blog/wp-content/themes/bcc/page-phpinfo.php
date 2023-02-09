<?php
/**
 * Template Name: PhPInfo
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


		
<section class="alert">
        <div class="container">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time-white@2x.png" width="23" height="23" /> It only takes 60 seconds - that's all!</p>
        </div>
      </section>

	<?php 

echo phpinfo(); 
the_content(); ?>
		

	

			

			<?php //get_template_part( 'template-parts/block', 'video45' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
