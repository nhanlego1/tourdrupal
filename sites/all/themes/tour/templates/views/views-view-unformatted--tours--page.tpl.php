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
<?php foreach ($rows as $id => $row): ?>
  <div class="col-md-12 col-xs-12 left-content <?php if ($classes_array[$id]) { print $classes_array[$id];  } ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>