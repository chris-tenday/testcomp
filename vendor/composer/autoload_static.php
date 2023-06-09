<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit913fa7ecdf889d41bfea029fc57a73ce
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ChrisTenday\\Testcomp\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ChrisTenday\\Testcomp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit913fa7ecdf889d41bfea029fc57a73ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit913fa7ecdf889d41bfea029fc57a73ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit913fa7ecdf889d41bfea029fc57a73ce::$classMap;

        }, null, ClassLoader::class);
    }
}
