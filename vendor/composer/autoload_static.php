<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c08d55adf5fd568db5bbe102e2cb098
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'Y' => 
        array (
            'Yukki\\Site\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'Yukki\\Site\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c08d55adf5fd568db5bbe102e2cb098::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c08d55adf5fd568db5bbe102e2cb098::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c08d55adf5fd568db5bbe102e2cb098::$classMap;

        }, null, ClassLoader::class);
    }
}
