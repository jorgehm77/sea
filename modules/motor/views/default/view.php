<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = $model->IdMotor;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdMotor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdMotor], [
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
            'IdMotor',
            'Nombre',
            'Descripcion',
            'Estatus',
        ],
    ]) ?>

</div>
