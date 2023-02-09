<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcctheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

	<!-- Google Optimise -->
	<!-- <style>.async-hide { opacity: 0 !important} </style>
	<script data-cookieconsent="statistics">(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
	h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
	(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
	})(window,document.documentElement,'async-hide','dataLayer',4000,
	{'GTM-K7BWNRS':true});</script> -->

	<!-- Google Optimise (Conversion Split Test) PUSH -->
	<!-- <style>.async-hide { opacity: 0 !important} </style>
	<script data-cookieconsent="statistics">(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
	h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
	(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
	})(window,document.documentElement,'async-hide','dataLayer',4000,
	{'GTM-PJ9G44M':true});</script> -->

	<!-- Google Analytics -->
	<script data-cookieconsent="statistics">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-112163050-1', 'auto');
	  //ga('require', 'GTM-K7BWNRS');
	  ga('require', 'GTM-PJ9G44M'); // Conversion Split Test
	  ga('create', 'UA-117921250-1', 'auto', 'CGTracker');
	  ga('send', 'pageview');
	  ga('CGTracker.send', 'pageview');
	</script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- Google Tag Manager PUSH -->
	 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N9N73MT');</script>
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager BCC
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ZQVJ2V5');</script>
 End Google Tag Manager -->

	<!-- Bing UET BCC -->
	<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26028617"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
	<!--  End Bing UET -->

    <meta name="msvalidate.01" content="6D7A5D8A38D9153631C4B936CF18045A" />

    <style>
    	@keyframes st_fadeUp {
		    from {opacity:0;}
		    to {opacity:1;}
		}
	</style>
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) PUSH -->
	 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9N73MT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript)

	<!-- Google Tag Manager (noscript) BCC
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ZQVJ2V5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 End Google Tag Manager (noscript) -->

	<?php if ( !is_page_template( 'page-home.php' ) ) :?>

		<header>
			<!--Navbar top-->
			<div id="navbar" >
				<div id="mainmenu" class="container">
					<?php
	    				wp_nav_menu( array(
	        				'theme_location' => 'menu-1',
	        				'menu_class'     => 'row',
	         			) );
					?>
				</div>
			</div>
			<!--Navbar top-->

			<!--Navbar Main Menu -->

			<div class="menu container">
			  	<div class="row">
				    <div class="logo col-md-4">
				    	<a href="/">
				    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/business-comparison.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/business-comparison@2x.png 2x" width="200" height="54">
				    	</a>
				    </div>

				    <div class="phone col-md-8"> <!--offset-md-2-->

							<?php if( $post->ID == 560) { ?>
								<div class="topnav" id="myTopnav">
								<a href="/home/" class="active">Home</a>
								<a href="/blog/">Blog</a>
								<div class="dropdown">
									<button class="dropbtn">Get A Quote For
										<i class="fa fa-caret-down"></i>
									</button>
									<div class="dropdown-content">
										<a href="/waste-collection/">Waste Collection</a>
										<a href="/business-energy-quote/">Business Energy</a>
									</div>
								</div>
								<a class="tel-number" href="tel:+443333447476">Free Quote <span class="highlight">0333 344 7476</span></a>
								<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
							</div>
						<?php } ?>

						<?php if( $post->ID !== 560) { ?>
							<p><a href="tel:03333447476">Free Quote: <strong class="text-primary">0333 344 7476</strong></a></p>
						<?php } ?>


						<?php if (is_page_template('page-quote.php')): ?>
					      	<p class="hotline-text">
					      		Compare hotline open <span>9am - 5:30pm</span>
					      	</p>
				      	<?php endif ?>
				    </div>
			  	</div>
			</div>

			<!--Navbar Main Menu -->

			<?php if (is_page_template('page-quote.php')): ?>
				<div class="top-header-usps-wrapper">
					<div class="container">
						<div class="row top-header-usps">
							<div class="col-xs-12 col-md-4 usp-block">
								<div class="row usp-block-row">
									<div class="col-3 usp-block-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-compare.svg" alt="Compare" class="block-img img-responsive" width="40" height="40">
									</div>

									<div class="col-9">
										<p>
											We compare more suppliers than anyone else
										</p>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-4 usp-block">
								<div class="row usp-block-row">
									<div class="col-3 usp-block-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contract.svg" alt="5000 Contracts Fulfilled" class="block-img img-responsive" width="40" height="40">
									</div>

									<div class="col-9">
										<p>
											Over 10,000 collection contracts fulfilled reliably
										</p>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-4 usp-block">
								<div class="row usp-block-row">
									<div class="col-3 usp-block-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-uk-coverage.svg" alt="National coverage" class="block-img img-responsive" width="40" height="40">
									</div>

									<div class="col-9">
										<p>
											Your business waste collection sorted in 2 hours
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
		</header>

	<?php endif; ?>
