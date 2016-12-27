<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Uchkurs;

/**
 * UchkursSearch represents the model behind the search form about `app\models\Uchkurs`.
 */
class UchkursSearch extends Uchkurs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc', 'name'], 'safe'],
            [['semestr', 'tip', 'zet', 'chas_o', 'chas_t', 'chas_p', 'chas_l', 'chas_s'], 'integer'],
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
        $query = Uchkurs::find();

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
            'semestr' => $this->semestr,
            'tip' => $this->tip,
            'zet' => $this->zet,
            'chas_o' => $this->chas_o,
            'chas_t' => $this->chas_t,
            'chas_p' => $this->chas_p,
            'chas_l' => $this->chas_l,
            'chas_s' => $this->chas_s,
        ]);

        $query->andFilterWhere(['like', 'disc', $this->disc])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
