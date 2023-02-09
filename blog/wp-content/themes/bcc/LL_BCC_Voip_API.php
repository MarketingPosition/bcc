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

	return 'Other (Unknown) - ' . $_SERVER['HTTP_USER_AGENT'];
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


$pay_question1      = $_POST["pay_question1"];
$pay_question2      = $_POST["pay_question2"];
$pay_question3      = $_POST["pay_question3"];
$pay_question4      = $_POST["pay_question4"];
$pay_question5      = $_POST["pay_question5"];

$pay_fullname     = $_POST["fullname"];
$pay_company        = $_POST["company"];
$pay_phone          = $_POST["phone"];
$pay_email          = $_POST["email"];


$lluser = 'leads@businesscostcomparison.co.uk';
$llpass = '7rV-$ZkYFK~';


?>




<?php

$prevurl2 =  $_SERVER['HTTP_REFERER'];
$prevurl = explode("?", $prevurl2);
$previousurl = str_replace('<?php echo $domain;?>', '', $prevurl);

$prevpage = $previousurl['0'];



$bccapi = "pay_email=" . urlencode($pay_email) .
	"&pay_question1=" . urlencode($pay_question1) .
	"&pay_question2=" . urlencode($pay_question2) .
	"&pay_question3=" . urlencode($pay_question3) .
	"&pay_question4=" . urlencode($pay_question4) .
	"&pay_question5=" . urlencode($pay_question5) .
	"&pay_phone=" . urlencode($pay_phone) .
	"&pay_fullname=" . urlencode($pay_fullname) .
	"&pay_company=" . urlencode($pay_company) .
	"&refererpage=" . urlencode($prevpage) .
	"&username=" . urlencode($lluser) .
	"&pass=" . urlencode($llpass) .
	$bcctraffic;


$bcchookzap2 = "pay_email=" . urlencode($pay_email) .
	"&pay_question1=" . urlencode($pay_question1) .
	"&pay_question2=" . urlencode($pay_question2) .
	"&pay_question3=" . urlencode($pay_question3) .
	"&pay_question4=" . urlencode($pay_question4) .
	"&pay_question5=" . urlencode($pay_question5) .
	"&pay_phone=" . urlencode($pay_phone) .
	"&pay_fullname=" . urlencode($pay_fullname) .
	"&pay_company=" . urlencode($pay_company);


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://35.211.186.221/api-voip-v2.php?' . $bccapi,
	CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);

// SEND EMAIL NOTIFICATION VIA ZAPIER TO SUPPLIER

/*
		$curl2 = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl2, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'https://hooks.zapier.com/hooks/catch/6400117/o9m1yuh/?'.$bcchookzap2,
			CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		]);
		// Send the request & save response to $resp
		$resp2 = curl_exec($curl2);
   */

//END EMAIL 
?>