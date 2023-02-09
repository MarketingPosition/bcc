<?php

$datetime = new DateTime();
$timestamp = $datetime->format('c');

$first_name     = $_POST["first_name"];
$last_name      = $_POST["last_name"];
$company        = $_POST["company"];
$postcode       = $_POST["postcode"];
$email          = $_POST["email"];
$bustype        = $_POST["business_type"];

$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];

$prevurl2 =  $_SERVER['HTTP_REFERER'];
$prevurl = explode("?", $prevurl2);
$previousurl = str_replace('<?php echo $domain;?>', '', $prevurl);

$prevpage = $previousurl['0'];

$websand = [
  "transaction" => [
    "_id" => $wasteID,
    "customer" => [
      "subscribed_at"     => $timestamp,
      "firstname"         => $first_name,
      "surname"           => $last_name,
      "email"             => strtolower($email),
      "companyname"       => $company,
      "companypcode"      => $postcode,
      "businesstype"      => $bustype,
      "source"            => "get-a-quote",
      "tags" => [
        "waste"
      ]
    ],
    "items" => [
      [
        "name"         => $waste_q1,
        "category"     => "waste",
        "referer_page" => $prevpage,
        "num_of_bags"  => $question2,
        "collection"   => $question3,
        "current_supplier"   => $question4
      ]
    ],
    "total" => [
      "total" => 100
    ]
  ]
];

jsonPost($websand);

function jsonPost($params)
{

  $full_param   = $params;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://businesscostcomparison.websandhq.com/api/data/transaction",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($full_param),
    CURLOPT_HTTPHEADER => array(
      "Content-type: application/json",
      "Authorization: Bearer 7600a5b324fdd0f9a656f029fa9f6a50"
    )
  ));

  $response = curl_exec($curl);
  $response_data = json_decode($response, true);

  curl_close($curl);

  file_put_contents("../../submits.txt", json_encode($full_param) . PHP_EOL, FILE_APPEND | LOCK_EX);

  //print_r($response_data);
}
