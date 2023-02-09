<?php
	while ( have_posts() ) :
		the_post(); ?>

		<!-- Hero Section -->
		<section class="hero">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-lg-5 offset-1">
            <div class="hero-content">
								<h1><?php the_field('page_headline'); ?></h1>
								<a href="/get-a-quote/?type=<?php the_field('page_button_ref'); ?>" title="Get a free quote now" class="btn btn-large">Get a free quote now</a>
              <p class="clock-time"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time@2x.png" height="22" width="23"> Takes about 45 seconds</p>
            </div>
            <div class="hero-quote">
              <p><em>"They have been incredibly accommodating and helpful – I would recommend..."</em></p>
              <p>Paul Skevington, Owner Nectar Bar and Kitchen</p>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trustpilot.png">
            </div>
          </div>
          <div class="col-xs-12 col-lg-6 hero-img lp" style="background-image:url(<?php the_field('page_image'); ?>);"></div>
        </div>
      </div>
    </section>

		<?php get_template_part( 'template-parts/block', 'suppliers' ); ?>

		<?php get_template_part( 'template-parts/block', 'steps' ); ?>

		<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

		<?php get_template_part( 'template-parts/block', 'whyus' ); ?>

		<?php if( get_field('table_section_title') ): ?>
    <!-- Clinical Waste Table -->
    <section class="table">
  	<div class="container">
  		<h2><?php the_field('table_section_title'); ?></h2>

      <?php if( get_field('table') ): ?>

					<div id="accordion" class="row">
            <?php if( have_rows('columns') ): ?>
							<?php while ( have_rows('columns') ) : the_row(); ?>
            <!-- <?php the_sub_field('column_title'); ?> -->
						<?php if( get_row_layout() == 'table_columns' ): ?>
		            <div class="accordion">
		              <div class="accordion-inside">
		                <h3><?php the_sub_field('column_title'); ?> <span class="arrow"></span></h3>

											<?php if( have_rows('item_list') ): ?>
												<ul>
												<?php while( have_rows('item_list') ): the_row();
													$content = get_sub_field('items');
													?>
													<li><?php echo $content; ?></li>
												<?php endwhile; ?>
												</ul>
											<?php endif; ?>

		              </div>
		            </div>
								<?php endif; ?>
							<?php endwhile; ?>
            <?php endif; ?>

      		</div>

			 <?php else: ?>

				<div class="waste-types">
        <div class="row justify-content-md-center">
						<?php if( have_rows('waste_types') ): ?>
							<?php while( have_rows('waste_types') ): the_row();
								$content = get_sub_field('waste_name');
								?>
								<div class="col-xs-12 col-lg-3 waste-types-item">
									<p><?php echo $content; ?></p>
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
				<h3>Compare & Save</h3>
				<p>We will always ensure that your environmental Duty of Care obligations are fulfilled</p>
				<a href="/get-a-quote/?type=<?php the_field('page_button_ref'); ?>" title="Get a free quote now" class="btn btn-large">Get a free quote now</a>
			</div>
		</section>

	<?php endwhile; ?>