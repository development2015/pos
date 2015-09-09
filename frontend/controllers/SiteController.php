<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\GoodsTemp;
use common\models\Goods;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','quantity','barcode','pay'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
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
     * @return mixed
     */
    public function actionIndex()
    {

        $connection = \Yii::$app->db;
        $sql = $connection->createCommand("SELECT * FROM goods_temp");
        $goods = $sql->queryAll();

       return $this->render('index',[

        'goods' => $goods,
        ]);

    }

    public function actionQuantity()
    {
        $quantity = $_POST['quantity'];
        $id = $_POST['id'];
    
        //$model = $this->findModel($id);
        $model = GoodsTemp::find()->where(['id'=>$id])->one();

        $model->quantity = $quantity;
        $model->save();

    }


    public function actionBarcode()
    {
        $barcode = $_POST['barcode'];
        $model = Goods::find()->where(['barcode'=>$barcode])->one();

        if (empty($model->barcode)) {
            Yii::$app->getSession()->setFlash('error', '<strong>Maaf! </strong>Data Masih Belum Wujud Di Dalam Sistem!');
            return $this->redirect(['index']);
        } else {

            $items = $model->items;
            $quantity = 1;
            $price = $model->price_unit;

            $model_goods = new GoodsTemp();
            $model_goods->items = $items;
            $model_goods->quantity = $quantity;
            $model_goods->price = $price;
            $model_goods->save();
        }



    }

    public function actionPay()
    {
        $sum = $_POST['sum'];
        return $this->renderAjax('pay',['sum'=>$sum]);
    }
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }




}
