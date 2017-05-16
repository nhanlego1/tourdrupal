<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $element;
global $language;
?>
<div class="contact-content">
  <h2><?php print t('Contact') ?></h2>
  <?php if($language->language=='js'): ?>
   <?php print variable_get('contact_content_ja'); ?>
  <?php else: ?>
  <?php print variable_get('contact_content_en'); ?>
  <?php endif; ?>
</div>


<table class="contact-guide">
    <tr>
        <th><?php print t('Your name'); ?> <em class="required">※</em></th>
        <td><?php print render($form['name']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Your Email'); ?> <em class="required">※</em></th>
        <td><?php print render($form['email']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Subject'); ?> <em class="required">※</em></th>
        <td><?php print render($form['subject']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Message'); ?> <em class="required">※</em></th>
        <td><?php print render($form['message']) ?></td>
    </tr>
    

</table>
<div class="contact-content-footer">
  <?php print drupal_render_children($form) ?> 
</div>


