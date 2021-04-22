<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use app\models\Content;

?>

<?php $this->registerCssFile('@web/css/programStyle.css'); ?>
<?php $this->registerCssFile('@web/css/yellowSubmarineStyle.css'); ?>


<div class="Up_block">

    <div class="name_collumn">

        <div>
            <?= $langmodel->getText('program',$id,'title') ?>
        </div>

    </div>


    <div class="info_collumn">

        <?= $langmodel->getText('program',$id,'shifts') ?>

    </div>

</div>

<div class="leftMargin" style="margin-right: 15%">

<?= $langmodel->getText('program',$id,'content') ?>

</div>
