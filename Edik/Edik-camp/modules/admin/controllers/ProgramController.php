<?php

namespace app\modules\admin\controllers;

use app\models\Content;
use app\models\ImageUpload;
use Yii;
use app\models\Program;
use app\models\ProgramSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProgramController implements the CRUD actions for Program model.
 */
class ProgramController extends Controller
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


    public function actionIndex()
    {
        $searchModel = new ProgramSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Program();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


                $content = new Content();
                $content->setTitleKey('program',$model->id,$model->title);
                $content = new Content();
                $content->setShiftsKey('program',$model->id, $model->shifts);
                $content = new Content();
                $content->setDescrKey('program',$model->id, $model->description);
                $content = new Content();
                $content->setContentKey('program',$model->id, $model->content);


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


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Program::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionSetImage($id)
    {
        $model = new ImageUpload();
        if (Yii::$app->request->isPost)
        {
            $program = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($program->saveImage($model->uploadFile($file, $program->preview_image)))
            {
                return $this->redirect(['view', 'id'=>$program->id]);
            }
        }

        return $this->render('image', ['model'=>$model]);
    }
}
