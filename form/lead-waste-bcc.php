<?php

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$deviced = get_device();

if (strpos($_POST['utmref'], 'utm')) {

	$ut = explode('?', $_POST['utmref']);
	//$utms = json_encode($ut[1]);
	parse_str($ut[1], $utm);

	$bcctraffic =
		"&utmcampaign=" . urlencode($utm['UCAMPAIGN']) .
		"&utmcontent=" . urlencode($utm['UCONTENT']) .
		"&utmtype=Campaign" .
		"&utmmedium=" . urlencode($utm['UMEDIUM']) .
		"&utmsource=" . urlencode($utm['USOURCE']) .
		"&utmterm=" . urlencode($utm['UTERM']) .
		"&utmgclid=" . urlencode($utm['gclid']) .
		"&paidsearch=" . urlencode($utm['paidSearch']) .
		"&utmref=" . urlencode($ut[0]) .
		"&device=" . urlencode($deviced) .
		"&browser=" . urlencode($browser);
} else {

	$bcctraffic =
		"&utmcampaign=" . urlencode($_POST['UCAMPAIGN']) .
		"&utmcontent=" . urlencode($_POST['UCONTENT']) .
		"&utmtype=" . urlencode($_POST['utmtype']) .
		"&utmmedium=" . urlencode($_POST['UMEDIUM']) .
		"&utmsource=" . urlencode($_POST['USOURCE']) .
		"&utmterm=" . urlencode($_POST['utmterm']) .
		"&utmgclid=" . urlencode($_POST['GCLID']) .
		"&paidsearch=" . urlencode($_POST['paidSearch']) .
		"&utmref=" . urlencode($_POST['utmref']) .
		"&device=" . urlencode($deviced) .
		"&browser=" . urlencode($browser);
}

$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$company        = $_POST["company"];
$tel_phone      = $_POST["phone"];
$postcode       = $_POST["postcode"];
$email          = $_POST["email"];
$bustype = $_POST["business_type"];
$redirect_url      = $_POST["redirect_url"];

$waste_q1      = implode(', ', $question1);
$phone_clean = str_replace(' ', '', $tel_phone);

$lluser = 'leads@businesscostcomparison.co.uk';
$llpass = '7rV-$ZkYFK~';

$prevurl2 =  $_SERVER['HTTP_REFERER'];
$prevurl = explode("?", $prevurl2);
$previousurl = str_replace('<?php echo $domain;?>', '', $prevurl);

$prevpage = $previousurl['0'];

$bccapi = "question1=" . urlencode($waste_q1) .
	"&question2=" . urlencode($question2) .
	"&question3=" . urlencode($question3) .
	"&question4=" . urlencode($question4) .
	"&company=" . urlencode($company) .
	"&phonenumber=" . urlencode($tel_phone) .
	"&postcode=" . urlencode($postcode) .
	"&email=" . urlencode($email) .
	"&first_name=" . urlencode($first_name) .
	"&last_name=" . urlencode($last_name) .
	"&referpage=" . urlencode($prevpage) .
	"&username=" . urlencode($lluser) .
	"&pass=" . urlencode($llpass) .
	"&wasteID=" . $wasteID .
	"&bustype=" . urlencode($bustype) .
	$bcctraffic;


$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://35.211.186.221/api-waste-v2.php?' . $bccapi,
	CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);

header('Location:' . $redirect_url);
exit();
