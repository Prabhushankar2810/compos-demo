<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa47449efbd41dec8109d3fff02b485d
{
    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Weaverryan\\DangerZone' => 
            array (
                0 => __DIR__ . '/..' . '/weaverryan/derp-dangerzone/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfa47449efbd41dec8109d3fff02b485d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
