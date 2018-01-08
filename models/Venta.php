<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venta".
 *
 * @property integer $IdVenta
 * @property string $FechaVenta
 * @property string $Estatus
 * @property integer $IdEcu
 * @property integer $IdMarca
 * @property integer $IdModelo
 * @property integer $IdAnio
 * @property integer $IdMotor
 * @property integer $IdUsuario
 * @property integer $IdCliente
 *
 * @property Comentarioventausuario[] $comentarioventausuarios
 * @property Anio $idAnio
 * @property Cliente $idCliente
 * @property Ecu $idEcu
 * @property Marca $idMarca
 * @property Modelo $idModelo
 * @property Motor $idMotor
 * @property Usuario $idUsuario
 */
class Venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FechaVenta', 'Estatus', 'IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdCliente'], 'required'],
            [['FechaVenta'], 'safe'],
            [['IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdCliente'], 'integer'],
            [['Estatus'], 'string', 'max' => 15],
            [['IdAnio'], 'exist', 'skipOnError' => true, 'targetClass' => Anio::className(), 'targetAttribute' => ['IdAnio' => 'IdAnio']],
            [['IdCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['IdCliente' => 'IdCliente']],
            [['IdEcu'], 'exist', 'skipOnError' => true, 'targetClass' => Ecu::className(), 'targetAttribute' => ['IdEcu' => 'IdEcu']],
            [['IdMarca'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['IdMarca' => 'IdMarca']],
            [['IdModelo'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::className(), 'targetAttribute' => ['IdModelo' => 'IdModelo']],
            [['IdMotor'], 'exist', 'skipOnError' => true, 'targetClass' => Motor::className(), 'targetAttribute' => ['IdMotor' => 'IdMotor']],
            [['IdUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['IdUsuario' => 'IdUsuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdVenta' => 'Id Venta',
            'FechaVenta' => 'Fecha Venta',
            'Estatus' => 'Estatus',
            'IdEcu' => 'Id Ecu',
            'IdMarca' => 'Id Marca',
            'IdModelo' => 'Id Modelo',
            'IdAnio' => 'Id Anio',
            'IdMotor' => 'Id Motor',
            'IdUsuario' => 'Id Usuario',
            'IdCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarioventausuarios()
    {
        return $this->hasMany(Comentarioventausuario::className(), ['IdVenta' => 'IdVenta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnio()
    {
        return $this->hasOne(Anio::className(), ['IdAnio' => 'IdAnio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente()
    {
        return $this->hasOne(Cliente::className(), ['IdCliente' => 'IdCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEcu()
    {
        return $this->hasOne(Ecu::className(), ['IdEcu' => 'IdEcu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMarca()
    {
        return $this->hasOne(Marca::className(), ['IdMarca' => 'IdMarca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModelo()
    {
        return $this->hasOne(Modelo::className(), ['IdModelo' => 'IdModelo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMotor()
    {
        return $this->hasOne(Motor::className(), ['IdMotor' => 'IdMotor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['IdUsuario' => 'IdUsuario']);
    }
}
