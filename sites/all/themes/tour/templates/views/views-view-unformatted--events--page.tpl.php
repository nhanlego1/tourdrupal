<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<header class="page-header">
    <h1 class="page-title"><?php print t('Events')?></h1>
</header>
<div class="blog-post">
    <?php foreach ($rows as $id => $row): ?>
        <div class="blog-post-repeat <?php if ($classes_array[$id]) {
            print $classes_array[$id];
        } ?>">
        <?php print $row; ?>
        </div>
<?php endforeach; ?>
</div>

