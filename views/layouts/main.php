<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'SEA',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                        ['label' => 'toggle', 'url' => ['#menu-toggle'], 'options' => ['id' => 'menu-toggle']],
                    Yii::$app->user->isGuest ? (
                                ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            <div id="wrapper">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                Start Bootstrap
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/operacion']); ?>">Recepciones</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/cliente']); ?>">Clientes</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/ecu']); ?>">ECUS</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/motor']); ?>">Motores</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/marca']); ?>">Marcas</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/modelo']); ?>">Modelos</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/anio']); ?>">Años</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/tecnico']); ?>">Técnicos</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/usuario']); ?>">Usuarios</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/operacion']); ?>">Garant&iacute;as</a>
                        </li>                
                        <li>
                            <a href="<?= Url::to(['/venta']); ?>">Venta</a>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">                        
                                <?= $content ?>                        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->

            </div>
        </div>

        <footer class="footer col-lg-12">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
        <!-- Menu Toggle Script -->

        <?php $this->endBody() ?>
        <?php $this->registerJsFile('@web/js/menu-toggle.js', ['position' => \yii\web\View::POS_END]); ?>
    </body>
</html>
<?php $this->endPage() ?>
