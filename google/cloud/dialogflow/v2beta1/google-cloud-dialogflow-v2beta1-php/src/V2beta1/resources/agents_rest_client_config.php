<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.Agents' => [
            'GetAgent' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'SetAgent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{agent.parent=projects/*}/agent',
                'body' => 'agent',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{agent.parent=projects/*/locations/*}/agent',
                        'body' => 'agent',
                    ],
                ],
                'placeholders' => [
                    'agent.parent' => [
                        'getters' => [
                            'getAgent',
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteAgent' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'SearchAgents' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent:search',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent:search',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'TrainAgent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent:train',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent:train',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ExportAgent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent:export',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent:export',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ImportAgent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent:import',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent:import',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'RestoreAgent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent:restore',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent:restore',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetValidationResult' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*}/agent/validationResult',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*}/agent/validationResult',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{name=projects/*/operations/*}:cancel',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/operations/*}:cancel',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/operations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/operations/*}',
                    ],
                ],
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
                'uriTemplate' => '/v2beta1/{name=projects/*}/operations',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*}/operations',
                    ],
                ],
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
