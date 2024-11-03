<?php
#https://github.com/johannschopplich/kirby-helpers
// load dotenv plugins class so getenv can be used outside of closures
$base = dirname(__DIR__, 2);
\JohannSchopplich\Helpers\Env::load($base);

return [
    // 'url' => 'https://trocaderoprojects.org.au/',

    'url' => env('URL'),

    'debug' => env('DEBUG'),

    // 'panel' => [
    //     'install' => true   // https://getkirby.com/docs/reference/system/options/panel
    //     // turn to false once installed
    // ],

    // 'debug' => true, // turn to false once finished

    # https://github.com/medienbaecker/kirby-autoresize
    'medienbaecker.autoresize.maxWidth' => 2000,
    'medienbaecker.autoresize.maxHeight' => 2000,
    'medienbaecker.autoresize.quality' => 90,

    # https://getkirby.com/docs/reference/objects/cms/file/srcset
    // 'thumbs' => [
    //     // 'driver' => 'im',                                       //https://getkirby.com/docs/guide/troubleshooting/thumbnails
    //     // 'bin' => '/usr/local/bin/convert',                                      //https://getkirby.com/docs/guide/troubleshooting/thumbnails
    //     'srcsets' => [                                          // https://getkirby.com/docs/cookbook/performance/responsive-images
    //         'default' => [
    //             '300w'  => ['width' => 300],
    //             '600w'  => ['width' => 600],
    //             '900w'  => ['width' => 900],
    //             '1200w' => ['width' => 1200],
    //             '1800w' => ['width' => 1800]
    //         ],
    //         'avif' => [
    //             '300w'  => ['width' => 300, 'format' => 'avif'],
    //             '600w'  => ['width' => 600, 'format' => 'avif'],
    //             '900w'  => ['width' => 900, 'format' => 'avif'],
    //             '1200w' => ['width' => 1200, 'format' => 'avif'],
    //             '1800w' => ['width' => 1800, 'format' => 'avif']
    //         ],
    //         'webp' => [
    //             '300w'  => ['width' => 300, 'format' => 'webp'],
    //             '600w'  => ['width' => 600, 'format' => 'webp'],
    //             '900w'  => ['width' => 900, 'format' => 'webp'],
    //             '1200w' => ['width' => 1200, 'format' => 'webp'],
    //             '1800w' => ['width' => 1800, 'format' => 'webp']
    //         ],
    //     ]
    // ]
];
