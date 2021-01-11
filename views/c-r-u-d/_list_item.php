<?php
use yii\helpers\Html;
use yii\helpers\Url;

$data = $model->getListEntryData();
?>
<a href=<?= $data['href'] ?>>
<div class='элементСписка'>
<p class='заголовок'><?= $data['title'] ?></p>



<?php 
unset ($data['title']);
unset ($data['href']);
foreach ($data as $l=>$v){
?>
<p class='параметр'>
        <font class='имяПараметра'><?= Html::encode($l) ?>: </font>
        <font class='значениеПараметра'><?= Html::encode($v) ?></font>
</p>
<?php 
}
?>
</div>
</a>