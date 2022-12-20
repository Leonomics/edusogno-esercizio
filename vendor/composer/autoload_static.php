<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita412946a530edca2094c8974d4bdadc1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita412946a530edca2094c8974d4bdadc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita412946a530edca2094c8974d4bdadc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita412946a530edca2094c8974d4bdadc1::$classMap;

        }, null, ClassLoader::class);
    }
}
