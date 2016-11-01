<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

	
use yii\filters\AccessRule;
use app\models\User;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
				// agregamos la nueva clase AccessRule 
				'ruleConfig' => [
					'class' => AccessRule::className(),
				],
                'only' => ['logout','about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
						
                        'allow' => true,
                        'roles' => ['@'],
                    ],
					
					[
                        'actions' => ['about'],						
                        'allow' => false,
						//Permitimos solo a estudiantes acceder a about
                        'roles' => [User::ESTUDIANTE],
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
     * @inheritdoc
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
	public function actionEje()
    {
        return $this->render('eje');
    }
	
	
	
	
	
	
	
	//Plataforma
public function actionEquipo()
{
    {
        return $this->render('equipo');
    }
}
public function actionQuees()
{
    {
        return $this->render('quees');
    }
}


public function actionContacto()
{
    {
        return $this->render('contacto');
    }
}

public function actionUp()
{
    {
        return $this->render('up');
    }
}
	
	
	
	
	
	
	
	//Eval. instituc.
	
	public function actionConductaentrada()
    {
        return $this->render('conductaentrada');
    }
	
	public function actionCgpracticas()
    {
        return $this->render('cgpracticas');
    }
	
	public function actionEvalingles()
    {
        return $this->render('evalingles');
    }
	
	
	
	//Proceso de cert.
	
	
	public function actionModelocertificacion()
    {
        return $this->render('modelocertificacion');
    }
	
	public function actionProcesovalidacion()
    {
        return $this->render('procesovalidacion');
    }
	
	
	
	//Periodos de cert.
	public function actionProgramacion()
    {
        return $this->render('programacion');
    }
	
	
	
	
	//noticias
	
	public function actionNoticias()
 {
        return $this->render('noticias');
    }
	
	
}
