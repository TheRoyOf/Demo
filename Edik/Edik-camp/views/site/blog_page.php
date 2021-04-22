<?php


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use app\models\Content;


?>

<?php $this->registerCssFile('@web/css/blogStyle.css'); ?>

<div class="blogContent_main" style="margin-left: 15%">
    <div class="blogContent">
        <!-- Контент -->

            <div class="contentPreview bg">
                <div class="contentImageBlock">
                    <!-- Картинка -->
                    <?= Html::img($article->getImage(), ['class'=>'contentImage'])?>
                </div>
                <div class="contentText">

                    <p class="NavTextTitle"><?= $langmodel->getText('blog',$id,'title')?> </p>
                    <p class="Text"><?= $langmodel->getText('blog',$id,'content')?></p>
                    <br>
                    <p style="display: inline-flex">Дата <?= $article->getDate();?>,</p>
                    <p style="display: inline-flex; margin-left: 10px"><?= (int) $article->viewed;?> просмотров</p>

                </div>
            </div>

        <div class="commentList">

            <?php if(!empty($comments)):?>

                <?php foreach($comments as $comment):?>
                    <div class="bottom-comment bg"><!--bottom comment-->
                        <div class="comment-text">
                            <h5><?= $comment->name;?></h5>

                            <p class="para"><?= $comment->text; ?></p>
                        </div>
                    </div>
                <?php endforeach;?>

            <?php endif;?>

        </div>



        <div class="site-blog_page_comment bg">

            <?php $form = ActiveForm::begin(['action'=> Url::toRoute(['site/comment', 'id'=>$article->id])]); ?>

            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'text')->textInput(['maxlength'=>1000]); ?>



            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>


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

                    <p class="NavTextTitle"><a href="<?= Url::toRoute(['site/blog_page', 'id'=>$article->id]) ?>" style="text-decoration: none; color:rgba(0,0,0,1.00)"><?= $langmodel->getText('blog',$id,'title')?></a></p>
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

                    <p class="NavTextTitle"><a href="<?= Url::toRoute(['site/blog_page', 'id'=>$article->id]) ?>" style="text-decoration: none; color:rgba(0,0,0,1.00)"><?= $langmodel->getText('blog',$id,'title')?></a></p>
                    <p style="font-size: 10px"><?= $article->getDate() ?></p>
                    <br>
                </div>
            </div>

        <?php endforeach; ?>
        <!-- foreach end -->
    </div>

</div>