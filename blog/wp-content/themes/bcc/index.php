<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcctheme
 */

get_header();
?>

	<div id="primary" class="blog">
		<main id="main" class="container">
			<div class="row">
				<div class="col-md-8 blog-main">

					<?php if ( have_posts() ) : ?>

						<div class="blog-post">
						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'post' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>

			</div>

			<?php get_sidebar(); ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
