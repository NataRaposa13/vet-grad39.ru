<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite755cfc0aae8ea7ed25c4c3455e6af9e
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vetgrad\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vetgrad\\' => 
        array (
            0 => __DIR__ . '/..' . '/vet-grad/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite755cfc0aae8ea7ed25c4c3455e6af9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite755cfc0aae8ea7ed25c4c3455e6af9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite755cfc0aae8ea7ed25c4c3455e6af9e::$classMap;

        }, null, ClassLoader::class);
    }
}
