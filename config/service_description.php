<?php

return [
    'name' => 'Google Places API',
    'baseUrl' => 'https://maps.googleapis.com/maps/api/place',
    'operations' => [
        '_search' => [
            'httpMethod' => 'GET',
            'additionalParameters' => [
                'location' => 'query',
            ],
            'parameters' => [
                'location' => [
                    'location' => 'query',
                    'required' => true,
                    'description' => 'The latitude/longitude around which to retrieve place information. This must be specified as latitude,longitude.',
                ],
                'radius' => [
                    'location' => 'query',
                    'description' => 'Defines the distance (in meters) within which to return place results. The maximum allowed radius is 50 000 meters. Note that radius must not be included if rankby=distance (described under Optional parameters below) is specified.',
                ],
                'keyword' => [
                    'location' => 'query',
                    'description' => 'A term to be matched against all content that Google has indexed for this place, including but not limited to name, type, and address, as well as customer reviews and other third-party content.',
                ],
                'language' => [
                    'location' => 'query',
                    'description' => 'The language code, indicating in which language the results should be returned, if possible. See the list of supported languages and their codes. Note that we often update supported languages so this list may not be exhaustive.',
                ],
            ],
        ],
        'nearbysearch' => [
            'extends' => '_search',
            'uri' => 'nearbysearch/json',
        ],
        'radarsearch' => [
            'extends' => '_search',
            'uri' => 'radarsearch/json',
        ],
    ],
];
