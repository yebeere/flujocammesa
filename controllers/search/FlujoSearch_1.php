<?php

namespace app\controllers\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\flujo;

/**
 * FlujoSearch represents the model behind the search form about `app\models\flujo`.
 */
class FlujoSearch extends flujo
{
    public $barraName;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_flujo', 'x', 'y', 'id_barra_1', 'id_barra_2', 'circuito', 'x_signo', 'y_signo'], 'integer'],
            [['signo_barra','barraName'], 'safe'],
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
        $query = flujo::find();

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
            'id_flujo' => $this->id_flujo,
            'x' => $this->x,
            'y' => $this->y,
            'id_barra_1' => $this->id_barra_1,
            'id_barra_2' => $this->id_barra_2,
            'circuito' => $this->circuito,
            'x_signo' => $this->x_signo,
            'y_signo' => $this->y_signo,
        ]);

        $query->andFilterWhere(['like', 'signo_barra', $this->signo_barra]);

        return $dataProvider;
    }
}
