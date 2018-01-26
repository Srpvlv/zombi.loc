<h3>Редактирование данных уровеня</h3>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$wList = ArrayHelper::map($worldList,'id','name');

$levelForm = ActiveForm::begin() ?>
<?= $levelForm->field($selectLevel, 'name')->label('Название/номер')?>
<?= $levelForm->field($selectLevel, 'worldId')->label('К какому миру относиться')->dropDownList($wList,['options' => [$selectLevel->worldId => ['Selected' => true]]])?>
<?= $levelForm->field($selectLevel, 'type')->label('Тип уровня')?>
<?= $levelForm->field($selectLevel, 'special')->label('Дополнительные условия')?>
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>