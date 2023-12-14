<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ce85e1c82b4cbf2e27a8ac16f997a29
{
    public static $files = array (
        '23084107b6d1f20643b63bd5e97de6aa' => __DIR__ . '/..' . '/wildoperation/wp-plugin-review-bug/class-wppluginreviewbug.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WOPECTEC\\' => 9,
        ),
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WOPECTEC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\AutoloadMerger' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/AutoloadMerger.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\Plugin\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Transformer.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'WOPECTEC\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'WOPECTEC\\Vendor\\WOWPRB\\WPPluginReviewBug' => __DIR__ . '/..' . '/wildoperation/wp-plugin-review-bug/class-wppluginreviewbug.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ce85e1c82b4cbf2e27a8ac16f997a29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ce85e1c82b4cbf2e27a8ac16f997a29::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ce85e1c82b4cbf2e27a8ac16f997a29::$classMap;

        }, null, ClassLoader::class);
    }
}
