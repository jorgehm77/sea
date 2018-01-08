<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Operacion */

$this->title = $model->idEcu->NoParte . '-' . $model->idCliente->Nombre;
$this->params['breadcrumbs'][] = ['label' => 'Operacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar registro', ['update', 'id' => $model->IdOperacion], ['class' => 'btn btn-primary']) ?>

    </p>
    <table style="width: 100%; margin: 2em;">
        <tr>
            <th>Folio</th>
            <th>Fecha</th>
            <th>Ecu</th>
            <th>Cliente</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Motor</th>
            <th>T&eacute;cnico</th>
            <th>Descripci&oacute;n</th>
            <th>Estatus</th>
            <th>Opciones</th>
        </tr>
        <tr>
            <td><?php echo $model->Folio ?></td>
            <td><?php echo $model->Fecha ?></td>
            <td><?php echo $model->idEcu->NoParte ?></td>
            <td><?php echo $model->idMarca->Nombre ?></td>
            <td><?php echo $model->idModelo->Nombre ?></td>
            <td><?php echo $model->idAnio->Numero ?></td>
            <td><?php echo $model->idMotor->Nombre ?></td>
            <td><?php echo $model->idTecnico->Nombre ?></td>
            <td><?php echo $model->Descripcion ?></td>
            <td><span class="label label-info"> <?php echo $model->EstatusOperacion ?></span></td>
            <td><?= Html::a('<span class="glyphicon glyphicon-cog"></span>', ['update', 'id' => $model->IdOperacion]) ?></td>
            <td><?php if ($model->EstatusOperacion == 'RECEPCION') { ?>
                <a title="Pasar a diagnóstico" href="<?php ?>"><i class="fa fa-share-square" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'DIAGNOSTICO') { ?>
                    <a title="Enviar a reparación"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                    <a title="Marcar como devuelta"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'REPARACION') { ?>
                    <a title="Indicar como reparada"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'REPARADA') { ?>
                    <a title="Indicar como entregada"><i class="fa fa-check" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'ENTREGADA') { ?>
                    <a title="Pasar a garantía(recepción)"><i class="fa fa-reply-all" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'GARANTIA RECEPCION') { ?>
                    <a title="Pasar a garantía diagnóstico"><i class="fa fa-share-square" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'GARANTIA DIAGNOSTICO') { ?>
                    <a title="Pasar a garantía devolución"><i class="fa fa-share-square" aria-hidden="true"></i></a>
                    <a title="Pasar a garantía reparación"><i class="fa fa-window-close-o" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'GARANTIA REPARACION') { ?>
                    <a title="Indicar como garantía reparada"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                    <?php } ?>
                    <?php if ($model->EstatusOperacion == 'GARANTIA REPARADA') { ?>
                    <a title="Indicar como garantía entregada"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                    <?php } ?>  
                </td>
            </tr>
        </table>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if (count($comentarios) > 0) { ?>
                    <?php foreach ($comentarios as $comentario) { ?>
                        <?php echo $comentario->Fecha ?>
                        <?php echo $comentario->Comentario ?>
                    <?php } ?>
                <?php } ?>
                <?php if (count($comentarios == 0)) { ?>
                    <span>No existen comentarios.</span>
                <?php } ?>  
            </div>
        </div>  
        <?php
        Modal::begin([
            'header' => '<h2>Hello world</h2>',
            'toggleButton' => ['label' => 'click me'],
        ]);

        echo 'Say hello...';

        Modal::end();
        ?>

</div>
