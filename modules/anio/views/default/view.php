<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anio */

$this->title = $model->IdAnio;
$this->params['breadcrumbs'][] = ['label' => 'Anios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdAnio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdAnio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdAnio',
            'Numero',
            'Descripcion',
            'Estatus',
        ],
    ]) ?>

</div>
