<?php

function get_the_browser()
{
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
   return 'Internet explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
    return 'Internet explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
   return 'Mozilla Firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
   return 'Google Chrome';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
   return "Opera Mini";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
   return "Opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
   return "Safari";
 else
   return 'Other';
}
$browser = get_the_browser();

	
$bcctraffic = 
	"&utmcampaign=".urlencode($_POST['utmcampaign']).
	"&utmcontent=".urlencode($_POST['utmcontent']).
	"&utmtype=".urlencode($_POST['utmtype']).
	"&utmmedium=".urlencode($_POST['utmmedium']).
	"&utmsource=".urlencode($_POST['utmsource']).
	"&utmterm=".urlencode($_POST['utmterm']). 
	"&utmgclid=".urlencode($_POST['utmgclid']). 
	"&paidsearch=".urlencode($_POST['paidSearch']). 
	"&utmref=".urlencode($_POST['utmref']).
	"&browser=".urlencode($browser);


$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];

$first_name = $_POST["first_name"];      
$last_name = $_POST["last_name"];
$company        = $_POST["company"];
$tel_phone          = $_POST["phonenumber"];
$postcode       = $_POST["postcode"];
$email          = $_POST["email"];
 

$lluser = 'leads@businesscostcomparison.co.uk';
$llpass = '7rV-$ZkYFK~';

/*

function uniqidReal($length = 13) {
    // uniqid gives 13 chars, but you could adjust it to your needs.
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($length / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $length);
}



$uniq = uniqidReal();
$wasteID = uniqid().$uniq;

*/

$prevurl2 =  $_SERVER['HTTP_REFERER'];
$prevurl = explode("?",$prevurl2);
$previousurl = str_replace('<?php echo $domain;?>', '', $prevurl);

$prevpage = $previousurl['0'];



$bccapi = "question1=".urlencode($question1).
				"&question2=".urlencode($question2).
				"&question3=".urlencode($question3).
				"&company=".urlencode($company).
				"&phonenumber=".urlencode($tel_phone).
				"&postcode=".urlencode($postcode).
				"&email=".urlencode($email).
				"&first_name=".urlencode($first_name).
				"&last_name=".urlencode($last_name).
"&referpage=".urlencode($prevpage).
"&username=".urlencode($lluser).
"&pass=".urlencode($llpass).
"&wasteID=".$wasteID.
$bcctraffic;


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://35.211.186.221/api-waste-v2.php?'.$bccapi,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
