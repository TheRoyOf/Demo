<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use app\models\Content;

?>

<?php $this->registerCssFile('@web/css/acomodationStyle.css'); ?>
<?php $this->registerCssFile('@web/css/slider.css'); ?>
<?php $this->registerJsFile('@web/js/slider.js'); ?>

<?php $this->registerJsFile(Url::toRoute(['js/paralaks.js'])); ?>

<div>

    <p class="leftMargin" style="font-size: 30px"><?= $langmodel->getText('acomodation','0','проживание'); ?></p>
    <p class="leftMargin" style="width: 70%; font-size: 20px">
        <?= $langmodel->getText('acomodation','0','проживаниеТекст'); ?>
    </p>

</div>

<div>

    <div class="acomImg leftMargin">
        <?= Html::img(Url::toRoute(['image/Acomodation/DSC_9494.jpg']),['class' => 'ImgScale acomAnimImg']);?>
    </div>
    <div class="acomImg">
        <?= Html::img(Url::toRoute(['image/Acomodation/IMG_3199-1.jpg']),['class' => 'ImgScale acomAnimImg']);?>
    </div>
    <div class="acomImg">
        <?= Html::img(Url::toRoute(['image/Acomodation/IMG_7639-1-1024x683.jpg']),['class' => 'ImgScale acomAnimImg']);?>
    </div>

</div>

<p class="leftMargin" style="font-size: 30px"><?= $langmodel->getText('acomodation','0','питание'); ?></p>
<p class="leftMargin" style="width: 70%;font-size: 20px"><?= $langmodel->getText('acomodation','0','питаниеТекст'); ?></p>



<!-- Нижний параллакс -->
<div style="display: block; height: 400px">
    <div id="parallax-bg_down" class="paralaks_down">
        <p align="center" class="parallax_text_down"><?= $langmodel->getText('index','0','низПаралакс'); ?></p>
        <button class="paralaks_btn_down"><?= $langmodel->getText('index','0','заказать'); ?></button>
    </div>
</div>