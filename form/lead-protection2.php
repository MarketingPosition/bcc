<?php
/*
 *
 * API Webhook
 *
 */
require_once('../form/hook-leadbyte-contactstate.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once('../form/utm-data.php');

$claim_url       = $_POST['contact_state_claim_cert_url'];
$certificate_url  = submit_claim_cert_url($claim_url);

$phone             = $_POST["phone"];
$redirect_url      = $_POST["redirect_url"];
$dob_dd            = $_POST["dob_dd"];
$dob_mm            = $_POST["dob_mm"];
$dob_yyyy          = $_POST["dob_yyyy"];
$gender           = $_POST["gender"];
$smoked         = isset($_POST["smoking"]) ? $_POST["smoking"] : 'no';

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$currentDateTime = date('Y-m-d');

$dob_date = '';

if ($dob_dd) {
  $dob_create = date_create();
  $dob_date_set = date_date_set($dob_create, $dob_yyyy, $dob_mm, $dob_dd);
  $dob_date = $dob_date_set->format('d/m/Y');
  $dob_date2 = $dob_date_set->format('Y-m-d');
}

$leadbyte = array(
  "campid"      => "KEYMAN-INSURANCE2",
  "sid"         => "1",
  "returnjson"  => "yes",
  "testmode"  => "no",
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "firstname"         => urldecode($_POST["first_name"]),
  "lastname"          => urldecode($_POST["last_name"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phone1"            => urldecode($phone_clean),
  "postcode"          => urldecode($_POST["postcode"]),
  "gender"            => urldecode($_POST["gender"]),
  "dob"               => urldecode($dob_date),
  "companytype"       => urldecode($_POST["company_type"]),
  "businesstype"      => urldecode($_POST["business_type"]),
  "smoked"        => $smoked,
  "datecreated"       => urldecode($currentDateTime),
  'Redirect_URL'      => $redirect_url,
  'c1'          => $certificate_url
);

$full_param = array_merge($params, $utm_params, $leadbyte);
file_put_contents("../../full_param.txt", json_encode($full_param) . PHP_EOL, FILE_APPEND | LOCK_EX);

/*
Contact State data
*/
//$dob_date2=date('Y-m-d',strtotime($dob_date3));
$contactstatedata = array(
  "contact_state_test_mode" => "true",
  "first_name"          => urldecode($_POST["first_name"]),
  "last_name"             => urldecode($_POST["last_name"]),
  "email"                 => urldecode($_POST["email"]),
  "company_name"          => urldecode($_POST["company"]),
  "home_phone"            => urldecode($phone_clean),
  "postal_code"           => urldecode($_POST["postcode"]),
  "gender"                => urldecode($_POST["gender"]),
  "date_of_birth"         => urldecode($dob_date2),
  "alt1"               => urldecode($_POST["company_type"]),
  "alt2"                => urldecode($_POST["business_type"]),
  "alt3"            => "Smoke: " . strtoupper($smoked),
  "ip_address"          => $_SERVER['REMOTE_ADDR'],
  "user_agent"        => $_SERVER['HTTP_USER_AGENT'],
  "marketing_campaign"    => urldecode($_POST["UCAMPAIGN"]),
  "marketing_keyword"    => urldecode($_POST["UTERM"]),
  "marketing_medium"    => urldecode($_POST["UMEDIUM"]),
  "marketing_source"    => urldecode($_POST["USOURCE"]),
  "marketing_website_url"  => "<?php echo $domain;?>/keyman-insurance",

);
file_put_contents("../../contactstatesubmits.txt", json_encode($contactstatedata) . PHP_EOL, FILE_APPEND | LOCK_EX);
file_put_contents("../../claim_url.txt", $claim_url . PHP_EOL, FILE_APPEND | LOCK_EX);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($full_param);

formSubmit($full_param, $contactstatedata);
