<?php

namespace app\models;

class Hotel extends \hiqdev\hiart\ActiveRecord
{
    public function rules()
    {
        return [
            // ['id', 'integer', 'min' => 1],
            // ['login', 'string', 'min' => 2, 'max' => 32],
            [['offerInfo', 'userInfo', 'offers'], 'safe'],
        ];
    }
    
    public static function tableName()
    {
        return '';
    }
 
}