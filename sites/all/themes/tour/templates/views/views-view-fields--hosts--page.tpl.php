<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$node = node_load($fields['nid']->raw);
?>
<div class="host-avatar">
    <a href="<?php print url('node/'.$node->nid); ?>">
        <?php print theme('image_style',array('path'=>$node->field_avatar[LANGUAGE_NONE][0]['uri'],'style_name'=>'host_thumb','attributes'=>array('class'=>array('host-img')))) ?>
    </a>
    <span>
        <strong>
            <?php print $node->title ?> 
        </strong>
    </span>
</div>
<p class="host-name"></p>
<p class="host-salary"><?php print t('$')?> <?php print number_format($node->field_hour_rate[LANGUAGE_NONE][0]['value'],0,'.',',') ?> / <?php print t('Per One Hour')?></p>
<div class="host-desc">
    <p><?php print t('Area')?>: <?php print _get_term_name($node->field_guidable_area[LANGUAGE_NONE]) ?></p>
    <p><?php print t('Interpretation language')?>: <?php print _get_term_name($node->field_supported_languages[LANGUAGE_NONE]) ?></p>
    <p><?php print t('Moving means')?>: <?php print _get_values_name($node->field_moving_means[LANGUAGE_NONE]) ?></p>
    <p><?php print _get_values_name($node->field_permitted_early[LANGUAGE_NONE]) ?></p>
</div>
