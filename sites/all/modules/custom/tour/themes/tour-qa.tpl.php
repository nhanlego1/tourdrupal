<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$count = 1;
?>
<?php if ($nodes): ?>
    <div class="question-answer">
        <h2><?php print t('Question and Answer') ?></h2>
        <ul class="question-answer-list">
            <?php foreach ($nodes as $node): ?>
                <li> 
                    <span class="number"><?php print $count; ?>.</span><a data="<?php print $node->nid ?>" href="#"><strong><?php print t('Q') ?>: </strong> <?php print $node->title; ?></a>
                    <?php if (_get_answer_question($node->nid)): ?>
                        <div class="answer answer-<?php print $node->nid ?>">
                            <span class="answer-title"><?php print t('A') ?>: </span> <?php print _get_answer_question($node->nid) ?>
                        </div>
                    <?php endif; ?>
                </li>
            <?php $count ++; endforeach; ?>
        </ul>
    </div>

<?php endif; ?>



