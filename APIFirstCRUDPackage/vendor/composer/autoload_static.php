<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf774ebaca43034e3275f967eb6d7dc52
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saifkamal\\ApiFirstCrudPackage\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saifkamal\\ApiFirstCrudPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf774ebaca43034e3275f967eb6d7dc52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf774ebaca43034e3275f967eb6d7dc52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf774ebaca43034e3275f967eb6d7dc52::$classMap;

        }, null, ClassLoader::class);
    }
}
