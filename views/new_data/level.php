<h3>Новый уровень</h3>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$wList = ArrayHelper::map($worldList,'id','name');

$levelForm = ActiveForm::begin() ?>
<?= $levelForm->field($newLevel, 'name')->label('Название/номер')?>
<?= $levelForm->field($newLevel, 'worldId')->label('К какому миру относиться')->dropDownList($wList)?>
<?= $levelForm->field($newLevel, 'type')->label('Тип уровня')?>
<?= $levelForm->field($newLevel, 'special')->label('Дополнительные условия')?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>