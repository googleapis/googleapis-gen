<?php
/*
 * Copyright 2020 Google LLC
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
 * https://github.com/google/googleapis/blob/master/google/cloud/memcache/v1beta2/cloud_memcache.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Memcache\V1beta2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Memcache\V1beta2\ApplyParametersRequest;
use Google\Cloud\Memcache\V1beta2\CreateInstanceRequest;
use Google\Cloud\Memcache\V1beta2\DeleteInstanceRequest;
use Google\Cloud\Memcache\V1beta2\GetInstanceRequest;
use Google\Cloud\Memcache\V1beta2\Instance;
use Google\Cloud\Memcache\V1beta2\ListInstancesRequest;
use Google\Cloud\Memcache\V1beta2\ListInstancesResponse;
use Google\Cloud\Memcache\V1beta2\MemcacheParameters;
use Google\Cloud\Memcache\V1beta2\UpdateInstanceRequest;
use Google\Cloud\Memcache\V1beta2\UpdateParametersRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Configures and manages Cloud Memorystore for Memcached instances.
 *
 *
 * The `memcache.googleapis.com` service implements the Google Cloud Memorystore
 * for Memcached API and defines the following resource model for managing
 * Memorystore Memcached (also called Memcached below) instances:
 * * The service works with a collection of cloud projects, named: `/projects/*`
 * * Each project has a collection of available locations, named: `/locations/*`
 * * Each location has a collection of Memcached instances, named:
 * `/instances/*`
 * * As such, Memcached instances are resources of the form:
 *   `/projects/{project_id}/locations/{location_id}/instances/{instance_id}`
 *
 * Note that location_id must be refering to a GCP `region`; for example:
 * * `projects/my-memcached-project/locations/us-central1/instances/my-memcached`
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $cloudMemcacheClient = new CloudMemcacheClient();
 * try {
 *     $formattedParent = $cloudMemcacheClient->locationName('[PROJECT]', '[LOCATION]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $cloudMemcacheClient->listInstances($formattedParent);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *
 *
 *     // Alternatively:
 *
 *     // Iterate through all elements
 *     $pagedResponse = $cloudMemcacheClient->listInstances($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $cloudMemcacheClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class CloudMemcacheGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.memcache.v1beta2.CloudMemcache';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'memcache.googleapis.com';

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
    ];
    private static $instanceNameTemplate;
    private static $locationNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/cloud_memcache_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/cloud_memcache_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/cloud_memcache_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/cloud_memcache_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getInstanceNameTemplate()
    {
        if (null == self::$instanceNameTemplate) {
            self::$instanceNameTemplate = new PathTemplate('projects/{project}/locations/{location}/instances/{instance}');
        }

        return self::$instanceNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'instance' => self::getInstanceNameTemplate(),
                'location' => self::getLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a instance resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted instance resource.
     * @experimental
     */
    public static function instanceName($project, $location, $instance)
    {
        return self::getInstanceNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - instance: projects/{project}/locations/{location}/instances/{instance}
     * - location: projects/{project}/locations/{location}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started
     * by a long running API method. If $methodName is not provided, or does
     * not match a long running API method, then the operation can still be
     * resumed, but the OperationResponse object will not deserialize the
     * final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();

        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'memcache.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Lists Instances in a given project and location.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $formattedParent = $cloudMemcacheClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudMemcacheClient->listInstances($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $cloudMemcacheClient->listInstances($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the instance location using the form:
     *                             `projects/{project_id}/locations/{location_id}`
     *                             where `location_id` refers to a GCP region
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type string $filter
     *          List filter. For example, exclude all Memcached instances with name as
     *          my-instance by specifying "name != my-instance".
     *     @type string $orderBy
     *          Sort results. Supported values are "name", "name desc" or "" (unsorted).
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listInstances($parent, array $optionalArgs = [])
    {
        $request = new ListInstancesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListInstances',
            $optionalArgs,
            ListInstancesResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Instance.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $formattedName = $cloudMemcacheClient->instanceName('[PROJECT]', '[LOCATION]', '[INSTANCE]');
     *     $response = $cloudMemcacheClient->getInstance($formattedName);
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Memcached instance resource name in the format:
     *                             `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     *                             where `location_id` refers to a GCP region
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Memcache\V1beta2\Instance
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getInstance($name, array $optionalArgs = [])
    {
        $request = new GetInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetInstance',
            Instance::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Instance in a given project and location.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $formattedParent = $cloudMemcacheClient->locationName('[PROJECT]', '[LOCATION]');
     *     $instanceId = '';
     *     $resource = new Instance();
     *     $operationResponse = $cloudMemcacheClient->createInstance($formattedParent, $instanceId, $resource);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudMemcacheClient->createInstance($formattedParent, $instanceId, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudMemcacheClient->resumeOperation($operationName, 'createInstance');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param string $parent     Required. The resource name of the instance location using the form:
     *                           `projects/{project_id}/locations/{location_id}`
     *                           where `location_id` refers to a GCP region
     * @param string $instanceId Required. The logical name of the Memcached instance in the user
     *                           project with the following restrictions:
     *
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-40 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the user project / location
     * @param Instance $resource     Required. A Memcached [Instance] resource
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createInstance($parent, $instanceId, $resource, array $optionalArgs = [])
    {
        $request = new CreateInstanceRequest();
        $request->setParent($parent);
        $request->setInstanceId($instanceId);
        $request->setResource($resource);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing Instance in a given project and location.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $resource = new Instance();
     *     $operationResponse = $cloudMemcacheClient->updateInstance($updateMask, $resource);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudMemcacheClient->updateInstance($updateMask, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudMemcacheClient->resumeOperation($operationName, 'updateInstance');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param FieldMask $updateMask   Required. Mask of fields to update.
     *                                *   `displayName`
     * @param Instance  $resource     Required. A Memcached [Instance] resource.
     *                                Only fields specified in update_mask are updated.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateInstance($updateMask, $resource, array $optionalArgs = [])
    {
        $request = new UpdateInstanceRequest();
        $request->setUpdateMask($updateMask);
        $request->setResource($resource);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource.name' => $request->getResource()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the defined Memcached Parameters for an existing Instance.
     * This method only stages the parameters, it must be followed by
     * ApplyParameters to apply the parameters to nodes of the Memcached Instance.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $formattedName = $cloudMemcacheClient->instanceName('[PROJECT]', '[LOCATION]', '[INSTANCE]');
     *     $updateMask = new FieldMask();
     *     $operationResponse = $cloudMemcacheClient->updateParameters($formattedName, $updateMask);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudMemcacheClient->updateParameters($formattedName, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudMemcacheClient->resumeOperation($operationName, 'updateParameters');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param string    $name         Required. Resource name of the Memcached instance for which the parameters should be
     *                                updated.
     * @param FieldMask $updateMask   Required. Mask of fields to update.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type MemcacheParameters $parameters
     *          The parameters to apply to the instance.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateParameters($name, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateParametersRequest();
        $request->setName($name);
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['parameters'])) {
            $request->setParameters($optionalArgs['parameters']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateParameters',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Instance.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $operationResponse = $cloudMemcacheClient->deleteInstance();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudMemcacheClient->deleteInstance();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudMemcacheClient->resumeOperation($operationName, 'deleteInstance');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       // operation succeeded and returns no value
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Memcached instance resource name in the format:
     *              `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     *          where `location_id` refers to a GCP region
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteInstance(array $optionalArgs = [])
    {
        $request = new DeleteInstanceRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * ApplyParameters will update current set of Parameters to the set of
     * specified nodes of the Memcached Instance.
     *
     * Sample code:
     * ```
     * $cloudMemcacheClient = new CloudMemcacheClient();
     * try {
     *     $formattedName = $cloudMemcacheClient->instanceName('[PROJECT]', '[LOCATION]', '[INSTANCE]');
     *     $operationResponse = $cloudMemcacheClient->applyParameters($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudMemcacheClient->applyParameters($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudMemcacheClient->resumeOperation($operationName, 'applyParameters');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $cloudMemcacheClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the Memcached instance for which parameter group updates
     *                             should be applied.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string[] $nodeIds
     *          Nodes to which we should apply the instance-level parameter group.
     *     @type bool $applyAll
     *          Whether to apply instance-level parameter group to all nodes. If set to
     *          true, will explicitly restrict users from specifying any nodes, and apply
     *          parameter group updates to all nodes within the instance.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function applyParameters($name, array $optionalArgs = [])
    {
        $request = new ApplyParametersRequest();
        $request->setName($name);
        if (isset($optionalArgs['nodeIds'])) {
            $request->setNodeIds($optionalArgs['nodeIds']);
        }
        if (isset($optionalArgs['applyAll'])) {
            $request->setApplyAll($optionalArgs['applyAll']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ApplyParameters',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
