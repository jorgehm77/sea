<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Transmision */

$this->title = $model->IdTransmision;
$this->params['breadcrumbs'][] = ['label' => 'Transmisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transmision-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdTransmision], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdTransmision], [
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
            'IdTransmision',
            'Nombre',
            'Descripcion',
            'Estatus',
        ],
    ]) ?>

</div>
