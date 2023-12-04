<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ace709a74965b4f0e2b02e73f95b27f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Anaelle\\SitePorteFolio\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Anaelle\\SitePorteFolio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ace709a74965b4f0e2b02e73f95b27f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ace709a74965b4f0e2b02e73f95b27f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ace709a74965b4f0e2b02e73f95b27f::$classMap;

        }, null, ClassLoader::class);
    }
}
