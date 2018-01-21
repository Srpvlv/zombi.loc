<?php

namespace app\controllers;
use app\models\World;
use yii\web\Controller;
use yii;

class New_dataController extends Controller
{
    public function actionWorld()
    {

        /*
         *  $formTitle = 'Новый клиент';
        $newClient = new formClient();
        if( $newClient->load(Yii::$app->request->post()) ){
            if( $newClient->save() ){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Данные указаны неверно');
            }
        }
        return $this->render('form',compact('formTitle','newClient'));
         * */
        $newWorld = new World();
        if ($newWorld->load(Yii::$app->request->post())){
            if ($newWorld->save())
                return $this->refresh();
        }
        return $this -> render('world',compact('newWorld'));
    }
}