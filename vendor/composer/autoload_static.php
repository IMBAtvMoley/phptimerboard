<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf89a56757bd20e0a6430a54b2ea65a82
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplon\\Mysql\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplon\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf89a56757bd20e0a6430a54b2ea65a82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf89a56757bd20e0a6430a54b2ea65a82::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
