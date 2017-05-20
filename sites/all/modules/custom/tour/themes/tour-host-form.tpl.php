<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $element;
?>
<table>
    <tr>
        <th><?php print t('Name'); ?> <em class="required">※</em></th>
        <td><?php print render($form['title']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Avatar'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_avatar']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Paypal Account'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_paypal_account']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Name (Romaji)'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_name_romaji']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Stay Address'); ?></th>
        <td class="group-fields">
            <p><?php print t('Postal code'); ?>:</p> <?php print render($form['field_postal_code']) ?>
            <p><?php print t('Prefectures'); ?>:</p> <?php print render($form['field_prefectures']) ?>
            <p><?php print t('Municipality'); ?>:</p> <?php print render($form['field_municipality']) ?>
            <p><?php print t('Street address building'); ?>:</p> <?php print render($form['field_addresses']) ?>
        </td>

    </tr>

    <tr>
        <th><?php print t('Birthday'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_birthday']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Cellphone number'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_cellphone_number']) ?> <span><?php print t('Example： 09011112222 (No hyphen required)'); ?></span></td>
    </tr>
    <tr>
        <th><?php print t('Supported languages'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_supported_languages']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Profile'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_profile_in_japanese']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Email address'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_email_address']) ?><span><?php print t('example： info@example.com'); ?></span></td>
    </tr>
    <tr>
        <th><?php print t('Basic guide uptime'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_basic_guide_uptime']) ?><span><?php print t('Example)9：00～18：00、10：00～17：00'); ?></span></td>
    </tr>
    <tr>
        <th><?php print t('Minimum guide time'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_minimum_guide_time']) ?><span><?php print t('Example) 6 hours or more ~, etc.'); ?></span></td>
    </tr>
    <tr>
        <th><?php print t('The lowest guide of time hourly rate'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_hour_rate']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Hourly wages for the minimum guide time'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_hourly_wages']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Permitted early / late night operation'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_permitted_early']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Hourly early in the morning / late at night'); ?> </th>
        <td><?php print render($form['field_hourly_early']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Guidable area'); ?> <em class="required">※</em></th>
        <td>
            <div class="form-child-city">
                <div class="prefecture">
                    <span><font><?php print t('Area') ?> ① </font><?php print t('Prefectures') ?></span>
                    <?php print render($form['field_guidearea1']) ?>
                </div>
                <div class="prefecture">
                    <span><?php print t('City') ?></span>
                    <?php print render($form['field_city1']) ?>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture">
                    <span><font><?php print t('Area') ?> ② </font><?php print t('Prefectures') ?></span>
                    <?php print render($form['field_guidearea2']) ?>
                </div>
                <div class="prefecture">
                    <span><?php print t('City') ?></span>
                    <?php print render($form['field_city2']) ?>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture">
                    <span><font><?php print t('Area') ?> ③ </font><?php print t('Prefectures') ?></span>
                    <?php print render($form['field_guidearea3']) ?>
                </div>
                <div class="prefecture">
                    <span><?php print t('City') ?></span>
                    <?php print render($form['field_city3']) ?>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture">
                    <span><font><?php print t('Area') ?> ④ </font><?php print t('Prefectures') ?></span>
                    <?php print render($form['field_guidearea4']) ?>
                </div>
                <div class="prefecture">
                    <span><?php print t('City') ?></span>
                    <?php print render($form['field_city4']) ?>
                </div>
            </div>
            <?php unset($form['field_guidable_area']) ?>
            <?php unset($form['field_city']) ?>
        </td>
    </tr> 
    <tr>
        <th><?php print t('Moving means at guidance '); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_moving_means']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Current occupation'); ?></th>
        <td><?php print render($form['field_current_occupation']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Recommended spot'); ?></th>
        <td><span class="span-recom"><?php print t('Spot name ①'); ?></span>
            <?php print render($form['field_spot_name1']) ?>
            <?php print render($form['field_spot_image1']) ?>
            <?php print render($form['field_spot_description1']) ?>
            <span class="span-recom"><?php print t('Spot name ②'); ?></span>
            <?php print render($form['field_spot_name2']) ?>
            <?php print render($form['field_spot_image2']) ?>
            <?php print render($form['field_spot_description2']) ?>
            <span class="span-recom"><?php print t('Spot name ③'); ?></span>
            <?php print render($form['field_spot_name3']) ?>
            <?php print render($form['field_spot_image3']) ?>
            <?php print render($form['field_spot_description3']) ?>
        </td>
    </tr>
    <tr>
        <th><?php print t('Recommended gourmet'); ?></th>
        <td>
            <span class="span-recom"><?php print t('Recommended name ①'); ?></span>
            <?php print render($form['field_gourmet_name1']) ?>
            <?php print render($form['field_gourmet_image1']) ?>
            <?php print render($form['field_gourmet_description1']) ?>
            <span class="span-recom"><?php print t('Recommended name ②'); ?></span>
            <?php print render($form['field_gourmet_name2']) ?>
            <?php print render($form['field_gourmet_image2']) ?>
            <?php print render($form['field_gourmet_description2']) ?>
            <span class="span-recom"><?php print t('Recommended name ③'); ?></span>
            <?php print render($form['field_gourmet_name3']) ?>
            <?php print render($form['field_gourmet_image3']) ?>
            <?php print render($form['field_gourmet_description3']) ?>
        </td>
    </tr>

</table>

<?php print drupal_render_children($form) ?> 
