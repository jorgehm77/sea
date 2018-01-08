<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tecnico".
 *
 * @property integer $IdTecnico
 * @property string $Nombre
 * @property string $App
 * @property string $Apm
 * @property string $Email
 * @property string $Telefono
 * @property string $Estatus
 *
 * @property Recepcion[] $recepcions
 * @property Usuario[] $usuarios
 */
class Tecnico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tecnico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Nombre', 'App', 'Apm', 'Email', 'Telefono', 'Estatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTecnico' => 'Id Tecnico',
            'Nombre' => 'Nombre',
            'App' => 'App',
            'Apm' => 'Apm',
            'Email' => 'Email',
            'Telefono' => 'Telefono',
            'Estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdTecnico' => 'IdTecnico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['Tecnico_IdTecnico' => 'IdTecnico']);
    }
}
