<?php
/*
 *
 * API Webhook
 *
 */
require_once ('../form/hook-leadbyte.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once ('../form/utm-data.php');

$phone             = $_POST["phone"];
$redirect_url      = $_POST["redirect_url"];
$dob_dd            = $_POST["dob_dd"];
$dob_mm            = $_POST["dob_mm"];
$dob_yyyy          = $_POST["dob_yyyy"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$currentDateTime = date('Y-m-d');

$dob_date = '';

if($dob_dd){
  $dob_create = date_create();
  $dob_date_set = date_date_set($dob_create, $dob_yyyy, $dob_mm, $dob_dd);
  $dob_date = $dob_date_set->format('d/m/Y');
}

$leadbyte = array (
  "campid"      => "KEYMAN-INSURANCE",
  "sid"         => "1",
  "returnjson"  => "yes"
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
  "dob"               => urldecode($dob_date),
  "companytype"       => urldecode($_POST["company_type"]),
  "businesstype"      => urldecode($_POST["business_type"]),
  "datecreated"       => urldecode($currentDateTime),
  'Redirect_URL'      => $redirect_url,
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($full_param);

formSubmit($full_param);
