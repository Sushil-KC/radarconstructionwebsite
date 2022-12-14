<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcdc3e5ed8ce3df88966a51a76d5ab1ce
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

        spl_autoload_register(array('ComposerAutoloaderInitcdc3e5ed8ce3df88966a51a76d5ab1ce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcdc3e5ed8ce3df88966a51a76d5ab1ce', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcdc3e5ed8ce3df88966a51a76d5ab1ce::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitcdc3e5ed8ce3df88966a51a76d5ab1ce::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirecdc3e5ed8ce3df88966a51a76d5ab1ce($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirecdc3e5ed8ce3df88966a51a76d5ab1ce($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
