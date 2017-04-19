<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$complete1 = '';
$complete2 = '';
$complete3 = '';
if(isset($_GET['step']) && $_GET['step']==1 || !isset($_GET['step'])){
    $complete1 = 'completed';
}
if(isset($_GET['step']) && $_GET['step']==2){
    $complete1 = 'completed';
    $complete2 = 'completed';
}
if(isset($_GET['step']) && $_GET['step']==3){
    $complete1 = 'completed';
    $complete2 = 'completed';
    $complete3 = 'completed';
}
if(arg(2)=='step3'){
    $complete1 = 'completed';
    $complete2 = 'completed';
    $complete3 = 'completed';
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8  col-md-offset-2 col-xs-12  row step">
                <ul class="progress-indicator">
                    <li class="<?php print $complete1 ?>">
                        <span class="bubble"><span class="num-step">1</span></span>
                        <span class="title-step"><?php print t('Form of input')?></span>
                    </li>
                    <li class="<?php print $complete2 ?>">
                        <span class="bubble"><span class="num-step">2</span></span>
                        <span class="title-step"><?php print t('Confirmation of input content')?></span>
                    </li>
                    <li class="<?php print $complete3 ?>">
                        <span class="bubble"><span class="num-step">3</span></span>
                        <span class="title-step"><?php print t('Completion')?></span>
                    </li>
                </ul>

            </div>
        </div>
    </div>

