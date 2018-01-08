<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property integer $IdMarca
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Estatus'], 'required'],
            [['Nombre'], 'string', 'max' => 50],
            [['Descripcion', 'Estatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdMarca' => 'Id Marca',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdMarca' => 'IdMarca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdMarca' => 'IdMarca']);
    }
}
