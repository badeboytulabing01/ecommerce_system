<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita899c2c731bb29618fd895d3f8563c9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita899c2c731bb29618fd895d3f8563c9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita899c2c731bb29618fd895d3f8563c9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita899c2c731bb29618fd895d3f8563c9b::$classMap;

        }, null, ClassLoader::class);
    }
}
