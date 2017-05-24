<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class="table table-striped course_table confirm-host-tour" style="margin-top: 40px;">
    
    <tr>
        <?php if ($node->field_order_type[LANGUAGE_NONE][0]['value'] == 'host'): ?>
            <td width="30%"><?php print t('Host') ?></td>
        <?php else: ?>
            <td width="30%"><?php print t('Tour') ?></td>
        <?php endif; ?>
        <td width="70%"><?php print $node->field_service_name[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Full name') ?></td>
        <td width="70%"><?php print $node->field_full_name[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Stay address') ?></td>
        <td width="70%"><?php print $node->field_stay_address[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Your mobile phone') ?></td>
        <td width="70%"><?php print $node->field_mobile_phone[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Passport number') ?></td>
        <td width="70%"><?php print $node->field_passport_number[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Start day') ?></td>
        <td width="70%"><?php print date('d-m-Y',$node->field_start_day[LANGUAGE_NONE][0]['value']) ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('End day') ?></td>
        <td width="70%"><?php print date('d-m-Y',$node->field_end_day[LANGUAGE_NONE][0]['value']) ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Start time') ?></td>
        <td width="70%"><?php print $node->field_start_time[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('End time') ?></td>
        <td width="70%"><?php print $node->field_end_time[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <?php if ($node->field_order_type[LANGUAGE_NONE][0]['value'] == 'host'): ?>
    <tr>
        <td width="30%"><?php print t('Total hours') ?></td>
        <td width="70%"><?php print $node->field_total_hours[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <?php endif; ?>
    <tr>
        <td width="30%"><?php print t('Total fee') ?></td>
        <td width="70%"><?php print t('$') ?><?php print number_format($node->field_total_fee[LANGUAGE_NONE][0]['value'], 0, '.', ',') ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Meeting place') ?></td>
        <td width="70%"><?php print $node->field_meeting_place[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
    <tr>
        <td width="30%"><?php print t('Remark') ?></td>
        <td width="70%"><?php print $node->field_remark[LANGUAGE_NONE][0]['value'] ?></td>
    </tr>
</table>

<div class="action-host-tour">
    <a href="<?php print url('purchase/paypal/'.$node->nid) ?>"><img width="120px" src="<?php print base_path().drupal_get_path('theme','tour') ?>/images/paypal.png"/></a>
</div>

