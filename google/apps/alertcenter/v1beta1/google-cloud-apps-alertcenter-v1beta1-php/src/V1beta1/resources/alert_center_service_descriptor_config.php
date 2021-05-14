<?php

return [
    'interfaces' => [
        'google.apps.alertcenter.v1beta1.AlertCenterService' => [
            'ListAlerts' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getAlerts',
                ],
            ],
        ],
    ],
];
