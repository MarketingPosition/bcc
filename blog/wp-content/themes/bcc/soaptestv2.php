<?php
//error_reporting(0);
//ini_set('display_errors', 0); 
//phpinfo();
//header("Content-type: text/xml");


//-----------------------BEGIN NEW PROVIDED SOAP REQUEST------------------------

$affilPassword = htmlspecialchars("9QBg-gf!@eVcyJqw", ENT_QUOTES, "UTF-8");
$affilEmail = htmlspecialchars("leads@businesscostcomparison.co.uk", ENT_QUOTES, "UTF-8");
	
if ($nrg_question1 == "gas") {
	

$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
						<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
							<soap:Body>
								<HotkeyLead xmlns="https://partner.loveenergysavings.co.uk/WebServices/">
									<affiliateEmailAddress>'.$affilEmail.'</affiliateEmailAddress>
									<affiliatePassword>'.$affilPassword.'</affiliatePassword>
									<campaignId>2942</campaignId>
									<companyName>'.$nrg_company.'</companyName>
									<firstName>'.$nrg_first_name.'</firstName>
									<lastName>'.$nrg_last_name.'</lastName>
									<telephoneNumber1>'.$nrg_phone.'</telephoneNumber1>
									<postcode>'.$nrg_postcode.'</postcode>
									<emailAddress>'.$nrg_email.'</emailAddress>
									<gasProvider>'.$nrg_question2.'</gasProvider>
									<gasRenewalDate>'.$nrg_contract_date.'</gasRenewalDate>
									<gasSpendingBand>'.$nrg_bill.'</gasSpendingBand>
								</HotkeyLead>
							</soap:Body>
                        </soap:Envelope>';	
	

} elseif ($nrg_question1 == "electric") {

$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
						<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
							<soap:Body>
								<HotkeyLead xmlns="https://partner.loveenergysavings.co.uk/WebServices/">
									<affiliateEmailAddress>'.$affilEmail.'</affiliateEmailAddress>
									<affiliatePassword>'.$affilPassword.'</affiliatePassword>
									<campaignId>2942</campaignId>
									<companyName>'.$nrg_company.'</companyName>
									<firstName>'.$nrg_first_name.'</firstName>
									<lastName>'.$nrg_last_name.'</lastName>
									<telephoneNumber1>'.$nrg_phone.'</telephoneNumber1>
									<postcode>'.$nrg_postcode.'</postcode>
									<emailAddress>'.$nrg_email.'</emailAddress>
									<electricProvider>'.$nrg_question2.'</electricProvider>
									<electricRenewalDate>'.$nrg_contract_date.'</electricRenewalDate>
									<electricSpendingBand>'.$nrg_bill.'</electricSpendingBand>
								</HotkeyLead>
							</soap:Body>
                        </soap:Envelope>';		
	
}


$soapUrl = "https://partner.loveenergysavings.co.uk/WebServices/HotkeyService.asmx"; // asmx URL of WSDL


                        

                        $headers = array("Content-type: text/xml;charset=\"utf-8\"",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",
                        "Content-length: ".strlen($xml_post_string),
                        );                     


                        $url = $soapUrl;
                        

                        $ch = curl_init();
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
						curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
                        curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_post_string");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $response = curl_exec($ch);
						//$error = curl_error($ch);
                        curl_close($ch);


                        print_r($response);
						//print_r($error);

//----------------------END NEW PROVIDED SOAP REQUEST----------------------------



//------------------START OLD REQUEST CODE ------------------


//$wsdl = 'https://partner.loveenergysavings.co.uk/WebServices/HotkeyService.asmx?WSDL';


//$options = array('style'=>SOAP_DOCUMENT,
//      'use'=>SOAP_LITERAL,
//       'soap_version'=>SOAP_1_1,
//				 'cache_wsdl' => 0,
//        'exceptions'=>1, 
//        'trace'=>1
//  
//			
//  );



//$client = new SoapClient($wsdl, $options); // , 'encoding' => 'UTF-8'
//$response = $client->__Call('HotkeyLead', array($xml_array));


//print($client->__getLastRequest());
//print($client->__getLastResponse());



//----------------------END OLD REQUEST CODE----------------------------

?>