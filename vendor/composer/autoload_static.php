<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba6b0dd82b579c5d96005a180d4a1c56
{
    public static $files = array (
        '417fe62f0d797e28784f4608633ae341' => __DIR__ . '/../..' . '/common/functions.php',
        'dd187510abfb2ac4a27d704afc8471c4' => __DIR__ . '/../..' . '/common/test.php',
    );

    public static $classMap = array (
        'test' => __DIR__ . '/../..' . '/class/test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitba6b0dd82b579c5d96005a180d4a1c56::$classMap;

        }, null, ClassLoader::class);
    }
}
