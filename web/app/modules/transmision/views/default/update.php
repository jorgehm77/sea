<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Transmision */

$this->title = 'Update Transmision: ' . $model->IdTransmision;
$this->params['breadcrumbs'][] = ['label' => 'Transmisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTransmision, 'url' => ['view', 'id' => $model->IdTransmision]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transmision-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
