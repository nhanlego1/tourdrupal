<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($step == 2): ?>
    <table class="table table-striped course_table confirm-host-tour">
        <tr>
             <?php if ($_GET['type'] == 'host'): ?>
            <td width="30%"><?php print t('Name') ?></td>
            <?php else: ?>
            <td width="30%"><?php print t('Tour Title') ?></td>
            <?php endif; ?>
            <td width="70%"><?php print $node->title; ?></td>
        </tr>
        <?php foreach ($fields as $field): ?>
            <?php if ($field['field_name'] != 'field_rating'): ?>
                <tr>
                    <td width="30%"><?php print t($field['label']) ?></td>
                    <td width="70%"><?php print render(field_view_field('node', $node, $field['field_name'])); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>

    <div class="action-host-tour">
        <?php if ($_GET['type'] == 'host'): ?>
            <a class="cancel" href="<?php print url('host-tour/cancel/' . $node->nid) ?>"><?php print t('Cancel') ?></a>
            <a class="complete" href="<?php print url('host/finish/step3', array('query' => array('step' => 3))) ?>"><?php print t('Compeleted') ?></a>
        <?php else: ?>
            <a class="cancel" href="<?php print url('host-tour/cancel/' . $node->nid) ?>"><?php print t('Cancel') ?></a>
            <a class="complete" href="<?php print url('tour/finish/step3', array('query' => array('step' => 3))) ?>"><?php print t('Compeleted') ?></a>
        <?php endif; ?>
    </div>
<?php endif; ?>

