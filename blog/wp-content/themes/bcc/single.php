<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bcctheme
 */

get_header();
?>

<?php get_template_part( 'template-parts/block', 'formpost' ); ?>

<div id="primary" class="blog">
	<main id="main" class="container">
		<div class="row">
			<div class="col-md-8 blog-main">

					<div class="blog-post">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

						endwhile; // End of the loop.
						?>
					</div>

				</div>

				<?php get_sidebar(); ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
