<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ecu */

$this->title = 'Update Ecu: ' . $model->IdEcu;
$this->params['breadcrumbs'][] = ['label' => 'Ecus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdEcu, 'url' => ['view', 'id' => $model->IdEcu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ecu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
