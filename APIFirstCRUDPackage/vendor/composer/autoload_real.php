<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf774ebaca43034e3275f967eb6d7dc52
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf774ebaca43034e3275f967eb6d7dc52', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf774ebaca43034e3275f967eb6d7dc52', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf774ebaca43034e3275f967eb6d7dc52::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
