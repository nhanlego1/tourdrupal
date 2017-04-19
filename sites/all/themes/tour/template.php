<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/12/17
 * Time: 11:11 PM
 */

/**
 * Implement hook_html_preprogress()
 */

function tour_preprocess_page(&$vars){
    global $language;
    //add js for site
    drupal_add_js(drupal_get_path('theme', 'tour').'/js/default.js');
    if($_GET['q']=='node/add/tour'){
        if($language->language=='ja'){
            drupal_set_title(t('ツアーエントリーフォーム'));
        }else{
             drupal_set_title(t('tour entry form'));
        }
       
    }
    if($_GET['q']=='node/add/host'){
        drupal_set_title(t('HOST SYSTEM GUIDE'));
    }
}