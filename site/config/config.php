<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => true,
    'yaml.handler' => 'symfony', // already makes use of the more modern Symfony YAML parser: https://getkirby.com/docs/reference/system/options/yaml (will become the default in a future Kirby version)
     'd4l' => [
            'static_site_generator' => [
                'endpoint' => 'generate-static-site', // Set to any string to use the built-in endpoint
                'output_folder' => './static', // Specify the output folder
                'preserve' => [], // Preserve individual files/folders in the output folder
                'base_url' => '', // Base URL for the static site
                'skip_media' => false, // Set to true to skip copying media files
                'skip_templates' => [], // Ignore pages with given templates
                'custom_routes' => [], // Define custom routes
                'custom_filters' => [], // Define custom filters
                'ignore_untranslated_pages' => false, // Ignore pages without an own language
                'index_file_name' => 'index.html' // Change the directory index file name
            ]
        ]
];
