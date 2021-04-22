<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>

<?php $this->registerCssFile('@web/css/mainPageStyle.css'); ?>
<?php $this->registerCssFile(Url::toRoute('css/rewiews.css')); ?>


<?php $this->registerJsFile(Url::to(['js/paralaks.js'])); ?>


<?php $this->registerCssFile(Url::to(['libs/animate/animate.css'])); ?>
<?php $this->registerCssFile(Url::to(['libs/owl-carousel/owl.carousel.min.css'])); ?>
<?php $this->registerCssFile(Url::to(['libs/owl-carousel/owl.theme.default.min.css'])); ?>
<?php $this->registerCssFile(Url::to(['libs/font-awesome-4.6.3/css/font-awesome.min.css'])); ?>


<div class="mainBtn leftMargin">
    <!-- Кнопки -->
    <div class="mainprojBtn" style="margin-left: 0px">
        <?= Html::a( Html::img(Url::to(['image/mainBtn-1.jpg']),['class' => 'bainBtn_scale']), Url::to(['index'])) ?>
        </div>
    <div class="mainprojBtn">
        <?= Html::a( Html::img(Url::to(['image/mainBtn-2.jpg']),['class' => 'bainBtn_scale']), Url::to(['index'])) ?>
    </div>
    <div class="mainprojBtn">
        <?= Html::a( Html::img(Url::to(['image/mainBtn-3.jpg']),['class' => 'bainBtn_scale']), Url::to(['index'])) ?>
    </div>
    <div class="mainprojBtn">
        <?= Html::a( Html::img(Url::to(['image/mainBtn-4.jpg']),['class' => 'bainBtn_scale']), Url::to(['index'])) ?>
    </div>

</div>
<div>
    <!-- Слоган -->
    <div>
        <?= Html::img(Url::to(['image/you-can-green.png']),['class' => 'youCanIMG leftMargin']);?>
    </div>
    <div class="tagline">
<!--        <h3>...встать с дивана, оторваться от гаджетов и рискнуть.<br>-->
<!--            ...рискнуть познать удовольствие путешествий, слезы радости после победы над своими страхами и выбраться из зоны комфорта. <br>-->
<!--            ...забраться на скальную стенку, пройти экстрим-парк, стрелять в цель, сплавиться по реке, балансировать на слэклайне, научиться основам выживания и сходить в поход. <br>-->
<!--            ...открыться новым друзьям, соревноваться в квестах, принять участие в постановке спектакля и творить без ограничений. <br>-->
<!--            ...встретить закат в горах, увидеть не городское звездное небо, наесться черники, ночевать в палатке и петь песни у костра. </h3>-->
        <?= $langmodel->getText('index','0','youcan'); ?>
    </div>
    <!-- Вызов -->
    <div class="Challenge">
        <h2 class="ChallengeText">
<!--            <br>ПРОСТО ТЫ МОЖЕШЬ БЫТЬ СОБОЙ!<br>Проведи каникулы в активно-творческом лагере «Эдельвейс»!-->
            <?= $langmodel->getText('index','0','chalenge'); ?>
        </h2>
    </div>

</div>
<div>
    <!-- Пробел "Активности" -->

    <div id="parallax-bg_1" class="paralaks_1">
        <button class="paralaks_btn_1"><?= $langmodel->getText('index','0','ouractivity'); ?></button>
    </div>


</div>
<div>
    <div class="weAreInNumbers leftMargin">
        <!-- Мы в цифрах -->
        <div class="weAreInNumbers_row ">
            <div class="weAreInNumbers_Column , weAreInNumbers_Text">
                <?= $langmodel->getText('index','0','weAreInNumbers'); ?>
            </div>
            <div class="weAreInNumbers_Column">

                <?= Html::img(Url::to(['image/002-clock-1.png']),['width'=>'70', 'height'=>'70']);?>
                <div style="display: inline-block">
                    <?= $langmodel->getText('index','0','yearsWhithChildren'); ?>
                </div>

            </div>
            <div class="weAreInNumbers_Column">

                <?= Html::img(Url::to(['image/home_zoo_counter_2.png']),['width'=>'70', 'height'=>'70']);?>
                <div style="display: inline-block">
                    <?= $langmodel->getText('index','0','ПроведенныхСмен'); ?>
                </div>

            </div>
            <div class="weAreInNumbers_Column">

                <?= Html::img(Url::to(['image/001-smile.png']),['width'=>'70', 'height'=>'70']);?>
                <div style="display: inline-block">
                    <?= $langmodel->getText('index','0','СчастливыхУчастников'); ?>
                </div>

            </div>
        </div>

    </div>
    <div>
        <!-- Принципы -->


        <!-- Мы в цифрах -->
        <p style="margin-left: 2%; text-align: center; font-size: 50px"><?= $langmodel->getText('index','0','НашиПринципы'); ?></p>

        <div class="leftMargin">

