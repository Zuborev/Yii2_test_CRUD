<?php

namespace common\models;

use yii\db\ActiveRecord;

class Office extends ActiveRecord
{
    public static function tableName()
    {
        return '{{office}}';
    }

    public function rules()
    {
        return [
            [['officename', 'phone'], 'required', 'message' => 'Поле должно быть заполнено'],
            ['officename', 'unique', 'message' => 'Данное название уже существует'],
            ['officename', 'string', 'min' => 3, 'message' => 'Название д.б. от 3 символов'],
            ['phone', 'match', 'pattern'=>'/^[\d]{10}$/'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'officename' => 'Название офиса',
            'phone' => 'Номер телефона',
        ];
    }
}