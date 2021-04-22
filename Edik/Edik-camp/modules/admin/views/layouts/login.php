<?php
$this->title = 'Page';

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminAppAsset;
use yii\helpers\html;

AdminAppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php yii::$app->language ?>">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>

    <div class="container">

        <?= $content ?>

    </div>

    </div>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>