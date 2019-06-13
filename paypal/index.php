<?php 
$client = new SoapClient( 'https://www.sandbox.paypal.com/wsdl/PayPalSvc.wsdl',
                           array( 'soap_version' => SOAP_1_1 ));

$cred = array( 'Username' => 'gauravs.midas_api1.gmail.com',
               'Password' => 'WEUJ2ZSYH5LHJ985',
               'Signature' => 'ANAhfQvjC-U8ClXWFXJwsmR-MeJKAW8zrak97jckGmg9UiJcoL2-Ej6B' );

$Credentials = new stdClass();
$Credentials->Credentials = new SoapVar( $cred, SOAP_ENC_OBJECT, 'Credentials' );

$headers = new SoapVar( $Credentials,
                        SOAP_ENC_OBJECT,
                        'CustomSecurityHeaderType',
                        'urn:ebay:apis:eBLBaseComponents' );

$client->__setSoapHeaders( new SoapHeader( 'urn:ebay:api:PayPalAPI',
                                           'RequesterCredentials',
                                           $headers ));

$args = array( 'Version' => '71.0',
               'ReturnAllCurrencies' => '1' );

$GetBalanceRequest = new stdClass();
$GetBalanceRequest->GetBalanceRequest = new SoapVar( $args,
                                                     SOAP_ENC_OBJECT,
                                                     'GetBalanceRequestType',
                                                     'urn:ebay:api:PayPalAPI' );

$params = new SoapVar( $GetBalanceRequest, SOAP_ENC_OBJECT, 'GetBalanceRequest' );

$result = $client->GetBalance( $params );

echo 'Balance is: ', $result->Balance->_, $result->Balance->currencyID;