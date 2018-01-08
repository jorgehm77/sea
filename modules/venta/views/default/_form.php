<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FechaVenta')->textInput() ?>

    <?= $form->field($model, 'Estatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdEcu')->textInput() ?>

    <?= $form->field($model, 'IdMarca')->textInput() ?>

    <?= $form->field($model, 'IdModelo')->textInput() ?>

    <?= $form->field($model, 'IdAnio')->textInput() ?>

    <?= $form->field($model, 'IdMotor')->textInput() ?>

    <?= $form->field($model, 'IdUsuario')->textInput() ?>

    <?= $form->field($model, 'IdCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
