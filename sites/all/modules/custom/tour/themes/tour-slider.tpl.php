<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/11/17
 * Time: 9:45 PM
 */
?>

<?php if ($nodes): ?>
        <section id="slider">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="slider_area">
                        <!-- Start super slider -->
                        <div id="slides">
                                <ul class="slides-container">
                                    <?php foreach ($nodes as $node): ?>
                                        <!-- Start single slider-->
                                        <li>
                                            <?php print theme('image_style', array('path' => $node->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => 'slider')); ?>
                                            <div class="slider_caption">
                                                <h2><?php echo $node->title; ?></h2>
                                                <?php if (isset($node->field_description[LANGUAGE_NONE])): ?>
                                                    <p><?php echo $node->field_description[LANGUAGE_NONE][0]['value']; ?></p>
                                                <?php endif; ?>
                                                <?php if (isset($node->field_link[LANGUAGE_NONE])) : ?>
                                                    <a class="slider_btn" href="<?php echo $node->field_link[LANGUAGE_NONE][0]['value']; ?>"><?php print t('View more'); ?></a>
                                                <?php endif; ?>

                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                    
                            <nav class="slides-navigation"></nav>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endif; ?>
