<?php

namespace app\controllers\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ValoresTensiones;

/**
 * ValoresTensionesSearch represents the model behind the search form about `app\models\ValoresTensiones`.
 */
class ValoresTensionesSearch extends ValoresTensiones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtensiones', 'id_barra'], 'integer'],
            [['tension'], 'number'],
            [['fecha_hora'], 'safe'],
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
        $query = ValoresTensiones::find();

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
            'idtensiones' => $this->idtensiones,
            'id_barra' => $this->id_barra,
            'tension' => $this->tension,
            'fecha_hora' => $this->fecha_hora,
        ]);

        return $dataProvider;
    }
}
