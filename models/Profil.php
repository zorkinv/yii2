<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property string $nap
 * @property string $name
 *
 * @property Uchplan[] $uchplans
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nap', 'name'], 'required'],
            [['nap', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nap' => 'Направление',
            'name' => 'Наименование',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUchplans()
    {
        return $this->hasMany(Uchplan::className(), ['profil' => 'name']);
    }
}
