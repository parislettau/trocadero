<?php

return [
    'debug' => true,
    'd4l' => [
        'static_site_generator' => [
            'endpoint' => 'd4l.static_site_generator.endpoint', # set to any string like 'generate-static-site' to use the built-in endpoint (necessary when using the blueprint field)
            'output_folder' => './static', # you can specify an absolute or relative path
            'preserve' => [], # preserve individual files / folders in the root level of the output folder (anything starting with "." is always preserved)
            'base_url' => '/', # if the static site is not mounted to the root folder of your domain, change accordingly here
            'skip_media' => false, # set to true to skip copying media files, e.g. when they are already on a CDN; combinable with 'preserve' => ['media']
            'skip_templates' => [], # ignore pages with given templates (home is always rendered)
            'custom_routes' => [], # see below for more information on custom routes
            'custom_filters' => [] # see below for more information on custom filters
        ]
    ]
];

// turn to false once finished