<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fc723e42511b8b2f7e62f02e097755b
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\jui\\' => 8,
            'yii\\imagine\\' => 12,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\authclient\\' => 15,
            'yii\\' => 4,
        ),
        'm' => 
        array (
            'mongosoft\\file\\' => 15,
        ),
        'k' => 
        array (
            'kartik\\select2\\' => 15,
            'kartik\\base\\' => 12,
            'karpoff\\icrop\\' => 14,
        ),
        'd' => 
        array (
            'dosamigos\\gallery\\' => 18,
            'dektrium\\user\\' => 14,
            'dektrium\\rbac\\' => 14,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\jui\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-jui',
        ),
        'yii\\imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-imagine',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\authclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-authclient',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'mongosoft\\file\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongosoft/yii2-upload-behavior',
        ),
        'kartik\\select2\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-select2',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'karpoff\\icrop\\' => 
        array (
            0 => __DIR__ . '/..' . '/karpoff/yii2-crop-image-upload',
        ),
        'dosamigos\\gallery\\' => 
        array (
            0 => __DIR__ . '/..' . '/2amigos/yii2-gallery-widget/src',
        ),
        'dektrium\\user\\' => 
        array (
            0 => __DIR__ . '/..' . '/dektrium/yii2-user',
        ),
        'dektrium\\rbac\\' => 
        array (
            0 => __DIR__ . '/..' . '/dektrium/yii2-rbac',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fc723e42511b8b2f7e62f02e097755b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fc723e42511b8b2f7e62f02e097755b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0fc723e42511b8b2f7e62f02e097755b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
