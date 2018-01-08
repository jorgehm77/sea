<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Operacion */

$this->title = 'Registro de nueva recepción';
$this->params['breadcrumbs'][] = ['label' => 'Operaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
