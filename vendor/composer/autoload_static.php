<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dc703b5fe60b5b229f3f5bc055a02f2
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Julie\\App\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Julie\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dc703b5fe60b5b229f3f5bc055a02f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dc703b5fe60b5b229f3f5bc055a02f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0dc703b5fe60b5b229f3f5bc055a02f2::$classMap;

        }, null, ClassLoader::class);
    }
}
