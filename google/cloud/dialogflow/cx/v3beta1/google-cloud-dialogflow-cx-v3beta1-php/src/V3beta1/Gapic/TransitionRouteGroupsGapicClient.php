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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/transition_route_group.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Dialogflow\Cx\V3beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3beta1\CreateTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\DeleteTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\GetTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTransitionRouteGroupsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTransitionRouteGroupsResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\TransitionRouteGroup;
use Google\Cloud\Dialogflow\Cx\V3beta1\UpdateTransitionRouteGroupRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [TransitionRouteGroups][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
 * try {
 *     $formattedParent = $transitionRouteGroupsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
 *     $transitionRouteGroup = new TransitionRouteGroup();
 *     $response = $transitionRouteGroupsClient->createTransitionRouteGroup($formattedParent, $transitionRouteGroup);
 * } finally {
 *     $transitionRouteGroupsClient->close();
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
class TransitionRouteGroupsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups';

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

    private static $transitionRouteGroupNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/transition_route_groups_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/transition_route_groups_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/transition_route_groups_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/transition_route_groups_rest_client_config.php',
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

    private static function getTransitionRouteGroupNameTemplate()
    {
        if (self::$transitionRouteGroupNameTemplate == null) {
            self::$transitionRouteGroupNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/transitionRouteGroups/{transition_route_group}');
        }

        return self::$transitionRouteGroupNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'flow' => self::getFlowNameTemplate(),
                'transitionRouteGroup' => self::getTransitionRouteGroupNameTemplate(),
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
     * Formats a string containing the fully-qualified path to represent a
     * transition_route_group resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $transitionRouteGroup
     *
     * @return string The formatted transition_route_group resource.
     *
     * @experimental
     */
    public static function transitionRouteGroupName($project, $location, $agent, $flow, $transitionRouteGroup)
    {
        return self::getTransitionRouteGroupNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'transition_route_group' => $transitionRouteGroup,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - flow: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}
     * - transitionRouteGroup: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/transitionRouteGroups/{transition_route_group}
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
    }

    /**
     * Creates an [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup] in the specified flow.
     *
     * Sample code:
     * ```
     * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
     * try {
     *     $formattedParent = $transitionRouteGroupsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
     *     $transitionRouteGroup = new TransitionRouteGroup();
     *     $response = $transitionRouteGroupsClient->createTransitionRouteGroup($formattedParent, $transitionRouteGroup);
     * } finally {
     *     $transitionRouteGroupsClient->close();
     * }
     * ```
     *
     * @param string               $parent               Required. The flow to create an [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup] for.
     *                                                   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                                                   ID>/flows/<Flow ID>`.
     * @param TransitionRouteGroup $transitionRouteGroup Required. The transition route group to create.
     * @param array                $optionalArgs         {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list transition route groups for. The field
     *           [`messages`][TransitionRoute.trigger_fulfillment.messages] in
     *           [TransitionRoute][google.cloud.dialogflow.cx.v3beta1.TransitionRoute] is language dependent.
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TransitionRouteGroup
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function createTransitionRouteGroup($parent, $transitionRouteGroup, array $optionalArgs = [])
    {
        $request = new CreateTransitionRouteGroupRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTransitionRouteGroup($transitionRouteGroup);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateTransitionRouteGroup', TransitionRouteGroup::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup].
     *
     * Sample code:
     * ```
     * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
     * try {
     *     $formattedName = $transitionRouteGroupsClient->transitionRouteGroupName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]', '[TRANSITION_ROUTE_GROUP]');
     *     $transitionRouteGroupsClient->deleteTransitionRouteGroup($formattedName);
     * } finally {
     *     $transitionRouteGroupsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup] to delete.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>/transitionRouteGroups/<Transition Route Group ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $force
     *           This field has no effect for transition route group that no page is using.
     *           If the transition route group is referenced by any page:
     *
     *           *  If `force` is set to false, an error will be returned with message
     *           indicating pages that reference the transition route group.
     *           *  If `force` is set to true, Dialogflow will remove the transition route
     *           group, as well as any reference to it.
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
    public function deleteTransitionRouteGroup($name, array $optionalArgs = [])
    {
        $request = new DeleteTransitionRouteGroupRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteTransitionRouteGroup', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup].
     *
     * Sample code:
     * ```
     * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
     * try {
     *     $formattedName = $transitionRouteGroupsClient->transitionRouteGroupName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]', '[TRANSITION_ROUTE_GROUP]');
     *     $response = $transitionRouteGroupsClient->getTransitionRouteGroup($formattedName);
     * } finally {
     *     $transitionRouteGroupsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup].
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/flows/<Flow ID>/transitionRouteGroups/<Transition Route Group ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $languageCode
     *           The language to list transition route groups for. The field
     *           [`messages`][TransitionRoute.trigger_fulfillment.messages] in
     *           [TransitionRoute][google.cloud.dialogflow.cx.v3beta1.TransitionRoute] is language dependent.
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TransitionRouteGroup
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getTransitionRouteGroup($name, array $optionalArgs = [])
    {
        $request = new GetTransitionRouteGroupRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetTransitionRouteGroup', TransitionRouteGroup::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all transition route groups in the specified flow.
     *
     * Sample code:
     * ```
     * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
     * try {
     *     $formattedParent = $transitionRouteGroupsClient->flowName('[PROJECT]', '[LOCATION]', '[AGENT]', '[FLOW]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $transitionRouteGroupsClient->listTransitionRouteGroups($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $transitionRouteGroupsClient->listTransitionRouteGroups($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $transitionRouteGroupsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The flow to list all transition route groups for.
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
     *     @type string $languageCode
     *           The language to list transition route groups for. The field
     *           [`messages`][TransitionRoute.trigger_fulfillment.messages] in
     *           [TransitionRoute][google.cloud.dialogflow.cx.v3beta1.TransitionRoute] is language dependent.
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
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
    public function listTransitionRouteGroups($parent, array $optionalArgs = [])
    {
        $request = new ListTransitionRouteGroupsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListTransitionRouteGroups', $optionalArgs, ListTransitionRouteGroupsResponse::class, $request);
    }

    /**
     * Updates the specified [TransitionRouteGroup][google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup].
     *
     * Sample code:
     * ```
     * $transitionRouteGroupsClient = new TransitionRouteGroupsClient();
     * try {
     *     $transitionRouteGroup = new TransitionRouteGroup();
     *     $response = $transitionRouteGroupsClient->updateTransitionRouteGroup($transitionRouteGroup);
     * } finally {
     *     $transitionRouteGroupsClient->close();
     * }
     * ```
     *
     * @param TransitionRouteGroup $transitionRouteGroup Required. The transition route group to update.
     * @param array                $optionalArgs         {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           The mask to control which fields get updated.
     *     @type string $languageCode
     *           The language to list transition route groups for. The field
     *           [`messages`][TransitionRoute.trigger_fulfillment.messages] in
     *           [TransitionRoute][google.cloud.dialogflow.cx.v3beta1.TransitionRoute] is language dependent.
     *
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TransitionRouteGroup
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateTransitionRouteGroup($transitionRouteGroup, array $optionalArgs = [])
    {
        $request = new UpdateTransitionRouteGroupRequest();
        $requestParamHeaders = [];
        $request->setTransitionRouteGroup($transitionRouteGroup);
        $requestParamHeaders['transition_route_group.name'] = $transitionRouteGroup->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateTransitionRouteGroup', TransitionRouteGroup::class, $optionalArgs, $request)->wait();
    }
}
