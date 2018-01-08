<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anio */

$this->title = 'Registrar año';
$this->params['breadcrumbs'][] = ['label' => 'Anios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
