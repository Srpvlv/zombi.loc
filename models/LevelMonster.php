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
}