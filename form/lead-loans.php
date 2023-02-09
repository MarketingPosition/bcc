<?php
/*
 *
 * API Webhook
 *
 */
require_once('../form/hook-json.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Generic
//======================================================================

$id            = '';
$firstname     = $_POST["firstname"];
$lastname      = $_POST["lastname"];
$email         = $_POST["email"];
$phone         = urldecode($_POST["phone1"]);
$postcode      = urldecode($_POST["postcode"]);
$company       = urldecode($_POST["company"]);
$loanAmount    = urldecode($_POST["loanAmount"]);
$tradingtime   = urldecode($_POST["tradingtime"]);
$requiredate   = urldecode($_POST["requiredate"]);
$funduse       = urldecode($_POST["funduse"]);
$business_type = urldecode($_POST["business_type"]);

//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once('../form/utm-data.php');

$redirect_url      = $_POST["redirect_url"];


//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);
$renewal_date = '';

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "key"               => "57755aac3e98a96327ca2dfddb076928",
  "lead"              => array(
    "sid"               => "1",
    "campid"            => "BUSINESS-LOANS",
    "firstname"         => $firstname,
    "lastname"          => $lastname,
    "email"             => $email,
    "company"           => $company,
    "phone1"            => $phone_clean,
    "postcode"          => $postcode,
    "Loan_Amount"       => $loanAmount,
    "Money_Use"         => $funduse,
    "Product_Type"      => 'N/A',
    "Years_Trading"     => $tradingtime,
    "Required_By"       => $requiredate,
    "businesstype"      => $business_type,
    "utmsource"         => urldecode($_POST["USOURCE"]),
    "utmmedium"         => urldecode($_POST["UMEDIUM"]),
    "utmcampaign"       => urldecode($_POST["UCAMPAIGN"]),
    "utmcontent"        => urldecode($_POST["UCONTENT"]),
    "utmterm"           => urldecode($_POST["UTERM"]),
    "testmode"          => 'no'
  ),
  'Redirect_URL'      => $redirect_url
);

$full_param = array_merge($params, $utm_params);

//======================================================================
// Submit to CRM
//======================================================================
//$json = json_encode($full_param);
//print_r($json);
//print_r($_POST);

jsonPost($full_param);
