<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcee0f1cf5441e8ffc83b6c7088643b00
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

        spl_autoload_register(array('ComposerAutoloaderInitcee0f1cf5441e8ffc83b6c7088643b00', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcee0f1cf5441e8ffc83b6c7088643b00', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcee0f1cf5441e8ffc83b6c7088643b00::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
