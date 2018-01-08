<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'oyOSoVNYDkc6FWMvBy-vBp9hQNM6d2VG',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'modules' => [
        'anio' => [
            'class' => 'app\modules\anio\anio',
        ],
        'cliente' => [
            'class' => 'app\modules\cliente\cliente',
        ],
        'devolucion' => [
            'class' => 'app\modules\devolucion\devolucion',
        ],
        'diagnostico' => [
            'class' => 'app\modules\diagnostico\diagnostico',
        ],
        'ecu' => [
            'class' => 'app\modules\ecu\ecu',
        ],
        'entrega' => [
            'class' => 'app\modules\entrega\entrega',
        ],
        'garantia' => [
            'class' => 'app\modules\garantia\garantia',
        ],
        'marca' => [
            'class' => 'app\modules\marca\marca',
        ],
        'modelo' => [
            'class' => 'app\modules\modelo\modelo',
        ],
        'motor' => [
            'class' => 'app\modules\motor\motor',
        ],
        'recepcion' => [
            'class' => 'app\modules\recepcion\recepcion',
        ],
        'reparacion' => [
            'class' => 'app\modules\reparacion\reparacion',
        ],
        'tecnico' => [
            'class' => 'app\modules\tecnico\tecnico',
        ],
        'usuario' => [
            'class' => 'app\modules\usuario\usuario',
        ],
        'venta' => [
            'class' => 'app\modules\venta\venta',
        ],
        'operacion' => [
            'class' => 'app\modules\operacion\operacion',
        ],
        'transmision' => [
            'class' => 'app\modules\transmision\transmision',
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
