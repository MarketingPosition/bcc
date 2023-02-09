<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

require_once ('../form/check-browser.php');

function uniqidReal($length = 13) {
    // uniqid gives 13 chars, but you could adjust it to your needs.
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($length / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
    }
    return substr(bin2hex($bytes), 0, $length);
}

$uniq = uniqidReal();
$wasteID = uniqid().$uniq;

/**
  * Post CURL request.
  *
  * @param string $url URL to post to.
  * @param array  $params List of parameters to pass to URL.
  */
function http_post( $url, $params ) {

 	$post_data = '';

 	foreach ( $params as $k => $v ) {
 		$post_data .= $k . '=' . $v . '&';
 	}
 	$post_data = rtrim( $post_data, '&' );

 	$ch = curl_init();

 	curl_setopt( $ch, CURLOPT_URL, $url );
 	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
 	curl_setopt( $ch, CURLOPT_HEADER, false );
 	curl_setopt( $ch, CURLOPT_POST, count( $post_data ) );
 	curl_setopt( $ch, CURLOPT_POSTFIELDS, $post_data );

 	$output = curl_exec( $ch );

 	curl_close( $ch );
 	return $output;

}

function http_post_bcc( $url, $params ) {

  $full_param   = $params;
  $redirect_url = $full_param['Redirect_URL'];

 	$post_data = '';

 	foreach ( $params as $k => $v ) {
 		$post_data .= $k . '=' . $v . '&';
 	}
 	$post_data = rtrim( $post_data, '&' );

 	$ch = curl_init();

 	curl_setopt( $ch, CURLOPT_URL, 'http://35.211.186.221/api-waste-v2.php?'.$post_data );
 	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

 	$output = curl_exec( $ch );

 	curl_close( $ch );
 	//return $output;
  
  header('Location:'.$redirect_url);
  exit();

}

/*
 *
 * Form to CRM
 *
 */
//======================================================================
// Fields - Generic
//======================================================================

$q1            = $_POST['question1'];
$waste_q1      = implode(', ', $q1);
$phone         = urldecode($_POST["phone"]);

//======================================================================
// Fields - Page Specific, Cookies, Page Settings
//======================================================================
require_once ('../form/utm-data.php');
$redirect_url      = $_POST["redirect_url"];

//======================================================================
// Custom Fields - Client Special Fields
//======================================================================
$phone_clean = str_replace(' ', '', $phone);

//======================================================================
// Submission Body - Mapped to CRM fields
//======================================================================

$params_sf = array(
	'oid'               => '00DD0000000lAai',
	'00ND0000006U59t'   => 'CheaperWaste',
	'lead_source'       => 'Auto-BCC',
	'cloudamp__data__c' => $_POST['cloudamp__data__c'],
	'00ND0000006Niah'   => $_POST['GCLID'],
	'00ND0000006Nhf7'   => urldecode($waste_q1),
	'00ND0000006NhfC'   => urldecode($_POST["question2"]),
	'00ND0000006NhfH'   => urldecode($_POST["question3"]),
	'00ND0000003fw2t'   => urldecode($_POST["postcode"]),
	'email'             => urldecode($_POST["email"]),
	'first_name'        => urldecode($_POST["first_name"]),
	'last_name'         => urldecode($_POST["last_name"]),
	'company'           => urldecode($_POST["company"]),
	'00ND0000003fw1q'   => $phone_clean,
	"00N4G000006pH8z" 	=> $wasteID,
  'Redirect_URL'      => $redirect_url
);

$params_bcc = array(
  "first_name"        => urldecode($_POST["first_name"]),
  "last_name"         => urldecode($_POST["last_name"]),
  "email"             => urldecode($_POST["email"]),
  "company"           => urldecode($_POST["company"]),
  "phonenumber"       => $phone_clean,
  "postcode"          => urldecode($_POST["postcode"]),
  "question1"         => urldecode($waste_q1),
  "question2"         => urldecode($_POST["question2"]),
  "question3"         => urldecode($_POST["question3"]),
  "bustype"           => urldecode($_POST["business_type"]),
  'Redirect_URL'      => $redirect_url,
  'wasteID'           => $wasteID,
  'username'          => 'leads@businesscostcomparison.co.uk',
  'pass'              => '7rV-$ZkYFK~',
  'referpage'         => urldecode($_POST["IREFERRER"])
);

$full_param_bcc = array_merge($params_bcc,$utm_params);

//======================================================================
// Submissions
//======================================================================
/*print_r($full_param_sf);
print_r($full_param_bcc);*/

http_post( 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8', $params_sf );
http_post_bcc( 'http://35.211.186.221/api-waste-v2.php', $full_param_bcc );
