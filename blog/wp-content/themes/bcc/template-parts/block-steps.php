<!-- Our Services -->
    <section class="our-steps">
      <div class="container">
        <h2 class="text-white"><?php the_field('steps_title'); ?></h2>
        <div class="row-slider owl-carousel">

            <div class="block">
              <div class="block-step">
                <span>Step 1</span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/account.svg" alt="Set Up An Account" class="block-img" width="60" height="57">
              <div class="block-content">
                <h3><?php the_field('step_1'); ?></h3>
              </div>
            </div>

            <div class="block">
            <div class="block-step">
              <span>Step 2</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deliver.svg" alt="We Deliver The Bins" class="block-img" width="72" height="57">
            <div class="block-content">
              <h3><?php the_field('step_2'); ?></h3>
            </div>
            </div>

            <div class="block">
            <div class="block-step">
              <span>Step 3</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pickup.svg" alt="We Pick Up & Dispose" class="block-img" width="98" height="57">
            <div class="block-content">
              <h3><?php the_field('step_3'); ?></h3>
            </div>
            </div>

        </div>
      </div>
    </section>
