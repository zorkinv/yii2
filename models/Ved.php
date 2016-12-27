<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ved".
 *
 * @property integer $id
 * @property string $gruppa
 * @property string $uchkurs
 */
class Ved extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ved';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gruppa', 'uchkurs'], 'required'],
            [['gruppa', 'uchkurs'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gruppa' => 'Gruppa',
            'uchkurs' => 'Uchkurs',
        ];
    }
}
