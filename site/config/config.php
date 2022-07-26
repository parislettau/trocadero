<?php

return [
    'debug' => true, // turn to false once finished

    # https://github.com/medienbaecker/kirby-autoresize
    'medienbaecker.autoresize.maxWidth' => 1980,

    # https://github.com/d4l-data4life/kirby3-static-site-generator
    'd4l' => [
        'static_site_generator' => [
            'endpoint' => "generate-static-site", # set to any string like 'generate-static-site' to use the built-in endpoint (necessary when using the blueprint field)
            'output_folder' => './static', # you can specify an absolute or relative path
            'preserve' => [], # preserve individual files / folders in the root level of the output folder (anything starting with "." is always preserved)
            'base_url' => '/', # if the static site is not mounted to the root folder of your domain, change accordingly here
            'skip_media' => false, # set to true to skip copying media files, e.g. when they are already on a CDN; combinable with 'preserve' => ['media']
            'skip_templates' => [], # ignore pages with given templates (home is always rendered)
            'custom_routes' => [], # see below for more information on custom routes
            'custom_filters' => [] # see below for more information on custom filters
        ]
    ],

    # https://github.com/thathoff/kirby-git-content
    // other configuration options
    // 'thathoff' => [
    //     'git-content' => [
    //         'commit' => true,
    //         'path' => kirby()->root("static"),
    //     ],
    // ],
];
