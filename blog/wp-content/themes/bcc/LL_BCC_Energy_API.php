<?php

function get_browser_name($user_agent)
{
	// Make case insensitive.
	$t = strtolower($user_agent);

	// If the string *starts* with the string, strpos returns 0 (i.e., FALSE). Do a ghetto hack and start with a space.
	// "[strpos()] may return Boolean FALSE, but may also return a non-Boolean value which evaluates to FALSE."
	//     http://php.net/manual/en/function.strpos.php
	$t = " " . $t;

	// Humans / Regular Users      
	if (strpos($t, 'opera') || strpos($t, 'opr/')) return 'Opera';
	elseif (strpos($t, 'edge')) return 'Edge';
	elseif (strpos($t, 'chrome')) return 'Google Chrome';
	elseif (strpos($t, 'safari')) return 'Safari';
	elseif (strpos($t, 'firefox')) return 'Mozilla Firefox';
	elseif (strpos($t, 'msie') || strpos($t, 'trident/7')) return 'Internet explorer';

	// Search Engines  
	elseif (strpos($t, 'google')) return '[Bot] Googlebot';
	elseif (strpos($t, 'bing')) return '[Bot] Bingbot';
	elseif (strpos($t, 'slurp')) return '[Bot] Yahoo! Slurp';
	elseif (strpos($t, 'duckduckgo')) return '[Bot] DuckDuckBot';
	elseif (strpos($t, 'baidu')) return '[Bot] Baidu';
	elseif (strpos($t, 'yandex')) return '[Bot] Yandex';
	elseif (strpos($t, 'sogou')) return '[Bot] Sogou';
	elseif (strpos($t, 'exabot')) return '[Bot] Exabot';
	elseif (strpos($t, 'msn')) return '[Bot] MSN';

	// Common Tools and Bots
	elseif (strpos($t, 'mj12bot')) return '[Bot] Majestic';
	elseif (strpos($t, 'ahrefs')) return '[Bot] Ahrefs';
	elseif (strpos($t, 'semrush')) return '[Bot] SEMRush';
	elseif (strpos($t, 'rogerbot') || strpos($t, 'dotbot')) return '[Bot] Moz or OpenSiteExplorer';
	elseif (strpos($t, 'frog') || strpos($t, 'screaming')) return '[Bot] Screaming Frog';

	// Miscellaneous 
	elseif (strpos($t, 'facebook')) return '[Bot] Facebook';
	elseif (strpos($t, 'pinterest')) return '[Bot] Pinterest';

	// Check for strings commonly used in bot user agents   
	elseif (
		strpos($t, 'crawler') || strpos($t, 'api') ||
		strpos($t, 'spider') || strpos($t, 'http') ||
		strpos($t, 'bot') || strpos($t, 'archive') ||
		strpos($t, 'info') || strpos($t, 'data')
	) return '[Bot] Other';

	return 'Other (Unknown)';
}


$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);


function get_device()
{

	$d = strtolower($_SERVER['HTTP_USER_AGENT']);
	if (strpos($d, 'windows')) return 'Desktop';
	elseif (strpos($d, 'macintosh')) return 'Desktop';
	elseif (strpos($d, 'mobile')) return 'Mobile';
	elseif (strpos($d, 'cros')) return 'Desktop';
	else return 'Other';
}

$deviced = get_device();


