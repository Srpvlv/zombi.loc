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
            //['img','file','skipOnEmpty'=>false,'extension'=>'jpg'],
            ['dificult', 'safe'],
        ];
    }

    /*public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }*/

}