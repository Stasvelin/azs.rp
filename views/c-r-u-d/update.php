<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CRUD */
/* @var $controller app\controllers\CRUDController */


$controller = Yii::$app->controller;
$controllerId = $controller->id;
$this->title = $controller->getUpdateTitle();
$this->params['breadcrumbs'][] = ['label' => $controller->getIndexTitle(), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $controller->getViewTitle(), 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';

?>
<div class="form">
<?php $form = ActiveForm::begin(); 

?>
<?= $this->render("../$controllerId/_form", [
        'model' => $model, 'form' => $form
    ]) ?>
    
    

<div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
