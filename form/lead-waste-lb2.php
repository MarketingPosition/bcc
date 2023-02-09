<?php
/*
 *
 * API Webhook
 *
 */
require_once ('../form/hook-leadbyte-direct.php');

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once ('../form/utm-data.php');

$q1                = $_POST['question1'];
$waste_q1          = implode(', ', $q1);
$phone             = $_POST["phone"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

$leadbyte = array (
  "campid"      => "BUSINESS-WASTE",
  "sid"         => "13",
  "testmode"    => "no",
  "returnjson"  => "yes"
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "firstname"         => $_POST["first_name"],
  "lastname"          => $_POST["last_name"],
  "email"             => $_POST["email"],
  "company"           => $_POST["company"],
  "phone_1"           => $phone_clean,
  "businesstype"      => $_POST["business_type"],
  "q1"                => $waste_q1,
  "q2"                => $_POST['question2'],
  "q3"                => $_POST['question3'],
  "postcode"          => $_POST["postcode"],
  "wasteid"           => $wasteID
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($full_param);

if(empty($_POST['bottrap']) && !empty($phone_clean)){
	formSubmit($full_param);
}
