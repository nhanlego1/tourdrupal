<div class="footer_top">
    <div class="container">
        <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                    <h3><?php print t('About Us'); ?></h3>
                    <?php
                    $block_id = 3;
                    $block = block_block_view($block_id);
                    $block['content'] = i18n_string(array('blocks', 'block', $block_id, 'body'), $block['content']);
                    print render($block['content']);
                    ?>
                </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                    <h3><?php print t('Community') ?></h3>
                    <ul class="footer_widget_nav">
                        <?php if (_getcommunity()): ?>
                            <?php foreach (_getcommunity() as $node): ?>
                                <li><a href="<?php print url('node/'.$node->nid) ?>"><?php print $node->title ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                    <h3><?php print t('Others') ?></h3>
                    <ul class="footer_widget_nav">
                        <li><a href="<?php print url('company') ?>"><?php print t('Company Profile');?></a>
                        </li>
                        <li><a href="<?php print url('contact') ?>"><?php print t('Inquiries')?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
                <div class="single_footer_widget">
                    <h3><?php print t('Adress') ?></h3>
                    <?php print t('<p>〒167-0034 Tokyo Peach Blossom District 1-5-1</p>
                    <p>TEL : 03-000-0000</p>
                    <p>FAX : 03-000-0000</p>
                    <p>E-mail : contact@wpfdegree.com</p>') ?>

                </div>
            </div>
        </div>
    </div>
</div>