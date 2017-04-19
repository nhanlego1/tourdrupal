<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/12/17
 * Time: 8:22 AM
 */
?>
<?php if ($nodes): ?>
    <div class="row testimonial">
        <div class="our-service margin-top-25">
            <p class="service"><?php print t('Testimonial') ?> <span class="lines"></span></p>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($nodes as $node): ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-3">
                                <?php print theme('image_style', array('path' => $node->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => 'testimonial_thumb')) ?>
                            </div>
                            <div class="col-xs-9">
                                <p class="testimonial-name"><?php print $node->title ?></p>
                                <?php if (isset($node->field_country[LANGUAGE_NONE])): ?>
                                    <p class="testimonial-job"><?php print $node->field_country[LANGUAGE_NONE][0]['value'] ?></p>
                                <?php endif; ?>

                                <div class="hr"></div>
                                <div class="row">
                                    <div class="col-xs-2"><img class="img-responsive"
                                                               src="<?php print base_path() . drupal_get_path('theme', 'tour') ?>/images/quote.png">
                                    </div>
                                    <div class="col-xs-10 testimonial-content">
                                        <p><?php print $node->body[LANGUAGE_NONE][0]['value'] ?></p>
                                        <?php if (isset($node->field_published_date[LANGUAGE_NONE])): ?>
                                            <p class="ps text-right"><?php print t('Published on') ?>
                                                ：<?php print _date_convert($node->field_published_date[LANGUAGE_NONE][0]['value'], $type = 'd/m/Y')?></p>
                                        <?php endif; ?>
                                        <p class="sign text-right"><a
                                                href="<?php print url('node/' . $node->nid) ?>"
                                                style="color: #a60101;"><?php print t('Recruitment Details') ?></a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
