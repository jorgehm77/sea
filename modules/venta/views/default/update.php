<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */

$this->title = 'Update Venta: ' . $model->IdVenta;
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdVenta, 'url' => ['view', 'id' => $model->IdVenta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="venta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
