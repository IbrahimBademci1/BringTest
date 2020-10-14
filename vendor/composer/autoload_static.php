<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89cf07a5f8b59dd713d61b6f1083e98d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brohim\\Bringapi\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brohim\\Bringapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89cf07a5f8b59dd713d61b6f1083e98d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89cf07a5f8b59dd713d61b6f1083e98d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}