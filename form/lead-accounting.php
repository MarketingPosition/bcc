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

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$leadbyte = array (
  "campid"      => "BUSINESS-ACCOUNTING",
  "sid"         => "12",
  "returnjson"  => "yes",
  "testmode"    => "no",
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "firstname"        => urldecode($_POST["first_name"]),
  "lastname"         => urldecode($_POST["last_name"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phone1"           => urldecode($phone_clean),
  "q1_needaccountant"     => urldecode($_POST["pay_1"]),
  "q3_employees"     => urldecode($_POST["employees"]),
  "q4_vatreg"     => urldecode($_POST["vat"]),
  'q5_services'     => urldecode($_POST["q5_services"]),
  'q2_businesstype'     => urldecode($_POST["business_type"]),
  'q6_turnover'     => urldecode($_POST["q6_turnover"]),
  'postcode'          => urldecode($_POST["postcode"]),
  'paidsearch'		=> 'Yes',
  'Redirect_URL'      => $redirect_url,
  "utmsource"    	  => urldecode($_POST["USOURCE"]),
  "utmmedium"    		=> urldecode($_POST["UMEDIUM"]),
  "utmcampaign"  => urldecode($_POST["UCAMPAIGN"]),
  "utmcontent"   => urldecode($_POST["UCONTENT"]),
  "utmterm"      => urldecode($_POST["UTERM"])
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);
/* echo "<pre>";
print_r($full_param);
exit; */
formSubmit($full_param);
