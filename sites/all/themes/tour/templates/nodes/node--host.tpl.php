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
                <?php print theme('image_style', array('path' => $node->field_avatar[LANGUAGE_NONE][0]['uri'], 'style_name' => 'original')) ?>
            </div>
            <div class="singlecourse_bottom">
                <h1><b><?php print $node->title ?></b></h1>
                <span class="singlecourse_author">
                    <?php print theme('image_style', array('path' => $node->field_avatar[LANGUAGE_NONE][0]['uri'], 'style_name' => 'thumbnail')) ?><?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]) ?><p><a href="<?php print url('guide/contact',array('query'=>array('token'=> base64_encode(time().'|'.$node->nid)))) ?>" class="question"><?php print t('Contact') ?></a></p></span>
                <span class="singlecourse_price"><?php print t('$') ?> <?php print number_format($node->field_hour_rate[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?> / <?php print t('hour') ?>
                </span>
            </div>
        </div>
        <div class="single_course_content">
            <h2><?php print t('Profile') ?></h2>

            <div class="host-desc">
                <p><?php print $node->field_profile_in_japanese[LANGUAGE_NONE][0]['value'] ?></p>
                <table style="margin-top: 40px" class="table table-striped course_table">
                    <thead style="background-color: #ADB367">
                        <tr style="background-color: #ADB367">
                            <th style="border: 1px solid #d4d2d2; color: #ADB367;" colspan="3">
                    <h2><span class="fa fa-quote-left"></span><?php print t('Recommended gourmet that I will show! It is!') ?></h2>
                    </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_gourmet_image1[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                            <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_gourmet_image2[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                            <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_gourmet_image3[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33" align="center"><?php print $node->field_gourmet_name1[LANGUAGE_NONE][0]['value'] ?></td>
                            <td class="cols-33" align="center"><?php print $node->field_gourmet_name1[LANGUAGE_NONE][0]['value'] ?></td>
                            <td class="cols-33" align="center"><?php print $node->field_gourmet_name1[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33" align="center">
                                <?php if (isset($node->field_gourmet_description1[LANGUAGE_NONE])): ?>
                                    <?php print $node->field_gourmet_description1[LANGUAGE_NONE][0]['value'] ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td class="cols-33" align="center">
                                <?php if (isset($node->field_gourmet_description2[LANGUAGE_NONE])): ?>
                                    <?php print $node->field_gourmet_description2[LANGUAGE_NONE][0]['value'] ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?></td>
                            <td class="cols-33" align="center">
                                <?php if (isset($node->field_gourmet_description3[LANGUAGE_NONE])): ?>
                                    <?php print $node->field_gourmet_description3[LANGUAGE_NONE][0]['value'] ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?></td>
                        </tr>

                    </tbody>
                </table>
                <table style="margin-top: 40px" class="table table-striped course_table">
                    <thead   style="background-color: #ADB367;">
                        <tr style="background-color: #ADB367">
                            <th style="border: 1px solid #d4d2d2; color: #ADB367;" colspan="3">
                    <h2><span class="fa fa-quote-left"></span><?php print t('The recommended spot I will guide! It is!') ?></h2>
                    </th>
                    </tr>
                    </thead>
                    <tr>
                        <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_spot_image1[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                        <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_spot_image2[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                        <td class="cols-33" align="center"><?php print theme('image_style', array('path' => $node->field_spot_image3[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?></td>
                    </tr>
                    <tr>
                        <td class="cols-33" align="center" width="230"><?php print $node->field_spot_name1[LANGUAGE_NONE][0]['value'] ?></td>
                        <td class="cols-33" align="center" width="230"><?php print $node->field_spot_name2[LANGUAGE_NONE][0]['value'] ?></td>
                        <td class="cols-33" align="center" width="230"><?php print $node->field_spot_name3[LANGUAGE_NONE][0]['value'] ?></td>
                    </tr>
                    <tr>
                        <td class="cols-33" align="center">
                            <?php if (isset($node->field_spot_description1[LANGUAGE_NONE])): ?>
                                <?php print $node->field_spot_description1[LANGUAGE_NONE][0]['value'] ?>
                            <?php else: ?>
                                -
                            <?php endif; ?></td>
                        <td class="cols-33" align="center">
                            <?php if (isset($node->field_spot_description2[LANGUAGE_NONE])): ?>
                                <?php print $node->field_spot_description2[LANGUAGE_NONE][0]['value'] ?>
                            <?php else: ?>
                                -
                            <?php endif; ?></td>
                        <td class="cols-33" align="center">
                            <?php if (isset($node->field_spot_description3[LANGUAGE_NONE])): ?>
                                <?php print $node->field_spot_description3[LANGUAGE_NONE][0]['value'] ?>
                            <?php else: ?>
                                -
                            <?php endif; ?></td>
                    </tr>
                    </tbody>
                </table>
                
                <table style="margin-top: 40px" class="table table-striped course_table profile-info">
                    <tbody>
                        <tr>
                            <td class="cols-33"><?php print t('Guide area') ?></td>
                            <td class="cols-7"><?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]) ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33"><?php print t('Supported language') ?></td>
                            <td class="cols-7"><?php print _get_term_name($node->field_supported_languages[LANGUAGE_NONE]) ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33"><?php print t('Minimum time') ?></td>
                            <td class="cols-7"><?php print $node->field_minimum_guide_time[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33"><?php print t('Transportation') ?></td>
                            <td class="cols-7"><?php print render($content['field_moving_means']);//_get_values_name($node->field_moving_means[LANGUAGE_NONE]); ?></td>
                        </tr>

                        <tr>
                            <td class="cols-33"><?php print t('Basic time') ?></td>
                            <td class="cols-7"><?php print $node->field_basic_guide_uptime[LANGUAGE_NONE][0]['value'] ?></td>
                        </tr>
                        <tr>
                            <td class="cols-33"><?php print t('Morning early / late at night') ?></td>
                            <td class="cols-7"><?php print render($content['field_hourly_early']) ?></td>
                        </tr>

                        <tr>
                            <td class="cols-33"><?php print t('Current job') ?></td>
                            <td class="cols-7">
                                <?php if (isset($node->field_current_occupation[LANGUAGE_NONE])): ?>
                                    <?php print $node->field_current_occupation[LANGUAGE_NONE][0]['value'] ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>
        <!-- start related course -->
        <div class="pay"><a href="<?php print url('purchase/host/'.$node->nid) ?>"><img src="<?php print base_path().drupal_get_path('theme', 'tour') . '/images/paypal.png'; ?>"/></a></div>
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

