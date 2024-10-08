<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc453ea7ae4b8b9deb5ad90ec39b0edd
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
        'B' => 
        array (
            'BrenoBarbosa\\Ep13\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
        'BrenoBarbosa\\Ep13\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc453ea7ae4b8b9deb5ad90ec39b0edd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc453ea7ae4b8b9deb5ad90ec39b0edd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc453ea7ae4b8b9deb5ad90ec39b0edd::$classMap;

        }, null, ClassLoader::class);
    }
}
