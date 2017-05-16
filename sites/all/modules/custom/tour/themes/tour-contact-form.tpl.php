<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $element;
?>
<h2><?php print t('Contact') ?></h2>
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

<?php print drupal_render_children($form) ?> 
<p></p>
