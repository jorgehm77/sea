<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $IdCliente
 * @property string $Nombre
 * @property string $App
 * @property string $Apm
 * @property string $Direcccion
 * @property string $Telefono
 * @property string $Celular
 * @property string $Email
 * @property string $Empresa
 * @property string $Estado
 * @property string $Municipio
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'App', 'Telefono', 'Estado', 'Estatus'], 'required'],
            [['Nombre', 'App', 'Apm', 'Direcccion', 'Telefono', 'Celular', 'Email', 'Empresa', 'Estado', 'Municipio', 'Estatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdCliente' => 'Id Cliente',
            'Nombre' => 'Nombre',
            'App' => 'Apellido paterno',
            'Apm' => 'Apellido materno',
            'Direcccion' => 'Direcccion',
            'Telefono' => 'Telefono',
            'Celular' => 'Celular',
            'Email' => 'Email',
            'Empresa' => 'Empresa/Taller',
            'Estado' => 'Estado',
            'Municipio' => 'Municipio',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdCliente' => 'IdCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdCliente' => 'IdCliente']);
    }
}
