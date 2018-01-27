<?php

namespace app\controllers;
use app\models\LevelMonster;
use app\models\UploadImg;
use app\models\World;
use app\models\Monster;
use app\models\Level;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\helpers\Url;
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

    public function actionLevel_edit($id)
    {
        $selectLevel = Level::find()->where(['id'=>$id])->one();
        $worldList = World::find()->all();
        if ($selectLevel->load(Yii::$app->request->post())){
            if ($selectLevel->save())
                return $this->redirect(Url::to(['site/level_list','id'=>$selectLevel->worldId]));
        }
        return $this -> render('level_edit',compact('selectLevel','worldList'));
    }

    public function actionLevel_monster($id)
    {
        $newCol = new LevelMonster();
        $selectLevel = Level::find()->where(['id'=>$id])->one();
        $monsterList = Monster::find()->where(['wordId'=>$selectLevel->worldId])->all();
        $worldName = World::find()->where(['id'=>$selectLevel->worldId])->one();
        $newCol -> levelId = $id;
        $newCol -> levelId = $selectLevel->id;
        if ($newCol->load(Yii::$app->request->post())){
            if ($newCol->save())
                return $this->redirect(Url::to(['site/level_list','id'=>$selectLevel->worldId]));
        }
        return $this -> render('level_monster',compact('selectLevel','monsterList','newCol','worldName'));
    }
}