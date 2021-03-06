<?php

return [
    'interfaces' => [
        'google.cloud.aiplatform.v1beta1.IndexEndpointService' => [
            'CreateIndexEndpoint' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Aiplatform\V1beta1\IndexEndpoint',
                    'metadataReturnType' => '\Google\Cloud\Aiplatform\V1beta1\CreateIndexEndpointOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'DeleteIndexEndpoint' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Cloud\Aiplatform\V1beta1\DeleteOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'DeployIndex' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Aiplatform\V1beta1\DeployIndexResponse',
                    'metadataReturnType' => '\Google\Cloud\Aiplatform\V1beta1\DeployIndexOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'UndeployIndex' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Aiplatform\V1beta1\UndeployIndexResponse',
                    'metadataReturnType' => '\Google\Cloud\Aiplatform\V1beta1\UndeployIndexOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListIndexEndpoints' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getIndexEndpoints',
                ],
            ],
        ],
    ],
];
