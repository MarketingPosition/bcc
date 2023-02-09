<?php
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
 
//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);
 
//If json_decode failed, the JSON is invalid.
if(!is_array($decoded)){
    throw new Exception('Received content contained invalid JSON!');
}
		
		$curl = curl_init();
		curl_setopt_array($curl, array(CURLOPT_URL => "https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.3e9ad425a01450cb1a22a8ba0b7cab6b.2668229ee7f2b7e9cce45f4b39d3d483&client_id=1000.21E1OZKMF0XHZWTHI4SNK7QN6GKV9J&client_secret=1041ca668d9cb4ad6ab4adfccfa64c486ecf5d45e4&grant_type=refresh_token",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"postman-token: 754d01d4-6d14-8975-f540-814275cae9bd"
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
	  	$response_data = json_decode($response, true);
		//echo $response_data['access_token'];
		$access_token=$response_data['access_token'];
		
		$curl_pointer = curl_init();
        
        $curl_options = array();
        $url = "https://www.zohoapis.com/crm/v2/Leads";
        
        $curl_options[CURLOPT_URL] =$url;
        $curl_options[CURLOPT_RETURNTRANSFER] = true;
        $curl_options[CURLOPT_HEADER] = 1;
        $curl_options[CURLOPT_CUSTOMREQUEST] = "POST";
        $requestBody = array();
        $recordArray = array();
        $recordObject = array();
        $recordObject["Company"]=$decoded['Company'];
        $recordObject["Last_Name"]=$decoded['Last_Name'];
        $recordObject["First_Name"]=$decoded['First_Name'];
        $recordObject["Phone"]=$decoded['Phone_1'];
		$recordObject["Zip_Code"]=$decoded['Postcode'];
		//$recordObject["Days_Serviced_Per_Week"]=$decoded['nrg_contract_date'];
		//$recordObject["Approx_hours_per_week"]=$decoded['nrg_question1'];
		$recordObject["Multi_Line_10"]=$decoded['nrg_question2'];
		$recordObject["Currently_Paying"]=$decoded['nrg_question2'];
		$recordObject["Is_Cleaning_Service"]=$decoded['nrg_question1'];
		$recordObject["Cleaned_Per_Week"]=$decoded['nrg_question4'];
		$nrg_question3=explode('/',$decoded['nrg_question3']);
		$decoded['nrg_question3']=$nrg_question3[1].'-'.$nrg_question3[0].'-'.date('d');
		$recordObject["Contract_Renewal_Date1"]=date('Y-m-d',strtotime($decoded['nrg_question3']));
		$recordObject["Industry_Name"]=$decoded['nrg_question5'];

		$recordObject["Email"]=$decoded['Email'];
		$recordObject["Lead_Source"]='BCC';

        
        
        $recordArray[] = $recordObject;
        $requestBody["data"] =$recordArray;
		
        $curl_options[CURLOPT_POSTFIELDS]= json_encode($requestBody);
		//print_r($curl_options[CURLOPT_POSTFIELDS]);
		
        $headersArray = array();
		
		//$access_token="1000.2069842232266ac23d46991d50f612d0.79002fe79149390b0244660fbf6e8008";
		
        
        //$headersArray[] = "Authorization". ":" . "Zoho-oauthtoken " . "1000.bccb9ddb99b9f1b1d4e2e3b2e4d55a09.ffce4fb2417a21fd069c472910ce3e5a";
		$headersArray[] = "Authorization". ":" . "Zoho-oauthtoken " . $access_token;
        
        $curl_options[CURLOPT_HTTPHEADER]=$headersArray;
        
        curl_setopt_array($curl_pointer, $curl_options);
        
        $result = curl_exec($curl_pointer);
        $responseInfo = curl_getinfo($curl_pointer);
        curl_close($curl_pointer);
        list ($headers, $content) = explode("\r\n\r\n", $result, 2);
        if(strpos($headers," 100 Continue")!==false){
            list( $headers, $content) = explode( "\r\n\r\n", $content , 2);
        }
        $headerArray = (explode("\r\n", $headers, 50));
        $headerMap = array();
        foreach ($headerArray as $key) {
            if (strpos($key, ":") != false) {
                $firstHalf = substr($key, 0, strpos($key, ":"));
                $secondHalf = substr($key, strpos($key, ":") + 1);
                $headerMap[$firstHalf] = trim($secondHalf);
            }
        }
        $jsonResponse = json_decode($content, true);
        if ($jsonResponse == null && $responseInfo['http_code'] != 204) {
            list ($headers, $content) = explode("\r\n\r\n", $content, 2);
            $jsonResponse = json_decode($content, true);
        }
        //print_r($result);
        echo $responseInfo['http_code'];