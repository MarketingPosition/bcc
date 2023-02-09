<?php
/**
 * Posts waste form data to CRM.
 *
 */

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

$q1            = $_POST['question1'];
$waste_q1      = implode(', ', $q1);
$phone         = urldecode($_POST["phone"]);
$postcode      = urldecode($_POST["postcode"]);
$redirect_url  = $_POST["redirect_url"];
$phone_clean = str_replace(' ', '', $phone);

$params_sf = array(
	'oid'               => '00DD0000000lAai',
	'00ND0000006U59t'   => 'CheaperWaste',
	'lead_source'       => 'Auto-BCC',
	'cloudamp__data__c' => $_POST['cloudamp__data__c'],
	'00ND0000006Niah'   => $_POST['GCLID'],
	'00ND0000006Nhf7'   => $waste_q1,
	'00ND0000006NhfC'   => $_POST['question2'],
	'00ND0000006NhfH'   => $_POST['question3'],
	'00ND0000003fw2t'   => $postcode,
	'email'             => $_POST['email'],
	'first_name'        => $_POST['first_name'],
	'last_name'         => $_POST['last_name'],
	'company'           => $_POST['company'],
	'00ND0000003fw1q'   => $phone_clean,
	"00N4G000006pH8z" 	=> $wasteID,
	'00N4G000006pFfm'   => $_POST['instant-price']
);

//http_post( 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8', $params_sf );

require_once ('lead-waste-email.php');

require_once ('lead-waste-lb2.php');

require_once ('lead-waste-bcc.php');
?>
