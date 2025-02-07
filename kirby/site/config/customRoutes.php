<?php

return [
    [
        'path' => 'my/route',
    ],
    [
        'path' => 'foo/bar',
        'page' => 'some-page-id'
    ],
    [
        'path' => 'sitemap.xml',
        'route' => 'my/sitemap/route'
    ],
    [
        'path' => 'foo/baz',
        'page' => page('some-page-id'),
        'languageCode' => 'en',
        'baseUrl' => '/custom-base-url/',
        'data' => [
            'foo' => 'bar'
        ]
    ]
];