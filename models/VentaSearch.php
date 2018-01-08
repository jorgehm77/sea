<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Venta;

/**
 * VentaSearch represents the model behind the search form about `app\models\Venta`.
 */
class VentaSearch extends Venta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdVenta', 'IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdCliente'], 'integer'],
            [['FechaVenta', 'Estatus'], 'safe'],
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
        $query = Venta::find();

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
            'IdVenta' => $this->IdVenta,
            'FechaVenta' => $this->FechaVenta,
            'IdEcu' => $this->IdEcu,
            'IdMarca' => $this->IdMarca,
            'IdModelo' => $this->IdModelo,
            'IdAnio' => $this->IdAnio,
            'IdMotor' => $this->IdMotor,
            'IdUsuario' => $this->IdUsuario,
            'IdCliente' => $this->IdCliente,
        ]);

        $query->andFilterWhere(['like', 'Estatus', $this->Estatus]);

        return $dataProvider;
    }
}
