<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($step == 2): ?>
    <div class="page-host-confirm">
        <table>
            <tr>
                <th><?php print t('Tour title'); ?> </th>
                <td><?php print $node->title ?></td>
            </tr>
            <tr>
                <th><?php print t('Paypal Account'); ?> </th>
                <td><?php print $node->field_paypal_account[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Tour theme'); ?> </th>
                <td><?php print $node->field_tour_theme[LANGUAGE_NONE][0]['und'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Location'); ?> </th>
                <td><?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]); ?></td>
            </tr>
            <tr>
                <th><?php print t('Supported languages'); ?> </th>
                <td><?php print _get_term_name($node->field_supported_languages[LANGUAGE_NONE]); ?></td>
            </tr>
            <tr>
                <th><?php print t('Tour outline · PR'); ?> </th>
                <td><?php print $node->field_tour_outline[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>

            <tr>
                <th><?php print t('Course Name'); ?> </th>
                <td><?php print $node->field_tour_schedule_image[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Time'); ?> </th>
                <td><?php print $node->field_time[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('The meeting place'); ?> </th>
                <td><?php print $node->field_the_meeting_place[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Reservation deadline'); ?> </th>
                <td><?php print $node->field_reservation_deadline[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Maximum number of people'); ?> </th>
                <td><?php print $node->field_maximum_number_people[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Target age'); ?> </th>
                <td><?php print $node->field_target_age[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Tour fee'); ?> </th>
                <td><?php print $node->field_tour_fee[LANGUAGE_NONE][0]['value'] ?></td>
            </tr><tr>
                <th><?php print t('Included in price'); ?> </th>
                <td><?php print $node->field_included_price[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Time required'); ?> </th>
                <td><?php print $node->field_time_required[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Presence of meals'); ?> </th>
                <td><?php print $node->field_presence_of_meals[LANGUAGE_NONE][0]['value'] ?></td>
            </tr>
            <tr>
                <th><?php print t('Pick up or not'); ?> </th>
                <td><?php print $node->field_pick_up_not[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Holidays'); ?> </th>
                <td><?php print $node->field_holidays[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Minimum performers'); ?> </th>
                <td><?php print $node->field_minimum_performers[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Notes'); ?> </th>
                <td><?php print $node->field_notes[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Remarks'); ?> </th>
                <td><?php print $node->field_remarks[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Inquiries'); ?> </th>
                <td><?php print $node->field_inquiries[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Name of person in charge'); ?> </th>
                <td><?php print $node->field_person_in_charge[LANGUAGE_NONE][0]['value'] ?></td>
            </tr> 
            <tr>
                <th><?php print t('Address'); ?></th>
                <td class="group-fields">
                    <p><?php print t('Postal code'); ?>: <?php print $node->field_postal_code[LANGUAGE_NONE][0]['value'] ?></p>
                    <p><?php print t('Prefectures'); ?>: <?php print _get_term_name($node->field_prefectures[LANGUAGE_NONE]); ?></p>
                    <p><?php print t('Municipality'); ?>: <?php print $node->field_municipality[LANGUAGE_NONE][0]['value'] ?></p>
                    <p><?php print t('Street address building'); ?>: <?php print $node->field_addresses[LANGUAGE_NONE][0]['value'] ?></p>
                </td>

            </tr>
            <tr>
                <th><?php print t('Phone number'); ?> </th>
                <td><?php print $node->field_phone_number[LANGUAGE_NONE][0]['value'] ?> </td>
            </tr>
            <tr>
                <th><?php print t('Email address'); ?> </th>
                <td><?php print $node->field_email_address[LANGUAGE_NONE][0]['value'] ?> </td>
            </tr>
            <tr>
                <th><?php print t('Mobile number'); ?> </th>
                <td><?php print $node->field_cellphone_number[LANGUAGE_NONE][0]['value'] ?> </td>
            </tr>
            <tr>
                <th><?php print t('Image'); ?></th>
                <td>
                    <?php foreach ($node->field_image_photo[LANGUAGE_NONE] as $image): ?>
                        <p><?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'thumbnail')) ?></p>
                    <?php endforeach; ?>
                </td>
            </tr>


        </table>
    </div>

    <div class="action-host-tour">
        <a class="cancel" href="<?php print url('host-tour/cancel/' . $node->nid) ?>"><?php print t('Cancel') ?></a>
        <a class="complete" href="<?php print url('tour/finish/step3', array('query' => array('step' => 3))) ?>"><?php print t('Compeleted') ?></a>
    </div>
<?php endif; ?>

