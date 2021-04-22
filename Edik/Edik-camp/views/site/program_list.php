<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<?php $this->registerCssFile('@web/css/programStyle.css'); ?>

<div class="program_list">

<?php foreach ($programs as $program): ?>

<?php if ($program->status=='1' && ($season=='0' || $program->season == $season) && ($location == '0' || $program->location == $location)): ?>

    <div class="program">

        <div class="program_info">

            <a href=<?=Url::toRoute(['site/program_view','id' => $program->id]) ?>>

            <?= Html::img(Url::to($program->GetImage()), ['style'=>'width: 100%'])?>


            <div class="program_title">
                <h1><?=$program->title?></h1>
            </div>

            <div class="program_text">
                <?=$program->shifts?>
            </div>

            </a>

        </div>

        <div class="program_description">

            <?=$program->description?>

        </div>

        <hr align="center" width="100%" size="2" color="rgba(0,0,0,0.30)" />

    </div>

<?php endif ?>

<?php endforeach ?>


<?php
echo LinkPager::widget([
    'pagination' => $pagination,
]);
?>


</div>