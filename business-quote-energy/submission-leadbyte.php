<?php

/* Cleaning Phone Number Phormat */
$original = $_POST['question11'];
$phone = preg_replace('/[^0-9]+/', '', $original);
if (substr($phone, 0, 2) == '44') {
  $phone = substr($phone, 2);
}
if (substr($phone, 0, 4) == '0044') {
  $phone = substr($phone, 4);
}
if (substr($phone, 0, 1) == '0') {
  $phone = substr($phone, 1);
}
/* Cleaning Phone Number Phormat */

$firstname     = $_POST["question7"]; // First Name
$lastname      = $_POST["question8"]; // Last Name
$email         = $_POST["question12"]; // Email Address
$phone         = '0' . $phone; //Clean Phone Number
$postcode      = ucwords($_POST["question6"]); //Postcode
$company       = $_POST["question9"]; //Company
$energy_type   = ucfirst($_POST["question1"]); //Energy Type e.g. Gas , Electricity
$bill          = $_POST["question4"]; // Monthly Bill
$renewal_date  = $_POST['question5']; // Renewal Date
$business_type = $_POST['question10']; // Business Type

$redirect_url = "<?php echo $domain;?>/business-quote-energy/thank-you.php?bill=" . $bill;

if ($_POST["question2"]) {
  $supplier = $_POST["question2"]; // Current Supplier
} else {
  $supplier = $_POST["question3"]; // Current Supplier
}

/* These are Fields mapped with  Notes Field for BIONIC */
$notes = "Postcode: " . $postcode . ' , Renewal Date: ' . $renewal_date . ' , Energy Type: ' . $energy_type . ' , Business Type: ' . $business_type;

$params = array(
  "key"               => "e2d4796976b2eb8b63ddb98353dbd709",
  "lead"              => array(
    "sid"               => "6",
    "testmode"          => "no",
    "campid"            => "ENERGY-SERVICES-CAMP",
    "firstname"         => $firstname,
    "lastname"          => $lastname,
    "email"             => $email,
    "company"           => $company,
    "phone1"            => $phone,
    "postcode"          => $postcode,
    "nrg_contract_date" => $renewal_date,
    "nrg_bill"          => number_format($bill, 2, '.', ''),
    "nrg_question1"     => $energy_type,
    "nrg_question2"     => $supplier,
    "c1"                => $business_type,
    "notes"             => $notes,
    "source"       => urldecode($_POST['ILANDPAGE']),
    "ipaddress"         => $_SERVER['REMOTE_ADDR'],
    "utmsource"         => urldecode($_POST['USOURCE']),
    "utmmedium"         => urldecode($_POST['UMEDIUM']),
    "utmcampaign"       => urldecode($_POST['UCAMPAIGN']),
    "utmcontent"        => urldecode($_POST['UCONTENT']),
    "utmterm"           => urldecode($_POST['UTERM'])
  ),
  'Redirect_URL'      => $redirect_url
);


function jsonPost($params)
{
  $full_param   = $params;
  $redirect_url = $full_param['Redirect_URL'];
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

  //print_r($response);
  curl_close($curl);

  if ($response_data) {
    header('Location:' . $redirect_url);
    exit();
  }
}

jsonPost($params);
