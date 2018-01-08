<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anio */

$this->title = 'Update Anio: ' . $model->IdAnio;
$this->params['breadcrumbs'][] = ['label' => 'Anios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAnio, 'url' => ['view', 'id' => $model->IdAnio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
