<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Operacion;

/**
 * OperacionSearch represents the model behind the search form about `app\models\Operacion`.
 */
class OperacionSearch extends Operacion
{
    public $IdEcu;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdOperacion', 'IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdTecnico', 'IdCliente'], 'integer'],
            [['Fecha', 'EstatusSistema', 'EstatusOperacion', 'Descripcion', 'Folio'], 'safe'],
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
        $query = Operacion::find();

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
            'IdOperacion' => $this->IdOperacion,
            'Fecha' => $this->Fecha,
            'IdEcu' => $this->IdEcu,
            'IdMarca' => $this->IdMarca,
            'IdModelo' => $this->IdModelo,
            'IdAnio' => $this->IdAnio,
            'IdMotor' => $this->IdMotor,
            'IdUsuario' => $this->IdUsuario,
            'IdTecnico' => $this->IdTecnico,
            'IdCliente' => $this->IdCliente,
            'idEcu.NoParte' => $this->IdEcu
        ]);

        $query->andFilterWhere(['like', 'EstatusSistema', $this->EstatusSistema])
            ->andFilterWhere(['like', 'EstatusOperacion', $this->EstatusOperacion])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion])
                ->andFilterWhere(['like', 'idEcu.NoParte', $this->IdEcu])
            ->andFilterWhere(['like', 'Folio', $this->Folio]);

        return $dataProvider;
    }
}
