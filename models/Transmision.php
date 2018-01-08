<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transmision".
 *
 * @property integer $IdTransmision
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Estatus
 */
class Transmision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transmision';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Nombre'], 'string', 'max' => 50],
            [['Descripcion'], 'string', 'max' => 80],
            [['Estatus'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTransmision' => 'Id Transmision',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Estatus' => 'Estatus',
        ];
    }
}
