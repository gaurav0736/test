<?php
session_start();
error_reporting(1);
require_once 'paypal.php';
//Our request parameters
$requestParams = array(
   'RETURNURL' => 'http://localhost/paypal/payment/success',
   'CANCELURL' => 'http://localhost/paypal/payment/cancelled'
);

$orderParams = array(
   'PAYMENTREQUEST_0_AMT' => '500',
   'PAYMENTREQUEST_0_SHIPPINGAMT' => '4',
   'PAYMENTREQUEST_0_CURRENCYCODE' => 'GBP',
   'PAYMENTREQUEST_0_ITEMAMT' => '496'
);

$item = array(
   'L_PAYMENTREQUEST_0_NAME0' => 'iPhone',
   'L_PAYMENTREQUEST_0_DESC0' => 'White iPhone, 16GB',
   'L_PAYMENTREQUEST_0_AMT0' => '496',
   'L_PAYMENTREQUEST_0_QTY0' => '1'
);

$paypal = new Paypal();
$response = $paypal->request('SetExpressCheckout',$requestParams + $orderParams + $item);


if(is_array($response) && $response['ACK'] == 'Success') { //Request successful
      $token = $response['TOKEN'];
      header( 'Location: https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' . urlencode($token) );
}