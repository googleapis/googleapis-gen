<?php

return [
    'interfaces' => [
        'google.cloud.retail.v2beta.PredictionService' => [
            'Predict' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta/{placement=projects/*/locations/*/catalogs/*/placements/*}:predict',
                'body' => '*',
                'placeholders' => [
                    'placement' => [
                        'getters' => [
                            'getPlacement',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta/{name=projects/*/locations/*/catalogs/*/branches/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta/{name=projects/*/locations/*/catalogs/*/branches/*}/operations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
