<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\МодульSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

     <?=
    \yii\widgets\ListView::widget([
         'dataProvider' => $dataProvider,
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],
        //'layout' => "{pager}\n{items}\n{summary}",
        'layout' => "{items}\n",
        'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('../c-r-u-d/_list_item',['model' => $model]);
        
        // or just do some echo
        // return $model->title . ' posted by ' . $model->author;
        },
        ]);
    
    ?>


</div>
