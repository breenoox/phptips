<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f930c28e35409ecdb8713cdf8d1b163
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'CoffeeCode\\Paginator\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
        'B' => 
        array (
            'BrenoBarbosa\\Ep05\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'CoffeeCode\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/paginator/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
        'BrenoBarbosa\\Ep05\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f930c28e35409ecdb8713cdf8d1b163::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f930c28e35409ecdb8713cdf8d1b163::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f930c28e35409ecdb8713cdf8d1b163::$classMap;

        }, null, ClassLoader::class);
    }
}
