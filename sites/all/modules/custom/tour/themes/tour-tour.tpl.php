<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($nodes): ?>
    <div class="host row newTour">
        <div class="our-service">
            <p class="service"><font><font><?php print t('New tour / activities') ?></font></font><span class="lines"></span></p>
        </div>
        <div class="container list-host">
            <div id="newTour" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php if ($nodes): ?>
                        <div class="item active">
                            <div class="row">
                                <?php foreach ($nodes as $node1): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="host-avatar">
                                            <a href="<?php print url('node/' . $node1->nid); ?>">
                                                <img class="host-img" src="<?php print image_style_url('tour_home', $node1->field_image_photo[LANGUAGE_NONE][0]['uri']) ?>">
                                            </a>
                                        </div>
                                        <p class="host-name"><font><font><?php print $node1->title ?></font></font></p>
                                        <p class="host-salary blues"><font><font><?php print t('$') ?><?php print number_format($node1->field_tour_fee[LANGUAGE_NONE][0]['value'], 0, ',', '.') ?></font></font></p>
                                        <div class="host-desc hostNew">
                                            <p><font><font><?php print t('Meeting place') ?>: <?php print $node1->field_the_meeting_place[LANGUAGE_NONE][0]['value'] ?></font></font></p>
                                            <p><font><font><?php print t('Location'); ?>: <?php print _get_term_name($node1->field_guidable_area[LANGUAGE_NONE]) ?></font></font></p>
                                            <p><font><font><?php print t('Duration') ?>: <?php print $node1->field_reservation_deadline[LANGUAGE_NONE][0]['value'] ?></font></font></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (tour_get_tour_home_more()): ?>
                        <div class="item">
                            <div class="row">
                                <?php foreach (tour_get_tour_home_more() as $node2): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="host-avatar">
                                            <a href="<?php print url('node/' . $node2->nid); ?>">
                                                <img class="host-img" src="<?php print image_style_url('tour_home', $node2->field_image_photo[LANGUAGE_NONE][0]['uri']) ?>">
                                            </a>
                                        </div>
                                        <p class="host-name"><font><font><?php print $node2->title ?></font></font></p>
                                        <p class="host-salary blues"><font><font><?php print t('$') ?><?php print number_format($node2->field_tour_fee[LANGUAGE_NONE][0]['value'], 0, ',', '.') ?></font></font></p>
                                        <div class="host-desc hostNew">
                                            <p><font><font><?php print t('Meeting place') ?>: <?php print $node2->field_the_meeting_place[LANGUAGE_NONE][0]['value'] ?></font></font></p>
                                            <p><font><font><?php print t('Location'); ?>: <?php print _get_term_name($node2->field_guidable_area[LANGUAGE_NONE]) ?></font></font></p>
                                            <p><font><font><?php print t('Duration') ?>: <?php print $node2->field_reservation_deadline[LANGUAGE_NONE][0]['value'] ?></font></font></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <a class="left carousel-control" href="#newTour" data-slide="prev"><span class="sr-only"><font><font>Previous </font></font></span><img class="left-arr hidden-xs hidden-sm" src="<?php print base_path() . drupal_get_path('theme', 'tour') ?>/images/left-arr.png" data-pin-nopin="true"> </a>
            <a class="right carousel-control" href="#newTour" data-slide="next"> <span class="sr-only"><font></font></span> <img class="right-arr hidden-xs hidden-sm" src="<?php print base_path() . drupal_get_path('theme', 'tour') ?>/images/right-arr.png"></a>
        </div>
    </div>
<?php endif; ?>

