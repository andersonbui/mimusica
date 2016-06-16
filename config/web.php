<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin', 'yesro'],
            'modelMap' => [
                'User' => 'app\models\Usuario',
                'RegistrationForm' => 'app\models\RegistrationForm',
                'LoginForm' => 'app\models\LoginForm',
                'Profile' => 'app\models\Perfil',
            ],
            'class' => \dektrium\user\Module::className(),
            'controllerMap' => [
                'settings' => 'app\controllers\SettingsController',
                'registration' => [
                    'class' => \dektrium\user\controllers\RegistrationController::className(),
                    'on ' . \dektrium\user\controllers\RegistrationController::EVENT_AFTER_CONFIRM=> function ($e) {
                        Yii::$app->response->redirect(['/user/settings'])->send();
//                        Yii::$app->response->redirect(array('/user/security/login'))->send();
                        Yii::$app->end();
                    }
                ],
            ],
        ],
        'rbac' => [
            'class' => 'dektrium\rbac\Module',
        ],
    ],
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es', // spanish
    'name' => 'Name de muestra', // spanish
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qrbB052lggAyJEJCHd6HQuMTi8ilS4ps',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'user' => [
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'mimusica.com.2016@gmail.com',
                'password' => 'M1mu51c4#',
//                'port' => '465',
//                'port' => '587',
                'port' => 25,
                'encryption' => 'tls',
            ],
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
        ///
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
//            'enablePrettyUrl' => true,
//            'showScriptName' => true,
//            'enableStrictParsing' => false,
//////////            'suffix' => '.html',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ],
    ///
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
