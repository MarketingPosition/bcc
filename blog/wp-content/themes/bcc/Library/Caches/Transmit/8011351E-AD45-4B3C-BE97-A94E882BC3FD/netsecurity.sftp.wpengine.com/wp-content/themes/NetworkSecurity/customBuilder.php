<?php
/**
 * The template for displaying all pages
 *
 *Template Name: Custom Builder
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Network_Security
 */

 get_header(); ?>
 <div class="container-fluid">
     <div class="row">
         <div class="col-12 px-0">
             <div id="primary" class="content-area">
                 <main id="main" class="site-main">

									<?php
									while ( have_posts() ) :
										the_post();

										get_template_part( 'blocks' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

									endwhile; // End of the loop.
									?>

                  <p>Test</p>

								</main><!-- #main -->
					</div><!-- #primary -->
			</div><!-- .col-12 .col-md-8 -->
<?php
get_footer();
