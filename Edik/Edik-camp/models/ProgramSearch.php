<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Program;

/**
 * ProgramSearch represents the model behind the search form of `app\models\Program`.
 */
class ProgramSearch extends Program
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'use_template', 'viewed', 'season', 'location', 'status'], 'integer'],
            [['title', 'description', 'shifts', 'content', 'start_date', 'end_date', 'preview_image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Program::find();

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
            'id' => $this->id,
            'use_template' => $this->use_template,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'viewed' => $this->viewed,
            'season' => $this->season,
            'location' => $this->location,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'shifts', $this->shifts])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'preview_image', $this->preview_image]);

        return $dataProvider;
    }
}
