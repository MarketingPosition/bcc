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

$leadbyte = array(
  "campid"      => "BUSINESS-HEALTHCARE",
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
  "source"            => urldecode($_POST["source"]),
  "existing"          => urldecode($_POST["existing"]),
  "provider"          => urldecode($_POST["provider"]),
  'covered'           => urldecode($_POST["covered"]),
  'broker'            => urldecode($_POST["broker"]),
  'renewal'           => urldecode($_POST["renewal"]),
  'employees'         => urldecode($_POST["employees"]),
  'startdate'         => urldecode($_POST["startdate"]),
  'businesstype'      => urldecode($_POST["business_type"]),
  'Redirect_URL'      => $redirect_url
);

$full_param = array_merge($params, $utm_params, $leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);

formSubmit($full_param);
