<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property integer $IdComentario
 * @property integer $IdOperacion
 * @property integer $IdUsuario
 * @property string $Fecha
 * @property string $Comentario
 *
 * @property Operacion $idOperacion
 * @property Usuario $idUsuario
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdOperacion', 'IdUsuario', 'Fecha', 'Comentario'], 'required'],
            [['IdOperacion', 'IdUsuario'], 'integer'],
            [['Fecha'], 'safe'],
            [['Comentario'], 'string', 'max' => 250],
            [['IdOperacion'], 'exist', 'skipOnError' => true, 'targetClass' => Operacion::className(), 'targetAttribute' => ['IdOperacion' => 'IdOperacion']],
            [['IdUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['IdUsuario' => 'IdUsuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdComentario' => 'Id Comentario',
            'IdOperacion' => 'Id Operacion',
            'IdUsuario' => 'Id Usuario',
            'Fecha' => 'Fecha',
            'Comentario' => 'Comentario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOperacion()
    {
        return $this->hasOne(Operacion::className(), ['IdOperacion' => 'IdOperacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['IdUsuario' => 'IdUsuario']);
    }
}
