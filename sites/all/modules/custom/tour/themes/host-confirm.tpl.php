<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($step == 2): ?>
<table>
    <tr>
        <th><?php print t('Name'); ?> </th>
        <td><?php print $node->title ?></td>
    </tr>
    <tr>
        <th><?php print t('Avatar'); ?> </th>
        <td><?php print theme('image_style', array('path' => $node->field_avatar[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumbnail')) ?></td>
    </tr>
    <tr>
        <th><?php print t('Paypal Account'); ?> </th>
        <td><?php print $node->field_paypal_account[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Name (Romaji)'); ?> </th>
        <td><?php print $node->field_name_romaji[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Stay Address'); ?></th>
        <td class="group-fields">
            <p><?php print t('Postal code'); ?>: <?php print $node->field_postal_code[LANGUAGE_NONE][0]['value'] ?></p>
            <p><?php print t('Prefectures'); ?>: <?php print _get_term_name($node->field_prefectures[LANGUAGE_NONE]) ?></p>
            <p><?php print t('Municipality'); ?>: <?php print $node->field_municipality[LANGUAGE_NONE][0]['value'] ?></p>
            <p><?php print t('Street address building'); ?>: <?php print $node->field_addresses[LANGUAGE_NONE][0]['value'] ?></p>
        </td>

    </tr>

    <tr>
        <th><?php print t('Birthday'); ?> </th>
        <td><?php print $node->field_birthday[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Cellphone number'); ?> </th>
        <td><?php print $node->field_cellphone_number[LANGUAGE_NONE][0]['value'] ?> </td>
    </tr>
    <tr>
        <th><?php print t('Supported languages'); ?> </th>
        <td><?php print _get_term_name($node->field_supported_languages[LANGUAGE_NONE]); ?></td>
    </tr>
    <tr>
        <th><?php print t('Profile'); ?> </th>
        <td><?php print $node->field_profile_in_japanese[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Email address'); ?> </th>
        <td><?php print $node->field_email_address[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Basic guide uptime'); ?> </th>
        <td><?php print $node->field_basic_guide_uptime[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Minimum guide time'); ?> </th>
        <td><?php print $node->field_minimum_guide_time[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('The lowest guide of time hourly rate'); ?> </th>
        <td><?php print $node->field_hour_rate[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Hourly wages for the minimum guide time'); ?> </th>
        <td><?php print $node->field_hourly_wages[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Permitted early / late night operation'); ?> </th>
        <td><?php print t($node->field_permitted_early[LANGUAGE_NONE][0]['value']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Hourly early in the morning / late at night'); ?> </th>
        <td><?php print $node->field_hourly_early[0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Guidable area'); ?> </th>
        <td>
            <div class="form-child-city">
                <div class="prefecture cols-6">
                    <span><font><?php print t('Area') ?> ① </font><?php print t('Prefectures') ?>:</span>
                    <span><?php print _get_term_name($node->field_guidearea1[LANGUAGE_NONE]);?></span>
                </div>
                <div class="prefecture cols-4">
                    <span><?php print t('City') ?>:</span>
                    <span><?php print _get_term_name($node->field_city1[LANGUAGE_NONE]) ?></span>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture cols-6">
                    <span><font><?php print t('Area') ?> ② </font><?php print t('Prefectures') ?>:</span>
                    <span><?php print _get_term_name($node->field_guidearea2[LANGUAGE_NONE]) ?></span>
                </div>
                <div class="prefecture cols-4">
                    <span><?php print t('City') ?>:</span>
                    <span><?php print _get_term_name($node->field_city2[LANGUAGE_NONE]) ?></span>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture cols-6">
                    <span><font><?php print t('Area') ?> ③ </font><?php print t('Prefectures') ?>:</span>
                    <span><?php print _get_term_name($node->field_guidearea3[LANGUAGE_NONE]) ?></span>
                </div>
                <div class="prefecture cols-4">
                    <span><?php print t('City') ?>:</span>
                    <span><?php print _get_term_name($node->field_city3[LANGUAGE_NONE]) ?></span>
                </div>
            </div>
            <div class="form-child-city">
                <div class="prefecture cols-6">
                    <span><font><?php print t('Area') ?> ④ </font><?php print t('Prefectures') ?>:</span>
                    <span><?php print _get_term_name($node->field_guidearea4[LANGUAGE_NONE]) ?></span>
                </div>
                <div class="prefecture cols-4">
                    <span><?php print t('City') ?>:</span>
                    <span><?php print _get_term_name($node->field_city4[LANGUAGE_NONE]) ?></span>
                </div>
            </div>
        </td>
    </tr> 
    <tr>
        <th><?php print t('Moving means at guidance '); ?> </th>
        <td><?php print _get_values_name($node->field_moving_means[LANGUAGE_NONE]); ?></td>
    </tr>
    <tr>
        <th><?php print t('Current occupation'); ?></th>
        <td><?php print $node->field_current_occupation[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <th><?php print t('Recommended spot'); ?></th>
        <td class="group-fields">
            <p>
                <?php print $node->field_spot_name1[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_spot_image1[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_spot_description1[LANGUAGE_NONE][0]['value'] ?>
            </p>
            <p>
                <?php print $node->field_spot_name2[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_spot_image2[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_spot_description2[LANGUAGE_NONE][0]['value'] ?>
            </p>
            <p>
                <?php print $node->field_spot_name3[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_spot_image3[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_spot_description3[LANGUAGE_NONE][0]['value'] ?>
            </p>
        </td>
    </tr>
    <tr>
        <th><?php print t('Recommended gourmet'); ?></th>
        <td class="group-fields">
            <p>
                <?php print $node->field_gourmet_name1[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_gourmet_image1[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_gourmet_description1[LANGUAGE_NONE][0]['value'] ?>
            </p>
            <p>
                <?php print $node->field_gourmet_name2[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_gourmet_image2[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_gourmet_description2[LANGUAGE_NONE][0]['value'] ?>
            </p>
            <p>
                <?php print $node->field_gourmet_name3[LANGUAGE_NONE][0]['value'] ?>
                <?php print theme('image_style', array('path' => $node->field_gourmet_image3[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumb')) ?>
                <?php print $node->field_gourmet_description3[LANGUAGE_NONE][0]['value'] ?>
            </p>

        </td>
    </tr>

</table>
<div class="action-host-tour">
    <a class="cancel" href="<?php print url('host-tour/cancel/' . $node->nid) ?>"><?php print t('Cancel') ?></a>
    <a class="complete" href="<?php print url('host/finish/step3', array('query' => array('step' => 3))) ?>"><?php print t('Compeleted') ?></a>
</div>

<?php endif; ?>

