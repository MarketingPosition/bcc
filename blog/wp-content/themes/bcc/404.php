<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bcctheme
 */

get_header();
?>

	<div id="primary" class="content-area">

			<section class="error-404 not-found">
				<div class="container">
				<div class="row">
					<div class="col-md-6">
					<header class="page-header">
						<h1 class="page-title">
							<span>404</span> Oops, the page you're looking for does not exist.
						</h1>
					</header><!-- .page-header -->
					<hr style="background-color: rgb(130, 119, 201);">
					<div class="page-content">
						<p>You may want to head back to the homepage.</p>
						<a href="/" title="Learn More" class="btn btn-large">Go to Homepage</a>
					</div><!-- .page-content -->
				</div>
				</div>
			</section><!-- .error-404 -->
		</div>

	</div><!-- #primary -->

<?php
get_footer();
