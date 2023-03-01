<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d36b99b348da140b3eabbee0b844350
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6d36b99b348da140b3eabbee0b844350::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6d36b99b348da140b3eabbee0b844350::$classMap;

        }, null, ClassLoader::class);
    }
}
