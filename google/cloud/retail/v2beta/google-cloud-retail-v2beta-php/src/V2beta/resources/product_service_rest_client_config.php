<?php

return [
    'interfaces' => [
        'google.cloud.retail.v2beta.ProductService' => [
            'CreateProduct' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta/{parent=projects/*/locations/*/catalogs/*/branches/*}/products',
                'body' => 'product',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetProduct' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta/{name=projects/*/locations/*/catalogs/*/branches/*/products/**}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UpdateProduct' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta/{product.name=projects/*/locations/*/catalogs/*/branches/*/products/**}',
                'body' => 'product',
                'placeholders' => [
                    'product.name' => [
                        'getters' => [
                            'getProduct',
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteProduct' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta/{name=projects/*/locations/*/catalogs/*/branches/*/products/**}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ImportProducts' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta/{parent=projects/*/locations/*/catalogs/*/branches/*}/products:import',
                'body' => '*',
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
