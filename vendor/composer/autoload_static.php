<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9b75622d6ef75c23d6f13dc4279fef0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9b75622d6ef75c23d6f13dc4279fef0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9b75622d6ef75c23d6f13dc4279fef0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9b75622d6ef75c23d6f13dc4279fef0::$classMap;

        }, null, ClassLoader::class);
    }
}
