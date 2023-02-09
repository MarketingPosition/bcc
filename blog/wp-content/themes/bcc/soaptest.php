<?php
//error_reporting(0);
//ini_set('display_errors', 0); 
//phpinfo();
//header("Content-type: text/xml");
$wsdl = 'https://partner.loveenergysavings.co.uk/WebServices/HotkeyService.asmx?WSDL';


$options = array('style'=>SOAP_DOCUMENT,
        'use'=>SOAP_LITERAL,
        'soap_version'=>SOAP_1_1,
				 'cache_wsdl' => 0,
        'exceptions'=>1, 
        'trace'=>1
		
   
			
   );
    

//$client = new SoapClient($wsdl, $options);
//$client ->__Call('method', array('param'=>'val'));
//$trace = true;
//$exceptions = false;
//$xml_array = array (
//'affiliateEmailAddress' => 'leads@businesscostcomparison.co.uk',
//'affiliatePassword' 	=> '9QBg-gf!@eVcyJqw',
//'campaignId'		=> 2942,
//'companyName'			=> 'BCC TEST',
//'telephoneNumber1'		=> '01234567890',
//'title'					=> 'Mr',
//'firstName'				=> 'BCC',
//'lastName'				=> 'TEST',
//'emailAddress'			=>'testemail@test.com',
//'postcode'			=> 'NE313BE',
//'gasProvider'			=> 'British Gas'
//);


$client = new SoapClient($wsdl, $options); // , 'encoding' => 'UTF-8'
$response = $client->__Call('HotkeyLead', array($xml_array));
//print($client->__getLastRequest());
//print($client->__getLastResponse());
?>