<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use app\models\Content;

?>

<?php $this->registerCssFile('@web/css/securityStyle.css'); ?>
<?php $this->registerCssFile('@web/css/slider.css'); ?>
<?php $this->registerJsFile('@web/js/slider.js'); ?>

<?php $this->registerJsFile(Url::toRoute(['js/paralaks.js'])); ?>

<div class="main_list">

    <?= Html::img(Url::toRoute(['image/DSC_4822.jpg']),['class' => 'main_image']);?>

    <div class="main_text">

        <?= $langmodel->getText('security','0','Текст1'); ?>



    </div>
    <p class="main_text_imp">
        <?= $langmodel->getText('security','0','Текст2'); ?>
    </p>

</div>



<!-- Нижний параллакс -->
<div style="display: block; height: 400px">
    <div id="parallax-bg_down" class="paralaks_down">
        <p align="center" class="parallax_text_down"><?= $langmodel->getText('index','0','низПаралакс'); ?></p>
        <button class="paralaks_btn_down"><?= $langmodel->getText('index','0','заказать'); ?></button>
    </div>
</div>