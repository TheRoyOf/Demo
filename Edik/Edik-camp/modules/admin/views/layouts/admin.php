<?php
$this->title = 'Page';

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminAppAsset;
use yii\helpers\html;
use yii\helpers\Url;

AdminAppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php yii::$app->language ?>">
    <head>
        <?= Html::csrfMetaTags() ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>


    <div class="wrap">
        <div class="container head_background">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?= Html::a('Управление', '/web/admin/', ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Страницы', url::to(['/admin/content']), ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Программы', url::to(['/admin/program']), ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Блог', url::to(['/admin/article']), ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Отзывы', url::to(['/admin/feedback']), ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('На сайт', '/web/', ['class' => 'nav_text_color']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Выход', url::to(['default/logout']), ['class' => 'nav_text_color', 'data-method' => 'post']) ?>
                </li>
            </ul>

        </div>
    <div class="page_content">

        <?= $content ?>

    </div>

    </div>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>