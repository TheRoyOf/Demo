<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([
        //'enableAjaxValidation'   => false,
    ]); ?>

    <?//= $form->field($model, 'useLocalisation')->checkbox() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],
            ['preset' => 'full',]),
    ]); ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],
      ['preset' => 'full',]),
    ]);

    /*$form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);*/
    ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?php
//    $form = ActiveForm::begin();
//    $items = [
//        '0' => 'Активный',
//        '1' => 'Отключен',
//        '2'=>'Удален'
//    ];
//    $params = [
//        'prompt' => 'Выберите статус...'
//    ];
//    echo $form->field($model, 'status')->dropDownList($items,$params);
//    ActiveForm::end();
//    ?>

<!---->
<!--    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'viewed')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
