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
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php if ($nodes): ?>
                        <div class="item active">
                            <div class="row">
                                <?php foreach ($nodes as $node1): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="host-avatar">
                                            <a href="<?php print url('node/' . $node1->nid) ?>">
                                                <img class="host-img" src="<?php print image_style_url('host_home', $node1->field_avatar[LANGUAGE_NONE][0]['uri']) ?>">
                                            </a>
                                            <span>
                                                <strong><?php print $node1->title ?></strong>
                                            </span>
                                        </div>
                                        <p class="host-name"></p>
                                        <p class="host-salary"><?php print t('＄') ?><?php print number_format($node1->field_hour_rate[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?>/<?php print t('Per One Hour') ?></p>
                                        <div class="host-desc">
                                            <p><?php print t('Area') ?> : <?php print _get_term_name($node1->field_guidable_area[LANGUAGE_NONE]) ?></p>
                                            <p><?php print t('Laungage') ?>：<?php print _get_term_name($node1->field_supported_languages[LANGUAGE_NONE]) ?></p>
                                            <p><?php print t('Transportation') ?>：<?php print _get_values_name($node1->field_moving_means[LANGUAGE_NONE]); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (tour_get_host_home_more()): ?>
                        <div class="item">
                            <div class="row">
                                <?php foreach (tour_get_host_home_more() as $node2): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="host-avatar">
                                            <a href="<?php print url('node/' . $node2->nid) ?>">
                                                <img class="host-img" src="<?php print image_style_url('host_home', $node2->field_avatar[LANGUAGE_NONE][0]['uri']) ?>">
                                            </a>
                                            <span>
                                                <strong><?php print $node2->title ?></strong>
                                            </span>
                                        </div>
                                        <p class="host-name"></p>
                                        <p class="host-salary"><?php print t('＄') ?><?php print number_format($node2->field_hour_rate[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?>/<?php print t('Per One Hour') ?></p>
                                        <div class="host-desc">
                                            <p><?php print t('Area') ?> : <?php print _get_term_name($node2->field_guidable_area[LANGUAGE_NONE]) ?></p>
                                            <p><?php print t('Laungage') ?>：<?php print _get_term_name($node2->field_supported_languages[LANGUAGE_NONE]) ?></p>
                                            <p><?php print t('Transportation') ?>：<?php print _get_values_name($node2->field_moving_means[LANGUAGE_NONE]); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev">
                <span class="sr-only">Previous</span>
                <img class="left-arr hidden-xs hidden-sm" src="<?php print base_path() . drupal_get_path('theme', 'tour') ?>/images/left-arr.png" data-pin-nopin="true">
            </a>
            <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next"> 
                <span class="sr-only">Next</span> 
                <img class="right-arr hidden-xs hidden-sm" src="<?php print base_path() . drupal_get_path('theme', 'tour') ?>/images/right-arr.png">
            </a>

        </div>
    </div>
<?php endif; ?>

