<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ecu */

$this->title = 'Create Ecu';
$this->params['breadcrumbs'][] = ['label' => 'Ecus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
