<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EcuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ecus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'IdEcu',
            'NoParte',
            'Descripcion',
            //'Estatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
