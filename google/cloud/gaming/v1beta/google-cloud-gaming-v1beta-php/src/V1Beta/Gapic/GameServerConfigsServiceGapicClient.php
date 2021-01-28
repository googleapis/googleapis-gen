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
 * https://github.com/google/googleapis/blob/master/google/cloud/gaming/v1beta/game_server_configs_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Gaming\V1Beta\Gapic;

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
use Google\Cloud\Gaming\V1beta\CreateGameServerConfigRequest;
use Google\Cloud\Gaming\V1beta\DeleteGameServerConfigRequest;
use Google\Cloud\Gaming\V1beta\GameServerConfig;
use Google\Cloud\Gaming\V1beta\GetGameServerConfigRequest;
use Google\Cloud\Gaming\V1beta\ListGameServerConfigsRequest;
use Google\Cloud\Gaming\V1beta\ListGameServerConfigsResponse;
use Google\LongRunning\Operation;

/**
 * Service Description: The game server config configures the game servers in an Agones fleet.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $gameServerConfigsServiceClient = new GameServerConfigsServiceClient();
 * try {
 *     $formattedParent = $gameServerConfigsServiceClient->gameServerDeploymentName('[PROJECT]', '[LOCATION]', '[DEPLOYMENT]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $gameServerConfigsServiceClient->listGameServerConfigs($formattedParent);
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
 *     $pagedResponse = $gameServerConfigsServiceClient->listGameServerConfigs($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $gameServerConfigsServiceClient->close();
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
class GameServerConfigsServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.gaming.v1beta.GameServerConfigsService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'gameservices.googleapis.com';

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
    private static $gameServerConfigNameTemplate;
    private static $gameServerDeploymentNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/game_server_configs_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/game_server_configs_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/game_server_configs_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/game_server_configs_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getGameServerConfigNameTemplate()
    {
        if (null == self::$gameServerConfigNameTemplate) {
            self::$gameServerConfigNameTemplate = new PathTemplate('projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}');
        }

        return self::$gameServerConfigNameTemplate;
    }

    private static function getGameServerDeploymentNameTemplate()
    {
        if (null == self::$gameServerDeploymentNameTemplate) {
            self::$gameServerDeploymentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/gameServerDeployments/{deployment}');
        }

        return self::$gameServerDeploymentNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'gameServerConfig' => self::getGameServerConfigNameTemplate(),
                'gameServerDeployment' => self::getGameServerDeploymentNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a game_server_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $deployment
     * @param string $config
     *
     * @return string The formatted game_server_config resource.
     * @experimental
     */
    public static function gameServerConfigName($project, $location, $deployment, $config)
    {
        return self::getGameServerConfigNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'deployment' => $deployment,
            'config' => $config,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a game_server_deployment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $deployment
     *
     * @return string The formatted game_server_deployment resource.
     * @experimental
     */
    public static function gameServerDeploymentName($project, $location, $deployment)
    {
        return self::getGameServerDeploymentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'deployment' => $deployment,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - gameServerConfig: projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}
     * - gameServerDeployment: projects/{project}/locations/{location}/gameServerDeployments/{deployment}.
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
     *           as "<uri>:<port>". Default 'gameservices.googleapis.com:443'.
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
     * Lists game server configs in a given project, location, and game server
     * deployment.
     *
     * Sample code:
     * ```
     * $gameServerConfigsServiceClient = new GameServerConfigsServiceClient();
     * try {
     *     $formattedParent = $gameServerConfigsServiceClient->gameServerDeploymentName('[PROJECT]', '[LOCATION]', '[DEPLOYMENT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $gameServerConfigsServiceClient->listGameServerConfigs($formattedParent);
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
     *     $pagedResponse = $gameServerConfigsServiceClient->listGameServerConfigs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $gameServerConfigsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource name. Uses the form:
     *
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/*`.
     * @param array $optionalArgs {
     *                            Optional.
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
     *          Optional. The filter to apply to list results.
     *     @type string $orderBy
     *          Optional. Specifies the ordering of results following syntax at
     *          https://cloud.google.com/apis/design/design_patterns#sorting_order.
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
    public function listGameServerConfigs($parent, array $optionalArgs = [])
    {
        $request = new ListGameServerConfigsRequest();
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
            'ListGameServerConfigs',
            $optionalArgs,
            ListGameServerConfigsResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single game server config.
     *
     * Sample code:
     * ```
     * $gameServerConfigsServiceClient = new GameServerConfigsServiceClient();
     * try {
     *     $formattedName = $gameServerConfigsServiceClient->gameServerConfigName('[PROJECT]', '[LOCATION]', '[DEPLOYMENT]', '[CONFIG]');
     *     $response = $gameServerConfigsServiceClient->getGameServerConfig($formattedName);
     * } finally {
     *     $gameServerConfigsServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the game server config to retrieve. Uses the form:
     *
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Gaming\V1beta\GameServerConfig
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getGameServerConfig($name, array $optionalArgs = [])
    {
        $request = new GetGameServerConfigRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetGameServerConfig',
            GameServerConfig::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new game server config in a given project, location, and game
     * server deployment. Game server configs are immutable, and are not applied
     * until referenced in the game server deployment rollout resource.
     *
     * Sample code:
     * ```
     * $gameServerConfigsServiceClient = new GameServerConfigsServiceClient();
     * try {
     *     $formattedParent = $gameServerConfigsServiceClient->gameServerDeploymentName('[PROJECT]', '[LOCATION]', '[DEPLOYMENT]');
     *     $configId = '';
     *     $gameServerConfig = new GameServerConfig();
     *     $operationResponse = $gameServerConfigsServiceClient->createGameServerConfig($formattedParent, $configId, $gameServerConfig);
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
     *     $operationResponse = $gameServerConfigsServiceClient->createGameServerConfig($formattedParent, $configId, $gameServerConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gameServerConfigsServiceClient->resumeOperation($operationName, 'createGameServerConfig');
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
     *     $gameServerConfigsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource name. Uses the form:
     *
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/`.
     * @param string           $configId         Required. The ID of the game server config resource to be created.
     * @param GameServerConfig $gameServerConfig Required. The game server config resource to be created.
     * @param array            $optionalArgs     {
     *                                           Optional.
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
    public function createGameServerConfig($parent, $configId, $gameServerConfig, array $optionalArgs = [])
    {
        $request = new CreateGameServerConfigRequest();
        $request->setParent($parent);
        $request->setConfigId($configId);
        $request->setGameServerConfig($gameServerConfig);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateGameServerConfig',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single game server config. The deletion will fail if the game
     * server config is referenced in a game server deployment rollout.
     *
     * Sample code:
     * ```
     * $gameServerConfigsServiceClient = new GameServerConfigsServiceClient();
     * try {
     *     $formattedName = $gameServerConfigsServiceClient->gameServerConfigName('[PROJECT]', '[LOCATION]', '[DEPLOYMENT]', '[CONFIG]');
     *     $operationResponse = $gameServerConfigsServiceClient->deleteGameServerConfig($formattedName);
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
     *     $operationResponse = $gameServerConfigsServiceClient->deleteGameServerConfig($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gameServerConfigsServiceClient->resumeOperation($operationName, 'deleteGameServerConfig');
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
     *     $gameServerConfigsServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the game server config to delete. Uses the form:
     *
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/configs/{config}`.
     * @param array $optionalArgs {
     *                            Optional.
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
    public function deleteGameServerConfig($name, array $optionalArgs = [])
    {
        $request = new DeleteGameServerConfigRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteGameServerConfig',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
