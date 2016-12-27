<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Uchplan;

/**
 * UchplanSearch represents the model behind the search form about `app\models\Uchplan`.
 */
class UchplanSearch extends Uchplan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profil', 'name', 'dop_name', 'forma'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Uchplan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'profil', $this->profil])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'dop_name', $this->dop_name])
            ->andFilterWhere(['like', 'forma', $this->forma]);

        return $dataProvider;
    }
}
