<?php

function get_the_browser()
{
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
    return 'Internet explorer';
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
    return 'Internet explorer';
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
    return 'Mozilla Firefox';
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
    return 'Google Chrome';
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
    return "Opera Mini";
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
    return "Opera";
  elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
    return "Safari";
  else
    return 'Other';
}
$browser = get_the_browser();


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
  "&browser=" . urlencode($browser);


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
  $bcctraffic;


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => 'http://35.211.186.221/api-energy-v2.php?' . $bccapi,
  CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);


?>