<?php


namespace app\models;


use yii\db\ActiveRecord;

class Monster extends ActiveRecord
{
    public static function tableName()
    {
        return 'Monster';
    }

    public function rules()
    {
        return[
            ['monsterName','required'],
            ['monsterName','string','max' => 100],
            [['wordId','monsterImg'], 'safe'],
        ];
    }
}