<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/11/17
 * Time: 9:45 PM
 */
?>
<?php if ($nodes): ?>
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php foreach ($nodes as $node): ?>
                <?php print theme('image_style', array('path' => $node->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => 'original', 'attributes' => array('title' => '#slidecaption' . $node->nid))); ?>
            <?php endforeach; ?>
        </div>
        <?php foreach ($nodes as $node): ?>
            <div id="slidecaption<?php echo $node->nid; ?>" class="nivo-html-caption">
                <div class="slide_info">
                    <h1><?php echo $node->title; ?></h1>
                    <?php if (isset($node->field_description[LANGUAGE_NONE])): ?>
                        <p><?php echo $node->field_description[LANGUAGE_NONE][0]['value']; ?></p>
                    <?php endif; ?>
                </div>
                <?php if (isset($node->field_link[LANGUAGE_NONE])) : ?>
                    <div class="slide_more">
                        <a href="<?php echo $node->field_link[LANGUAGE_NONE][0]['value']; ?>"><?php print t('View more'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
