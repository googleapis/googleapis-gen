<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/api/serviceusage/v1/serviceusage.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Api\Serviceusage\V1\Gapic;

use Google\Api\Serviceusage\V1\BatchEnableServicesRequest;
use Google\Api\Serviceusage\V1\BatchGetServicesRequest;

use Google\Api\Serviceusage\V1\BatchGetServicesResponse;

use Google\Api\Serviceusage\V1\DisableServiceRequest;
use Google\Api\Serviceusage\V1\EnableServiceRequest;
use Google\Api\Serviceusage\V1\GetServiceRequest;
use Google\Api\Serviceusage\V1\ListServicesRequest;
use Google\Api\Serviceusage\V1\ListServicesResponse;
use Google\Api\Serviceusage\V1\Service;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;

use Google\Auth\FetchAuthTokenInterface;
use Google\LongRunning\Operation;

/**
 * Service Description: [Service Usage API](/service-usage/docs/overview)
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $serviceUsageClient = new ServiceUsageClient();
 * try {
 *     $operationResponse = $serviceUsageClient->batchEnableServices();
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $serviceUsageClient->batchEnableServices();
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $serviceUsageClient->resumeOperation($operationName, 'batchEnableServices');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $serviceUsageClient->close();
 * }
 * ```
 */
class ServiceUsageGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.api.serviceusage.v1.ServiceUsage';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'serviceusage.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
        'https://www.googleapis.com/auth/service.management',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/service_usage_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/service_usage_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/service_usage_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/service_usage_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'serviceusage.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Enable multiple services on a project. The operation is atomic: if enabling
     * any service fails, then the entire batch fails, and no state changes occur.
     * To enable a single service, use the `EnableService` method instead.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     $operationResponse = $serviceUsageClient->batchEnableServices();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $serviceUsageClient->batchEnableServices();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $serviceUsageClient->resumeOperation($operationName, 'batchEnableServices');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Parent to enable services on.
     *
     *           An example name would be:
     *           `projects/123` where `123` is the project number.
     *
     *           The `BatchEnableServices` method currently only supports projects.
     *     @type string[] $serviceIds
     *           The identifiers of the services to enable on the project.
     *
     *           A valid identifier would be:
     *           serviceusage.googleapis.com
     *
     *           Enabling services requires that each service is public or is shared with
     *           the user enabling the service.
     *
     *           A single request can enable a maximum of 20 services at a time. If more
     *           than 20 services are specified, the request will fail, and no state changes
     *           will occur.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function batchEnableServices(array $optionalArgs = [])
    {
        $request = new BatchEnableServicesRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['serviceIds'])) {
            $request->setServiceIds($optionalArgs['serviceIds']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('BatchEnableServices', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Returns the service configurations and enabled states for a given list of
     * services.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     $response = $serviceUsageClient->batchGetServices();
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Parent to retrieve services from.
     *           If this is set, the parent of all of the services specified in `names` must
     *           match this field. An example name would be: `projects/123` where `123` is
     *           the project number. The `BatchGetServices` method currently only supports
     *           projects.
     *     @type string[] $names
     *           Names of the services to retrieve.
     *
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *           A single request can get a maximum of 30 services at a time.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Api\Serviceusage\V1\BatchGetServicesResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function batchGetServices(array $optionalArgs = [])
    {
        $request = new BatchGetServicesRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['names'])) {
            $request->setNames($optionalArgs['names']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('BatchGetServices', BatchGetServicesResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Disable a service so that it can no longer be used with a project.
     * This prevents unintended usage that may cause unexpected billing
     * charges or security leaks.
     *
     * It is not valid to call the disable method on a service that is not
     * currently enabled. Callers will receive a `FAILED_PRECONDITION` status if
     * the target service is not currently enabled.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     $operationResponse = $serviceUsageClient->disableService();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $serviceUsageClient->disableService();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $serviceUsageClient->resumeOperation($operationName, 'disableService');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the consumer and service to disable the service on.
     *
     *           The enable and disable methods currently only support projects.
     *
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *     @type bool $disableDependentServices
     *           Indicates if services that are enabled and which depend on this service
     *           should also be disabled. If not set, an error will be generated if any
     *           enabled services depend on the service to be disabled. When set, the
     *           service, and any enabled services that depend on it, will be disabled
     *           together.
     *     @type int $checkIfServiceHasUsage
     *           Defines the behavior for checking service usage when disabling a service.
     *           For allowed values, use constants defined on {@see \Google\Api\Serviceusage\V1\DisableServiceRequest\CheckIfServiceHasUsage}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function disableService(array $optionalArgs = [])
    {
        $request = new DisableServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['disableDependentServices'])) {
            $request->setDisableDependentServices($optionalArgs['disableDependentServices']);
        }

        if (isset($optionalArgs['checkIfServiceHasUsage'])) {
            $request->setCheckIfServiceHasUsage($optionalArgs['checkIfServiceHasUsage']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('DisableService', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Enable a service so that it can be used with a project.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     $operationResponse = $serviceUsageClient->enableService();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $serviceUsageClient->enableService();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $serviceUsageClient->resumeOperation($operationName, 'enableService');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the consumer and service to enable the service on.
     *
     *           The `EnableService` and `DisableService` methods currently only support
     *           projects.
     *
     *           Enabling a service requires that the service is public or is shared with
     *           the user enabling the service.
     *
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function enableService(array $optionalArgs = [])
    {
        $request = new EnableServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('EnableService', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Returns the service configuration and enabled state for a given service.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     $response = $serviceUsageClient->getService();
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the consumer and service to get the `ConsumerState` for.
     *
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Api\Serviceusage\V1\Service
     *
     * @throws ApiException if the remote call fails
     */
    public function getService(array $optionalArgs = [])
    {
        $request = new GetServiceRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetService', Service::class, $optionalArgs, $request)->wait();
    }

    /**
     * List all services available to the specified project, and the current
     * state of those services with respect to the project. The list includes
     * all public services, all services for which the calling user has the
     * `servicemanagement.services.bind` permission, and all services that have
     * already been enabled on the project. The list can be filtered to
     * only include services in a specific state, for example to only include
     * services enabled on the project.
     *
     * WARNING: If you need to query enabled services frequently or across
     * an organization, you should use
     * [Cloud Asset Inventory
     * API](https://cloud.google.com/asset-inventory/docs/apis), which provides
     * higher throughput and richer filtering capability.
     *
     * Sample code:
     * ```
     * $serviceUsageClient = new ServiceUsageClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $serviceUsageClient->listServices();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $serviceUsageClient->listServices();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $serviceUsageClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Parent to search for services on.
     *
     *           An example name would be:
     *           `projects/123` where `123` is the project number.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type string $filter
     *           Only list services that conform to the given filter.
     *           The allowed filter strings are `state:ENABLED` and `state:DISABLED`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listServices(array $optionalArgs = [])
    {
        $request = new ListServicesRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListServices', $optionalArgs, ListServicesResponse::class, $request);
    }
}
