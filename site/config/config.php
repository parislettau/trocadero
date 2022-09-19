<?php

return [
    'panel' => [
        'install' => true   // https://getkirby.com/docs/reference/system/options/panel
        // turn to false once installed
    ],

    'debug' => true, // turn to false once finished

    # https://github.com/medienbaecker/kirby-autoresize
    'medienbaecker.autoresize.maxWidth' => 1980,

    # https://getkirby.com/docs/reference/objects/cms/file/srcset
    'thumbs' => [
        'driver' => 'im',                                       //https://getkirby.com/docs/guide/troubleshooting/thumbnails
        'bin' => 'convert',                        //https://getkirby.com/docs/guide/troubleshooting/thumbnails
        'srcsets' => [                                          // https://getkirby.com/docs/cookbook/performance/responsive-images
            'default' => [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800]
            ],
            'avif' => [
                '300w'  => ['width' => 300, 'format' => 'avif'],
                '600w'  => ['width' => 600, 'format' => 'avif'],
                '900w'  => ['width' => 900, 'format' => 'avif'],
                '1200w' => ['width' => 1200, 'format' => 'avif'],
                '1800w' => ['width' => 1800, 'format' => 'avif']
            ],
            'webp' => [
                '300w'  => ['width' => 300, 'format' => 'webp'],
                '600w'  => ['width' => 600, 'format' => 'webp'],
                '900w'  => ['width' => 900, 'format' => 'webp'],
                '1200w' => ['width' => 1200, 'format' => 'webp'],
                '1800w' => ['width' => 1800, 'format' => 'webp']
            ],
        ]
    ]
];
