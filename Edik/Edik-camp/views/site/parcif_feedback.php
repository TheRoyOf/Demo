<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

?>

<?php $this->registerCssFile('@web/css/feedbackStyle.css'); ?>

<div class="leftMargin">

<div class="commentList">

    <?php if(!empty($feedbacks)):?>

        <?php foreach($feedbacks as $feedback):?>
            <div class="bottom-comment bg"><!--bottom comment-->
                <div class="comment-text">
                    <h5><?= $feedback->name;?></h5>

                    <p class="para"><?= $feedback->text; ?></p>
                </div>
            </div>
        <?php endforeach;?>

    <?php endif;?>

</div>



<div class="site-feedback_page_comment bg">

    <?php $form = ActiveForm::begin([
        'action'                     => 'feedback',
    ]); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'text')->textInput(['maxlength'=>1000]); ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

</div>
