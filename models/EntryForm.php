<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $dop_name;

    public function rules()
    {
        return [
            [['name', 'dop_name'], 'required'],
            ];
    }
}