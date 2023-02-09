<?php

/*
 *
 * API Webhook
 *
 */
function formSubmit($params)
{

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

  header('Location:' . $redirect_url);
  exit();

  file_put_contents("../../submits.txt", json_encode($full_param) . PHP_EOL, FILE_APPEND | LOCK_EX);



  //exit();
  //print_r($response_data);

}
