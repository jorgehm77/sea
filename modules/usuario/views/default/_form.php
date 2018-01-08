<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tecnico;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo')
        ->dropDownList(
            ['admin' => 'admin', 'tecnico' => 'tecnico'],           // Flat array ('id'=>'label')
            ['prompt' => 'Seleccione una opción']    // options
        );
 ?>

    <?= $form->field($model, 'Estatus')->textInput(['maxlength' => true]) ?>
       
    <?= $form->field($model, 'IdTecnico')->dropDownList(
                ArrayHelper::map(Tecnico::find()->where(['Estatus' => 'ACTIVO'])->all(), 'IdTecnico', 'Nombre'), ['prompt' => 'Seleccione una opción']
        )
        ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
