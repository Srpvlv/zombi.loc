<h3>Новый мир</h3>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$worldForm = ActiveForm::begin() ?>
<?= $worldForm->field($newWorld, 'name')->label('Имя')?>
<?php//= $worldForm->field($newWorld, 'img')->label('Иконка')->fileInput()?>
<?= $worldForm->field($newWorld, 'dificult')->label('Уровень сложности')->dropDownList(['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5])?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>