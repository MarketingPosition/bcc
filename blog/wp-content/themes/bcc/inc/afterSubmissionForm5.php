<?php
	
add_filter("gform_field_value_uuid", "get_unique");
function get_unique(){
    $prefix = "Push-";
    do {
        $unique = mt_rand();
        $unique = substr($unique, 0, 4);
        $unique = $prefix . $unique;
    } while (!check_unique($unique));
    return $unique;
}
function check_unique($unique) {
    global $wpdb;
    $table = $wpdb->prefix . 'rg_lead_detail';
    $form_id = 5;
    $field_id = 12; 
    $result = $wpdb->get_var("SELECT value FROM $table WHERE form_id = '$form_id' AND field_number = '$field_id' AND value = '$unique'");
    if(empty($result))
        return true;
    return false;
}


// Post After Submission Form 1 - USAY

add_action('gform_after_submission_5', 'post_to_third_party', 10, 2);
function post_to_third_party($entry, $form) {

$curl = curl_init();


$url = array('ULDP_access_code' => '456987312658',
			 'ULDP_id' => $entry[12],
			 'ULDP_firstname' => rgar( $entry, '7.3' ),
			 'ULDP_lastname' => rgar( $entry, '7.6' ),
			 'ULDP_email' => $entry[8],
			 'ULDP_phone' => $entry[9],
			 'ULDP_postcode' => $entry[10],
			 'ULDP_dob_dd' => $entry[14],
			 'ULDP_dob_mm' => $entry[15],
			 'ULDP_dob_yyyy' => $entry[16],
			 'ULDP_cover' => $entry[24],
			 'ULDP_smoke' => $entry[21],
			 'ULDP_policy_start' => $entry[23],
			 'ULDP_people' => $entry[20]);
			 
$url_encode = http_build_query($url);

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://leadbank.4cusay.co.uk/hotpipe.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $url_encode,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;


$response_encode = json_decode($response, true);

gform_update_meta( $entry['id'], '40', $response_encode[internal_id] );
gform_update_meta( $entry['id'], '41', $response_encode[outcome] );

error_log('Response: ' . print_r($response,1),3,$_SERVER['DOCUMENT_ROOT'].'/form5_responce.txt');

}








