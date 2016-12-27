<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nap".
 *
 * @property string $kod
 * @property string $name
 * @property string $dop_name
 */
class Nap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kod', 'name'], 'required'],
            [['kod'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 100],
            [['dop_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kod' => 'Код направления',
            'name' => 'Наименование',
            'dop_name' => 'Примечание',
        ];
    }
}
