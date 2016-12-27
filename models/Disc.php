<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disc".
 *
 * @property string $uchplan
 * @property string $name
 */
class Disc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uchplan', 'name'], 'required'],
            [['uchplan', 'name'], 'string', 'max' => 100],
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
        ];
    }
}
