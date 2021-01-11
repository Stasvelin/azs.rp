<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CRUD */



$this->title = Yii::$app->controller->getCreateTitle();
$this->params['breadcrumbs'][] = 
    ['label' => Yii::$app->controller->getIndexTitle(), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$controllerId = Yii::$app->controller->id
?>
<div class="create">

    <h1><?= Html::encode($this->title) ?></h1>
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


    

</div>
