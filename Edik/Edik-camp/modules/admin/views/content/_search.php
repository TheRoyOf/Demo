<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'page') ?>

    <?= $form->field($model, 'key') ?>

    <?= $form->field($model, 'ru_RU') ?>

    <?= $form->field($model, 'uk_UA') ?>

    <?= $form->field($model, 'en-US') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
