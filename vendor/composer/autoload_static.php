<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7aee424318ec9b1df3fba099bc99f021
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'S' => 
        array (
            'SmartUI\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
        'C' => 
        array (
            'Common\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'SmartUI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/smartui',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
        'Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/common',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7aee424318ec9b1df3fba099bc99f021::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7aee424318ec9b1df3fba099bc99f021::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7aee424318ec9b1df3fba099bc99f021::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
