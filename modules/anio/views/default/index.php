<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Años';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar año', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'IdAnio',
            'Numero',
            'Descripcion',
            //'Estatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
