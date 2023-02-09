<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Push
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="footer-top-line">
			<div class="footer-top-line__inner container">
				<div class="row">

					<div class="col-12 col-md-9 col-lg-6">
						<div class="row">
						<div class="col-12 col-sm-4">
							<h4 class="footer-top-line__title">What We Do</h4>
							<ul class="footer-top-line__list">
								<?php
									wp_nav_menu( array( 'theme_location' => 'menu-2', 'items_wrap' => '%3$s', 'container' => ''));
								?>
							</ul>
						</div>
						<div class="col-12 col-sm-4">
							<h4 class="footer-top-line__title">General</h4>
							<ul class="footer-top-line__nav">
								<?php
									wp_nav_menu( array( 'theme_location' => 'menu-3', 'items_wrap' => '%3$s', 'container' => ''));
								?>
							</ul>
						</div>
						<div class="col-12 col-sm-4">
							<h4 class="footer-top-line__title">Contact us</h4>
							<p class="footer-top-line__list-item"><span class="d-block">Push Group</span><a href="https://goo.gl/maps/pbQbczDCa8J2" target="_blank" title="View Our Location">Chaplin House, Moorhall Rd, Harefield, Uxbridge UB9 6NS</a></p>
							<p class="footer-top-line__list-item"><span>T </span><a href="tel:02030059877" class="rulertel">020 3005 9877</a></p>
						</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-12 footer-top-line__img-block">
						<h4 class="footer-top-line__title">Proud to be</h4>
						<img src="https://www.pushgroup.co.uk/wp-content/uploads/2018/10/business-growth-award.jpg" alt="" class="footer-top-line__img">
						<img src="<?php echo get_template_directory_uri();?>/img/footer-top-line__img1.png" alt="" class="footer-top-line__img">
						<img src="<?php echo get_template_directory_uri();?>/img/footer-top-line__img2.png" alt="" class="footer-top-line__img">
						<img src="https://pushgroup.co.uk/wp-content/uploads/2018/06/global-mobile.jpg" width="150" alt="" class="footer-top-line__img">
					</div>
					<div class="col-md-3 col-sm-12 footer-top-line__tweets-block d-none d-lg-block">
						<h4 class="footer-top-line__title">Tweets</h4>
						<a class="twitter-timeline" data-height="300" data-theme="dark" data-link-color="#00c3ff" data-tweet-limit="1" data-chrome="nofooter noborders noheader transparent" href="https://twitter.com/PushGroup?ref_src=twsrc%5Etfw">Tweets by PushGroup</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-line">
			<div class="footer-bottom-line__inner container">
				<p class="footer-bottom-line__txt">Our team of experts are always close by to support your business in the following locations:</p>
				<ul class="footer-bottom-line__list">
					<li class="footer-bottom-line__list-item">London</li>
					<li class="footer-bottom-line__list-item">Manchester</li>
					<li class="footer-bottom-line__list-item">Denmark</li>
					<li class="footer-bottom-line__list-item">Romania</li>
					<li class="footer-bottom-line__list-item">Greece</li>
					<li class="footer-bottom-line__list-item footer-bottom-line__list-last-item">India</li>
					<li class="footer-bottom-line__list-item footer-bottom-line__list-phone-item">Company Reg: 06237443</li>
				</ul>

				<p class="footer-bottom-line__bottom-txt">You can change your mind at any time but, for now, we will assume you are happy for us to store and access cookies on your device for the purposes described.</p>

				<p class="footer-bottom-line__bottom-txt"><a href="/cookie-policy" class="footer-bottom-line__link-view" title="View our Cookie Policy">View our Cookie Policy</a> | <a href="//www.iubenda.com/privacy-policy/17589177" class="iubenda-nostyle no-brand iubenda-embed footer-bottom-line__link-view" title="Privacy Policy">Privacy Policy</a></p>

			</div>
		</div>
	</footer>

	<div class="overlay-ribbon">
	 <div class="ribbon-content">
		 <span id="close" class="close-x"><a href="#">x</a></span>
		 <a href="https://www.pushgroup.co.uk/seminars/">
					 <div class="content-wrapper">
			 <h3>NEXT EVENT</h3>
			 <p>19</p>
			 <p>March</p>
		 </div>
		 </a>
	 </div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

</body>
</html>
