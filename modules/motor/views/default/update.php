<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = 'Update Motor: ' . $model->IdMotor;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdMotor, 'url' => ['view', 'id' => $model->IdMotor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
