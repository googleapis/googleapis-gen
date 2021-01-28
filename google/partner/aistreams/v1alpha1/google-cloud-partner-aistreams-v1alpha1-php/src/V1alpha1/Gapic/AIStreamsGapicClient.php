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
 * https://github.com/google/googleapis/blob/master/google/partner/aistreams/v1alpha1/aistreams.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Partner\Aistreams\V1alpha1\Gapic;

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
use Google\LongRunning\Operation;
use Google\Partner\Aistreams\V1alpha1\Cluster;
use Google\Partner\Aistreams\V1alpha1\CreateClusterRequest;
use Google\Partner\Aistreams\V1alpha1\CreateStreamRequest;
use Google\Partner\Aistreams\V1alpha1\DeleteClusterRequest;
use Google\Partner\Aistreams\V1alpha1\DeleteStreamRequest;
use Google\Partner\Aistreams\V1alpha1\GetClusterRequest;
use Google\Partner\Aistreams\V1alpha1\GetStreamRequest;
use Google\Partner\Aistreams\V1alpha1\ListClustersRequest;
use Google\Partner\Aistreams\V1alpha1\ListClustersResponse;
use Google\Partner\Aistreams\V1alpha1\ListStreamsRequest;
use Google\Partner\Aistreams\V1alpha1\ListStreamsResponse;
use Google\Partner\Aistreams\V1alpha1\Stream;
use Google\Partner\Aistreams\V1alpha1\UpdateClusterRequest;
use Google\Partner\Aistreams\V1alpha1\UpdateStreamRequest;
use Google\Protobuf\FieldMask;

