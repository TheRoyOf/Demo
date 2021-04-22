<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!empty($feedbacks)):?>

        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>Author</td>
                <td>Text</td>
                <td>Action</td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($feedbacks as $feedback):?>
                <tr>
                    <td><?= $feedback->id?></td>
                    <td><?= $feedback->name?></td>
                    <td><?= $feedback->text?></td>
                    <td>
                        <?php if($feedback->isAllowed()):?>
                            <a class="btn btn-warning" href="<?= Url::toRoute(['feedback/disallow', 'id'=>$feedback->id]);?>">Disallow</a>
                        <?php else:?>
                            <a class="btn btn-success" href="<?= Url::toRoute(['feedback/allow', 'id'=>$feedback->id]);?>">Allow</a>
                        <?php endif?>
                        <a class="btn btn-warning" href="<?= Url::toRoute(['feedback/update', 'id' => $feedback->id]); ?>">Edit</a>
                        <?= Html::a('Delete', ['delete', 'id' => $feedback->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    <?php endif;?>
</div>