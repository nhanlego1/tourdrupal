<?php

/**
 * @file Admin settins form to Paypal Adaptive Accounts API.
 */

/**
 * Paypal Adaptive Accounts API settings form.
 */
function paypal_adaptive_accounts_api_settings_form($form, &$form_state) {
    $form = array();
    $form['basic_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Paypal Adaptive Accounts API basic settings')
    );
    $form['basic_settings']['paypal_adaptive_accounts_api_server'] = array(
        '#type' => 'radios',
        '#title' => t('Paypal Adaptive Accounts server'),
        '#options' => array(
            'sandbox' => t('Sandbox - use for testing, requires a Paypal Sandbox account'),
            'live' => t('Live - use for processing real accounts'),
        ),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_server', 'sandbox'),
        '#required' => TRUE,
    );
    $form['basic_settings']['paypal_adaptive_accounts_api_debug'] = array(
        '#type' => 'radios',
        '#title' => t('Do you want to debug every action of this module?'),
        '#options' => array(
            0 => t('No'),
            1 => t('Yes'),
        ),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_debug', 0),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials'] = array(
        '#type' => 'fieldset',
        '#title' => t('PayPal API credentials')
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_username'] = array(
        '#type' => 'textfield',
        '#title' => t('API Username'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_username', 'nhanlego1-facilitator_api1.gmail.com'),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_password'] = array(
        '#type' => 'textfield',
        '#title' => t('API Password'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_password', 'NP2HJ5EKXVECABK5'),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_signature'] = array(
        '#type' => 'textfield',
        '#title' => t('API Signature'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_signature', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AjyU8tN6VDHFblBRUxZ3NUdPZJmE'),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_appid'] = array(
        '#type' => 'textfield',
        '#title' => t('API App ID'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_appid', 'APP-80W284485P519543T'),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_email'] = array(
        '#type' => 'textfield',
        '#title' => t('API Email Reciever'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_email', 'nhanexotest-1@gmail.com'),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_percent'] = array(
        '#type' => 'select',
        '#options' => array(
            0 => t('20% - 80%'),
            1 => t('30% - 70%'),
            2 => t('40% - 60%'),
            3 => t('50% - 50%'),
        ),
        '#title' => t('Percent per request'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_percent', 1),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_success_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Success callback'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_success_url', url('paypal-adaptive-success', array('absolute' => true))),
        '#required' => TRUE,
    );
    $form['basic_settings']['api_credentials']['paypal_adaptive_accounts_api_cancel_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Cancel callback'),
        '#default_value' => variable_get('paypal_adaptive_accounts_api_cancel_url', url('paypal-adaptive-cancel', array('absolute' => true))),
        '#required' => TRUE,
    );

    return system_settings_form($form);
}
