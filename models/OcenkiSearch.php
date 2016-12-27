<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ocenki;

/**
 * OcenkiSearch represents the model behind the search form about `app\models\Ocenki`.
 */
class OcenkiSearch extends Ocenki
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ocenka', 'stud', 'prep'], 'integer'],
            [['uchkurs', 'data'], 'safe'],
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
        $query = Ocenki::find();

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
        $query->andFilterWhere([
            'ocenka' => $this->ocenka,
            'stud' => $this->stud,
            'prep' => $this->prep,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'uchkurs', $this->uchkurs]);

        return $dataProvider;
    }
}
