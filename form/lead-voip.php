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

$firstname     = urldecode($_POST["firstname"]);
$lastname      = urldecode($_POST["lastname"]);
$email         = urldecode($_POST["email"]);
$phone         = urldecode($_POST["phone1"]);
$postcode      = urldecode($_POST["postcode"]);
$company       = urldecode($_POST["company"]);
$business_type = urldecode($_POST["business_type"]);

//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once('../form/utm-data.php');

$redirect_url = $_POST["redirect_url"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);
$created_date = date('d-m-Y');

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "key"               => "57755aac3e98a96327ca2dfddb076928",
  "lead"              => array(
    "sid"               => "1",
    "campid"            => "VOIP-CAMPAIGN",
    "firstname"         => $firstname,
    "lastname"          => $lastname,
    "email"             => $email,
    "company"           => $company,
    "phone1"            => $phone_clean,
    "postcode"          => $postcode,
    "businesstype"      => $business_type,
    "voipq1"            => urldecode($_POST["voipq1"]),
    "voipq2"            => urldecode($_POST["voipq2"]),
    "calltype"          => "Inbound",
    "callagent"         => "Website",
    "product"           => "VOIP",
    "datecreated"       => $created_date,
    "testmode"          => "no"
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
