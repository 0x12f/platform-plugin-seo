<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67a85971cd48281aec95bdb704521ceb
{
    public static $files = array (
        '383eaff206634a77a1be54e64e6459c7' => __DIR__ . '/..' . '/sabre/uri/lib/functions.php',
        '3569eecfeed3bcf0bad3c998a494ecb8' => __DIR__ . '/..' . '/sabre/xml/lib/Deserializer/functions.php',
        '93aa591bc4ca510c520999e34229ee79' => __DIR__ . '/..' . '/sabre/xml/lib/Serializer/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'samdark\\sitemap\\' => 16,
        ),
        'V' => 
        array (
            'Vitalybaev\\GoogleMerchant\\' => 26,
        ),
        'S' => 
        array (
            'Sabre\\Xml\\' => 10,
            'Sabre\\Uri\\' => 10,
        ),
        'B' => 
        array (
            'Bukashk0zzz\\YmlGenerator\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'samdark\\sitemap\\' => 
        array (
            0 => __DIR__ . '/..' . '/samdark/sitemap',
        ),
        'Vitalybaev\\GoogleMerchant\\' => 
        array (
            0 => __DIR__ . '/..' . '/vitalybaev/google-merchant-feed/src',
        ),
        'Sabre\\Xml\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/xml/lib',
        ),
        'Sabre\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/uri/lib',
        ),
        'Bukashk0zzz\\YmlGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/bukashk0zzz/yml-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67a85971cd48281aec95bdb704521ceb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67a85971cd48281aec95bdb704521ceb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}