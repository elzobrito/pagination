<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89404a2270c270993a8039ab9a09b0e7
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'elzobrito\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'elzobrito\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89404a2270c270993a8039ab9a09b0e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89404a2270c270993a8039ab9a09b0e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
