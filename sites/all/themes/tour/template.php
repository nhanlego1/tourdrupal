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
function tour_preprocess_page(&$vars) {
    global $language;
    //add js for site
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/jquery.animate-enhanced.min.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/wow.min.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/jquery.tosrus.min.all.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/jquery.easing.1.3.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/custom.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/slick.min.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/jquery.superslides.min.js');
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/default.js');
    //add css
     drupal_add_css(drupal_get_path('theme', 'tour') . '/css/superslides.css');
     drupal_add_css(drupal_get_path('theme', 'tour') . '/css/slick.css');
     drupal_add_css(drupal_get_path('theme', 'tour') . '/css/jquery.tosrus.all.css');
     drupal_add_css(drupal_get_path('theme', 'tour') . '/css/hareruyared-theme.css');
     drupal_add_css(drupal_get_path('theme', 'tour') . '/css/animate.css');
   // drupal_add_js(drupal_get_path('theme', 'tour') . '/js/queryloader2.min.js');
    if ($_GET['q'] == 'node/add/tour') {
        if ($language->language == 'ja') {
            drupal_set_title(t('ツアーエントリーフォーム'));
        } else {
            drupal_set_title(t('tour entry form'));
        }
    }
    if ($_GET['q'] == 'node/add/host') {
        drupal_set_title(t('HOST SYSTEM GUIDE'));
    }
    //set title for blog, news, events
    $node = menu_get_object('node');
    if($node->type=='blog'){
        drupal_set_title(t('Blog'));
    }
    if($node->type=='news'){
        drupal_set_title(t('News'));
    }
    if($node->type=='events'){
        drupal_set_title(t('Events'));
    }
    if($node->type=='host'){
        drupal_set_title(t('Host Details'));
    }
    if($node->type=='tour'){
        drupal_set_title(t('Tour Details'));
    }
    if(arg(0)=='taxonomy' && arg(1)=='term' && is_numeric(arg(2)) && is_null(arg(3))){
      drupal_set_title(t('Gallery'));
    }
}

/**
 * Get template
 */
function _get_template_bg_header() {
    $nodes = get_banner();
    $arg = arg();
    $image = '';
    $url_desktop= '<img class="responsive-header adaptive-image image-desktop" src="'.base_path().path_to_theme('tour').'/images/bg-2.jpg"/>';
    $url_mobile = '<img class="responsive-header adaptive-image image-mobile" src="'.base_path().path_to_theme('tour').'/images/bg-2.jpg"/>';
    $type = false;
    if ($arg[0] == 'node' && is_numeric($arg[1])) {
        $current = node_load($arg[1]);
        $type = $current->type;
    }
    $path = drupal_strtolower(drupal_get_path_alias($_GET['q']));
    foreach ($nodes as $node) {
        if ($type) {
            foreach ($node->field_node_type[LANGUAGE_NONE] as $typenode) {
                if ($type == $typenode['value']) {
                    $url_desktop = theme('image_style',array('style_name'=>'original', 'path'=>$node->field_image[LANGUAGE_NONE][0]['uri'],'attributes'=>array('class'=>array('image-desktop'))));
                    $url_mobile = theme('image_style',array('style_name'=>'original', 'path'=>$node->field_image_mobile[LANGUAGE_NONE][0]['uri'],'attributes'=>array('class'=>array('image-mobile')))); 
                }
            }
        }
        if (isset($node->field_path[LANGUAGE_NONE])) {
            $pages = drupal_strtolower($node->field_path[LANGUAGE_NONE][0]['value']);
            $page_match = drupal_match_path($path, $pages);
            if($page_match) {
               $url_desktop = theme('image_style',array('style_name'=>'original', 'path'=>$node->field_image[LANGUAGE_NONE][0]['uri'],'attributes'=>array('class'=>array('image-desktop'))));
               $url_mobile = theme('image_style',array('style_name'=>'original', 'path'=>$node->field_image_mobile[LANGUAGE_NONE][0]['uri'],'attributes'=>array('class'=>array('image-mobile')))); 
            }
        }
    }
    $image .=$url_desktop;
    $image .=$url_mobile;
    return $image;
}

/**
 * Get all banner
 */
function get_banner() {
    $nodes = array();
    $query = db_select('node', 'n');
    $query->fields('n');
    $query->condition('type', 'banner');
    $query->condition('status', 1);
    $result = $query->execute()->fetchAll();
    if ($result) {
        foreach ($result as $r) {
            $nodes[] = node_load($r->nid);
        }
    }
    return $nodes;
}
