<?php


namespace app\models;


use yii\db\ActiveRecord;

class World extends ActiveRecord
{
    public static function tableName()
    {
        return 'world';
    }

    public function rules()
    {
        return[
            ['name','required'],
            ['name','string','max' => 255],
            [['dificult','img'], 'safe'],
        ];
    }

}