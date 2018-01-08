<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $IdModelo
 * @property string $Nombre
 * @property string $Descrpcion
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Estatus'], 'required'],
            [['Nombre', 'Descrpcion'], 'string', 'max' => 50],
            [['Estatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdModelo' => 'Id Modelo',
            'Nombre' => 'Nombre',
            'Descrpcion' => 'Descrpcion',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdModelo' => 'IdModelo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdModelo' => 'IdModelo']);
    }
}
