<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdVenta') ?>

    <?= $form->field($model, 'FechaVenta') ?>

    <?= $form->field($model, 'Estatus') ?>

    <?= $form->field($model, 'IdEcu') ?>

    <?= $form->field($model, 'IdMarca') ?>

    <?php // echo $form->field($model, 'IdModelo') ?>

    <?php // echo $form->field($model, 'IdAnio') ?>

    <?php // echo $form->field($model, 'IdMotor') ?>

    <?php // echo $form->field($model, 'IdUsuario') ?>

    <?php // echo $form->field($model, 'IdCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
