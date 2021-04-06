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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/version.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Dialogflow\Cx\V3beta1\Gapic;

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
use Google\Cloud\Dialogflow\Cx\V3beta1\CreateVersionRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\DeleteVersionRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\GetVersionRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListVersionsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListVersionsResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\LoadVersionRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\UpdateVersionRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\Version;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [Versions][google.cloud.dialogflow.cx.v3beta1.Version].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $versionsClient = new VersionsClient();
 * try {
 *     $formattedParent = $versionsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
 *     $version = new Version();
 *     $operationResponse = $versionsClient->createVersion($formattedParent, $version);
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
 *     $operationResponse = $versionsClient->createVersion($formattedParent, $version);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $versionsClient->resumeOperation($operationName, 'createVersion');
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
 *     $versionsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assistwith these names, this class includes a format method for each type of
 * name, and additionallya parseName method to extract the individual identifiers
 * contained within formatted namesthat are returned by the API.
 *
 * @experimental
 */
class VersionsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3beta1.Versions';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

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
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static $flowNameTemplate;

    private static $versionNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/versions_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/versions_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/versions_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/versions_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFlowNameTemplate()
    {
        if (self::$flowNameTemplate == null) {
            self::$flowNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/flows/{flow}');
        }

        return self::$flowNameTemplate;
    }

    private static function getVersionNameTemplate()
    {
        if (self::$versionNameTemplate == null) {
            self::$versionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/versions/{version}');
        }

        return self::$versionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'flow' => self::getFlowNameTemplate(),
                'version' => self::getVersionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a flow
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     *
     * @return string The formatted flow resource.
     *
     * @experimental
     */
    public static function flowName($project, $location, $agent, $flow)
    {
        return self::getFlowNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a version
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $version
     *
     * @return string The formatted version resource.
     *
     * @experimental
     */
    public static function versionName($project, $location, $agent, $flow, $version)
    {
        return self::getVersionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'version' => $version,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - flow: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}
     * - version: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/versions/{version}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
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
     *
     * @experimental
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
     *
     * @experimental
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
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
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
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a [Version][google.cloud.dialogflow.cx.v3beta1.Version] in the specified [Flow][google.cloud.dialogflow.cx.v3beta1.Flow].
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedParent = $versionsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
     *     $version = new Version();
     *     $operationResponse = $versionsClient->createVersion($formattedParent, $version);
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
     *     $operationResponse = $versionsClient->createVersion($formattedParent, $version);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $versionsClient->resumeOperation($operationName, 'createVersion');
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
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The [Flow][google.cloud.dialogflow.cx.v3beta1.Flow] to create an [Version][google.cloud.dialogflow.cx.v3beta1.Version] for.
     *                              Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                              ID>/flows/<Flow ID>`.
     * @param Version $version      Required. The version to create.
     * @param array   $optionalArgs {
     *     Optional.
     *
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
     *
     * @experimental
     */
    public function createVersion($parent, $version, array $optionalArgs = [])
    {
        $request = new CreateVersionRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setVersion($version);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('CreateVersion', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Deletes the specified [Version][google.cloud.dialogflow.cx.v3beta1.Version].
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedName = $versionsClient->versionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]', '[VERSION]');
     *     $versionsClient->deleteVersion($formattedName);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the [Version][google.cloud.dialogflow.cx.v3beta1.Version] to delete.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>/versions/<Version ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function deleteVersion($name, array $optionalArgs = [])
    {
        $request = new DeleteVersionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteVersion', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified [Version][google.cloud.dialogflow.cx.v3beta1.Version].
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedName = $versionsClient->versionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]', '[VERSION]');
     *     $response = $versionsClient->getVersion($formattedName);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the [Version][google.cloud.dialogflow.cx.v3beta1.Version].
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>/versions/<Version ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\Version
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getVersion($name, array $optionalArgs = [])
    {
        $request = new GetVersionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetVersion', Version::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all versions in the specified [Flow][google.cloud.dialogflow.cx.v3beta1.Flow].
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedParent = $versionsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $versionsClient->listVersions($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $versionsClient->listVersions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The [Flow][google.cloud.dialogflow.cx.v3beta1.Flow] to list all versions for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
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
     *
     * @experimental
     */
    public function listVersions($parent, array $optionalArgs = [])
    {
        $request = new ListVersionsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListVersions', $optionalArgs, ListVersionsResponse::class, $request);
    }

    /**
     * Loads a specified version to draft version.
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $formattedName = $versionsClient->versionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]', '[VERSION]');
     *     $operationResponse = $versionsClient->loadVersion($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $versionsClient->loadVersion($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $versionsClient->resumeOperation($operationName, 'loadVersion');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The [Version][google.cloud.dialogflow.cx.v3beta1.Version] to be loaded to draft version.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>/versions/<Version ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $allowOverrideAgentResources
     *           This field is used to prevent accidental overwrite of other agent resources
     *           in the draft version, which can potentially impact other flow's behavior.
     *           If `allow_override_agent_resources` is false, conflicted agent-level
     *           resources will not be overridden (i.e. intents, entities, webhooks).
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
     *
     * @experimental
     */
    public function loadVersion($name, array $optionalArgs = [])
    {
        $request = new LoadVersionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['allowOverrideAgentResources'])) {
            $request->setAllowOverrideAgentResources($optionalArgs['allowOverrideAgentResources']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('LoadVersion', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Updates the specified [Version][google.cloud.dialogflow.cx.v3beta1.Version].
     *
     * Sample code:
     * ```
     * $versionsClient = new VersionsClient();
     * try {
     *     $version = new Version();
     *     $updateMask = new FieldMask();
     *     $response = $versionsClient->updateVersion($version, $updateMask);
     * } finally {
     *     $versionsClient->close();
     * }
     * ```
     *
     * @param Version   $version      Required. The version to update.
     * @param FieldMask $updateMask   Required. The mask to control which fields get updated. Currently only `description`
     *                                and `display_name` can be updated.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\Version
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateVersion($version, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateVersionRequest();
        $requestParamHeaders = [];
        $request->setVersion($version);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['version.name'] = $version->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateVersion', Version::class, $optionalArgs, $request)->wait();
    }
}
