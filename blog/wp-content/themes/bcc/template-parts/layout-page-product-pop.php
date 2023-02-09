<?php

/**
 * This is an amended version of the product page layout
 * representing a winning split test design from Dec 2018.
 *
 * @package bcctheme
 */

if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

		<div id="waste-pages-pop">
			<!-- Hero Section -->
			<section class="hero">
				<div class="container-fluid">
					<div class="hero-content">
						<h1>
							<?php the_field('page_headline'); ?>
						</h1>

						<a href="/get-a-quote/?type=<?php the_field('page_button_ref'); ?>" title="Get a free quote now" class="btn btn-large">
							Get a free quote now
						</a>

						<h3 class="sub-heading">
							<strong>WE GET YOU THE BEST DEAL AVAILABLE, WHY PAY MORE?</strong>
						</h3>
					</div>
				</div>
			</section>

			<section class="our-suppliers">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-2 col-lg-1 offset-md-2 offset-lg-3">
							<img src="<?php echo $domain; ?>/wp-content/themes/bcc/assets/images/pickup.svg" alt="We Compare More Suppliers Than Anyone Else" class="block-img" width="50" height="auto">
						</div>

						<div class="col-12 col-md-8">
							<p>
								<strong>We Compare More Suppliers Than Anyone Else</strong>
							</p>
						</div>
					</div>
				</div>
			</section>

			<?php get_template_part('template-parts/block', 'whyus'); ?>

			<section class="small-cta">
				<div class="container">
					<a href="/get-a-quote/?type=<?php the_field('page_button_ref'); ?>" title="Get a free quote now" class="btn btn-large">
						Get a free quote now
					</a>
				</div>
			</section>

			<?php get_template_part('template-parts/block', 'steps'); ?>

			<?php get_template_part('template-parts/block', 'testimonials'); ?>

			<?php if (get_field('table_section_title')) : ?>
				<!-- Clinical Waste Table -->
				<section class="table">
					<div class="container">
						<h2>
							<?php the_field('table_section_title'); ?>
						</h2>

						<?php if (get_field('table')) : ?>

							<div id="accordion" class="row">
								<?php
								if (have_rows('columns')) :
									while (have_rows('columns')) :
										the_row();
								?>

										<?php if (get_row_layout() === 'table_columns') : ?>
											<div class="accordion">
												<div class="accordion-inside">
													<h3>
														<?php the_sub_field('column_title'); ?> <span class="arrow"></span>
													</h3>

													<?php if (have_rows('item_list')) : ?>
														<ul>
															<?php
															while (have_rows('item_list')) :
																the_row();
															?>

																<li>
																	<?php the_sub_field('items'); ?>
																</li>

															<?php endwhile; ?>
														</ul>
													<?php endif; ?>

												</div>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>

						<?php else : ?>

							<div class="waste-types">
								<div class="row justify-content-md-center">
									<?php
									if (have_rows('waste_types')) :
										while (have_rows('waste_types')) :
											the_row();
									?>
											<div class="col-xs-12 col-lg-3 waste-types-item">
												<p>
													<?php the_sub_field('waste_name'); ?>
												</p>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>

						<?php endif; ?>

					</div>
				</section>
			<?php endif; ?>

			<!-- Clinical Waste Table -->
			<section class="cta-block">
				<div class="container">
					<h3>Compare &amp; Save</h3>

					<p>
						We will always ensure that your environmental Duty of Care obligations are fulfilled
					</p>

					<a href="/get-a-quote/?type=<?php the_field('page_button_ref'); ?>" title="Get a free quote now" class="btn btn-large">
						Get a free quote now
					</a>
				</div>
			</section>
		</div>

	<?php endwhile; ?>
<?php endif; ?>