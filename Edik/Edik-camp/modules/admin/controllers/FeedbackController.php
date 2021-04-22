<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Feedback;
use app\models\FeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeedbackController implements the CRUD actions for Feedback model.
 */
class FeedbackController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $layout = 'admin';


    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Feedback models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $feedback = Feedback::find()->orderBy('id desc')->all();

        return $this->render('index',[
            'feedbacks'=>$feedback,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,]);

    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Feedback();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Feedback::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDelete($id)
    {
        $comment = Feedback::findOne($id);
        if($comment->delete())
        {
            return $this->redirect(['feedback/index']);
        }
    }

    public function actionAllow($id)
    {
        $comment = Feedback::findOne($id);
        if($comment->allow())
        {
            return $this->redirect(['index']);
        }
    }

    public function actionDisallow($id)
    {
        $comment = Feedback::findOne($id);
        if($comment->disallow())
        {
            return $this->redirect(['index']);
        }
    }


}
