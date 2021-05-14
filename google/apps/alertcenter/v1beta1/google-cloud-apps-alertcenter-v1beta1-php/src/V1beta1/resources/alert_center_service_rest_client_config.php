<?php

return [
    'interfaces' => [
        'google.apps.alertcenter.v1beta1.AlertCenterService' => [
            'BatchDeleteAlerts' => [
                'method' => 'post',
                'uriTemplate' => '/v1beta1/alerts:batchDelete',
                'body' => '*',
            ],
            'BatchUndeleteAlerts' => [
                'method' => 'post',
                'uriTemplate' => '/v1beta1/alerts:batchUndelete',
                'body' => '*',
            ],
            'CreateAlertFeedback' => [
                'method' => 'post',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}/feedback',
                'body' => 'feedback',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'DeleteAlert' => [
                'method' => 'delete',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'GetAlert' => [
                'method' => 'get',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'GetAlertMetadata' => [
                'method' => 'get',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}/metadata',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'GetSettings' => [
                'method' => 'get',
                'uriTemplate' => '/v1beta1/settings',
            ],
            'ListAlertFeedback' => [
                'method' => 'get',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}/feedback',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'ListAlerts' => [
                'method' => 'get',
                'uriTemplate' => '/v1beta1/alerts',
            ],
            'UndeleteAlert' => [
                'method' => 'post',
                'uriTemplate' => '/v1beta1/alerts/{alert_id}:undelete',
                'body' => '*',
                'placeholders' => [
                    'alert_id' => [
                        'getters' => [
                            'getAlertId',
                        ],
                    ],
                ],
            ],
            'UpdateSettings' => [
                'method' => 'patch',
                'uriTemplate' => '/v1beta1/settings',
                'body' => 'settings',
            ],
        ],
    ],
];
