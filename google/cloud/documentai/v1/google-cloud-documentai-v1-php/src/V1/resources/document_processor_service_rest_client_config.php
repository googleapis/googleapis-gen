<?php

return [
    'interfaces' => [
        'google.cloud.documentai.v1.DocumentProcessorService' => [
            'ProcessDocument' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/processors/*}:process',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'BatchProcessDocuments' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/processors/*}:batchProcess',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ReviewDocument' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{human_review_config=projects/*/locations/*/processors/*/humanReviewConfig}:reviewDocument',
                'body' => '*',
                'placeholders' => [
                    'human_review_config' => [
                        'getters' => [
                            'getHumanReviewConfig',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