<!--            <div class="weAreInNumbers_row">-->
<!--                <div class="our_principles_Column">-->
<!---->
<!--                    <p class="our_principles_title"><strong>Мы - одна<br>большая семья</strong></p>-->
<!---->
<!--                    <p class="our_principles_text">-->
<!--                        У нас нет воспитателей, вожатых и больших отрядов. Себя мы называем инструкторами, а для детей мы просто друзья, с которыми можно общаться наравне и которые всегда готовы выслушать и поддержать, будь то поцарапанная коленка или ссора с другом…-->
<!--                    </p>-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="our_principles_Column">-->
<!---->
<!--                    <p class="our_principles_title"><strong>Метод<br>альтернатив</strong></p>-->
<!---->
<!--                    <p class="our_principles_text">-->
<!--                        В лагере нельзя одно – нельзя ничего не делать. Вариант поспать и посидеть с телефоном не проходит. Не умеешь – научим, боишься - поможем справиться со страхом, не хочешь – всегда найдется альтернатива…-->
<!--                    </p>-->
<!---->
<!---->
<!--                </div>-->
<!--                <div class="our_principles_Column">-->
<!---->
<!--                    <p class="our_principles_title"><strong>Подконтрольная<br>демократия</strong></p>-->
<!---->
<!--                    <p class="our_principles_text">-->
<!--                        Детям надо верить. В самом начале смены мы договариваемся о неких правилах и принципах жизни лагеря. И у нас нет хождений за ручку по территории, тихого часа, навязчивой анимации и криков на детей. Но если договоренности нарушены – тогда снова появится альтернатива…-->
<!--                    </p>-->
<!---->
<!---->
<!--                </div>-->
<!--                <div class="our_principles_Column">-->
<!---->
<!--                    <p class="our_principles_title"><strong>Детей жалеть<br>нельзя!</strong></p>-->
<!---->
<!--                    <p class="our_principles_text">-->
<!--                        Жалость не уместна в детском лагере. Практически все дети хотят веселья, драйва и адреналина. Окей – получите. Не успел на утреннюю «Арриву» - лети в бассейн или снег. Хочешь поход в горы – вперед! Сложный маршрут на скалодроме – не проблема! Но после всех сложностей и усталости все дети кричат «НАМ ЭТО НРАВИТСЯ!!!»-->
<!--                    </p>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->

            <?= $langmodel->getText('index','0','КолонкиПринципов'); ?>

        </div>

    </div>
</div>
<div>
    <!-- Пробел "Активности" -->

    <div id="parallax-bg_2" class="paralaks_2">
        <button class="paralaks_btn_2"><?= $langmodel->getText('index','0','Фотогалерея'); ?></button>
    </div>


</div>
<div style="margin-top: 750px;" class="motto leftMargin">
    <!-- Девиз -->
<!--    <p align="center" style="font-size: 40px"><strong>Наш девиз: Детей жалеть нельзя!</strong></p>-->
<!--    <p align="center" style="font-size: 20px"><strong>Детям нужна небольшая доля опасности... Это учит их тому, как выжить в этом мире.</strong></p>-->
<!--    <p align="left" style="font-size: 20px"><strong>У нас нет: анимации, системы кружков, тихого часа, воспитателей, хождения за ручку, свободного времени, заборов.</strong></p>-->
<!--    <p align="left" style="font-size: 20px"><strong>У нас есть: подконтрольные выбросы адреналина, более 20 видов активностей, душевная атмосфера, внимание к каждому, опытная команда и любовь к детям.</strong></p>-->
    <?= $langmodel->getText('index','0','девиз'); ?>
