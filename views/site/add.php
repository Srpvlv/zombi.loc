<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Новые данные';
?>

    <h3><?= Html::encode($this->title) ?></h3>
    <p>
    <?= '<p><a class="btn btn-lg btn-success" href='.Url::to(['new_data/world']).'>Добавить мир</a></p>' ?>
    <?= '<p><a class="btn btn-lg btn-success" href='.Url::to(['new_data/level']).'>Добавить уровень</a></p>' ?>
    <?= '<p><a class="btn btn-lg btn-success" href='.Url::to(['new_data/monster']).'>Добавить зомби</a></p>' ?>
    </p>

