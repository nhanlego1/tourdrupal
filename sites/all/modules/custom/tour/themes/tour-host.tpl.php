<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($nodes): ?>
    <div class="host row">
        <div class="our-service">
            <p class="service"><?php print t('New Introduction of members (host)'); ?><span class="lines"></span></p>
        </div>
        <div class="container list-host">
            <div class="ourCourse_content">
                <ul class="course_nav">
                    <?php foreach ($nodes as $node): ?>
                        <li>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="host-avatar">
                                    <a href="<?php print url('node/' . $node->nid) ?>">
                                        <img class="host-img" src="<?php print image_style_url('host_home', $node->field_avatar[LANGUAGE_NONE][0]['uri']) ?>">
                                    </a>
                                    <span>
                                        <strong><?php print $node->title ?></strong>
                                    </span>
                                </div>
                                <p class="host-name"></p>
                                <p class="host-salary"><?php print t('＄') ?><?php print number_format($node->field_hour_rate[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?>/<?php print t('Per One Hour') ?></p>
                                <div class="host-desc">
                                    <p><?php print t('Area') ?> : <?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]) ?></p>
                                    <p><?php print t('Laungage') ?>：<?php print _get_term_name($node->field_supported_languages[LANGUAGE_NONE]) ?></p>
                                    <p><?php print t('Transportation') ?>：<?php print _get_values_name($node->field_moving_means[LANGUAGE_NONE]); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
<?php endif; ?>

