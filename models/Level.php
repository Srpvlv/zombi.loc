<?php


namespace app\models;


use yii\db\ActiveRecord;

class Level extends ActiveRecord
{
    public static function tableName()
    {
        return 'level';
    }

    public function rules()
    {
        return[
            [['name','type'],'required'],
            ['special','string','max' => 254],
            ['wordId', 'safe'],
        ];
    }
}