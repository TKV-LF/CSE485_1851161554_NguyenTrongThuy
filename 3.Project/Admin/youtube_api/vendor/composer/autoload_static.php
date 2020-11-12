<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20b75df6a36654db75bea3a678fa3401
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Madcoda' => 
            array (
                0 => __DIR__ . '/..' . '/madcoda/php-youtube-api/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit20b75df6a36654db75bea3a678fa3401::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit20b75df6a36654db75bea3a678fa3401::$classMap;

        }, null, ClassLoader::class);
    }
}