<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row host">
    <?php foreach ($rows as $id => $row): ?>
        <div class="col-xs-12 col-sm-6 col-md-3 <?php if ($classes_array[$id]) {
            print $classes_array[$id];
        } ?>">
        <?php print $row; ?>
        </div>
<?php endforeach; ?>
</div>