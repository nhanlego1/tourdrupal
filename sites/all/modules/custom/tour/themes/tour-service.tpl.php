<?php if ($nodes): ?>
    <div class="container">
        <div class="row our-service">
            <p class="service"><?php print t('Service') ?><br><span class="lines"></span></p>

        </div>
        <div class="row margin-top-45">
            <?php foreach($nodes as $node): ?>
                <div class="col-xs-12 col-sm-6 col-md-3 service-wrap">
                    <div class="text-center"><img src="<?php print image_style_url('original',$node->field_image[LANGUAGE_NONE][0]['uri']) ?>" data-pin-nopin="true"></div>
                    <p class="service-title"><?php print $node->title ?></p>
                    <p class="service-detail"><?php print $node->body[LANGUAGE_NONE][0]['value'] ?></p>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>