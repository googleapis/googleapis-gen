<?php

return [
    'interfaces' => [
        'google.maps.playablelocations.v3.PlayableLocations' => [
            'LogImpressions' => [
                'method' => 'post',
                'uriTemplate' => '/v3:logImpressions',
                'body' => '*',
            ],
            'LogPlayerReports' => [
                'method' => 'post',
                'uriTemplate' => '/v3:logPlayerReports',
                'body' => '*',
            ],
            'SamplePlayableLocations' => [
                'method' => 'post',
                'uriTemplate' => '/v3:samplePlayableLocations',
                'body' => '*',
            ],
        ],
    ],
];
