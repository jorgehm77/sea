<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ecu".
 *
 * @property integer $IdEcu
 * @property string $NoParte
 * @property string $Descripcion
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Ecu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ecu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NoParte', 'Descripcion', 'Estatus'], 'required'],
            [['NoParte', 'Estatus'], 'string', 'max' => 45],
            [['Descripcion'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdEcu' => 'Id Ecu',
            'NoParte' => 'No Parte',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdEcu' => 'IdEcu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdEcu' => 'IdEcu']);
    }
}
