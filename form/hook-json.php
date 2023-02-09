<?php

/*
 *
 * API Webhook
 *
 */
function jsonPost($params){

  $full_param   = $params;
  $redirect_url = $full_param['Redirect_URL'];
  $error_url = isset($full_param['Error_URL'])?$full_param['Error_URL']:$full_param['Redirect_URL'];
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://marketingposition.leadbyte.co.uk/restapi/v1.2/leads",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($full_param)
  ));

  $response = curl_exec($curl);
  $response_data = json_decode($response, true);

  curl_close($curl);
  file_put_contents("../../response.txt",json_encode($response).PHP_EOL , FILE_APPEND | LOCK_EX);
  file_put_contents("../../submits.txt",json_encode($full_param).PHP_EOL , FILE_APPEND | LOCK_EX);

   if($response_data['status']=='Success'){
	  header('Location:'.$redirect_url);
	  exit();
  }else{
		header('Location:'.$error_url."?error=".$response_data['errors'][0]);
  		exit();	  
	  }

}
