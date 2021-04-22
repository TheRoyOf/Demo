<?php


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;


?>

<?php $this->registerCssFile('@web/css/blogStyle.css'); ?>

<div class="blogContent_main" style="margin-left: 15%">
    <div class="blogContent">
        <!-- Контент -->
        <?php foreach ($articles as $article):?>
        <!-- foreach begin -->
        <div class="contentPreview bg">
            <div class="contentImageBlock">
                <!-- Картинка -->
                <?= html::a( Html::img($article->getImage(), ['class'=>'contentImage']), Url::toRoute(['site/blog_page', 'id'=>$article->id]),['style'=>'text-decoration: none; color:rgba(0,0,0,1.00)']) ?>
            </div>
            <div class="contentText">

                <p class="NavTextTitle"><a href="<?= Url::toRoute(['site/blog_page', 'id'=>$article->id]) ?>" style="text-decoration: none; color:rgba(0,0,0,1.00)"><?= $article->title?> </a></p>
                <p class="Text"><?=$article->description?></p>
                <br>
                <p style="display: inline-flex">Дата <?= $article->getDate();?>,</p>
                <p style="display: inline-flex; margin-left: 10px"><?= (int) $article->viewed;?> просмотров</p>

            </div>
        </div>
        <!-- foreach end -->
        <?php endforeach; ?>

        <?php
            echo LinkPager::widget([
                'pagination' => $pagination,
            ]);
        ?>

    </div>
    <div class="blogNavigation">
        <!-- Навигация -->
        <p align="center" style="font-size: 18px"><strong>Популярное</strong></p>
        <!-- foreach begin -->
        <?php foreach ($popular as $article): ?>
        <div class="contentPreview bg">

            <div class="contentImageBlock">
                <!-- Картинка -->
                <?= html::a( Html::img($article->getImage(), ['class'=>'contentImage']), Url::toRoute(['site/blog_page', 'id'=>$article->id]),['style'=>'text-decoration: none; color:rgba(0,0,0,1.00)']) ?>
            </div>
            <div class="contentText">

                <p class="NavTextTitle"><a href="<?= Url::toRoute(['site/blog_page', 'id'=>$article->id]) ?>" style="text-decoration: none; color:rgba(0,0,0,1.00)"><?= $article->title ?></a></p>
                <p style="font-size: 10px"><?= $article->getDate() ?></p>
                <br>
            </div>
        </div>

        <?php endforeach; ?>
        <!-- foreach end -->
        <p align="center" style="font-size: 18px"><strong>Последнее</strong></p>
        <!-- foreach begin -->
        <?php foreach ($recent as $article): ?>
            <div class="contentPreview bg">

                <div class="contentImageBlock">
                    <!-- Картинка -->
                    <?= html::a( Html::img($article->getImage(), ['class'=>'contentImage']), Url::toRoute(['site/blog_page', 'id'=>$article->id]),['style'=>'text-decoration: none; color:rgba(0,0,0,1.00)']) ?>
                </div>
                <div class="contentText">

                    <p class="NavTextTitle"><a href="<?= Url::toRoute(['site/blog_page', 'id'=>$article->id]) ?>" style="text-decoration: none; color:rgba(0,0,0,1.00)"><?= $article->title ?></a></p>
                    <p style="font-size: 10px"><?= $article->getDate() ?></p>
                    <br>
                </div>
            </div>

        <?php endforeach; ?>
        <!-- foreach end -->
    </div>

</div>