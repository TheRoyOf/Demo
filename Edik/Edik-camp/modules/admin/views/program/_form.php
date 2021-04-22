<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Program */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'useLocalisation')->checkbox() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use_template')->dropDownList([
        '0' => 'Не использовать шаблон',
        '1' => 'Шаблон 1',
    ],
        [
            'prompt' => 'Выберите шаблон'
        ]); ?>

    <?= $form->field($model, 'shifts')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],
            ['preset' => 'full',]),
    ]); ?>

    <?= $form->field($model, 'season')->dropDownList([
        '0' => 'Не указывать',
        '1' => 'Зима',
        '2' => 'Весна',
        '3' => 'Лето',
        '4' => 'Осень',
    ],
        [
            'prompt' => 'Выберите сезон'
        ]); ?>

    <?= $form->field($model, 'location')->dropDownList([
        '0' => 'Не указывать',
        '100' => 'Украина',
        '101' => 'Карпаты',
        '200' => 'Европа',
        '201' => 'Польша',
        '202' => 'Германия',
        '203' => 'Франция',
        '204' => 'Греция',
        '205' => 'Италия',
        '300' => 'США',
        '400' => 'Япония',
        '500' => 'Китай',
        '600' => 'Россия',
    ],
        [
            'prompt' => 'Выберите регион'
        ]); ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],
            ['preset' => 'full',]),
    ]); ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],
            ['preset' => 'full',]),
    ]); ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?//= $form->field($model, 'preview_image')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'viewed')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox([
        'label' => 'Отображать на сайте',
        'labelOptions' => [
            'style' => 'padding-left:20px;'
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
