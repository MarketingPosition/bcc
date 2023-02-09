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





//BEGIN SEND LEAD TO SMARTER
/*
$URL = 'https://www.cheaperbusinesselectricity.co.uk/webLeadApi.php';	
$data = array
  (
  'Id' => 'a1W4I00000FeqwNUAR',
  'business_name' => $nrg_company,
  'business_postcode' => $nrg_postcode,
  'first_name' => $nrg_first_name,
  'last_name' => $nrg_last_name,
  'phone' => $nrg_phone,
  'email' => $nrg_email,
 'curr_supplier' => $nrg_question2,
 'annual_Spend' => $nrg_bill
 //'Contract End: ' => $nrg_contract_date
  );
 
$options = array(
'http' => array(
'header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST',
'content' => http_build_query($data),
),
"ssl"=>array(
"verify_peer"=>false,
"verify_peer_name"=>false,
),
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($result);
*/
/*
$curl = curl_init();

$arr = array
  (
  'Id' => 'a1W4I00000FeqwNUAR',
  'business_name' => $nrg_company,
 'business_postcode' => $nrg_postcode,
 'first_name' => $nrg_first_name,
  'last_name' => $nrg_last_name,
 'phone' => $nrg_phone,
  'email' => $nrg_email,
 'curr_supplier' => $nrg_question2,
 'annual_Spend' => $nrg_bill
 //'Contract End: ' => $nrg_contract_date
  );

$query = http_build_query($arr); // produces: u=this%26q%3Dlove&v=hate

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.cheaperbusinesselectricity.co.uk/webLeadApi.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $query,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$response = strstr($response, 'Salesforce ID: ');

$response = strstr($response, 'Lead Provider ID: ', true);
$response = ltrim($response, 'Salesforce ID: ');
curl_close($curl);
echo $query." / ";
echo $response;

*/

// BEGIN SEND LEAD TO LEADBYTE ENERGY CAMPAIGN

//$llnow = date('d-m-Y');



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
$nrg_bill           = number_format($_POST["nrg_bill"], 2);
$nrg_contract_date  = $_POST["nrg_contract_date"];
$notes = $_POST['our_notes'];

$bccapi =
  "&nrg_question1=" . urlencode($nrg_question1) .
  "&company=" . urlencode($nrg_company) .
  "&phone1=" . urlencode($nrg_phone) .
  "&nrg_question2=" . urlencode($nrg_question2) .
  "&email=" . urlencode($nrg_email) .
  "&firstname=" . urlencode($nrg_first_name) .
  "&lastname=" . urlencode($nrg_last_name) .
  "&nrg_contract_date=" . urlencode($nrg_contract_date) .
  "&nrg_bill=" . urlencode($nrg_bill) .
  "&notes=" . urlencode($notes) .
  "&postcode=" . urlencode($nrg_postcode);


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => 'https://marketingposition.leadbyte.co.uk/api/submit.php?returnjson=yes&campid=ENERGY-SERVICES-CAMP&SID=1' . $bccapi,
  CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);


/*
// BEGIN SEND LEAD TO LEADLAB API

$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://35.211.186.221/api-energy-v2-s.php?'.$bccapi,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);

//echo $resp;

*/

?>