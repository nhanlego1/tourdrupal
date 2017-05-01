<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link type="text/css" rel="stylesheet" href="<?php print base_path() . drupal_get_path('module', 'tour') ?>/css/admin_panel/admin-panel.css" media="all">
<div id="admin-panel">
    <h2><?php print t('Manage Content')?></h2>
    <ul>
        <li class="manage"><a href="/admin/tours?destination=admin/dashboard"><?php print t('Manage tours')?></a></li>
        <li class="manage"><a href="/admin/hosts?destination=admin/dashboard"><?php print t('Manage hosts')?></a></li>
        <li class="manage"><a href="/admin/content/comment?destination=admin/dashboard"><?php print t('Manage comment')?></a></li>
        <li class="manage"><a href="/admin/sliders?destination=admin/dashboard"><?php print t('Manage slider home')?></a></li>
        <li class="manage"><a href="/admin/banner?destination=admin/dashboard"><?php print t('Manage Banner')?></a></li>
        <li class="manage"><a href="/admin/blog?destination=admin/dashboard"><?php print t('Manage Blog')?></a></li>
        <li class="manage"><a href="/admin/news?destination=admin/dashboard"><?php print t('Manage News')?></a></li>
        <li class="manage"><a href="/admin/events?destination=admin/dashboard"><?php print t('Manage Events')?></a></li>
        <li class="manage"><a href="/admin/company?destination=admin/dashboard"><?php print t('Manage Company profile')?></a></li>
        <li class="manage"><a href="/admin/pages?destination=admin/dashboard"><?php print t('Manage Static Pages')?></a></li>
        <li class="manage"><a href="/admin/links?destination=admin/dashboard"><?php print t('Manage Links block')?></a></li>
        <li class="manage"><a href="/admin/orders?destination=admin/dashboard"><?php print t('Manage Orders')?></a></li>
        <li class="manage"><a href="/admin/question?destination=admin/dashboard"><?php print t('Manage Question')?></a></li>
        <li class="manage"><a href="/admin/answers?destination=admin/dashboard"><?php print t('Manage Answers')?></a></li>
        <li class="manage"><a href="/admin/gallery?destination=admin/dashboard"><?php print t('Manage Gallery')?></a></li>
        <li class="manage"><a href="/admin/services?destination=admin/dashboard"><?php print t('Manage Services')?></a></li>
        <li class="manage"><a href="/admin/testimonial?destination=admin/dashboard"><?php print t('Manage Testimonial')?></a></li>
        <li class="manage"><a href="/admin/community?destination=admin/dashboard"><?php print t('Manage Community')?></a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/region?destination=admin/dashboard"><?php print t('Manage Prefecture')?> </a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/theme_and_category?destination=admin/dashboard"><?php print t('Manage Theme and Category')?></a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/language?destination=admin/dashboard"><?php print t('Manage Support Languages')?></a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/blog?destination=admin/dashboard"><?php print t('Manage Blog Archive')?></a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/gallery?destination=admin/dashboard"><?php print t('Manage Gallery Category')?></a></li>
    </ul>
</div>
<div id="admin-panel">

    <h2><?php print t('Manage Block Content')?></h2>
    <ul>
        <li class="manage"><a href="/admin/structure/block/manage/block/3/configure?destination=admin/dashboard"><?php print t('Manage block about us footer')?></a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/2/configure?destination=admin/dashboard"><?php print t('Manage Block About us home')?></a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/4/configure?destination=admin/dashboard"><?php print t('Manage block text add host')?></a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/5/configure?destination=admin/dashboard"><?php print t('Manage block text add tour')?></a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/6/configure?destination=admin/dashboard"><?php print t('Manage block text finish host')?></a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/7/configure?destination=admin/dashboard"><?php print t('Manage block text finish tour')?></a></li>
    </ul>
</div>
<div id="admin-panel">

    <h2><?php print t('Additional Content')?></h2>
    <ul>
        <li class="add"><a href="/node/add/host?destination=admin/dashboard"><?php print t('Add Host')?></a></li>
        <li class="add"><a href="/node/add/tour?destination=admin/dashboard"><?php print t('Add Tour')?></a></li>
        <li class="add"><a href="/node/add/page?destination=admin/dashboard"><?php print t('Add Pages')?></a></li>
        <li class="add"><a href="/node/add/blog?destination=admin/dashboard"><?php print t('Add Blog')?></a></li>
        <li class="add"><a href="/node/add/events?destination=admin/dashboard"><?php print t('Add Events')?></a></li>
        <li class="add"><a href="/node/add/news?destination=admin/dashboard"><?php print t('Add News')?></a></li>
        <li class="add"><a href="/node/add/slider?destination=admin/dashboard"><?php print t('Add Slider')?></a></li>
        <li class="add"><a href="/node/add/banner?destination=admin/dashboard"><?php print t('Add Banner')?></a></li>
        <li class="add"><a href="/node/add/gallery?destination=admin/dashboard"><?php print t('Add Gallery')?></a></li>
        <li class="add"><a href="/node/add/service?destination=admin/dashboard"><?php print t('Add Service')?></a></li>
        <li class="add"><a href="/node/add/testimonial?destination=admin/dashboard"><?php print t('Add Testimonial')?></a></li>
        <li class="add"><a href="/node/add/links?destination=admin/dashboard"><?php print t('Add Links')?></a></li>
        <li class="add"><a href="/node/add/question?destination=admin/dashboard"><?php print t('Add Question')?></a></li>
        <li class="add"><a href="/node/add/answer?destination=admin/dashboard"><?php print t('Add Answer')?></a></li>
        <li class="add"><a href="/node/add/community?destination=admin/dashboard"><?php print t('Add Community')?></a></li>
     
    </ul>
</div>
<div id="admin-panel">

    <h2>Settings and Reports </h2>
    <ul>
        <li class="user-logout"><a href="/admin/config/services/paypal_adaptive_accounts_api?destination=admin/dashboard">Manage settings Paypal Adaptive</a></li>
        <li class="user-logout"><a href="/admin/config/system/smtp?destination=admin/dashboard">Manage SMTP server</a></li>
        <li class="user-logout"><a href="/admin/config/people/ip-blocking?destination=admin/dashboard">Block IP address</a></li>
        <li class="user-logout"><a href="/admin/config/search/metatags?destination=admin/dashboard">Manage Metatags (SEO)</a></li>
        <li class="user-logout"><a href="/admin/config/regional/language?destination=admin/dashboard">Manage language</a></li>
        <li class="user-logout"><a href="/admin/config/regional/translate/translate?destination=admin/dashboard">Translate Text and Title tool</a></li>
        <li class="user-logout"><a href="/admin/config/system/googleanalytics?destination=admin/dashboard">Google Analystics</a></li>
        <li class="user-logout"><a href="/admin/config/system/site-information?destination=admin/dashboard">Manage Website Information</a></li>
        <li class="user-logout"><a href="/admin/config/development/performance?destination=admin/dashboard">Clear cache</a></li>
        <li class="user-logout"><a href="/admin/content/webform?destination=admin/dashboard">Manage Contact Form</a></li>
        <li class="user-logout"><a href="/user/logout">Logout</a></li>
    </ul>
</div>

