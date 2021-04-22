<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use app\models\Content;

?>

<?php $this->registerCssFile('@web/css/locationStyle.css'); ?>
<?php $this->registerCssFile('@web/css/slider.css'); ?>
<?php $this->registerJsFile('@web/js/slider.js'); ?>


<div class="acomSlider">
    <!-- Слайдер -->
    <div class="sliderShow_container">
        <div class="Slide fade">
            <!--<div class="sliderNuberText">1/3</div>-->
            <?= Html::img(Url::toRoute(['image/loc_slide_2.png']), ['style' => 'width: 80%; margin-left: 10%']) ?>
            <div class="sliderText"></div>
        </div>

        <div class="Slide fade">
            <!--<div class="sliderNuberText">2/3</div>-->
            <?= Html::img(Url::toRoute(['image/loc_slide_3.png']), ['style' => 'width: 80%; margin-left: 10%']) ?>

            <div class="sliderText"></div>
        </div>

        <div class="Slide fade">
            <!--<div class="sliderNuberText">3/3</div>-->
            <?= Html::img(Url::toRoute(['image/loc_slide_1.png']), ['style' => 'width: 80%; margin-left: 10%']) ?>

            <div class="sliderText"></div>
        </div>

        <a class="sliderPrev" onClick="plusSlides(-1)">&#10092</a>
        <a class="sliderNext" onClick="plusSlides(1)">&#10093</a>

    </div>
    <br>
    <div style="text-align: center">
        <span class="sliderDot" onClick="currentSlide(1)"></span>
        <span class="sliderDot" onClick="currentSlide(2)"></span>
        <span class="sliderDot" onClick="currentSlide(3)"></span>
    </div>
    <script src="js/slider.js"></script>
</div>

<div class="map_style">
    <iframe width="400" height="400" src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=Oryavchik%20Country%20House+(%D0%AD%D0%B4%D0%B5%D0%BB%D1%8C%D0%B2%D0%B5%D0%B9%D1%81)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
</div>

<div>
    <p class="leftMargin" style="font-size: 30px"><?= $langmodel->getText('location','0','расположение'); ?></p>
    <p class="leftMargin" style="width: 70%;font-size: 20px"><?= $langmodel->getText('location','0','расположениеТекст'); ?></p>

    <p class="leftMargin" style="font-size: 30px"><?= $langmodel->getText('location','0','проезд'); ?></p>
    <p class="leftMargin" style="width: 70%;font-size: 20px"><?= $langmodel->getText('location','0','проездТекст'); ?></p>

</div>

