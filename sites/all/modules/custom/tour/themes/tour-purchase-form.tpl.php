<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $element;
?>
<table class="purchase">
  <tr>
    <th><?php print t('Full Name'); ?> <em class="required">※</em></th>
    <td><?php print render($form['full_name']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Stay address'); ?> <em class="required">※</em></th>
    <td><?php print render($form['stay_address']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Your mobile phone'); ?> <em class="required">※</em></th>
    <td><?php print render($form['phone']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Passport number'); ?> <em class="required">※</em></th>
    <td><?php print render($form['passport']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Start day'); ?> <em class="required">※</em></th>
    <td><?php print render($form['start_date']) ?></td>
  </tr>
  <tr>
    <th><?php print t('End day'); ?> <em class="required">※</em></th>
    <td><?php print render($form['end_date']) ?></td>
  </tr>

  <tr>
    <th><?php print t('Start time'); ?> <em class="required">※</em></th>
    <td><?php print render($form['start_time']) ?></td>
  </tr>
  <tr>
    <th><?php print t('End time'); ?> <em class="required">※</em></th>
    <td><?php print render($form['end_time']) ?></td>
  </tr>
  <?php if (arg(1) == 'host'): ?>
    <tr>
      <th><?php print t('Total hours'); ?>        
        <em class="required">※</em></th>
      <td><?php print render($form['total_hours']) ?></td>
    </tr>
  <?php else: ?>
    <?php unset($form['total_hours']); ?>
  <?php endif; ?>
  <tr>
    <th><?php print t('Total fee'); ?> <em class="required">※</em></th>
    <td><?php print render($form['total_fee']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Meeting place'); ?> <em class="required">※</em></th>
    <td><?php print render($form['meeting_place']) ?></td>
  </tr>
  <tr>
    <th><?php print t('Remark'); ?></th>
    <td><?php print render($form['remark']) ?></td>
  </tr>



</table>

<?php print drupal_render_children($form) ?> 
