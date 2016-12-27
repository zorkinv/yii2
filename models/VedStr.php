<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ved_str".
 *
 * @property integer $id
 * @property integer $ved
 * @property string $stud
 * @property integer $ocenka
 */
class VedStr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ved_str';
    }

    /**
     * @inheritdoc
     */
    /*public function rules()
    {
        return [
            [['ved', 'stud', 'ocenka'], 'required'],
            [['ved', 'ocenka'], 'integer'],
            [['stud'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ved' => 'Ved',
            'stud' => 'Stud',
            'ocenka' => 'Ocenka',
        ];
    }
}
