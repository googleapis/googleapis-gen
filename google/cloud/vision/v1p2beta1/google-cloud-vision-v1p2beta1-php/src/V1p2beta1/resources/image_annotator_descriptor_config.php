<?php

return [
    'interfaces' => [
        'google.cloud.vision.v1p2beta1.ImageAnnotator' => [
            'AsyncBatchAnnotateFiles' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Vision\V1p2beta1\AsyncBatchAnnotateFilesResponse',
                    'metadataReturnType' => '\Google\Cloud\Vision\V1p2beta1\OperationMetadata',
                    'initialPollDelayMillis' => '20000',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '45000',
                    'totalPollTimeoutMillis' => '86400000',
                ],
            ],
        ],
    ],
];
