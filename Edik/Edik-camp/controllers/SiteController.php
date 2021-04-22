<?php

namespace app\controllers;

use app\models\Article;
use app\models\Content;
use app\models\Feedback;
use app\models\Program;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Comment;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;

        if (!isset($session['language']))
        {
            $session->set('language', 'ru_RU');
        }

        $langmodel = new Content();
        $content = $langmodel->getPageText('index');

        return $this->render('index' , [
            'lang' => $session['language'],
            'langmodel' => $langmodel,
            'content' => $content,
        ]);
    }

    public function actionLocation()
    {
        $langmodel = new Content();
        $content = $langmodel->getPageText('location');

        return $this->render('location' , [
            'langmodel' => $langmodel,
            'content' => $content,
        ]);
    }

    public function actionAcomodation()
    {
        $langmodel = new Content();
        $content = $langmodel->getPageText('acomodation');

        return $this->render('acomodation' , [
            'langmodel' => $langmodel,
            'content' => $content,
        ]);
    }

    public function actionSecurity()
    {
        $langmodel = new Content();
        $content = $langmodel->getPageText('security');

        return $this->render('security' , [
            'langmodel' => $langmodel,
            'content' => $content,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
 /*   public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }*/

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionBlog()
    {
        $data = Article::getAll(5);
        $popular = Article::getPopular();
        $recent = Article::getRecent();

        $langmodel = new Content();

        return $this->render('blog',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'recent'=>$recent,
            'langmodel' => $langmodel,
        ]);

    }

    public function actionBlog_page($id)
    {
        $article = Article::findOne($id);
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $comments = $article->getArticleComments();

        $article->viewedCounter();

        $model = new Comment();

        $langmodel = new Content();

        return $this->render('blog_page',[
            'article'=>$article,
            'id' => $id,
            'popular'=>$popular,
            'recent'=>$recent,
            'model'=>$model,
            'comments'=>$comments,
            'langmodel' => $langmodel,
        ]);
    }

    public function actionParcif_feedback()
    {

        $model = new Feedback();
        $feedback = Feedback::find()->where(['status'=>1])->all();

        return $this->render('parcif_feedback',[
            'model'=>$model,
            'feedbacks'=>$feedback,
        ]);
    }

    public function actionComment($id)
    {
        $model = new Comment();
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий скоро будет добавлен на сайт!');
                return $this->redirect(['site/blog_page','id'=>$id]);
            }
        }
    }

    public function actionFeedback()
    {
        $model = new Feedback();
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveFeedback())
            {
                Yii::$app->getSession()->setFlash('feedback', 'Ваш отзыв скоро будет добавлен на сайт!');
                return $this->redirect(['site/parcif_feedback']);
            }
        }
    }

    public function actionProgram_list($season = '0', $location = '0')
    {
        $data = Program::getAll(10);

        $langmodel = new Content();

        return $this->render('program_list',
             [
             'programs' => $data['programs'],
             'pagination'=>$data['pagination'],
             'season' => $season,
             'location' => $location,
             'langmodel' => $langmodel,
             ]);
    }

    public function actionProgram_view($id)
    {
        $program = Program::findOne($id);
        $program->viewedCounter();

        $langmodel = new Content();

        return $this->render('program_view',
            [
                'id' =>$id,
                'program' => $program,
                'langmodel' => $langmodel,
            ]);
    }

}
