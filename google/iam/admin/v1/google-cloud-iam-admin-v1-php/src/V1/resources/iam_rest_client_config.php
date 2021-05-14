<?php

return [
    'interfaces' => [
        'google.iam.admin.v1.IAM' => [
            'CreateRole' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=organizations/*}/roles',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{parent=projects/*}/roles',
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
            'CreateServiceAccount' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*}/serviceAccounts',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateServiceAccountKey' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}/keys',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteRole' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=organizations/*/roles/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v1/{name=projects/*/roles/*}',
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
            'DeleteServiceAccount' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteServiceAccountKey' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*/keys/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DisableServiceAccount' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}:disable',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'EnableServiceAccount' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}:enable',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{resource=projects/*/serviceAccounts/*}:getIamPolicy',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'GetRole' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=roles/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=organizations/*/roles/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/roles/*}',
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
            'GetServiceAccount' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetServiceAccountKey' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*/keys/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'LintPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v1/iamPolicies:lintPolicy',
                'body' => '*',
            ],
            'ListRoles' => [
                'method' => 'get',
                'uriTemplate' => '/v1/roles',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{parent=organizations/*}/roles',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{parent=projects/*}/roles',
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
            'ListServiceAccountKeys' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}/keys',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListServiceAccounts' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*}/serviceAccounts',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'PatchServiceAccount' => [
                'method' => 'patch',
                'uriTemplate' => '/v1/{service_account.name=projects/*/serviceAccounts/*}',
                'body' => '*',
                'placeholders' => [
                    'service_account.name' => [
                        'getters' => [
                            'getServiceAccount',
                            'getName',
                        ],
                    ],
                ],
            ],
            'QueryAuditableServices' => [
                'method' => 'post',
                'uriTemplate' => '/v1/iamPolicies:queryAuditableServices',
                'body' => '*',
            ],
            'QueryGrantableRoles' => [
                'method' => 'post',
                'uriTemplate' => '/v1/roles:queryGrantableRoles',
                'body' => '*',
            ],
            'QueryTestablePermissions' => [
                'method' => 'post',
                'uriTemplate' => '/v1/permissions:queryTestablePermissions',
                'body' => '*',
            ],
            'SetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{resource=projects/*/serviceAccounts/*}:setIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'SignBlob' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}:signBlob',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'SignJwt' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}:signJwt',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'TestIamPermissions' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{resource=projects/*/serviceAccounts/*}:testIamPermissions',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'UndeleteRole' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=organizations/*/roles/*}:undelete',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{name=projects/*/roles/*}:undelete',
                        'body' => '*',
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
            'UndeleteServiceAccount' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}:undelete',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UpdateRole' => [
                'method' => 'patch',
                'uriTemplate' => '/v1/{name=organizations/*/roles/*}',
                'body' => 'role',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v1/{name=projects/*/roles/*}',
                        'body' => 'role',
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
            'UpdateServiceAccount' => [
                'method' => 'put',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UploadServiceAccountKey' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/serviceAccounts/*}/keys:upload',
                'body' => '*',
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
