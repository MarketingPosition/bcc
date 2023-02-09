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

$currentDateTime = date('Y-m-d');

$leadbyte = array (
  "campid"      => "FUEL-CARDS",
  "sid"         => "1",
  "returnjson"  => "yes"
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "firstname"         => urldecode($_POST["firstname"]),
  "lastname"          => urldecode($_POST["lastname"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phone1"            => urldecode($phone_clean),
  "postcode"          => urldecode($_POST["postcode"]),
  "using_fuel"        => urldecode($_POST["using_fuel"]),
  "fuel_type"         => urldecode($_POST["fuel_type"]),
  "vehicles"          => urldecode($_POST["vehicles"]),
  "type_vehicle"      => urldecode($_POST["type_vehicle"]),
  "spend"             => urldecode($_POST["spend"]),
  "company_type"      => urldecode($_POST["company_type"]),
  "datecreated"       => urldecode($currentDateTime),
  'Redirect_URL'      => $redirect_url
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($full_param);

formSubmit($full_param);
