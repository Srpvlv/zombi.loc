<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadImg extends Model
{
    public $imgFile;
    public $saveName;

    public function rules()
    {
        return [
            [['imgFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg'],
        ];
    }

    public function upload()
    {
        $this -> saveName = $this->getRandomName();
        if ($this->validate()) {
            $this->imgFile->saveAs('uploads/' .$this -> saveName);

            return true;
        } else {
            return false;
        }
    }

    public function getRandomName()
    {
        do {
            $randName = md5(microtime().rand(0,999));
        } while (file_exists('upload/'.$randName.'jpg'));
        return $randName.'.jpg';
    }


}