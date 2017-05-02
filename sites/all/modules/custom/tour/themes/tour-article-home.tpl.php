<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 4/12/17
 * Time: 11:33 PM
 */ ?>

<div class="newsfeed_area wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
    <ul id="myTab2" class="nav nav-tabs feed_tabs">
        <li class="active"><a href="#notice" data-toggle="tab" aria-expanded="true"><?php print t('Blog') ?></a></li>
        <li class=""><a href="#news" data-toggle="tab" aria-expanded="false"><?php print t('News') ?></a></li>
        <li class=""><a href="#events" data-toggle="tab" aria-expanded="false"><?php print t('Events') ?></a></li>
    </ul>
    <div class="tab-content bg_red_tab" style="display: none;">

        <!-- Start notice tab content -->
        <div id="notice" class="tab-pane active in fade">
            <ul class="blog_tab">
                <?php if ($nodes['blog']): ?>
                    <?php foreach ($nodes['blog'] as $blog): ?>
                        <li>
                            <div class="media">
                                <div class="media-left"><a class="news_img"
                                                           href="<?php print url('node/' . $blog->nid) ?>">
                                        <?php print theme('image_style', array('path' => $blog->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a tabindex="0"
                                       href="<?php print url('node/' . $blog->nid) ?>"><b><?php print $blog->title ?></b></a>
                                    <p class="food_des"></p>
                                    <p><?php print $blog->field_short_desc[LANGUAGE_NONE][0]['value'] ?>...</p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <a class="see_all" href="<?php print url('blog') ?>"><?php print t('See All') ?></a>
        </div>


        <!-- Start news tab content -->
        <div id="news" class="tab-pane fade">
            <ul class="news_tab">
                <?php if ($nodes['news']): ?>
                    <?php foreach ($nodes['news'] as $news): ?>
                        <li>
                            <div class="media">
                                <div class="media-left"><a class="news_img"
                                                           href="<?php print url('node/' . $news->nid) ?>">
                                        <?php print theme('image_style', array('path' => $news->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a tabindex="0"
                                       href="<?php print url('node/' . $news->nid) ?>"><b><?php print $news->title ?></b></a>
                                    <p class="food_des"></p>
                                    <p><?php print $news->field_short_desc[LANGUAGE_NONE][0]['value'] ?>...</p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
            <a class="see_all" href="<?php print url('news') ?>"><?php print t('See All') ?></a>

        </div>
        <!-- Start events tab content -->
        <div id="events" class="tab-pane fade">
            <ul class="events_tab">
                <?php if ($nodes['events']): ?>
                    <?php foreach ($nodes['events'] as $events): ?>
                        <li>
                            <div class="media">
                                <div class="media-left"><a class="news_img"
                                                           href="<?php print url('node/' . $events->nid) ?>">
                                        <?php print theme('image_style', array('path' => $events->field_image[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a tabindex="0"
                                       href="<?php print url('node/' . $events->nid) ?>"><b><?php print $events->title ?></b></a>
                                    <p class="food_des"></p>
                                    <p><?php print $events->field_short_desc[LANGUAGE_NONE][0]['value'] ?>...</p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
            <a class="see_all" href="<?php print url('events') ?>"><?php print t('See All') ?></a>

        </div>

    </div>
</div>
