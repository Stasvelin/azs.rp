<?php 
namespace app\controllers;


use Yii;
use app\models\Модуль;
use app\models\МодульSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class DeviceController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
     * Lists all Модуль models.
     * @return mixed
     */
    public function actionIndex()
    {
        //$c = new МодульController();
        //$c -> actionIndex();
        echo "666666666668";
        //Yii::$app->controllerNamespace = "app\controllers";
        //Yii::$app->runAction('модуль/index');
    }
}