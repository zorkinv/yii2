<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gruppa".
 *
 * @property string $uchplan
 * @property string $name
 * @property string $dop_name
 */
class Gruppa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gruppa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uchplan', 'name', 'dop_name'], 'required'],
            [['uchplan'], 'string', 'max' => 100],
            [['name', 'dop_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uchplan' => 'Uchplan',
            'name' => 'Name',
            'dop_name' => 'Dop Name',
        ];
    }
}
