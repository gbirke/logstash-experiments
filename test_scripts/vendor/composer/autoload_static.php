<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite848c2b6ad8a1e0584fc49ffd380edeb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'G' => 
        array (
            'Gelf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Gelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/graylog2/gelf-php/src/Gelf',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite848c2b6ad8a1e0584fc49ffd380edeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite848c2b6ad8a1e0584fc49ffd380edeb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
