<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "motor".
 *
 * @property integer $IdMotor
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Venta[] $ventas
 */
class Motor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Estatus'], 'required'],
            [['Nombre', 'Estatus'], 'string', 'max' => 45],
            [['Descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdMotor' => 'Id Motor',
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
        return $this->hasMany(Recepcion::className(), ['IdMotor' => 'IdMotor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdMotor' => 'IdMotor']);
    }
}
