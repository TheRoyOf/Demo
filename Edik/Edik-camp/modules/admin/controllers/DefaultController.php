<?php

namespace app\modules\admin\controllers;

use app\models\addUserForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */


    public $layout = 'admin';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout', 'blog', 'pages', 'index', 'create'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            $this->layout = 'login';
            $model = new LoginForm();

            if ($model->load(Yii::$app->request->post()) && $model->login()) {

                 $this->layout = 'adminindex';
                 return $this->render('index');
            }

            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
        else
        {
            $this->layout = 'adminindex';
            return $this->render('index');
        }
    }

    public function  actionBlog()
    {
        $layout = 'admin';
        return $this->render("blog");
    }

    public function  actionPages()
    {
        $layout = 'admin';
        return $this->render("pages");
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

//        return $this->render('logout');
        return $this->goHome();
    }

    public function actionCreate()
    {
        $this->layout = 'adminindex';
        $model = new addUserForm();

        if(yii::$app->request->isPost)
        {
            $model->load(yii::$app->request->post());
            $model->create();
            return $this->render("create", ["model" => $model, 'success' => true] );
        }

        return $this->render("create", ["model" => $model] );
    }

    public function beforeAction($action)
    {
        // ...set `$this->enableCsrfValidation` here based on some conditions...
        // call parent method that will check CSRF if such property is true.
        if ($action->id === 'logout') {
            # code...
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionTest()
    {
        $layout = 'admin';
        $user = User::findIdentity(1);
//        yii::$app->user->login($user);
//        yii::$app->user->logout($user);

        if(Yii::$app->user->isGuest)
        {
            return "Пользователь гость";
        }
        else
        {
            return "Пользователь авторизирован";
        }
    }

}
