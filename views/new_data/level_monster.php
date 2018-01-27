<h3>Новая запись</h3>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$mList = ArrayHelper::map($monsterList,'id','monsterName');

$dataForm = ActiveForm::begin();

echo '<h4>'.$worldName->name.'</h4><h5>'.$selectLevel->name.'</h5>';
?>
<?= $dataForm->field($newCol, 'monsterId')->label('Монстр')->dropDownList($mList)?>
<?= $dataForm->field($newCol, 'col')->label('Количество')?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>