<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdUsuario') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'Tipo') ?>

    <?= $form->field($model, 'Estatus') ?>

    <?php // echo $form->field($model, 'Tecnico_IdTecnico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
