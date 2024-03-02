<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitebba1dc646c86a6bcde9f6f5dab8301c
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

        spl_autoload_register(array('ComposerAutoloaderInitebba1dc646c86a6bcde9f6f5dab8301c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitebba1dc646c86a6bcde9f6f5dab8301c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitebba1dc646c86a6bcde9f6f5dab8301c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}