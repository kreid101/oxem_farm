<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dec817b95e702131d00c7615c7d9de9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dec817b95e702131d00c7615c7d9de9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dec817b95e702131d00c7615c7d9de9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9dec817b95e702131d00c7615c7d9de9::$classMap;

        }, null, ClassLoader::class);
    }
}
