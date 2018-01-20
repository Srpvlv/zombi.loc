<?php

namespace app\controllers;
use yii\web\Controller;

class New_dataController extends Controller
{
    public function actionWorld()
    {
        return $this -> render('world');
    }
}