<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country1 */
/* @var $form yii\widgets\ActiveForm */
?>

<?= 
    $form->field($model, 'IMEI')->textInput(['maxlength' => true]) 
?>


