<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tecnico */

$this->title = 'Update Tecnico: ' . $model->IdTecnico;
$this->params['breadcrumbs'][] = ['label' => 'Tecnicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTecnico, 'url' => ['view', 'id' => $model->IdTecnico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tecnico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
