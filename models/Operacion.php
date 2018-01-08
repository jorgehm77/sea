<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operacion".
 *
 * @property integer $IdOperacion
 * @property string $Fecha
 * @property string $EstatusSistema
 * @property string $EstatusOperacion
 * @property integer $IdEcu
 * @property integer $IdMarca
 * @property integer $IdModelo
 * @property integer $IdAnio
 * @property integer $IdMotor
 * @property integer $IdUsuario
 * @property integer $IdTecnico
 * @property integer $IdCliente
 * @property string $Descripcion
 * @property string $Folio
 *
 * @property Comentario[] $comentarios
 * @property Anio $idAnio
 * @property Cliente $idCliente
 * @property Ecu $idEcu
 * @property Marca $idMarca
 * @property Modelo $idModelo
 * @property Motor $idMotor
 * @property Tecnico $idTecnico
 * @property Usuario $idUsuario
 */
class Operacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha', 'IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdTecnico', 'IdCliente', 'Descripcion', 'Folio'], 'required'],
            [['IdEcu'], 'safe'],
            [['IdEcu', 'IdMarca', 'IdModelo', 'IdAnio', 'IdMotor', 'IdUsuario', 'IdTecnico', 'IdCliente'], 'integer'],
            [['EstatusSistema', 'EstatusOperacion'], 'string', 'max' => 45],
            [['Descripcion'], 'string', 'max' => 250],
            [['Folio'], 'string', 'max' => 50],
            [['IdAnio'], 'exist', 'skipOnError' => true, 'targetClass' => Anio::className(), 'targetAttribute' => ['IdAnio' => 'IdAnio']],
            [['IdCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['IdCliente' => 'IdCliente']],
            [['IdEcu'], 'exist', 'skipOnError' => true, 'targetClass' => Ecu::className(), 'targetAttribute' => ['IdEcu' => 'IdEcu']],
            [['IdMarca'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['IdMarca' => 'IdMarca']],
            [['IdModelo'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::className(), 'targetAttribute' => ['IdModelo' => 'IdModelo']],
            [['IdMotor'], 'exist', 'skipOnError' => true, 'targetClass' => Motor::className(), 'targetAttribute' => ['IdMotor' => 'IdMotor']],
            [['IdTecnico'], 'exist', 'skipOnError' => true, 'targetClass' => Tecnico::className(), 'targetAttribute' => ['IdTecnico' => 'IdTecnico']],
            [['IdUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['IdUsuario' => 'IdUsuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdOperacion' => 'Id Operacion',
            'Fecha' => 'Fecha',
            'EstatusSistema' => 'Estatus Sistema',
            'EstatusOperacion' => 'Estatus Operacion',
            'IdEcu' => 'Id Ecu',
            'IdMarca' => 'Id Marca',
            'IdModelo' => 'Id Modelo',
            'IdAnio' => 'Id Anio',
            'IdMotor' => 'Id Motor',
            'IdUsuario' => 'Id Usuario',
            'IdTecnico' => 'Id Tecnico',
            'IdCliente' => 'Id Cliente',
            'Descripcion' => 'Descripcion',
            'Folio' => 'Folio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['IdOperacion' => 'IdOperacion']);
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
    public function getIdTecnico()
    {
        return $this->hasOne(Tecnico::className(), ['IdTecnico' => 'IdTecnico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['IdUsuario' => 'IdUsuario']);
    }
}
