<?php

namespace app\controllers;

use Yii;
use app\models\Модуль;
use app\models\МодульSearch;
use yii\web\NotFoundHttpException;


/**
 * МодульController implements the CRUD actions for Модуль model.
 */
class МодульController extends AppController
{

    
    /**
     * Finds the Модуль model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Модуль the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Модуль::findOne($id)) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    protected function getModel(){
        return new Модуль();
    }
    
    protected function getModelSearch(){
        return new МодульSearch();
    }
}
