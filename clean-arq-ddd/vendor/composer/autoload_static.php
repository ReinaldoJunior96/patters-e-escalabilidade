<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57c7122b874da1328580213298b83774
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Infrastructure\\' => 15,
        ),
        'D' => 
        array (
            'Domain\\' => 7,
        ),
        'A' => 
        array (
            'Application\\' => 12,
            'Adapters\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Infrastructure\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Infrastructure',
        ),
        'Domain\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Domain',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Application',
        ),
        'Adapters\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Adapters',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57c7122b874da1328580213298b83774::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57c7122b874da1328580213298b83774::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57c7122b874da1328580213298b83774::$classMap;

        }, null, ClassLoader::class);
    }
}
