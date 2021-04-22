<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut.icon" href="/web/image/cropped-new_logotip_Imperii1.png" type="image/png">
    <title><?= Html::encode('Империя приключений | Молодёжные активно-творческие программы') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="top_menu">
        <div class="top_decorator">
            <div class="head_menu">
                <div class="top_menu_logo">
                    <?= Html::a( Html::img(Url::to(['image/cropped-new_logotip_Imperii2.png']), ['width'=>'125', 'height'=>'125']), Url::to(['index'])) ?>
                </div>

                <div class="top_menu_bar">
                    <nav class="top_menu_nav">
                        <ul>
                            <li class="top_menu_el"><?= Html::a('О лагере', Url::to(['index']),['class' => 'top_menu_btn']) ?>

                                <ul>
                                    <li class="top_menu_showbar_el"><?= Html::a('Разположение и проезд', Url::to(['site/location'])) ?></li>
                                    <li class="top_menu_showbar_el"><?= Html::a('Проживание и питание', Url::to(['site/acomodation'])) ?></li>
                                    <li class="top_menu_showbar_el"><a href="activity.html">Активности</a></li>
<!--                                    <li class="top_menu_showbar_el"><a href="team.html">Команда</a></li>-->
                                    <li class="top_menu_showbar_el"><?= Html::a('Безопасность и медицина', Url::to(['site/security'])) ?></li>
                                </ul>

                            </li>

                            <li class="top_menu_el"><?= Html::a('Программы', Url::to('site/program_list'), ['class' => 'top_menu_btn']) ?>

                                <ul>
<!--                                    <li class="top_menu_showbar_el"><a href="current_info.html">Информация о текущей смене</a></li>-->
                                    <li class="top_menu_showbar_el"><a href="winter_vac.html">Зимние каникулы</a></li>
                                    <li class="top_menu_showbar_el"><a href="spring_val.html">Весенние каникулы</a></li>
                                    <li class="top_menu_showbar_el"><a href="summer_val.html">Летние каникулы</a></li>
                                    <li class="top_menu_showbar_el"><a href="atumn_val.html">Осенние каникулы</a></li>
                                </ul>

                            </li>

                            <li class="top_menu_el"><a href="" class="top_menu_btn">Галерея</a>

<!--                                <ul>-->
<!--                                    <li class="top_menu_showbar_el"><a href="foto.html">Фото</a></li>-->
<!--                                    <li class="top_menu_showbar_el"><a href="video.html">Видео</a></li>-->
<!--                                </ul>-->

                            </li>

                            <li class="top_menu_el"><a href="" class="top_menu_btn">Информация</a>

                                <ul>
                                    <li class="top_menu_showbar_el"><a href="parents_info.html" style="font-size: 18px">Информация для родителей</a></li>
                                    <li class="top_menu_showbar_el"><?= Html::a('Наш блог', url::to(['blog'])) ?></li>
                                    <!--<li class="top_menu_showbar_el"><a href="lost_item.html">Бюро находок</a></li>-->
                                </ul>

                            </li>
                            <li class="top_menu_el"><?= Html::a('Отзывы', Url::to('parcif_feedback'), ['class' => 'top_menu_btn']) ?>

<!--                                <ul>-->
<!--                                    <li class="top_menu_showbar_el">--><?//= Html::a('Отзывы участников', Url::to('parcif_feedback'), ['class' => 'nav_text_color']) ?><!--</li>-->
<!--                                    <li class="top_menu_showbar_el"><a href="parents_feedback.html">Отзывы родителей</a></li>-->
<!--                                    <li class="top_menu_showbar_el"><a href="wave_of_memory.html">На вонах моей памяти...</a></li>-->
<!--                                </ul>-->

                            </li>
                            <li class="top_menu_el"><a href="contact.html" class="top_menu_btn">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<main>
    <div class="container">

        <?= $content ?>
    </div>
</main>

<footer>
    <!-- Footer сайта -->

    <div class="myfooter">

        <p align="center"><br><br>© 2018 Империя приключений. All Rights Reserved.</p>

        <up class="social">

            <li class="social_icon">
                <a href="https://www.instagram.com/camp_edelweiss/">
                    <?= Html::img('@web/image/Instagram.png', ['width'=>'20', 'height'=>'20']) ?> </a>
            </li>
            <li class="social_icon">
                <a href="https://www.facebook.com/ADVENTURE.EMPIRE.outdoor.group/?pnref=about.overview">
                    <?= Html::img('@web/image/facebook.png', ['width'=>'20', 'height'=>'20']) ?></a>
            </li>

        </up>

    </div>


</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
