<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/13/17
 * Time: 8:24 AM
 */

class PaypalAdaptive {

    public $api_user = APIUSER;
    public $api_pass = APIPASS;
    public $api_sig = APISIG;
    public $app_id = APIAPID;
    public $apiUrlSan = APISANBOXURL;
    public $paypalUrlSan = APISANBOX_RETURN;
    public $apiUrl = APIURL;
    public $paypalUrl = APIURL_RETURN;
    public $email = APIEMAIL;
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
        $url = $this->apiUrl;
        if(PAYPAL_MODE=='sandbox'){
         $url = $this->apiUrlSan;   
        }
        curl_setopt($ch, CURLOPT_URL, $url . $call);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $response = json_decode(curl_exec($ch), true);
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
            "currencyCode" => $data['currency'],
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
            "returnUrl" => url(SUCCESS_URL,array('absolute'=>true,'query'=>array('orderId'=>$data['nid']))),
            "cancelUrl" => url(CANCEL_URL,array('absolute'=>true)),
            "requestEnvelope" => array(
                "errorLanguage" => "en_US",
                "detailLevel" => "ReturnAll",
            ),
        );

        $response = $this->_paypalSend($createPacket, "Pay");
        return $response;
    }

}

//$payment = new PaypalTest();
//$respone = $payment->splitPay();
