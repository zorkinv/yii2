<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uchplan".
 *
 * @property string $profil
 * @property string $name
 * @property string $dop_name
 * @property string $forma
 */
class Uchplan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uchplan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profil', 'name', 'forma'], 'required'],
            [['profil', 'name', 'forma'], 'string', 'max' => 100],
            [['dop_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profil' => 'Профиль',
            'name' => 'Наименование',
            'dop_name' => 'Примечание',
            'forma' => 'Форма обучения',
        ];
    }
}
