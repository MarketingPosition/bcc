<?php
$instant_price = $_GET['instant-price'];
$container     = $_GET['container'];
$frequency     = $_GET['frequency'];

if ( ! empty( $instant_price ) && 'N/A' !== $instant_price ) {
	if ( ! isset( $_COOKIE['waste-form-timeout'] ) ) {
		setcookie( 'waste-form-timeout', ( strtotime( '+ 15 minutes', time() ) * 1000 ), strtotime( '+ 15 minutes', time() ), '/' );
	}
}

?>

<?php
/**
 * Template Name: Thank You
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
			the_post();
			?>

			<section id="quoteform" class="native-form" style="padding: 4em 0;">
				<div class="container">
					<div class="thank-you-content">
						<?php

						if ( ! empty( $instant_price ) && 'N/A' !== $instant_price ) :
							?>
							<style>
							.pop__instant-price-block {display: inline-block;padding: 15px;border: 2px solid #acdcac;margin-bottom: 15px;background-color: #eaffea;}
							.pop__instant-price-block h2 {display: block;margin-bottom: 10px;font-weight: 800;color: #00a853;}
							.pop__instant-price-block p {font-size: 18px;}
							</style>

							<div class="pop__instant-price-block">
								<h2>Here is your quote</h2>

								<?php if ( ( ! empty( $container ) && 'N/A' !== $container ) && ( ! empty( $frequency ) && 'N/A' !== $frequency ) ) : ?>

									<p>
										Based on your requirements we recommend a <strong><?php echo esc_html( $container ); ?></strong> Collected <strong><?php echo esc_html( $frequency ); ?></strong>.
									</p>

								<?php endif ?>

								<p>
									Price from: <strong>&pound;<?php echo esc_html( $instant_price ); ?></strong> per collection.
								</p>
							</div>
						<?php endif; ?>

						<?php the_content(); ?>
					</div>
				</div>
			</section>

			<?php get_template_part( 'template-parts/block', 'whyus' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

		<?php endwhile; ?>

<?php
get_footer();
