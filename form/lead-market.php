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

$q1                = $_POST['mkt_question1'];
$mkt_q1            = implode(',', $q1);

$channel           = $_POST['mkt_channel'];
$mkt_channel      = implode(', ', $channel);

$phone             = $_POST["phone"];
$redirect_url      = $_POST["redirect_url"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$leadbyte = array(
  "campid"      => "MARKETING-SERVICES",
  "sid"         => "1",
  "returnjson"  => "yes",
  "testmode"    => "no"
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "first_name"        => urldecode($_POST["first_name"]),
  "last_name"         => urldecode($_POST["last_name"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phone1"            => urldecode($phone_clean),
  "mkt_question1"     => urldecode($mkt_q1),
  "mkt_question2"     => urldecode($_POST["mkt_question2"]),
  "mkt_companysize"   => urldecode($_POST["mkt_companysize"]),
  'mkt_budget'        => urldecode($_POST["mkt_budget"]),
  'mkt_website'       => urldecode($_POST["website"]),
  "mkt_channel"       => urldecode($mkt_channel),
  'mkt_length'        => urldecode($_POST["mkt_length"]),
  'mkt_operation'     => urldecode($_POST["mkt_operation"]),
  'businesstype'      => urldecode($_POST["business_type"]),
  'testmode'          => urldecode($_POST["testmode"]),
  'Redirect_URL'      => urldecode($redirect_url . "?channel=" . $mkt_q1)
);

$full_param = array_merge($params, $utm_params, $leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);

formSubmit($full_param);
