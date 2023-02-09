<?php
/**
 * Template Name: Thank You Energy Splitter
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
error_reporting(0);
ini_set('display_errors', 0); 

get_header();


	while ( have_posts() ) :
			the_post(); ?>

			<section id="quoteform" class="native-form" style='background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/energybg3.jpg") !important; padding: 4em;'>
			      <div class="container">
									<div class="thank-you-content">
										<?php the_content(); ?>
									</div>
							</div>
			</section>

			<?php get_template_part( 'template-parts/block', 'whyus-energy' ); ?>

			<?php get_template_part( 'template-parts/block', 'testimonials' ); ?>

		<?php endwhile; ?>

<!------------------END WORDPRESS PAGE CONTENT----------------------------------->
 <?php

//-----------------BEGIN FORM DATA PROCESSING-----------------------------------

//$nrg_question1      = $_GET["nrg_question1"];

//Current energy supplier
//$nrg_question2      = $_GET["nrg_question2"];

//$nrg_first_name     = $_GET["nrg_first_name"];      
//$nrg_last_name      = $_GET["nrg_last_name"];
//$nrg_company        = htmlspecialchars($_GET["nrg_company"], ENT_QUOTES, "UTF-8");
//$nrg_phone          = $_GET["nrg_phone"];
//$nrg_postcode       = $_GET["nrg_postcode"];
//$nrg_email          = htmlspecialchars($_GET["nrg_email"], ENT_QUOTES, "UTF-8");
//$nrg_bill           = $_GET["nrg_bill"];
//$nrg_contract_date  = $_GET["nrg_contract_date"]; 

//phpinfo();
//Gas / Electric
$nrg_question1      = $_POST["nrg_question1"];

//Current energy supplier
$nrg_question2      = $_POST["nrg_question2"];

$nrg_first_name     = $_POST["nrg_first_name"];      
$nrg_last_name      = $_POST["nrg_last_name"];
$nrg_company        = htmlspecialchars($_POST["nrg_company"]);
$nrg_phone          = $_POST["nrg_phone"];
$nrg_postcode       = $_POST["nrg_postcode"];
$nrg_email          = $_POST["nrg_email"];
$nrg_bill           = $_POST["nrg_bill"];
$nrg_contract_date  = $_POST["nrg_contract_date"]; 
 




//--------------------END FORM DATA PROCESSING ----------------------------



//-----------------BEGIN SPLITTER-----------------------------------------

$filename = get_template_directory().'/love.txt';
if (!file_exists($filename)) {
	
	

//---------------------BEGIN LOVE ENERGY API------------------------------

	if ($nrg_question1 == "gas") {
	
$xml_array = array (
'affiliateEmailAddress' => 'leads@businesscostcomparison.co.uk',
'affiliatePassword' 	=> '9QBg-gf!@eVcyJqw',
'campaignId'		=> 2942,
'companyName'			=> $nrg_company,
'telephoneNumber1'		=> $nrg_phone,
'firstName'				=> $nrg_first_name,
'lastName'				=> $nrg_last_name,
'emailAddress'			=> $nrg_email,
'postcode'			=> $nrg_postcode,
'gasProvider'			=> $nrg_question2,
'gasSpendingBand' =>	$nrg_bill,
'gasRenewalDate' =>		$nrg_contract_date
);
}


if ($nrg_question1 == "electric") {
	
$xml_array = array (
'affiliateEmailAddress' => 'leads@businesscostcomparison.co.uk',
'affiliatePassword' 	=> '9QBg-gf!@eVcyJqw',
'campaignId'		=> 2942,
'companyName'			=> $nrg_company,
'telephoneNumber1'		=> $nrg_phone,
'firstName'				=> $nrg_first_name,
'lastName'				=> $nrg_last_name,
'emailAddress'			=> $nrg_email,
'postcode'			=> $nrg_postcode,
'electricProvider'			=> $nrg_question2,
'electricSpendingBand' =>	$nrg_bill,
'electricRenewalDate' =>		$nrg_contract_date
);	
}

require_once ('soaptest.php');
//print_r($response);
$nrg_response = $client->__getLastResponse();
$doc = DOMDocument::loadXml($nrg_response);

$count = $doc->getElementsByTagName('HotkeyLeadResult')->item(0)->nodeValue;

//----------WRITE LOVE.TXT-------------
$content = "LOVE";
$fp = fopen(get_template_directory(). "/love.txt","wb");
fwrite($fp,$content);
fclose($fp);

	
$bcchookzap = "nrg_question1=".$nrg_question1.
"&nrg_first_name=".$nrg_first_name.
"&nrg_last_name=".$nrg_last_name.
"&nrg_company=".$nrg_company.
"&nrg_phone=".$nrg_phone.
"&nrg_postcode=".$nrg_postcode.
"&nrg_email=".$nrg_email.
"&nrg_question2=".$nrg_question2.
"&nrg_bill=".$nrg_bill.
"&nrg_contract_date=".$nrg_contract_date.
//"&lead_response=RESPONSE REQUIRED";
"&lead_response=".$count;
	
?>
<!------------------BEGIN ZAPIER TO GOOGLE SHEETS LOVE ENERGY----------------------------------->

<script type="text/javascript">
var myval = "https://hooks.zapier.com/hooks/catch/3033677/0j3j18/?<?php echo $bcchookzap; ?>";
	//console.log('test');
	//console.log(myval);
	var xhr = new XMLHttpRequest(); 


xhr.open('GET', myval, true);
xhr.send(); 

</script>

<!------------------END ZAPIER TO GOOGLE SHEETS LOVE ENERGY----------------------------------->
<?php
 
//---------------------END LOVE ENERGY API------------------------------ 


} elseif (file_exists($filename)) { 
	

//---------------------BEGIN ENERGY SUPERMARKET API--------------------


$bcchookzapSM = "nrg_question1=".$nrg_question1.
"&nrg_first_name=".$nrg_first_name.
"&nrg_last_name=".$nrg_last_name.
"&nrg_company=".$nrg_company.
"&nrg_phone=".$nrg_phone.
"&nrg_postcode=".$nrg_postcode.
"&nrg_email=".$nrg_email.
"&nrg_question2=".$nrg_question2.
"&nrg_bill=".$nrg_bill.
"&nrg_contract_date=".$nrg_contract_date.
"&lead_response=EMAIL SENT";

?>

<!------------------BEGIN ZAPIER TO GOOGLE SHEETS ENERGY SUPERMARKET----------------------------------->

<script type="text/javascript">
var myval = "https://hooks.zapier.com/hooks/catch/3033677/0j3q41/?<?php echo $bcchookzapSM; ?>";
	//console.log('test');
	//console.log(myval);
	var xhr = new XMLHttpRequest(); 


xhr.open('GET', myval, true);
xhr.send(); 

</script>

<!------------------END ZAPIER TO GOOGLE SHEETS ENERGY SUPERMARKET----------------------------------->



<?php

unlink($filename);

//----------------------END ENERGY SUPER MARKET API-------------------------

}
	
	
//--------------END SPLITTER-----------------------------



	
//$doc = new DOMDocument();
//$doc->loadXML($nrg_response);

//$result = $doc->getElementsByTagName('HotKeyLeadResponse');
//$XMLresults     = $client->__getLastResponse()->getElementsByTagName("HotKeyLeadResponse");
   // $output = $XMLresults->item(0)->nodeValue;


//echo $bcchookzap;
//var_dump($xml_array);
?>





<?php
get_footer();
?>
