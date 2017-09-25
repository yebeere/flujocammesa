<?php

namespace app\controllers\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ValoresFlujo;

/**
 * ValoresFlujoSearch represents the model behind the search form about `app\models\ValoresFlujo`.
 */
class ValoresFlujoSearch extends ValoresFlujo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvalores_flujo', 'flujo_id_flujo'], 'integer'],
            [['fecha_hora'], 'safe'],
            [['potencia'], 'number'],
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
        $query = ValoresFlujo::find();

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
            'idvalores_flujo' => $this->idvalores_flujo,
            'fecha_hora' => $this->fecha_hora,
            'potencia' => $this->potencia,
            'flujo_id_flujo' => $this->flujo_id_flujo,
        ]);

        return $dataProvider;
    }
}
