<?php

namespace app\controllers\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\generadores;

/**
 * GeneradoresSearch represents the model behind the search form about `app\models\generadores`.
 */
class GeneradoresSearch extends generadores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idgeneradores', 'x', 'y', 'x_signo', 'y_signo', 'id_barra'], 'integer'],
            [['generador', 'signo_positivo', 'distro'], 'safe'],
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
        $query = generadores::find();

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
            'idgeneradores' => $this->idgeneradores,
            'x' => $this->x,
            'y' => $this->y,
            'x_signo' => $this->x_signo,
            'y_signo' => $this->y_signo,
            'id_barra' => $this->id_barra,
        ]);

        $query->andFilterWhere(['like', 'generador', $this->generador])
            ->andFilterWhere(['like', 'signo_positivo', $this->signo_positivo])
            ->andFilterWhere(['like', 'distro', $this->distro]);

        return $dataProvider;
    }
}
