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
    drupal_add_js(drupal_get_path('theme', 'tour') . '/js/default.js');
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
}

/**
 * Get template
 */
function _get_template_bg_header() {
    $nodes = get_banner();
    $arg = arg();
    $url = false;
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
                    $url = image_style_url('original', $node->field_image[LANGUAGE_NONE][0]['uri']);
                }
            }
        }
        if (isset($node->field_path[LANGUAGE_NONE])) {
            $pages = drupal_strtolower($node->field_path[LANGUAGE_NONE][0]['value']);
            $page_match = drupal_match_path($path, $pages);
            if($page_match) {
               $url = image_style_url('original', $node->field_image[LANGUAGE_NONE][0]['uri']); 
            }
        }
    }
    return $url;
}

/**
 * Get al abnner
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
