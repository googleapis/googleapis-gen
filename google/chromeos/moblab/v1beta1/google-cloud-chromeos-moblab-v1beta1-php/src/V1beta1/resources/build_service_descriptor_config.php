<?php

return [
    'interfaces' => [
        'google.chromeos.moblab.v1beta1.BuildService' => [
            'StageBuild' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Chromeos\Moblab\V1beta1\StageBuildResponse',
                    'metadataReturnType' => '\Google\Chromeos\Moblab\V1beta1\StageBuildMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListBuilds' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getBuilds',
                ],
            ],
        ],
    ],
];
