<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-lg-12 col-md-12 col-sm-12 node-detail">
    <div class="courseArchive_content">
        <div class="singlecourse_ferimg_area">
            <div class="singlecourse_ferimg">
                <?php print render($content['field_image_photo']) ?>
            </div>
            <div class="singlecourse_bottom">
                <h1><b><?php print $node->title ?></b></h1>
                <span class="singlecourse_author">
                    <?php print theme('image_style', array('path' => $node->field_image_photo[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumbnail')) ?>
                       <?php print $node->field_time[LANGUAGE_NONE][0]['value'] ?> | <?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]) ?>
                    <p>
                            <a href="<?php print url('contact') ?>" class="question"><?php print t('Contact') ?></a></p></span>
                <span class="singlecourse_price"><?php print t('$') ?> <?php print number_format($node->field_tour_fee[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?>
                </span>
            </div>
        </div>
        <div class="single_course_content">

            <div class="host-desc">
                <p><?php print $node->field_tour_outline[LANGUAGE_NONE][0]['value'] ?></p>

                <table class="table table-striped course_table course-detail">

                    <tr>
                        <td width="20%"><?php print t('Course Name') ?></td>
                        <td width="80%"><?php print $node->field_tour_schedule_image[LANGUAGE_NONE][0]['value'] ?></td>
                    </tr>

                    </tbody>
                </table>
                <table class="table table-striped course_table profile-info">
                    <tbody>
                        <tr>
                            <td><?php print t('Price') ?></td>
                            <td><?php print t('$') ?> <?php print number_format($node->field_tour_fee[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?></td>
                        </tr>
                        <tr>
                            <td><?php print t('Time required') ?></td>
                            <td><?php print $node->field_time_required[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td><?php print t('Target age') ?></td>
                            <td><?php print $node->field_target_age[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td><?php print t('The meeting place') ?></td>
                            <td><?php print $node->field_the_meeting_place[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                         <tr>
                            <td><?php print t('Reservation deadline') ?></td>
                            <td><?php print $node->field_reservation_deadline[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                         <tr>
                            <td><?php print t('Maximum number of people') ?></td>
                            <td><?php print $node->field_maximum_number_people[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td><?php print t('Included in cost') ?></td>
                            <td><?php print $node->field_included_price[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td><?php print t('Things to prepare') ?></td>
                            <td><?php print $node->field_notes[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                         <tr>
                            <td><?php print t('Remarks') ?></td>
                            <td><?php print $node->field_remarks[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                       
                    </tbody>
                </table>

            </div>


        </div>
        <!-- start related course -->
        <div class="pay"><a href="<?php print url('purchase/tour/'.$node->nid) ?>"><img src="<?php print base_path().drupal_get_path('theme', 'tour') . '/images/paypal.png'; ?>"/></a></div>
        <!--form paypal-->


        <div class="related_post">
            <h2>USER REVIEW</h2>
            <table class="table rating table-striped course_table profile-info">
                <tbody>
                    <tr>
                        <td colspan="7">
                            <?php print render($content['field_rating']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <?php print render($content['comments']); ?> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End related course -->
    </div>
</div>

