<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = $element;
?>
<table>
    <tr>
        <th><?php print t('Tour title'); ?> <em class="required">※</em></th>
        <td><?php print render($form['title']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Paypal Account'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_paypal_account']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Tour theme'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_tour_theme']) ?></td>
    </tr>
     <tr>
        <th><?php print t('Location'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_guidable_area']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Supported languages'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_supported_languages']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Tour outline · PR'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_tour_outline']) ?></td>
    </tr>

    <tr>
        <th><?php print t('Course Name'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_tour_schedule_image']) ?></td>
    </tr>
     <tr>
        <th><?php print t('Time'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_time']) ?></td>
    </tr>
    <tr>
        <th><?php print t('The meeting place'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_the_meeting_place']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Reservation deadline'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_reservation_deadline']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Maximum number of people'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_maximum_number_people']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Target age'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_target_age']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Tour fee'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_tour_fee']) ?></td>
    </tr><tr>
        <th><?php print t('Included in price'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_included_price']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Time required'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_time_required']) ?></td>
    </tr>
    <tr>
        <th><?php print t('Presence of meals'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_presence_of_meals']) ?></td>
    </tr>
     <tr>
        <th><?php print t('Pick up or not'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_pick_up_not']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Holidays'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_holidays']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Minimum performers'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_minimum_performers']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Notes'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_notes']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Remarks'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_remarks']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Inquiries'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_inquiries']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Name of person in charge'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_person_in_charge']) ?></td>
    </tr> 
    <tr>
        <th><?php print t('Address'); ?></th>
        <td class="group-fields">
            <p><?php print t('Postal code'); ?>:</p> <?php print render($form['field_postal_code']) ?>
            <p><?php print t('Prefectures'); ?>:</p> <?php print render($form['field_prefectures']) ?>
            <p><?php print t('Municipality'); ?>:</p> <?php print render($form['field_municipality']) ?>
            <p><?php print t('Street address building'); ?>:</p> <?php print render($form['field_addresses']) ?>
        </td>
       
    </tr>
    <tr>
        <th><?php print t('Phone number'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_phone_number']) ?> <span><?php print t('No hyphen required');?></span></td>
    </tr>
    <tr>
        <th><?php print t('Email address'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_email_address']) ?> <span><?php print t('Example： info@example.com');?></span></td>
    </tr>
    <tr>
        <th><?php print t('Mobile number'); ?> <em class="required">※</em></th>
        <td><?php print render($form['field_cellphone_number']) ?> <span><?php print t('Example： 09011112222 (No hyphen required)');?></span></td>
    </tr>
    <tr>
        <th><?php print t('Image'); ?></th>
        <td><?php print render($form['field_image_photo']) ?></td>
    </tr>
    
     
</table>

<?php print drupal_render_children($form) ?> 
