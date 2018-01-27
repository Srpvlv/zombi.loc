<?php


namespace app\models;


use yii\db\ActiveRecord;

class LevelMonster extends ActiveRecord
{
    public static function tableName()
    {
        return 'monster_on_level';
    }

    public function rules()
    {
        return[
            [['levelId','monsterId','col'], 'safe'],
        ];
    }

    public function getLevels()
    {
        return $this -> hasMany(Level::className(),['id'=>'levelId']) ;
    }

    public function getMonsterData()
    {
        return $this -> hasOne(Monster::className(),['id'=>'monsterId']) ;
    }

}