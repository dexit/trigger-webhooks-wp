<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35b876ad8ed1cd39abc0c11813ea86cb
{
    public static $files = array (
        'fb77778504e707e8e5af7af09714c0b2' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TWH\\' => 4,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TWH\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35b876ad8ed1cd39abc0c11813ea86cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35b876ad8ed1cd39abc0c11813ea86cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35b876ad8ed1cd39abc0c11813ea86cb::$classMap;

        }, null, ClassLoader::class);
    }
}
