<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfc3c3058ff852c09d58c4d1254ef04e
{
    public static $files = array (
        '08553373174aed5b2079e6334c2d2257' => __DIR__ . '/../..' . '/app/functions/custom.php',
        '0c48edfd83033889f779790f8f59dd48' => __DIR__ . '/../..' . '/app/functions/pages.php',
        '1a034cec71159224725114f89a820cf1' => __DIR__ . '/../..' . '/app/functions/validate.php',
        '06e2cc845cd457b9c47e81e7c59d160b' => __DIR__ . '/../..' . '/app/functions/flash.php',
        '832debbbcfeab8700db6cef00613e4fc' => __DIR__ . '/../..' . '/app/functions/email.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfc3c3058ff852c09d58c4d1254ef04e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfc3c3058ff852c09d58c4d1254ef04e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfc3c3058ff852c09d58c4d1254ef04e::$classMap;

        }, null, ClassLoader::class);
    }
}
