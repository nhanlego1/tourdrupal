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
            <div class="ourCourse2_content">
                <ul class="tutors_nav">
                    <?php foreach ($nodes as $node1): ?>
                        <li>
                            <div class="col-xs-12 col-sm-12 col-md-12">
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
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>

