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
global $language;
?>
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php print theme('image_style', array('path' => $node->field_image_photo[LANGUAGE_NONE][0]['uri'], 'style_name' => '150x150')) ?>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-9">
        <p class="blue text-underline"><?php print $node->title ?></p>
        <p class="gray"></p><p><?php print $fields['field_tour_outline']->content ?></p>
        <div class="row">
            <div class="col-xs-6 red">
                <strong>
                    <i class="fa <?php if ($language->language == 'ja'): ?>fa-jpy<?php else: ?>fa-usd<?php endif; ?>" aria-hidden="true"></i><?php print number_format($node->field_tour_fee[LANGUAGE_NONE][0]['value'], 0, ',', '.') ?>
                </strong>
            </div>
            <div class="col-xs-6 text-right">
                <a href="<?php print url('node/' . $node->nid) ?>">
                    <button class="btn my-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <?php print t('Tour details') ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>