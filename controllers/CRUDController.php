<?php 
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppController implements the CRUD actions for models.
 */
abstract class CRUDController extends Controller
{
    protected $model;
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
        $this->view->title = $this->getIndexTitle();
        
        $searchModel = $this->getModelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('../c-r-u-d/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    protected function getIndexTitle(){
        return 'Табло-Сервис';
    }
    
    /**
     * Displays a single model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        $this->model = $this->findModel($id);
        $this->view->params['breadcrumbs'][] = ['label' => $this->getIndexTitle(), 'url' => ['index']];
        $this->view->title = $this->getViewTitle();
        return $this->render('../c-r-u-d/view', [
            'model' => $this->model,
        ]);
    }
    
    protected function getViewTitle(){
        return 'Табло-Сервис';
    }
    
    /**
     * Creates a new  model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->model = $this->getModel();
        
        if ($this->model->load(Yii::$app->request->post()) && $this->model->save()) {
            return $this->redirect(['view', 'id' => $this->model->id]);
        }
        
        return $this->render('../c-r-u-d/create', [
            'model' => $this->model,
        ]);
    }
    
    public function getCreateTitle(){
        return 'Добавление новой записи';
    }
    
    /**
     * Updates an existing Модуль model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->model = $this->findModel($id);
        
        if ($this->model->load(Yii::$app->request->post()) && $this->model->save()) {
            return $this->redirect(['view', 'id' => $this->model->id]);
        }
        
        return $this->render('../c-r-u-d/update', [
            'model' => $this->model,
        ]);
    }
    
    public function getUpdateTitle(){
        return 'Редактирование записи';
    }
    
    /**
     * Deletes an existing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        return $this->redirect(['index']);
    }
    
    
}