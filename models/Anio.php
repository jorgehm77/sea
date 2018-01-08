<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anio".
 *
 * @property integer $IdAnio
 * @property string $Numero
 * @property string $Descripcion
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Anio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Numero', 'Estatus'], 'required'],
            [['Numero'], 'string', 'max' => 15],
            [['Descripcion', 'Estatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAnio' => 'Id Anio',
            'Numero' => 'Numero',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdAnio' => 'IdAnio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdAnio' => 'IdAnio']);
    }
}
