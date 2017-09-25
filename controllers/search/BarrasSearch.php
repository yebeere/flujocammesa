<?php

namespace app\controllers\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\barras;

/**
 * BarrasSearch represents the model behind the search form about `app\models\barras`.
 */
class BarrasSearch extends barras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barra', 'tiene_tension', 'x', 'y'], 'integer'],
            [['barra'], 'safe'],
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
        $query = barras::find();

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
            'id_barra' => $this->id_barra,
            'tiene_tension' => $this->tiene_tension,
            'x' => $this->x,
            'y' => $this->y,
        ]);

        $query->andFilterWhere(['like', 'barra', $this->barra]);

        return $dataProvider;
    }
}