</div>
<div>
    <!-- Команда -->

    <div id="parallax-bg_3" class="paralaks_3">
        <button class="paralaks_btn_3"><?= $langmodel->getText('index','0','НашаКоманда'); ?></button>
    </div>

</div>
<div style="margin-top: 750px;" class="features leftMargin">
    <!-- Особенности -->
    <!--<p align="center" style="font-size: 40px"><strong>Наши особенности</strong></p>
    <p align="left" style="font-size: 20px"><strong>Равенство в возможностях самовыражения для участников и равенство с инструкторами при обсуждении планов и анализе событий прошедшего дня. Другими словами, если Вашему ребенку не понравится предложенное развлечение (занятие), мы всегда найдем альтернативу</strong></p>
    <p align="left" style="font-size: 20px"><strong>Насыщенность, благодаря чему, дисциплина и самоорганизация легко принимаются участниками</strong></p>
    <p align="left" style="font-size: 20px"><strong>Сочетание в одной программе спорта и творчества – то, что воздействует на состояние физического тела, состояние духа и творческой, созидающей энергии</strong></p>
    <p align="left" style="font-size: 20px"><strong>Все это очень важно для человека растущего, вступающего во взрослую жизнь. И это делает программу уникальной и очень интересной для большинства участников, а так же ценится их родителями. Если в вашем ребенке есть хоть крупица таланта к чему угодно (а она есть в каждом), мы извлечем ее на поверхность и уговорим показать всем.</strong></p>-->
    <!-- Архив наших смен -->
    <p align="center" style="font-size: 40px"><strong><?= $langmodel->getText('index','0','АрхивНашихСмен'); ?></strong></p>
    <img src="image/map.png" class="map_scale" alt=""/> </div>
<div>
    <!-- Зарубежные смены -->

    <div id="parallax-bg_4" class="paralaks_4">
        <button class="paralaks_btn_4"><?= $langmodel->getText('index','0','ЗарубежныеCмены'); ?></button>
    </div>

</div>
<div style="margin-top: 750px;">
    <!-- Отзывы -->



    <div class="owl-carousel block-items">
        <div class="item">
            <div class="inner-testimonial">
                <?= Html::img(Url::to(['image/Client/client1.png']),['class' => 'animated bounceIn full-opacity']);?>
                <h3 class="city-name">Ваня 8 годиков, 2016</h3>
                <p class="text-testimonial">Мине лагерь понравился я хорошо провел время и всё круто только нас утром будили но это круто и тех то не проснулся кидали в бесейн а нам инструктара гаварили что там акулы</p>
            </div>
        </div>
        <div class="item">
            <div class="inner-testimonial">
                <?= Html::img(Url::to(['image/Client/client2.png']),['class' => 'animated bounceIn full-opacity']);?>
                <h3 class="city-name">Светлана, 2017</h3>
                <p class="text-testimonial">Пример многострочного отзыва<br>очень смешно выглядит код с тегами br<br>ощущение что кому-то холодно</p>
            </div>
        </div>
        <div class="item">
            <div class="inner-testimonial">
                <?= Html::img(Url::to(['image/Client/client3.png']),['class' => 'animated bounceIn full-opacity']);?>
                <h3 class="city-name">Толик, 2018</h3>
                <p class="text-testimonial">Всё топ</p>
            </div>
        </div>
    </div>
    <!-- Блог -->


</div>

<!-- Нижний параллакс -->
<div style="display: block; height: 400px">
    <div id="parallax-bg_down" class="paralaks_down">
        <p align="center" class="parallax_text_down"><?= $langmodel->getText('index','0','низПаралакс'); ?></p>
        <button class="paralaks_btn_down"><?= $langmodel->getText('index','0','заказать'); ?></button>
    </div>
</div>
<?php $this->registerCssFile(Url::toRoute('libs/jquery/jquery-2.1.3.min.js')); ?>
<?php $this->registerCssFile(Url::toRoute('libs/owl-carousel/owl.carousel.min.js')); ?>
<?php $this->registerJsFile(Url::toRoute('js/reviews.js')); ?>