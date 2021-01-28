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
 * https://github.com/google/googleapis/blob/master/google/cloud/aiplatform/v1/endpoint_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Aiplatform\V1\Gapic;

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
use Google\Cloud\Aiplatform\V1\CreateEndpointRequest;
use Google\Cloud\Aiplatform\V1\DeleteEndpointRequest;
use Google\Cloud\Aiplatform\V1\DeployModelRequest;
use Google\Cloud\Aiplatform\V1\DeployedModel;
use Google\Cloud\Aiplatform\V1\Endpoint;
use Google\Cloud\Aiplatform\V1\GetEndpointRequest;
use Google\Cloud\Aiplatform\V1\ListEndpointsRequest;
use Google\Cloud\Aiplatform\V1\ListEndpointsResponse;
use Google\Cloud\Aiplatform\V1\UndeployModelRequest;
use Google\Cloud\Aiplatform\V1\UpdateEndpointRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $endpointServiceClient = new EndpointServiceClient();
 * try {
 *     $formattedParent = $endpointServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $endpoint = new Endpoint();
 *     $operationResponse = $endpointServiceClient->createEndpoint($formattedParent, $endpoint);
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
 *     $operationResponse = $endpointServiceClient->createEndpoint($formattedParent, $endpoint);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $endpointServiceClient->resumeOperation($operationName, 'createEndpoint');
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
 *     $endpointServiceClient->close();
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
class EndpointServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1.EndpointService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

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
    private static $endpointNameTemplate;
    private static $locationNameTemplate;
    private static $modelNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/endpoint_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/endpoint_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/endpoint_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/endpoint_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEndpointNameTemplate()
    {
        if (null == self::$endpointNameTemplate) {
            self::$endpointNameTemplate = new PathTemplate('projects/{project}/locations/{location}/endpoints/{endpoint}');
        }

        return self::$endpointNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getModelNameTemplate()
    {
        if (null == self::$modelNameTemplate) {
            self::$modelNameTemplate = new PathTemplate('projects/{project}/locations/{location}/models/{model}');
        }

        return self::$modelNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'endpoint' => self::getEndpointNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'model' => self::getModelNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     * @experimental
     */
    public static function endpointName($project, $location, $endpoint)
    {
        return self::getEndpointNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
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
     * Formats a string containing the fully-qualified path to represent
     * a model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $model
     *
     * @return string The formatted model resource.
     * @experimental
     */
    public static function modelName($project, $location, $model)
    {
        return self::getModelNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'model' => $model,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - location: projects/{project}/locations/{location}
     * - model: projects/{project}/locations/{location}/models/{model}.
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
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
     * Creates an Endpoint.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedParent = $endpointServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $endpoint = new Endpoint();
     *     $operationResponse = $endpointServiceClient->createEndpoint($formattedParent, $endpoint);
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
     *     $operationResponse = $endpointServiceClient->createEndpoint($formattedParent, $endpoint);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $endpointServiceClient->resumeOperation($operationName, 'createEndpoint');
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
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. The resource name of the Location to create the Endpoint in.
     *                               Format: `projects/{project}/locations/{location}`
     * @param Endpoint $endpoint     Required. The Endpoint to create.
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
    public function createEndpoint($parent, $endpoint, array $optionalArgs = [])
    {
        $request = new CreateEndpointRequest();
        $request->setParent($parent);
        $request->setEndpoint($endpoint);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateEndpoint',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets an Endpoint.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedName = $endpointServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $response = $endpointServiceClient->getEndpoint($formattedName);
     * } finally {
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Endpoint resource.
     *                             Format:
     *                             `projects/{project}/locations/{location}/endpoints/{endpoint}`
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
     * @return \Google\Cloud\Aiplatform\V1\Endpoint
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getEndpoint($name, array $optionalArgs = [])
    {
        $request = new GetEndpointRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetEndpoint',
            Endpoint::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists Endpoints in a Location.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedParent = $endpointServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $endpointServiceClient->listEndpoints($formattedParent);
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
     *     $pagedResponse = $endpointServiceClient->listEndpoints($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Location from which to list the Endpoints.
     *                             Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. An expression for filtering the results of the request. For field names
     *          both snake_case and camelCase are supported.
     *
     *            * `endpoint` supports = and !=. `endpoint` represents the Endpoint ID,
     *              i.e. the last segment of the Endpoint's [resource name][google.cloud.aiplatform.v1.Endpoint.name].
     *            * `display_name` supports = and, !=
     *            * `labels` supports general map functions that is:
     *              * `labels.key=value` - key:value equality
     *              * `labels.key:* or labels:key - key existence
     *              * A key including a space must be quoted. `labels."a key"`.
     *
     *          Some examples:
     *            * `endpoint=1`
     *            * `displayName="myDisplayName"`
     *            * `labels.myKey="myValue"`
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type FieldMask $readMask
     *          Optional. Mask specifying which fields to read.
     *     @type string $orderBy
     *          A comma-separated list of fields to order by, sorted in ascending order.
     *          Use "desc" after a field name for descending.
     *          Supported fields:
     *            * `display_name`
     *            * `create_time`
     *            * `update_time`
     *
     *          Example: `display_name, create_time desc`.
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
    public function listEndpoints($parent, array $optionalArgs = [])
    {
        $request = new ListEndpointsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
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
            'ListEndpoints',
            $optionalArgs,
            ListEndpointsResponse::class,
            $request
        );
    }

    /**
     * Updates an Endpoint.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $endpoint = new Endpoint();
     *     $updateMask = new FieldMask();
     *     $response = $endpointServiceClient->updateEndpoint($endpoint, $updateMask);
     * } finally {
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param Endpoint  $endpoint     Required. The Endpoint which replaces the resource on the server.
     * @param FieldMask $updateMask   Required. The update mask applies to the resource.
     *                                See
     *                                [FieldMask](https://tinyurl.com/protobufs/google.protobuf#fieldmask).
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
     * @return \Google\Cloud\Aiplatform\V1\Endpoint
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateEndpoint($endpoint, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateEndpointRequest();
        $request->setEndpoint($endpoint);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'endpoint.name' => $request->getEndpoint()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateEndpoint',
            Endpoint::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes an Endpoint.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedName = $endpointServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $operationResponse = $endpointServiceClient->deleteEndpoint($formattedName);
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
     *     $operationResponse = $endpointServiceClient->deleteEndpoint($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $endpointServiceClient->resumeOperation($operationName, 'deleteEndpoint');
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
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Endpoint resource to be deleted.
     *                             Format:
     *                             `projects/{project}/locations/{location}/endpoints/{endpoint}`
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
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteEndpoint($name, array $optionalArgs = [])
    {
        $request = new DeleteEndpointRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteEndpoint',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deploys a Model into this Endpoint, creating a DeployedModel within it.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedEndpoint = $endpointServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $deployedModel = new DeployedModel();
     *     $operationResponse = $endpointServiceClient->deployModel($formattedEndpoint, $deployedModel);
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
     *     $operationResponse = $endpointServiceClient->deployModel($formattedEndpoint, $deployedModel);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $endpointServiceClient->resumeOperation($operationName, 'deployModel');
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
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string        $endpoint      Required. The name of the Endpoint resource into which to deploy a Model.
     *                                     Format:
     *                                     `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param DeployedModel $deployedModel Required. The DeployedModel to be created within the Endpoint. Note that
     *                                     [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] must be updated for the DeployedModel to start
     *                                     receiving traffic, either as part of this call, or via
     *                                     [EndpointService.UpdateEndpoint][google.cloud.aiplatform.v1.EndpointService.UpdateEndpoint].
     * @param array         $optionalArgs  {
     *                                     Optional.
     *
     *     @type array $trafficSplit
     *          A map from a DeployedModel's ID to the percentage of this Endpoint's
     *          traffic that should be forwarded to that DeployedModel.
     *
     *          If this field is non-empty, then the Endpoint's
     *          [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it.
     *          To refer to the ID of the just being deployed Model, a "0" should be used,
     *          and the actual ID of the new DeployedModel will be filled in its place by
     *          this method. The traffic percentage values must add up to 100.
     *
     *          If this field is empty, then the Endpoint's
     *          [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] is not updated.
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
    public function deployModel($endpoint, $deployedModel, array $optionalArgs = [])
    {
        $request = new DeployModelRequest();
        $request->setEndpoint($endpoint);
        $request->setDeployedModel($deployedModel);
        if (isset($optionalArgs['trafficSplit'])) {
            $request->setTrafficSplit($optionalArgs['trafficSplit']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'endpoint' => $request->getEndpoint(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeployModel',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Undeploys a Model from an Endpoint, removing a DeployedModel from it, and
     * freeing all resources it's using.
     *
     * Sample code:
     * ```
     * $endpointServiceClient = new EndpointServiceClient();
     * try {
     *     $formattedEndpoint = $endpointServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $deployedModelId = '';
     *     $operationResponse = $endpointServiceClient->undeployModel($formattedEndpoint, $deployedModelId);
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
     *     $operationResponse = $endpointServiceClient->undeployModel($formattedEndpoint, $deployedModelId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $endpointServiceClient->resumeOperation($operationName, 'undeployModel');
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
     *     $endpointServiceClient->close();
     * }
     * ```
     *
     * @param string $endpoint        Required. The name of the Endpoint resource from which to undeploy a Model.
     *                                Format:
     *                                `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param string $deployedModelId Required. The ID of the DeployedModel to be undeployed from the Endpoint.
     * @param array  $optionalArgs    {
     *                                Optional.
     *
     *     @type array $trafficSplit
     *          If this field is provided, then the Endpoint's
     *          [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it. If
     *          last DeployedModel is being undeployed from the Endpoint, the
     *          [Endpoint.traffic_split] will always end up empty when this call returns.
     *          A DeployedModel will be successfully undeployed only if it doesn't have
     *          any traffic assigned to it when this method executes, or if this field
     *          unassigns any traffic to it.
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
    public function undeployModel($endpoint, $deployedModelId, array $optionalArgs = [])
    {
        $request = new UndeployModelRequest();
        $request->setEndpoint($endpoint);
        $request->setDeployedModelId($deployedModelId);
        if (isset($optionalArgs['trafficSplit'])) {
            $request->setTrafficSplit($optionalArgs['trafficSplit']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'endpoint' => $request->getEndpoint(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UndeployModel',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
