<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0150ec3edde32754927f2495dd6425a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0150ec3edde32754927f2495dd6425a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0150ec3edde32754927f2495dd6425a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0150ec3edde32754927f2495dd6425a::$classMap;

        }, null, ClassLoader::class);
    }
}
