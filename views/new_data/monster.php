<h3>Новый монстр</h3>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$wList = ArrayHelper::map($worldList,'id','name');

$monsterForm = ActiveForm::begin() ?>
<?= $monsterForm->field($newMonster, 'monsterName')->label('Название')?>
<?= $monsterForm->field($newMonster, 'wordId')->label('Где встречается')->dropDownList($wList)?>
<?= $monsterForm->field($newImg, 'imgFile')->label('Иконка')->fileInput()?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>