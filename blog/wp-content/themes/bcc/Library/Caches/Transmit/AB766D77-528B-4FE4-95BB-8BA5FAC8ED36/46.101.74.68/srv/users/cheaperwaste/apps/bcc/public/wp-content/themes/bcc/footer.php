<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcctheme
 */

?>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-6">
            <h4>About Us</h4>
            <p>BusinessCostComparison.co.uk helps you find and compare the best products and services from 100's of approved suppliers. <br><br>We have thousands of happy customers nationwide and fully understand the need for small and medium size businesses to keep costs under control.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-offset-1 col-lg-3">
            <h4>Contact Us</h4>
            <p>Benton House <br>
              Bellway Ind Est <br>
              Longbenton <br>
              Tyne & Wear <br>
              NE12 9SW</p>
            <p>Phone: 0333 344 7476 <br>
            Email: <a href="mailto:info@BusinessCostComparison.co.uk">info@BusinessCostComparison.co.uk</a></p>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-2">
            <h4>Opening Hours</h4>
            <ul>
              <li>Mon: 09:00 - 17:30</li>
              <li>Tues: 09:00 - 17:30</li>
              <li>Wed: 09:00 - 17:30</li>
              <li>Thu: 09:00 - 17:30</li>
              <li>Fri: 09:00 - 17:30</li>
              <li>Sat: Closed</li>
              <li>Sun: Closed</li>
            </ul>
          </div>
        </div>
        <?php if ($post->ID == 731) {?>
          <div class="col-xs-12">
            <p>* We can guarantee that the quote we provide will match or beat the initial renewal pricing offered by your supplier when you choose to switch its energy supplier with us. If we can't beat or match your quote, we'll pay your business up to £1,000. T&C apply.</p>
          </div>
        <?php } ?>
        <div class="col-xs-12">
          <p class="terms">&copy; 2018 Business Cost Comparison | You can change your mind at any time but, for now, we will assume you are happy for us to store and access cookies on your device for the purposes described. |  <a href="/cookies">Cookie Policy</a> | <a href="/privacy-policy">Read Policy & T&amp;C's</a></p>
        </div>
      </div>
    </footer>

    <?php get_template_part( 'template-parts/block', 'terms' ); ?>

		<?php wp_footer(); ?>

    <?php if ( is_page_template( 'page-quote.php' ) || is_single() ) :?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascript/jquery.validate.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascript/form.js"></script>
    <?php endif;?>

<script type="text/javascript">
_linkedin_partner_id = "393761";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=393761&fmt=gif" />
</noscript>

</body>
</html>
