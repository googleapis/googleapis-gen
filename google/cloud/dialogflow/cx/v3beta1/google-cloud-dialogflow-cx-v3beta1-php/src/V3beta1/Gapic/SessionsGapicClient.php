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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/session.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Dialogflow\Cx\V3beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3beta1\DetectIntentRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\DetectIntentResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\FulfillIntentRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\FulfillIntentResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\Match;
use Google\Cloud\Dialogflow\Cx\V3beta1\MatchIntentRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\MatchIntentResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\OutputAudioConfig;
use Google\Cloud\Dialogflow\Cx\V3beta1\QueryInput;
use Google\Cloud\Dialogflow\Cx\V3beta1\QueryParameters;
use Google\Cloud\Dialogflow\Cx\V3beta1\StreamingDetectIntentRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\StreamingDetectIntentResponse;

/**
 * Service Description: A session represents an interaction with a user. You retrieve user input
 * and pass it to the [DetectIntent][google.cloud.dialogflow.cx.v3beta1.Sessions.DetectIntent] method to determine
 * user intent and respond.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $sessionsClient = new SessionsClient();
 * try {
 *     $formattedSession = $sessionsClient->sessionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[SESSION]');
 *     $queryInput = new QueryInput();
 *     $response = $sessionsClient->detectIntent($formattedSession, $queryInput);
 * } finally {
 *     $sessionsClient->close();
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
class SessionsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3beta1.Sessions';

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

    private static $pageNameTemplate;

    private static $projectLocationAgentEnvironmentSessionNameTemplate;

    private static $projectLocationAgentSessionNameTemplate;

    private static $sessionNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/sessions_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/sessions_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/sessions_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/sessions_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getPageNameTemplate()
    {
        if (self::$pageNameTemplate == null) {
            self::$pageNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/pages/{page}');
        }

        return self::$pageNameTemplate;
    }

    private static function getProjectLocationAgentEnvironmentSessionNameTemplate()
    {
        if (self::$projectLocationAgentEnvironmentSessionNameTemplate == null) {
            self::$projectLocationAgentEnvironmentSessionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/environments/{environment}/sessions/{session}');
        }

        return self::$projectLocationAgentEnvironmentSessionNameTemplate;
    }

    private static function getProjectLocationAgentSessionNameTemplate()
    {
        if (self::$projectLocationAgentSessionNameTemplate == null) {
            self::$projectLocationAgentSessionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/sessions/{session}');
        }

        return self::$projectLocationAgentSessionNameTemplate;
    }

    private static function getSessionNameTemplate()
    {
        if (self::$sessionNameTemplate == null) {
            self::$sessionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/sessions/{session}');
        }

        return self::$sessionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'page' => self::getPageNameTemplate(),
                'projectLocationAgentEnvironmentSession' => self::getProjectLocationAgentEnvironmentSessionNameTemplate(),
                'projectLocationAgentSession' => self::getProjectLocationAgentSessionNameTemplate(),
                'session' => self::getSessionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a page
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $page
     *
     * @return string The formatted page resource.
     *
     * @experimental
     */
    public static function pageName($project, $location, $agent, $flow, $page)
    {
        return self::getPageNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'page' => $page,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent_environment_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $environment
     * @param string $session
     *
     * @return string The formatted project_location_agent_environment_session resource.
     *
     * @experimental
     */
    public static function projectLocationAgentEnvironmentSessionName($project, $location, $agent, $environment, $session)
    {
        return self::getProjectLocationAgentEnvironmentSessionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'environment' => $environment,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $session
     *
     * @return string The formatted project_location_agent_session resource.
     *
     * @experimental
     */
    public static function projectLocationAgentSessionName($project, $location, $agent, $session)
    {
        return self::getProjectLocationAgentSessionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a session
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $session
     *
     * @return string The formatted session resource.
     *
     * @experimental
     */
    public static function sessionName($project, $location, $agent, $session)
    {
        return self::getSessionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'session' => $session,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - page: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/pages/{page}
     * - projectLocationAgentEnvironmentSession: projects/{project}/locations/{location}/agents/{agent}/environments/{environment}/sessions/{session}
     * - projectLocationAgentSession: projects/{project}/locations/{location}/agents/{agent}/sessions/{session}
     * - session: projects/{project}/locations/{location}/agents/{agent}/sessions/{session}
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
     * Processes a natural language query and returns structured, actionable data
     * as a result. This method is not idempotent, because it may cause session
     * entity types to be updated, which in turn might affect results of future
     * queries.
     *
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Sample code:
     * ```
     * $sessionsClient = new SessionsClient();
     * try {
     *     $formattedSession = $sessionsClient->sessionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[SESSION]');
     *     $queryInput = new QueryInput();
     *     $response = $sessionsClient->detectIntent($formattedSession, $queryInput);
     * } finally {
     *     $sessionsClient->close();
     * }
     * ```
     *
     * @param string     $session      Required. The name of the session this query is sent to.
     *                                 Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                                 ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     *                                 ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     *                                 If `Environment ID` is not specified, we assume default 'draft'
     *                                 environment.
     *                                 It's up to the API caller to choose an appropriate `Session ID`. It can be
     *                                 a random number or some type of session identifiers (preferably hashed).
     *                                 The length of the `Session ID` must not exceed 36 characters.
     *
     *                                 For more information, see the [sessions
     *                                 guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *
     *                                 Note: Always use agent versions for production traffic.
     *                                 See [Versions and
     *                                 environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     * @param QueryInput $queryInput   Required. The input specification.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type QueryParameters $queryParams
     *           The parameters of this query.
     *     @type OutputAudioConfig $outputAudioConfig
     *           Instructs the speech synthesizer how to generate the output audio.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\DetectIntentResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function detectIntent($session, $queryInput, array $optionalArgs = [])
    {
        $request = new DetectIntentRequest();
        $requestParamHeaders = [];
        $request->setSession($session);
        $request->setQueryInput($queryInput);
        $requestParamHeaders['session'] = $session;
        if (isset($optionalArgs['queryParams'])) {
            $request->setQueryParams($optionalArgs['queryParams']);
        }

        if (isset($optionalArgs['outputAudioConfig'])) {
            $request->setOutputAudioConfig($optionalArgs['outputAudioConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DetectIntent', DetectIntentResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Fulfills a matched intent returned by [MatchIntent][google.cloud.dialogflow.cx.v3beta1.Sessions.MatchIntent].
     * Must be called after [MatchIntent][google.cloud.dialogflow.cx.v3beta1.Sessions.MatchIntent], with input from
     * [MatchIntentResponse][google.cloud.dialogflow.cx.v3beta1.MatchIntentResponse]. Otherwise, the behavior is undefined.
     *
     * Sample code:
     * ```
     * $sessionsClient = new SessionsClient();
     * try {
     *     $response = $sessionsClient->fulfillIntent();
     * } finally {
     *     $sessionsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type MatchIntentRequest $matchIntentRequest
     *           Must be same as the corresponding MatchIntent request, otherwise the
     *           behavior is undefined.
     *     @type Match $match
     *           The matched intent/event to fulfill.
     *     @type OutputAudioConfig $outputAudioConfig
     *           Instructs the speech synthesizer how to generate output audio.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\FulfillIntentResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function fulfillIntent(array $optionalArgs = [])
    {
        $request = new FulfillIntentRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['matchIntentRequest'])) {
            $request->setMatchIntentRequest($optionalArgs['matchIntentRequest']);
        }

        if (isset($optionalArgs['match'])) {
            $request->setMatch($optionalArgs['match']);
        }

        if (isset($optionalArgs['outputAudioConfig'])) {
            $request->setOutputAudioConfig($optionalArgs['outputAudioConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('FulfillIntent', FulfillIntentResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns preliminary intent match results, doesn't change the session
     * status.
     *
     * Sample code:
     * ```
     * $sessionsClient = new SessionsClient();
     * try {
     *     $formattedSession = $sessionsClient->sessionName('[PROJECT]', '[LOCATION]', '[AGENT]', '[SESSION]');
     *     $queryInput = new QueryInput();
     *     $response = $sessionsClient->matchIntent($formattedSession, $queryInput);
     * } finally {
     *     $sessionsClient->close();
     * }
     * ```
     *
     * @param string     $session      Required. The name of the session this query is sent to.
     *                                 Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                                 ID>/sessions/<Session ID>` or `projects/<Project ID>/locations/<Location
     *                                 ID>/agents/<Agent ID>/environments/<Environment ID>/sessions/<Session ID>`.
     *                                 If `Environment ID` is not specified, we assume default 'draft'
     *                                 environment.
     *                                 It's up to the API caller to choose an appropriate `Session ID`. It can be
     *                                 a random number or some type of session identifiers (preferably hashed).
     *                                 The length of the `Session ID` must not exceed 36 characters.
     *
     *                                 For more information, see the [sessions
     *                                 guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * @param QueryInput $queryInput   Required. The input specification.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type QueryParameters $queryParams
     *           The parameters of this query.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\MatchIntentResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function matchIntent($session, $queryInput, array $optionalArgs = [])
    {
        $request = new MatchIntentRequest();
        $requestParamHeaders = [];
        $request->setSession($session);
        $request->setQueryInput($queryInput);
        $requestParamHeaders['session'] = $session;
        if (isset($optionalArgs['queryParams'])) {
            $request->setQueryParams($optionalArgs['queryParams']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MatchIntent', MatchIntentResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Processes a natural language query in audio format in a streaming fashion
     * and returns structured, actionable data as a result. This method is only
     * available via the gRPC API (not REST).
     *
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Sample code:
     * ```
     * $sessionsClient = new SessionsClient();
     * try {
     *     $queryInput = new QueryInput();
     *     $request = new StreamingDetectIntentRequest();
     *     $request->setQueryInput($queryInput);
     *     // Write all requests to the server, then read all responses until the
     *     // stream is complete
     *     $requests = [
     *         $request,
     *     ];
     *     $stream = $sessionsClient->streamingDetectIntent();
     *     $stream->writeAll($requests);
     *     foreach ($stream->closeWriteAndReadAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     *     // Alternatively:
     *     // Write requests individually, making read() calls if
     *     // required. Call closeWrite() once writes are complete, and read the
     *     // remaining responses from the server.
     *     $requests = [
     *         $request,
     *     ];
     *     $stream = $sessionsClient->streamingDetectIntent();
     *     foreach ($requests as $request) {
     *         $stream->write($request);
     *         // if required, read a single response from the stream
     *         $element = $stream->read();
     *         // doSomethingWith($element)
     *     }
     *     $stream->closeWrite();
     *     $element = $stream->read();
     *     while (!is_null($element)) {
     *         // doSomethingWith($element)
     *         $element = $stream->read();
     *     }
     * } finally {
     *     $sessionsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\BidiStream
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function streamingDetectIntent(array $optionalArgs = [])
    {
        return $this->startCall('StreamingDetectIntent', StreamingDetectIntentResponse::class, $optionalArgs, null, Call::BIDI_STREAMING_CALL);
    }
}
