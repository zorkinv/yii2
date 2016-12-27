<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ocenki".
 *
 * @property integer $ocenka
 * @property string $uchkurs
 * @property integer $stud
 * @property integer $prep
 * @property string $data
 */
class Ocenki extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ocenki';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ocenka', 'uchkurs', 'stud', 'prep', 'data'], 'required'],
            [['ocenka', 'stud', 'prep'], 'integer'],
            [['data'], 'safe'],
            [['uchkurs'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ocenka' => 'Ocenka',
            'uchkurs' => 'Uchkurs',
            'stud' => 'Stud',
            'prep' => 'Prep',
            'data' => 'Data',
        ];
    }
}