if (strpos($_POST['utmref'], 'utm')) {

	$ut = explode('?', $_POST['utmref']);
	//$utms = json_encode($ut[1]);
	parse_str($ut[1], $utm);

	$bcctraffic =
		"&utmcampaign=" . urlencode($utm['utm_campaign']) .
		"&utmcontent=" . urlencode($utm['utm_content']) .
		"&utmtype=Campaign" .
		"&utmmedium=" . urlencode($utm['utm_medium']) .
		"&utmsource=" . urlencode($utm['utm_source']) .
		"&utmterm=" . urlencode($utm['ppc_keyword']) .
		"&utmgclid=" . urlencode($utm['gclid']) .
		"&paidsearch=" . urlencode($utm['paidSearch']) .
		"&utmref=" . urlencode($ut[0]) .
		"&device=" . urlencode($deviced) .
		"&browser=" . urlencode($browser);
} else {

	$bcctraffic =
		"&utmcampaign=" . urlencode($_POST['utmcampaign']) .
		"&utmcontent=" . urlencode($_POST['utmcontent']) .
		"&utmtype=" . urlencode($_POST['utmtype']) .
		"&utmmedium=" . urlencode($_POST['utmmedium']) .
		"&utmsource=" . urlencode($_POST['utmsource']) .
		"&utmterm=" . urlencode($_POST['utmterm']) .
		"&utmgclid=" . urlencode($_POST['utmgclid']) .
		"&paidsearch=" . urlencode($_POST['paidSearch']) .
		"&utmref=" . urlencode($_POST['utmref']) .
		"&device=" . urlencode($deviced) .
		"&browser=" . urlencode($browser);
}

//Gas / Electric
$nrg_question1      = $_POST["nrg_question1"];

//Current energy supplier
$nrg_question2      = $_POST["nrg_question2"];

$nrg_first_name     = $_POST["nrg_first_name"];
$nrg_last_name      = $_POST["nrg_last_name"];
$nrg_company        = $_POST["nrg_company"];
$nrg_phone          = $_POST["nrg_phone"];
$nrg_postcode       = $_POST["nrg_postcode"];
$nrg_email          = $_POST["nrg_email"];
$nrg_bill           = $_POST["nrg_bill"];
$nrg_contract_date  = $_POST["nrg_contract_date"];


$lluser = 'leads@businesscostcomparison.co.uk';
$llpass = '7rV-$ZkYFK~';


?>





<!-- BEGIN REMOVE TRACKING COOKIE -->
<script>
	localStorage.removeItem("_ca_data");
</script>
<!-- END REMOVE TRACKING COOKIE -->

<?php

$prevurl2 =  $_SERVER['HTTP_REFERER'];
$prevurl = explode("?", $prevurl2);
$previousurl = str_replace('<?php echo $domain;?>', '', $prevurl);

$prevpage = $previousurl['0'];



$bccapi = "nrg_question1=" . $nrg_question1 .
	"&nrg_first_name=" . urlencode($nrg_first_name) .
	"&nrg_last_name=" . urlencode($nrg_last_name) .
	"&nrg_company=" . urlencode($nrg_company) .
	"&nrg_phone=" . $nrg_phone .
	"&nrg_postcode=" . urlencode($nrg_postcode) .
	"&nrg_email=" . $nrg_email .
	"&nrg_question2=" . urlencode($nrg_question2) .
	"&nrg_bill=" . $nrg_bill .
	"&nrg_contract_date=" . $nrg_contract_date .
	"&referpage=" . urlencode($prevpage) .
	"&lead_response=" . $count .
	"&username=" . urlencode($lluser) .
	"&pass=" . urlencode($llpass) .
	$bcctraffic;

//BEGIN SEND LEAD TO ZAPIER FOR LOGGING VIA EMAIL

/*
		$bcchookzap3 = "nrg_question1=".urlencode($nrg_question1).
		"&nrg_first_name=".urlencode($nrg_first_name).
		"&nrg_last_name=".urlencode($nrg_last_name).
		"&nrg_company=".urlencode($nrg_company).
		"&nrg_phone=".urlencode($nrg_phone).
		"&nrg_postcode=".urlencode($nrg_postcode).
		"&nrg_email=".urlencode($nrg_email).
		"&nrg_question2=".urlencode($nrg_question2).
		"&nrg_bill=".urlencode($nrg_bill).
		"&nrg_contract_date=".urlencode($nrg_contract_date);
		

		$curl2 = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl2, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'https://hooks.zapier.com/hooks/catch/3033677/o3oa15z/?'.$bcchookzap3,
			CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		]);
		// Send the request & save response to $resp
		$resp2 = curl_exec($curl2);
*/

//END ZAPIER


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://35.211.186.221/api-energy-v2-n.php?' . $bccapi,
	CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);


?>