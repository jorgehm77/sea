<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransmisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transmisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transmision-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transmision', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTransmision',
            'Nombre',
            'Descripcion',
            'Estatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
