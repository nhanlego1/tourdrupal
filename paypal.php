<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/13/17
 * Time: 8:24 AM
 */

class PaypalAdaptive {

    public $api_user = "nhanlego1-facilitator_api1.gmail.com";
    public $api_pass = "NP2HJ5EKXVECABK5";
    public $api_sig = "AFcWxV21C7fd0v3bYYYRCpSSRl31AjyU8tN6VDHFblBRUxZ3NUdPZJmE";
    public $app_id = "APP-80W284485P519543T";
    public $apiUrl = 'https://svcs.sandbox.paypal.com/AdaptivePayments/';
    public $paypalUrl = "https://www.paypal.com/webscr?cmd=_ap-payment&paykey=";
    public $headers;

    public function __construct() {
        $this->headers = array(
            "X-PAYPAL-SECURITY-USERID: " . $this->api_user,
            "X-PAYPAL-SECURITY-PASSWORD: " . $this->api_pass,
            "X-PAYPAL-SECURITY-SIGNATURE: " . $this->api_sig,
            "X-PAYPAL-REQUEST-DATA-FORMAT: JSON",
            "X-PAYPAL-RESPONSE-DATA-FORMAT: JSON",
            "X-PAYPAL-APPLICATION-ID: " . $this->app_id,
        );
    }

    public function getPaymentOptions($paykey) {
        
    }

    public function setPaymentOptions() {
        
    }

    public function _paypalSend($data, $call) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl . $call);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $response = json_decode(curl_exec($ch), true);
        var_dump($response);die;
        return $response;
    }
/**
 * array('owner','seller')
 * @param type $data
 */
    public function splitPay($data) {

        // create the pay request
        $createPacket = array(
            "actionType" => "PAY",
            "currencyCode" => "USD",
            "receiverList" => array(
                "receiver" => array(
                    array(
                        "amount" => $data['owner']['amount'],
                        "email" => $data['owner']['email']
                    ),
                    array(
                        "amount" => $data['seller']['amount'],
                        "email" => $data['seller']['email']
                    ),
                ),
            ),
            "returnUrl" => "http://tour.local/payments/confirm",
            "cancelUrl" => "http://tour.local/payments/cancel",
            "requestEnvelope" => array(
                "errorLanguage" => "en_US",
                "detailLevel" => "ReturnAll",
            ),
        );

        $response = $this->_paypalSend($createPacket, "Pay");
    }

}

$payment = new PaypalAdaptive();
$respone = $payment->splitPay();
