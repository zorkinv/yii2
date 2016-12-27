<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uchkurs".
 *
 * @property string $disc
 * @property string $name
 * @property integer $semestr
 * @property integer $tip
 * @property integer $zet
 * @property integer $chas_o
 * @property integer $chas_t
 * @property integer $chas_p
 * @property integer $chas_l
 * @property integer $chas_s
 */
class Uchkurs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uchkurs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc', 'name', 'semestr', 'tip', 'zet', 'chas_o', 'chas_t', 'chas_p', 'chas_l', 'chas_s'], 'required'],
            [['semestr', 'tip', 'zet', 'chas_o', 'chas_t', 'chas_p', 'chas_l', 'chas_s'], 'integer'],
            [['disc', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'disc' => 'Disc',
            'name' => 'Name',
            'semestr' => 'Semestr',
            'tip' => 'Tip',
            'zet' => 'Zet',
            'chas_o' => 'Chas O',
            'chas_t' => 'Chas T',
            'chas_p' => 'Chas P',
            'chas_l' => 'Chas L',
            'chas_s' => 'Chas S',
        ];
    }
}
