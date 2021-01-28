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
 * https://github.com/google/googleapis/blob/master/google/cloud/networkconnectivity/v1alpha1/hub.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\NetworkConnectivity\V1alpha1\Gapic;

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
use Google\Cloud\NetworkConnectivity\V1alpha1\CreateHubRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\CreateSpokeRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\DeleteHubRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\DeleteSpokeRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\GetHubRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\GetSpokeRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\Hub;
use Google\Cloud\NetworkConnectivity\V1alpha1\ListHubsRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\ListHubsResponse;
use Google\Cloud\NetworkConnectivity\V1alpha1\ListSpokesRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\ListSpokesResponse;
use Google\Cloud\NetworkConnectivity\V1alpha1\Spoke;
use Google\Cloud\NetworkConnectivity\V1alpha1\UpdateHubRequest;
use Google\Cloud\NetworkConnectivity\V1alpha1\UpdateSpokeRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Connectivity Hub is a hub-and-spoke abstraction for network connectivity
 * management in Google Cloud. The Hub aims to reduce operational complexity
 * through a simple, centralized connectivity management model.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $hubServiceClient = new HubServiceClient();
 * try {
 *     $formattedParent = $hubServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $hubServiceClient->listHubs($formattedParent);
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
 *     $pagedResponse = $hubServiceClient->listHubs($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $hubServiceClient->close();
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
class HubServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.networkconnectivity.v1alpha1.HubService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'networkconnectivity.googleapis.com';

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
    private static $hubNameTemplate;
    private static $interconnectAttachmentNameTemplate;
    private static $locationNameTemplate;
    private static $spokeNameTemplate;
    private static $vpnTunnelNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/hub_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/hub_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/hub_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/hub_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getHubNameTemplate()
    {
        if (null == self::$hubNameTemplate) {
            self::$hubNameTemplate = new PathTemplate('projects/{project}/locations/global/hubs/{hub}');
        }

        return self::$hubNameTemplate;
    }

    private static function getInterconnectAttachmentNameTemplate()
    {
        if (null == self::$interconnectAttachmentNameTemplate) {
            self::$interconnectAttachmentNameTemplate = new PathTemplate('projects/{project}/regions/{region}/interconnectAttachments/{resource_id}');
        }

        return self::$interconnectAttachmentNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getSpokeNameTemplate()
    {
        if (null == self::$spokeNameTemplate) {
            self::$spokeNameTemplate = new PathTemplate('projects/{project}/locations/{location}/spokes/{spoke}');
        }

        return self::$spokeNameTemplate;
    }

    private static function getVpnTunnelNameTemplate()
    {
        if (null == self::$vpnTunnelNameTemplate) {
            self::$vpnTunnelNameTemplate = new PathTemplate('projects/{project}/regions/{region}/vpnTunnels/{resource_id}');
        }

        return self::$vpnTunnelNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'hub' => self::getHubNameTemplate(),
                'interconnectAttachment' => self::getInterconnectAttachmentNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'spoke' => self::getSpokeNameTemplate(),
                'vpnTunnel' => self::getVpnTunnelNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a hub resource.
     *
     * @param string $project
     * @param string $hub
     *
     * @return string The formatted hub resource.
     * @experimental
     */
    public static function hubName($project, $hub)
    {
        return self::getHubNameTemplate()->render([
            'project' => $project,
            'hub' => $hub,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a interconnect_attachment resource.
     *
     * @param string $project
     * @param string $region
     * @param string $resourceId
     *
     * @return string The formatted interconnect_attachment resource.
     * @experimental
     */
    public static function interconnectAttachmentName($project, $region, $resourceId)
    {
        return self::getInterconnectAttachmentNameTemplate()->render([
            'project' => $project,
            'region' => $region,
            'resource_id' => $resourceId,
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
     * a spoke resource.
     *
     * @param string $project
     * @param string $location
     * @param string $spoke
     *
     * @return string The formatted spoke resource.
     * @experimental
     */
    public static function spokeName($project, $location, $spoke)
    {
        return self::getSpokeNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'spoke' => $spoke,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a vpn_tunnel resource.
     *
     * @param string $project
     * @param string $region
     * @param string $resourceId
     *
     * @return string The formatted vpn_tunnel resource.
     * @experimental
     */
    public static function vpnTunnelName($project, $region, $resourceId)
    {
        return self::getVpnTunnelNameTemplate()->render([
            'project' => $project,
            'region' => $region,
            'resource_id' => $resourceId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - hub: projects/{project}/locations/global/hubs/{hub}
     * - interconnectAttachment: projects/{project}/regions/{region}/interconnectAttachments/{resource_id}
     * - location: projects/{project}/locations/{location}
     * - spoke: projects/{project}/locations/{location}/spokes/{spoke}
     * - vpnTunnel: projects/{project}/regions/{region}/vpnTunnels/{resource_id}.
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
     *           as "<uri>:<port>". Default 'networkconnectivity.googleapis.com:443'.
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
     * Lists Hubs in a given project and location.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedParent = $hubServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $hubServiceClient->listHubs($formattedParent);
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
     *     $pagedResponse = $hubServiceClient->listHubs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource's name.
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
     *          A filter expression that filters the results listed in the response.
     *     @type string $orderBy
     *          Sort the results by a certain order.
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
    public function listHubs($parent, array $optionalArgs = [])
    {
        $request = new ListHubsRequest();
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
            'ListHubs',
            $optionalArgs,
            ListHubsResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Hub.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedName = $hubServiceClient->hubName('[PROJECT]', '[HUB]');
     *     $response = $hubServiceClient->getHub($formattedName);
     * } finally {
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the Hub resource to get.
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
     * @return \Google\Cloud\NetworkConnectivity\V1alpha1\Hub
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getHub($name, array $optionalArgs = [])
    {
        $request = new GetHubRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetHub',
            Hub::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Hub in a given project and location.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedParent = $hubServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $hub = new Hub();
     *     $operationResponse = $hubServiceClient->createHub($formattedParent, $hub);
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
     *     $operationResponse = $hubServiceClient->createHub($formattedParent, $hub);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'createHub');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource's name of the Hub.
     * @param Hub    $hub          Required. Initial values for a new Hub.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $hubId
     *          Optional. Unique id for the Hub to create.
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
    public function createHub($parent, $hub, array $optionalArgs = [])
    {
        $request = new CreateHubRequest();
        $request->setParent($parent);
        $request->setHub($hub);
        if (isset($optionalArgs['hubId'])) {
            $request->setHubId($optionalArgs['hubId']);
        }
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
            'CreateHub',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the parameters of a single Hub.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $hub = new Hub();
     *     $operationResponse = $hubServiceClient->updateHub($hub);
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
     *     $operationResponse = $hubServiceClient->updateHub($hub);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'updateHub');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param Hub   $hub          Required. The state that the Hub should be in after the update.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $updateMask
     *          Optional. Field mask is used to specify the fields to be overwritten in the
     *          Hub resource by the update.
     *          The fields specified in the update_mask are relative to the resource, not
     *          the full request. A field will be overwritten if it is in the mask. If the
     *          user does not provide a mask then all fields will be overwritten.
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
    public function updateHub($hub, array $optionalArgs = [])
    {
        $request = new UpdateHubRequest();
        $request->setHub($hub);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'hub.name' => $request->getHub()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateHub',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Hub.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedName = $hubServiceClient->hubName('[PROJECT]', '[HUB]');
     *     $operationResponse = $hubServiceClient->deleteHub($formattedName);
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
     *     $operationResponse = $hubServiceClient->deleteHub($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'deleteHub');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Hub to delete.
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
    public function deleteHub($name, array $optionalArgs = [])
    {
        $request = new DeleteHubRequest();
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
            'DeleteHub',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists Spokes in a given project and location.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedParent = $hubServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $hubServiceClient->listSpokes($formattedParent);
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
     *     $pagedResponse = $hubServiceClient->listSpokes($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent's resource name.
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
     *          A filter expression that filters the results listed in the response.
     *     @type string $orderBy
     *          Sort the results by a certain order.
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
    public function listSpokes($parent, array $optionalArgs = [])
    {
        $request = new ListSpokesRequest();
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
            'ListSpokes',
            $optionalArgs,
            ListSpokesResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Spoke.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedName = $hubServiceClient->spokeName('[PROJECT]', '[LOCATION]', '[SPOKE]');
     *     $response = $hubServiceClient->getSpoke($formattedName);
     * } finally {
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of Spoke resource.
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
     * @return \Google\Cloud\NetworkConnectivity\V1alpha1\Spoke
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getSpoke($name, array $optionalArgs = [])
    {
        $request = new GetSpokeRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetSpoke',
            Spoke::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Spoke in a given project and location.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedParent = $hubServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $spoke = new Spoke();
     *     $operationResponse = $hubServiceClient->createSpoke($formattedParent, $spoke);
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
     *     $operationResponse = $hubServiceClient->createSpoke($formattedParent, $spoke);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'createSpoke');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent's resource name of the Spoke.
     * @param Spoke  $spoke        Required. Initial values for a new Hub.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $spokeId
     *          Optional. Unique id for the Spoke to create.
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
    public function createSpoke($parent, $spoke, array $optionalArgs = [])
    {
        $request = new CreateSpokeRequest();
        $request->setParent($parent);
        $request->setSpoke($spoke);
        if (isset($optionalArgs['spokeId'])) {
            $request->setSpokeId($optionalArgs['spokeId']);
        }
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
            'CreateSpoke',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the parameters of a single Spoke.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $spoke = new Spoke();
     *     $operationResponse = $hubServiceClient->updateSpoke($spoke);
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
     *     $operationResponse = $hubServiceClient->updateSpoke($spoke);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'updateSpoke');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param Spoke $spoke        Required. The state that the Spoke should be in after the update.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $updateMask
     *          Optional. Field mask is used to specify the fields to be overwritten in the
     *          Spoke resource by the update.
     *          The fields specified in the update_mask are relative to the resource, not
     *          the full request. A field will be overwritten if it is in the mask. If the
     *          user does not provide a mask then all fields will be overwritten.
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
    public function updateSpoke($spoke, array $optionalArgs = [])
    {
        $request = new UpdateSpokeRequest();
        $request->setSpoke($spoke);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'spoke.name' => $request->getSpoke()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateSpoke',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Spoke.
     *
     * Sample code:
     * ```
     * $hubServiceClient = new HubServiceClient();
     * try {
     *     $formattedName = $hubServiceClient->spokeName('[PROJECT]', '[LOCATION]', '[SPOKE]');
     *     $operationResponse = $hubServiceClient->deleteSpoke($formattedName);
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
     *     $operationResponse = $hubServiceClient->deleteSpoke($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $hubServiceClient->resumeOperation($operationName, 'deleteSpoke');
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
     *     $hubServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Spoke to delete.
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
    public function deleteSpoke($name, array $optionalArgs = [])
    {
        $request = new DeleteSpokeRequest();
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
            'DeleteSpoke',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
