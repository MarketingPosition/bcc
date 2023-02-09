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
  "campid"      => "BUSINESS-INSURANCE",
  "sid"         => "12",
  "returnjson"  => "yes",
  "testmode"    => "no",
);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params = array(
  "firstname"        	=> urldecode($_POST["first_name"]),
  "lastname"         	=> urldecode($_POST["last_name"]),
  "email"             	=> urldecode($_POST["email"]),
  "company"           	=> urldecode($_POST["company"]),
  "phone1"           	=> urldecode($phone_clean),
  "q1_quotetype"     	=> urldecode($_POST["pay_1"]),
 /* "pay_question2"     => urldecode($_POST["pay_2"]),
  "pay_question3"     	=> urldecode($_POST["pay_3"]),
  'pay_question4'     	=> urldecode($_POST["pay_4"]),
  'pay_question5'     	=> urldecode($_POST["business_type"]),*/
  'postcode'         	=> urldecode($_POST["postcode"]),
  'q2_lookingfornotes'  => urldecode($_POST["message"]),
  'Redirect_URL'      	=> $redirect_url,
  "utmsource"    	  	=> urldecode($_POST["USOURCE"]),
  "utmmedium"    		=> urldecode($_POST["UMEDIUM"]),
  "utmcampaign"  		=> urldecode($_POST["UCAMPAIGN"]),
  "utmcontent"   		=> urldecode($_POST["UCONTENT"]),
  "utmterm"      		=> urldecode($_POST["UTERM"]),
  "businesstype"		=> 'INSURANCE',
  "paidsearch"			=> 'Yes',
);

$full_param = array_merge($params,$utm_params,$leadbyte);

//======================================================================
// Submit to CRM
//======================================================================
//print_r($_POST);

formSubmit($full_param);
