<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/12/17
 * Time: 1:40 AM
 */
?>
<div class="row progress">
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="c100 p30 circle-progress">
            <span><?php print _count_host() ?> <?php print t('People') ?></span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p class="progress-name"> <?php print t('Guide (host) registration number') ?> </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="c100 p40 circle-progress">
            <span><?php print _count_tour() ?> <?php print t('tour')?></span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p class="progress-name"> <?php print t('Number of tour information')?> </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="c100 p50 circle-progress">
            <span>coming...</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p class="progress-name"><?php print t('Number of accommodation information')?></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="c100 p60 circle-progress">
            <span>coming...</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p class="progress-name"> <?php print t('Number of gourmet information')?> </p>
    </div>
</div>
