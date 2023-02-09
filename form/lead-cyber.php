<?php
/*
 *
 * API Webhook
 *
 */
require_once('../form/hook-leadbyte.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once('../form/utm-data.php');

$phone             = $_POST["phone"];
$redirect_url      = $_POST["redirect_url"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$currentDateTime = date('Y-m-d');

$leadbyte = array(
  "campid"      => "BUSINESS-CYBERSECURI",
  "sid"         => "1",
  "returnjson"  => "yes",
  "testmode"    => "no"
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
  "domain"            => urldecode($_POST["domain"]),
  "postcode"          => urldecode($_POST["postcode"]),
  "businesstype"      => urldecode($_POST["business_type"]),
  "datecreated"       => urldecode($currentDateTime),
  'Redirect_URL'      => $redirect_url,
);

$full_param = array_merge($params, $utm_params, $leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);

formSubmit($full_param);
