<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use app\models\Ecu;
use app\models\Marca;
use app\models\Modelo;
use app\models\Anio;
use app\models\Motor;
use app\models\Usuario;
use app\models\Cliente;

/* @var $this yii\web\View */
/* @var $model app\models\Operacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operacion-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-12 col-md-6">
       
        <?=
        $form->field($model, 'IdEcu')->dropDownList(
                ArrayHelper::map(Ecu::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdEcu', 'NoParte'), ['prompt' => 'Seleccione una opción']
        )->label('No. parte ECU');
        ?>
        <div class="form-group pull-right">
            <?php echo Html::a('<span class="fa fa-plus"></span> Agregar no. de parte',
                ['/ecu/default/agregarNoParte'],
                [
                    'title' => 'Registrar no. de parte',
                    'data-toggle'=>'modal',
                    'data-target'=>'#_formAgregar',
                ]
            );
            ?>
        </div>

        <?=
        $form->field($model, 'IdMarca')->dropDownList(
                ArrayHelper::map(Marca::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdMarca', 'Nombre'), ['prompt' => 'Seleccione una opción']
        )->label('Marca');
        ?>

        <?=
        $form->field($model, 'IdModelo')->dropDownList(
                ArrayHelper::map(Modelo::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdModelo', 'Nombre'), ['prompt' => 'Seleccione una opción']
        )->label('Modelo');
        ?>

<?=
$form->field($model, 'IdAnio')->dropDownList(
        ArrayHelper::map(Anio::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdAnio', 'Numero'), ['prompt' => 'Seleccione una opción']
)->label('Año');
?>


    </div>
    <div class="col-xs-12 col-md-6">
        <?=
        $form->field($model, 'IdMotor')->dropDownList(
                ArrayHelper::map(Motor::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdMotor', 'Nombre'), ['prompt' => 'Seleccione una opción']
        )->label('Motor');
        ?>

        <?=
        $form->field($model, 'IdUsuario')->dropDownList(
                ArrayHelper::map(Usuario::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdUsuario', 'Nombre'), ['prompt' => 'Seleccione una opción']
        )->label('Asignar a:');
        ?>



<?=
$form->field($model, 'IdCliente')->dropDownList(
        ArrayHelper::map(Cliente::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdCliente', 'Nombre'), ['prompt' => 'Seleccione una opción']
)->label('Cliente');
?>

<?= $form->field($model, 'Descripcion')->textarea(['maxlength' => true]) ?>



        <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>    



<?php ActiveForm::end(); ?>

    <div class="modal remote fade" id="_formAgregar">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
</div>
