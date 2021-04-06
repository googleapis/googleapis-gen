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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/security_settings.proto
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
use Google\Cloud\Dialogflow\Cx\V3beta1\CreateSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\DeleteSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\GetSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListSecuritySettingsResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\SecuritySettings;
use Google\Cloud\Dialogflow\Cx\V3beta1\UpdateSecuritySettingsRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing security settings for Dialogflow.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
 * try {
 *     $formattedParent = $securitySettingsServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $securitySettings = new SecuritySettings();
 *     $response = $securitySettingsServiceClient->createSecuritySettings($formattedParent, $securitySettings);
 * } finally {
 *     $securitySettingsServiceClient->close();
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
class SecuritySettingsServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3beta1.SecuritySettingsService';

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

    private static $locationNameTemplate;

    private static $securitySettingsNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/security_settings_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/security_settings_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/security_settings_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/security_settings_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getSecuritySettingsNameTemplate()
    {
        if (self::$securitySettingsNameTemplate == null) {
            self::$securitySettingsNameTemplate = new PathTemplate('projects/{project}/locations/{location}/securitySettings/{security_settings}');
        }

        return self::$securitySettingsNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'securitySettings' => self::getSecuritySettingsNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     *
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
     * Formats a string containing the fully-qualified path to represent a
     * security_settings resource.
     *
     * @param string $project
     * @param string $location
     * @param string $securitySettings
     *
     * @return string The formatted security_settings resource.
     *
     * @experimental
     */
    public static function securitySettingsName($project, $location, $securitySettings)
    {
        return self::getSecuritySettingsNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'security_settings' => $securitySettings,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - securitySettings: projects/{project}/locations/{location}/securitySettings/{security_settings}
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
     * Create security settings in the specified location.
     *
     * Sample code:
     * ```
     * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
     * try {
     *     $formattedParent = $securitySettingsServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $securitySettings = new SecuritySettings();
     *     $response = $securitySettingsServiceClient->createSecuritySettings($formattedParent, $securitySettings);
     * } finally {
     *     $securitySettingsServiceClient->close();
     * }
     * ```
     *
     * @param string           $parent           Required. The location to create an [SecuritySettings][google.cloud.dialogflow.cx.v3beta1.SecuritySettings] for.
     *                                           Format: `projects/<Project ID>/locations/<Location ID>`.
     * @param SecuritySettings $securitySettings Required. The security settings to create.
     * @param array            $optionalArgs     {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\SecuritySettings
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function createSecuritySettings($parent, $securitySettings, array $optionalArgs = [])
    {
        $request = new CreateSecuritySettingsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setSecuritySettings($securitySettings);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateSecuritySettings', SecuritySettings::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified [SecuritySettings][google.cloud.dialogflow.cx.v3beta1.SecuritySettings].
     *
     * Sample code:
     * ```
     * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
     * try {
     *     $formattedName = $securitySettingsServiceClient->securitySettingsName('[PROJECT]', '[LOCATION]', '[SECURITY_SETTINGS]');
     *     $securitySettingsServiceClient->deleteSecuritySettings($formattedName);
     * } finally {
     *     $securitySettingsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the [SecuritySettings][google.cloud.dialogflow.cx.v3beta1.SecuritySettings] to delete.
     *                             Format: `projects/<Project ID>/locations/<Location
     *                             ID>/securitySettings/<Security Settings ID>`.
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
    public function deleteSecuritySettings($name, array $optionalArgs = [])
    {
        $request = new DeleteSecuritySettingsRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteSecuritySettings', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified [SecuritySettings][google.cloud.dialogflow.cx.v3beta1.SecuritySettings].
     * The returned settings may be stale by up to 1 minute.
     *
     * Sample code:
     * ```
     * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
     * try {
     *     $formattedName = $securitySettingsServiceClient->securitySettingsName('[PROJECT]', '[LOCATION]', '[SECURITY_SETTINGS]');
     *     $response = $securitySettingsServiceClient->getSecuritySettings($formattedName);
     * } finally {
     *     $securitySettingsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the settings.
     *                             Format: `projects/<Project ID>/locations/<Location
     *                             ID>/securitySettings/<security settings ID>`.
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
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\SecuritySettings
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getSecuritySettings($name, array $optionalArgs = [])
    {
        $request = new GetSecuritySettingsRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetSecuritySettings', SecuritySettings::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all security settings in the specified location.
     *
     * Sample code:
     * ```
     * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
     * try {
     *     $formattedParent = $securitySettingsServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $securitySettingsServiceClient->listSecuritySettings($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $securitySettingsServiceClient->listSecuritySettings($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $securitySettingsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The location to list all security settings for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>`.
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
    public function listSecuritySettings($parent, array $optionalArgs = [])
    {
        $request = new ListSecuritySettingsRequest();
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
        return $this->getPagedListResponse('ListSecuritySettings', $optionalArgs, ListSecuritySettingsResponse::class, $request);
    }

    /**
     * Updates the specified [SecuritySettings][google.cloud.dialogflow.cx.v3beta1.SecuritySettings].
     *
     * Sample code:
     * ```
     * $securitySettingsServiceClient = new SecuritySettingsServiceClient();
     * try {
     *     $securitySettings = new SecuritySettings();
     *     $updateMask = new FieldMask();
     *     $response = $securitySettingsServiceClient->updateSecuritySettings($securitySettings, $updateMask);
     * } finally {
     *     $securitySettingsServiceClient->close();
     * }
     * ```
     *
     * @param SecuritySettings $securitySettings Required. [SecuritySettings] object that contains values for each of the
     *                                           fields to update.
     * @param FieldMask        $updateMask       Required. The mask to control which fields get updated. If the mask is not present,
     *                                           all fields will be updated.
     * @param array            $optionalArgs     {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\SecuritySettings
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateSecuritySettings($securitySettings, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateSecuritySettingsRequest();
        $requestParamHeaders = [];
        $request->setSecuritySettings($securitySettings);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['security_settings.name'] = $securitySettings->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateSecuritySettings', SecuritySettings::class, $optionalArgs, $request)->wait();
    }
}
