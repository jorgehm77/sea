<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $IdUsuario
 * @property string $Nombre
 * @property string $Password
 * @property string $Tipo
 * @property string $Estatus
 * @property integer $IdTecnico
 *
 * @property Comentariodevolucionusuario[] $comentariodevolucionusuarios
 * @property Comentariodiagnosticousuario[] $comentariodiagnosticousuarios
 * @property Comentariorecepcionusuario[] $comentariorecepcionusuarios
 * @property Comentarioventausuario[] $comentarioventausuarios
 * @property Recepcion[] $recepcions
 * @property Tecnico $tecnicoIdTecnico
 * @property Venta[] $ventas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Password', 'Tipo', 'IdTecnico'], 'required'],
            [['IdTecnico'], 'integer'],
            [['Nombre', 'Password', 'Tipo', 'Estatus'], 'string', 'max' => 45],
            [['IdTecnico'], 'exist', 'skipOnError' => true, 'targetClass' => Tecnico::className(), 'targetAttribute' => ['IdTecnico' => 'IdTecnico']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsuario' => 'Id Usuario',
            'Nombre' => 'Nombre',
            'Password' => 'Password',
            'Tipo' => 'Tipo',
            'Estatus' => 'Estatus',
            'IdTecnico' => 'Tecnico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentariodevolucionusuarios()
    {
        return $this->hasMany(Comentariodevolucionusuario::className(), ['IdUsuario' => 'IdUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentariodiagnosticousuarios()
    {
        return $this->hasMany(Comentariodiagnosticousuario::className(), ['IdUsuario' => 'IdUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentariorecepcionusuarios()
    {
        return $this->hasMany(Comentariorecepcionusuario::className(), ['IdUsuario' => 'IdUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarioventausuarios()
    {
        return $this->hasMany(Comentarioventausuario::className(), ['IdUsuario' => 'IdUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecepcions()
    {
        return $this->hasMany(Recepcion::className(), ['IdUsuario' => 'IdUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTecnicoIdTecnico()
    {
        return $this->hasOne(Tecnico::className(), ['IdTecnico' => 'IdTecnico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['IdUsuario' => 'IdUsuario']);
    }
}