/**
 * Service Description: AIStreams service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $aIStreamsClient = new AIStreamsClient();
 * try {
 *     $formattedParent = $aIStreamsClient->locationName('[PROJECT]', '[LOCATION]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $aIStreamsClient->listClusters($formattedParent);
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
 *     $pagedResponse = $aIStreamsClient->listClusters($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $aIStreamsClient->close();
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
class AIStreamsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.partner.aistreams.v1alpha1.AIStreams';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'aistreams.googleapis.com';

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
    private static $clusterNameTemplate;
    private static $locationNameTemplate;
    private static $streamNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/a_i_streams_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/a_i_streams_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/a_i_streams_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/a_i_streams_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getClusterNameTemplate()
    {
        if (null == self::$clusterNameTemplate) {
            self::$clusterNameTemplate = new PathTemplate('projects/{project}/locations/{location}/clusters/{cluster}');
        }

        return self::$clusterNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getStreamNameTemplate()
    {
        if (null == self::$streamNameTemplate) {
            self::$streamNameTemplate = new PathTemplate('projects/{project}/locations/{location}/clusters/{cluster}/streams/{stream}');
        }

        return self::$streamNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'cluster' => self::getClusterNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'stream' => self::getStreamNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a cluster resource.
     *
     * @param string $project
     * @param string $location
     * @param string $cluster
     *
     * @return string The formatted cluster resource.
     * @experimental
     */
    public static function clusterName($project, $location, $cluster)
    {
        return self::getClusterNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'cluster' => $cluster,
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
     * a stream resource.
     *
     * @param string $project
     * @param string $location
     * @param string $cluster
     * @param string $stream
     *
     * @return string The formatted stream resource.
     * @experimental
     */
    public static function streamName($project, $location, $cluster, $stream)
    {
        return self::getStreamNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'cluster' => $cluster,
            'stream' => $stream,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - cluster: projects/{project}/locations/{location}/clusters/{cluster}
     * - location: projects/{project}/locations/{location}
     * - stream: projects/{project}/locations/{location}/clusters/{cluster}/streams/{stream}.
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
     *           as "<uri>:<port>". Default 'aistreams.googleapis.com:443'.
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
     * Lists Clusters in a given project and location.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedParent = $aIStreamsClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $aIStreamsClient->listClusters($formattedParent);
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
     *     $pagedResponse = $aIStreamsClient->listClusters($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent that owns the collection of Clusters.
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
     *          Filter request.
     *     @type string $orderBy
     *          Order by fields for the result.
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
    public function listClusters($parent, array $optionalArgs = [])
    {
        $request = new ListClustersRequest();
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
            'ListClusters',
            $optionalArgs,
            ListClustersResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Cluster.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedName = $aIStreamsClient->clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');
     *     $response = $aIStreamsClient->getCluster($formattedName);
     * } finally {
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Cluster resource to get.
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
     * @return \Google\Partner\Aistreams\V1alpha1\Cluster
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getCluster($name, array $optionalArgs = [])
    {
        $request = new GetClusterRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetCluster',
            Cluster::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Cluster in a given project and location.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedParent = $aIStreamsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $clusterId = '';
     *     $cluster = new Cluster();
     *     $operationResponse = $aIStreamsClient->createCluster($formattedParent, $clusterId, $cluster);
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
     *     $operationResponse = $aIStreamsClient->createCluster($formattedParent, $clusterId, $cluster);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'createCluster');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The parent that owns the collection of Clusters.
     * @param string  $clusterId    Required. The cluster identifier.
     * @param Cluster $cluster      Required. The cluster resource to create.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes since the first request.
     *
     *          For example, consider a situation where you make an initial request and the
     *          request times out. If you make the request again with the same request ID,
     *          the server can check if original operation with the same request ID was
     *          received, and if so, will ignore the second request. This prevents clients
     *          from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function createCluster($parent, $clusterId, $cluster, array $optionalArgs = [])
    {
        $request = new CreateClusterRequest();
        $request->setParent($parent);
        $request->setClusterId($clusterId);
        $request->setCluster($cluster);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the parameters of a single Cluster.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $cluster = new Cluster();
     *     $operationResponse = $aIStreamsClient->updateCluster($updateMask, $cluster);
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
     *     $operationResponse = $aIStreamsClient->updateCluster($updateMask, $cluster);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'updateCluster');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param FieldMask $updateMask   Required. Field mask is used to specify the fields to be overwritten in the
     *                                Cluster resource by the update.
     *                                The fields specified in the update_mask are relative to the resource, not
     *                                the full request. A field will be overwritten if it is in the mask. If the
     *                                user does not provide a mask then all fields will be overwritten.
     * @param Cluster   $cluster      Required. The Cluster resource to update.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes since the first request.
     *
     *          For example, consider a situation where you make an initial request and the
     *          request times out. If you make the request again with the same request ID,
     *          the server can check if original operation with the same request ID was
     *          received, and if so, will ignore the second request. This prevents clients
     *          from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function updateCluster($updateMask, $cluster, array $optionalArgs = [])
    {
        $request = new UpdateClusterRequest();
        $request->setUpdateMask($updateMask);
        $request->setCluster($cluster);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'cluster.name' => $request->getCluster()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Cluster.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedName = $aIStreamsClient->clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');
     *     $operationResponse = $aIStreamsClient->deleteCluster($formattedName);
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
     *     $operationResponse = $aIStreamsClient->deleteCluster($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'deleteCluster');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of cluster to delete.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes after the first request.
     *
     *          For example, consider a situation where you make an initial request and the
     *          request times out. If you make the request again with the same request ID,
     *          the server can check if original operation with the same request ID was
     *          received, and if so, will ignore the second request. This prevents clients
     *          from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function deleteCluster($name, array $optionalArgs = [])
    {
        $request = new DeleteClusterRequest();
        $request->setName($name);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteCluster',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists Streams in a given project, location and cluster.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedParent = $aIStreamsClient->clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $aIStreamsClient->listStreams($formattedParent);
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
     *     $pagedResponse = $aIStreamsClient->listStreams($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent that owns the collection of the Streams.
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
     *          Filter request.
     *     @type string $orderBy
     *          Order by fields for the result.
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
    public function listStreams($parent, array $optionalArgs = [])
    {
        $request = new ListStreamsRequest();
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
            'ListStreams',
            $optionalArgs,
            ListStreamsResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Stream.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedName = $aIStreamsClient->streamName('[PROJECT]', '[LOCATION]', '[CLUSTER]', '[STREAM]');
     *     $response = $aIStreamsClient->getStream($formattedName);
     * } finally {
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the stream.
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
     * @return \Google\Partner\Aistreams\V1alpha1\Stream
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getStream($name, array $optionalArgs = [])
    {
        $request = new GetStreamRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetStream',
            Stream::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Stream in a given project and location.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedParent = $aIStreamsClient->clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');
     *     $streamId = '';
     *     $stream = new Stream();
     *     $operationResponse = $aIStreamsClient->createStream($formattedParent, $streamId, $stream);
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
     *     $operationResponse = $aIStreamsClient->createStream($formattedParent, $streamId, $stream);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'createStream');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent that owns the collection of streams.
     * @param string $streamId     Required. The stream identifier.
     * @param Stream $stream       Required. The stream to create.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes since the first request.
     *
     *          For example, consider a situation where you make an initial request and t
     *          he request times out. If you make the request again with the same request
     *          ID, the server can check if original operation with the same request ID
     *          was received, and if so, will ignore the second request. This prevents
     *          clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function createStream($parent, $streamId, $stream, array $optionalArgs = [])
    {
        $request = new CreateStreamRequest();
        $request->setParent($parent);
        $request->setStreamId($streamId);
        $request->setStream($stream);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateStream',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the parameters of a single Stream.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $stream = new Stream();
     *     $operationResponse = $aIStreamsClient->updateStream($updateMask, $stream);
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
     *     $operationResponse = $aIStreamsClient->updateStream($updateMask, $stream);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'updateStream');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param FieldMask $updateMask   Required. Field mask is used to specify the fields to be overwritten in the
     *                                Stream resource by the update.
     *                                The fields specified in the update_mask are relative to the resource, not
     *                                the full request. A field will be overwritten if it is in the mask. If the
     *                                user does not provide a mask then all fields will be overwritten.
     * @param Stream    $stream       Required. The stream resource to update.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes since the first request.
     *
     *          For example, consider a situation where you make an initial request and t
     *          he request times out. If you make the request again with the same request
     *          ID, the server can check if original operation with the same request ID
     *          was received, and if so, will ignore the second request. This prevents
     *          clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function updateStream($updateMask, $stream, array $optionalArgs = [])
    {
        $request = new UpdateStreamRequest();
        $request->setUpdateMask($updateMask);
        $request->setStream($stream);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'stream.name' => $request->getStream()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateStream',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Stream.
     *
     * Sample code:
     * ```
     * $aIStreamsClient = new AIStreamsClient();
     * try {
     *     $formattedName = $aIStreamsClient->streamName('[PROJECT]', '[LOCATION]', '[CLUSTER]', '[STREAM]');
     *     $operationResponse = $aIStreamsClient->deleteStream($formattedName);
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
     *     $operationResponse = $aIStreamsClient->deleteStream($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $aIStreamsClient->resumeOperation($operationName, 'deleteStream');
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
     *     $aIStreamsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the stream.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $requestId
     *          Optional. An optional request ID to identify requests. Specify a unique request ID
     *          so that if you must retry your request, the server will know to ignore
     *          the request if it has already been completed. The server will guarantee
     *          that for at least 60 minutes after the first request.
     *
     *          For example, consider a situation where you make an initial request and t
     *          he request times out. If you make the request again with the same request
     *          ID, the server can check if original operation with the same request ID
     *          was received, and if so, will ignore the second request. This prevents
     *          clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is
     *          not supported (00000000-0000-0000-0000-000000000000).
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
    public function deleteStream($name, array $optionalArgs = [])
    {
        $request = new DeleteStreamRequest();
        $request->setName($name);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteStream',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
