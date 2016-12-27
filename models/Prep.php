<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prep".
 *
 * @property integer $id
 * @property string $fam
 * @property string $nam
 * @property string $otch
 */
class Prep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fam', 'nam', 'otch'], 'required'],
            [['id'], 'integer'],
            [['fam', 'nam', 'otch'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fam' => 'Fam',
            'nam' => 'Nam',
            'otch' => 'Otch',
        ];
    }
}
