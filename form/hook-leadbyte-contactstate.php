<?php

/*
 *
 * API Webhook
 *
 */
function formSubmit($params,$contactstatedata){

  $full_param   = $params;
  $redirect_url = $full_param['Redirect_URL'];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://marketingposition.leadbyte.co.uk/api/submit.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $full_param,
  ));

  $response = curl_exec($curl);
  $response_data = json_decode($response, true);

  curl_close($curl);
  
  /*
  Contact State Submission Start
  */
    $curl2 = curl_init();
	$contactstatedata2=json_encode($contactstatedata);

	curl_setopt_array($curl2, array(
	  CURLOPT_URL => "https://connect.contactstate.com/leads",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => $contactstatedata2,
	  CURLOPT_HTTPHEADER => array(
		"authorization: Bearer U7G80BOMuecGtIXSK9ospzb7VTiMWpuz",
		"cache-control: no-cache",
		"content-type: application/json",
		"postman-token: cab76748-66be-ff07-8187-dfba075b0b36"
	  ),
	));
	
	$response2 = curl_exec($curl2);
	$err2 = curl_error($curl2);
	
	file_put_contents("../../contactstate.txt",$response2.PHP_EOL , FILE_APPEND | LOCK_EX);
	/*
	End
	*/
	curl_close($curl2);

  file_put_contents("../../submits.txt",json_encode($full_param).PHP_EOL , FILE_APPEND | LOCK_EX);
  file_put_contents("../../response.txt",json_encode($response_data).PHP_EOL , FILE_APPEND | LOCK_EX);
  header('Location:'.$redirect_url);
  exit();
  //print_r($response_data);

}


function submit_claim_cert_url($claim_url){
	# Set your secret key in the variable below
	# Your secret key is provided by Contact State
	//$secret_key = 'a32ccb6b-2750-490f-90aa-452f569eb5ee';//Test Mode
	$secret_key = '458afdec-85a8-4441-b071-f0dbb13cf4d4';
	# Claim URL is passed in from the form submission
	//$claim_url = $_POST['contact_state_claim_cert_url'];

	if(isset($claim_url) && $claim_url != '') {
		$content = json_encode(array('secret_key' => $secret_key));

		$curl = curl_init($claim_url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

		# Make a POST request to claim the Certificate
		$json_response = curl_exec($curl);
		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($status != 201) {
			die("Error: call to URL $claim_url failed");
		}

		curl_close($curl);

		# Get the Certificate URL from the response
		# This should be stored and passed along to the Data Buyer
		$response = json_decode($json_response, true);

		$certificate_url = $response['cert_url'];
		/* Submit Score Card */
		$certificate_url2=$certificate_url.'.json';
		$curl3 = curl_init();
		curl_setopt($curl3, CURLOPT_URL, $certificate_url2);
		curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
		$cert_json = curl_exec($curl3);
		curl_close($curl3);
		$cert = json_decode($cert_json, true);
		
		$certificate_data=$certificate_url;
		$certificate_data.="Cert ID is " . $cert['data']['id'];
		$certificate_data.="Scoring status is " . $cert['data']['attributes']['status'];
		file_put_contents("../../certificate_url.txt",$certificate_data.PHP_EOL , FILE_APPEND | LOCK_EX);
		}
		else {
		$certificate_url="";
		}
		return $certificate_url;
}