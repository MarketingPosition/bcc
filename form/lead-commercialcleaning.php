<?php
/*
 *
 * API Webhook
 *
 */
require_once ('../form/hook-json.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Generic
//======================================================================

$id            = '';
$firstname     = $_POST["first_name"];
$lastname      = $_POST["last_name"];
$email         = $_POST["email"];
$phone         = urldecode($_POST["phone"]);
$postcode      = $_POST["postcode"];
$company       = $_POST["company"];
//$renewal_dd    = isset($_POST["renewal_dd"])?$_POST["renewal_dd"]:date('d');
$renewal_mm    = $_POST["renewal_mm"];
$renewal_yyyy  = $_POST["renewal_yyyy"];
$energy_type   = $_POST["energy_type"];
$supplier      = $_POST["supplier"];
$cleaned_time  = $_POST["cleaned_time"];
$business_type = $_POST["business_type"];

//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once ('../form/utm-data.php');

$redirect_url = $_POST["redirect_url"];


//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);
$renewal_date = '';

/*if($renewal_dd){
  $renewal_create = date_create();
  $renewal_date_set = date_date_set($renewal_create, $renewal_yyyy, $renewal_mm, $renewal_dd);
  $renewal_date = $renewal_date_set->format('d/m/Y');  
}*/
$renewal_date = $renewal_mm.'/'.$renewal_yyyy;
if($renewal_mm=="" && $renewal_yyyy==""){
	$renewal_date='No';
}
//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "key"               => "57755aac3e98a96327ca2dfddb076928",
  "lead"              => array(
    "sid"               => "1",
    "campid"            => "BUSINESS-CLEANING",
    "firstname"         => $firstname,
    "lastname"          => $lastname,
    "email"             => $email,
    "company"           => $company,
    "phone1"            => $phone_clean,
    "postcode"          => $postcode,
    "nrg_contract_date" => $renewal_date,
    "nrg_question1"     => $energy_type,
    "nrg_question2"     => $cleaned_time,
    "nrg_bill"          => '10',
	"businesstype"      => $business_type
  ),
  'Redirect_URL'      => $redirect_url
);

$full_param = array_merge($params,$utm_params);

//======================================================================
// Submit to CRM
//======================================================================
//$json = json_encode($full_param);
//print_r($json);
//print_r($_POST);

jsonPost($full_param);
