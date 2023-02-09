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
  "campid"      => "MERCHANT-SERVICES",
  "sid"         => "13",
  "returnjson"  => "yes",
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "first_name"        => urldecode($_POST["first_name"]),
  "last_name"         => urldecode($_POST["last_name"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phone_1"           => urldecode($phone_clean),
  "pay_question1"     => urldecode($_POST["pay_1"]),
  "pay_question2"     => urldecode($_POST["pay_2"]),
  "pay_question3"     => urldecode($_POST["pay_3"]),
  'pay_question4'     => urldecode($_POST["pay_4"]),
  'pay_question5'     => urldecode($_POST["business_type"]),
  'postcode'          => urldecode($_POST["postcode"]),
  'Redirect_URL'      => $redirect_url,
  "utm_source"    	  => urldecode($_POST["USOURCE"]),
  "utm_medium"    		=> urldecode($_POST["UMEDIUM"]),
  "utm_campaign"  => urldecode($_POST["UCAMPAIGN"]),
  "utm_content"   => urldecode($_POST["UCONTENT"]),
  "utm_term"      => urldecode($_POST["UTERM"])
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);

formSubmit($full_param);
