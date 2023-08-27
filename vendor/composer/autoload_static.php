<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e8d42b6f866cb14fc8d3bceaff5a480
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e8d42b6f866cb14fc8d3bceaff5a480::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e8d42b6f866cb14fc8d3bceaff5a480::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e8d42b6f866cb14fc8d3bceaff5a480::$classMap;

        }, null, ClassLoader::class);
    }
}