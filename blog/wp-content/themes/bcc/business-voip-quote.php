<?php
/**
 * Template Name: Business VOIP quote
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package bcctheme
 */

get_header();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/form-mkting.js"></script>
		<?php
		while ( have_posts() ) :
			the_post(); 
			the_content();
		endwhile;
		
		?>
	
	<?php get_template_part( 'template-parts/block', 'voipNew' ); ?>
	
	<section class="how-works_mrkt">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Business Telecoms & VOIP</h2>
					<div class="how-works_mrkt-text"><p>Telephone systems are hugely important to keep businesses running. Most companies, from any sector, have a sales or a customer service department, and a lot of them have both, meaning getting the best deal is in everybody’s interest. That’s why we’ve set up a new service to add to our portfolio, with the intention of helping small to medium sized businesses save on their phone systems and move to the cloud.</p>
<p>
Using Business Cost Comparison’s quote form is simple, fast and free. Save yourself some money on your phone and installation costs!
						</p><p>
Our partners use easy-to-use web interfaces, which allow you to monitor service and performance, as well as utilise a host of other features like call recording and automatic messages that play for different circumstances. You also get the choice of desktop softphones, mobile apps or a number of premium handsets from a range of manufacturers.</p></div>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/uploads/2020/04/voip-agent.jpg" class="img-fluid">
				</div>
			</div>
		</div>		
	</section>
	
	<?php get_template_part( 'template-parts/block', 'steps-voip' ); ?>
	
<script>
							
								function getJsonFromUrl(url) {
								  if(!url) url = window.location.search;

								  var query = url.substr(1);
								  var result = {};
									if(!query){return result}

								  query.split("&").forEach(function(part) {

									var item = part.split("=");

									result[item[0]] = decodeURIComponent(item[1]);

								  });

									return result;


								}

								var preparsedStr = getJsonFromUrl();
								var pStr = !Object.keys(preparsedStr).length;
								
								if (pStr) {
									
									preparsedStr = {
										type : "Organic",
										utm_source : "Unknown"
									
									};
									
								}

								//console.log(params);
								
								//check IF _llbb_utm is not set, if not,  set item
								
								//if (localStorage.getItem("_llbcc_utm") === null) {
								
								localStorage.setItem('_llbcc_utm', JSON.stringify(preparsedStr), 7);
								
								//} 
								
								//var parsedStr = JSON.parse(params);
								
								var parsedStr = JSON.parse(window.localStorage.getItem('_llbcc_utm'));

								//var len = sessions.length;
								

								//if(len > 0){
								//var lastSession = sessions[len-1];
								//parsedStr = lastSession.campaignData;
								//}				
								
								//if _llbb_utm is set then process:
								
								var outType     = parsedStr.type || 'null';
								var outCampaign = parsedStr.utm_campaign || 'null';
								var outContent  = parsedStr.utm_content || 'null';
								var outMedium   = parsedStr.utm_medium || 'null';
								var outref      = document.referrer || 'null';
								var outSource   = parsedStr.utm_source || 'null';
								var outTerm     = parsedStr.ppc_keyword || 'null';
								var outGclid    = parsedStr.gclid || 'null';
								var outPaid     = parsedStr.paidSearch || 'null';
								var outTimestamp = parsedStr.timestamp || 'null';


								document.getElementById('input_1_19').value=outType;
								document.getElementById('input_1_26').value=outref;
								document.getElementById('input_1_20').value=outCampaign;
								document.getElementById('input_1_21').value=outContent;
								document.getElementById('input_1_27').value=outMedium;
								document.getElementById('input_1_23').value=outSource;
								document.getElementById('input_1_22').value=outTerm;
								document.getElementById('input_1_24').value=outGclid;
								document.getElementById('input_1_25').value=outPaid;

	jQuery(function($) {
 
//
// prevent Gravity Forms form being submitted twice++
//
 
var gformSubmitted = false;
 
$(".gform_wrapper form").submit(function(event) {
    if (gformSubmitted) {
        event.preventDefault();
    }
    else {
        gformSubmitted = true;
        $("input[type='submit']", this).val("Processing, please wait...");
    }
});
 
});
	
	
							</script>
<?php

get_footer();