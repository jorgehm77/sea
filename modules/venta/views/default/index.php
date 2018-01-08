<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Venta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdVenta',
            'FechaVenta',
            'Estatus',
            'IdEcu',
            'IdMarca',
            // 'IdModelo',
            // 'IdAnio',
            // 'IdMotor',
            // 'IdUsuario',
            // 'IdCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
