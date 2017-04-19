<?php

/**
 * @file Class encapsulating all logic to integrate the Paypal Adaptive Accounts API with Drupal.
 */
class PayPalAdaptiveAccounts {

  protected $pp_service;
  protected $paypal_username;
  protected $paypal_password;
  protected $paypal_signature;
  protected $paypal_server;

  const DEFAULT_ERROR_MESSAGE = 'There was an error with Paypal API. Please try again later.';

  public function __construct() {    
    $this->loadLibrary();
    $this->isConfigured();
    $this->basicSetup();
  }
  
  /**
   * Implements a custom autoload function for only required classes.
   */
  public static function paypalAutoloader($class) {
    $pp_lib_path = 'sites/all/libraries/paypal/sdk-core-php-master';
    
    if (file_exists($pp_lib_path . "/lib/{$class}.php")) {
      include_once $pp_lib_path . "/lib/{$class}.php";    
    }
    else {
      $paths = array();
      $paths += glob($pp_lib_path . '/lib/*/' . $class . '.php', GLOB_ERR);
      if (count($paths) == 1) {
        include_once $paths[0];
      }
    }
  }

  /**
   * Implements the API Operation Method: GetVerifiedStatus.
   */
  public function getAccountStatus($verified_fields) {
    
    $getVerifiedStatus = new GetVerifiedStatusRequest();
    $accountIdentifier = new AccountIdentifierType();
    
    $accountIdentifier->emailAddress = $verified_fields['emailAddress'];
    $getVerifiedStatus->accountIdentifier = $accountIdentifier;
    $getVerifiedStatus->firstName = $verified_fields['firstName'];
    $getVerifiedStatus->lastName = $verified_fields['lastName'];
    $getVerifiedStatus->matchCriteria = $verified_fields['matchCriteria'];
    
    $response = $this->pp_service->GetVerifiedStatus($getVerifiedStatus);
    $ack = drupal_strtoupper($response->responseEnvelope->ack);
    
    if (variable_get('paypal_adaptive_accounts_api_debug', FALSE)) {
      watchdog('paypal_adaptive_accounts_api', '<pre>' . print_r($response, TRUE) . '</pre>');
    }
    
    if ($ack == "SUCCESS") {
      return $response->accountStatus;
    }
    else {
      if (is_array($response->error) && variable_get('paypal_adaptive_accounts_api_debug', FALSE)) {
        drupal_set_message($response->error['errorId'] . ':' . t($response->error['message']), 'error'); 
      }
      return 'ERROR';
    }
  }

  /**
   * Basic data for connecting to Paypal Adaptive Accounts API.
   */
  protected function basicSetup() {
    
    $config = array(
     'mode' => $this->paypal_server,
     'acct1.UserName' => $this->paypal_username,
     'acct1.Password' => $this->paypal_password ,
     'acct1.Signature' => $this->paypal_signature,
    );
    $this->pp_service  = new AdaptiveAccountsService($config);
  }

  /**
   * Checks if the basic information about Paypal Adaptive Accounts API credentials and environment were
   * informed.
   * @throws ErrorException
   */
  protected function isConfigured() {
    $this->paypal_username = variable_get('paypal_adaptive_accounts_api_username');
    $this->paypal_password = variable_get('paypal_adaptive_accounts_api_password');
    $this->paypal_signature = variable_get('paypal_adaptive_accounts_api_signature');
    $this->paypal_server = variable_get('paypal_adaptive_accounts_api_server');
    // Return an error if Paypal Adaptive Accounts API haven't been configured.
    if (empty($this->paypal_username) || empty($this->paypal_password) 
      || empty($this->paypal_signature) || empty($this->paypal_server)) {
        $error_msg = t('Paypal Adaptive Accounts API Integration is not configured for use. Please go to '
          . 'admin/config/services/paypal_adaptive_accounts_api and fix it.');
        throw new Exception($error_msg);
    }
  }

  /**
   * Prepares and loads all PayPal PHP Adaptive Accounts classes.
   */
  protected function loadLibrary() {
    
    $error = FALSE;
    
    $core_lib_url = 'https://github.com/paypal/sdk-core-php';
    $core_lib_path = 'sites/all/libraries/paypal/sdk-core-php-master';
  
    if (!file_exists($core_lib_path)) {    
      $error = t('PayPal PHP Core SDK was not found on "' . $core_lib_path . '". Download it in !link', array('!link' => $core_lib_url));
    }
    
    $paypal_lib_url = 'https://github.com/paypal/adaptiveaccounts-sdk-php';
    $paypal_lib_path = 'sites/all/libraries/paypal/adaptiveaccounts-sdk-php-master';

    if (file_exists($paypal_lib_path)) {
      require_once $paypal_lib_path . '/lib/services/AdaptiveAccounts/AdaptiveAccounts.php';   
      require_once $paypal_lib_path . '/lib/services/AdaptiveAccounts/AdaptiveAccountsService.php';
    }
    else {
      $error = t('PayPal PHP Adaptive Accounts SDK was not found on "' . $paypal_lib_path . '". Download it in !link', array('!link' => $paypal_lib_url));
    }
    if ($error) {
      throw new Exception($error);
    }

  }
  
}

/**
 * Register autoloder function for PayPalAdaptiveAccounts Class.
 */
spl_autoload_register(array('PayPalAdaptiveAccounts', 'paypalAutoloader'));
