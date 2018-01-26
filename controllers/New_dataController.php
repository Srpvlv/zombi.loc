<?php

namespace app\controllers;
use app\models\UploadImg;
use app\models\World;
use app\models\Monster;
use app\models\Level;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii;

class New_dataController extends Controller
{
    public function actionWorld()
    {
        $newWorld = new World();
        $newImg = new UploadImg();
        if ($newWorld->load(Yii::$app->request->post())){
            $newImg->imgFile = UploadedFile::getInstance($newImg,'imgFile');
            if ($newImg->upload()) {
                $newWorld->img = $newImg->saveName;
                if ($newWorld->save())
                    return $this->refresh();
            }
        }
        return $this -> render('world',compact('newWorld','newImg'));
    }

    public function actionMonster()
    {
        $newMonster = new Monster();
        $newImg = new UploadImg();
        $worldList = World::find()->all();
        if ($newMonster->load(Yii::$app->request->post())){
            $newImg->imgFile = UploadedFile::getInstance($newImg,'imgFile');
            if ($newImg->upload()){
                $newMonster->monsterImg = $newImg->saveName;
                if ($newMonster->save())
                    return $this->refresh();
            }
        }
        return $this -> render('monster',compact('newMonster','newImg','worldList'));
    }

    public function actionLevel()
    {
        $newLevel = new Level();
        $worldList = World::find()->all();
        if ($newLevel->load(Yii::$app->request->post())){
                if ($newLevel->save())
                    return $this->refresh();
        }
        return $this -> render('level',compact('newLevel','worldList'));
    }
}