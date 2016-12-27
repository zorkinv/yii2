<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stud".
 *
 * @property integer $id
 * @property string $fam
 * @property string $nam
 * @property string $otch
 * @property string $gruppa
 * @property integer $status
 */
class Stud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fam', 'nam', 'otch', 'gruppa', 'status'], 'required'],
            [['status'], 'integer'],
            [['fam', 'nam', 'otch'], 'string', 'max' => 50],
            [['gruppa'], 'string', 'max' => 10],
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
            'gruppa' => 'Gruppa',
            'status' => 'Status',
        ];
    }
}
