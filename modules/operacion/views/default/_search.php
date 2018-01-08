<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdOperacion') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'EstatusSistema') ?>

    <?= $form->field($model, 'EstatusOperacion') ?>

    <?= $form->field($model, 'IdEcu') ?>

    <?php // echo $form->field($model, 'IdMarca') ?>

    <?php // echo $form->field($model, 'IdModelo') ?>

    <?php // echo $form->field($model, 'IdAnio') ?>

    <?php // echo $form->field($model, 'IdMotor') ?>

    <?php // echo $form->field($model, 'IdUsuario') ?>

    <?php // echo $form->field($model, 'IdTecnico') ?>

    <?php // echo $form->field($model, 'IdCliente') ?>

    <?php // echo $form->field($model, 'Descripcion') ?>

    <?php // echo $form->field($model, 'Folio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
