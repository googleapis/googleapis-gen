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
 * https://github.com/google/googleapis/blob/master/google/cloud/datacatalog/v1beta1/policytagmanagerserialization.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Datacatalog\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\DataCatalog\V1beta1\ExportTaxonomiesRequest;
use Google\Cloud\DataCatalog\V1beta1\ExportTaxonomiesResponse;
use Google\Cloud\DataCatalog\V1beta1\ImportTaxonomiesRequest;
use Google\Cloud\DataCatalog\V1beta1\ImportTaxonomiesResponse;
use Google\Cloud\DataCatalog\V1beta1\InlineSource;

/**
 * Service Description: Policy tag manager serialization API service allows clients to manipulate
 * their taxonomies and policy tags data with serialized format.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
 * try {
 *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
 *     $response = $policyTagManagerSerializationClient->importTaxonomies($formattedParent);
 * } finally {
 *     $policyTagManagerSerializationClient->close();
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
class PolicyTagManagerSerializationGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.datacatalog.v1beta1.PolicyTagManagerSerialization';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'datacatalog.googleapis.com';

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
    private static $locationNameTemplate;
    private static $taxonomyNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/policy_tag_manager_serialization_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/policy_tag_manager_serialization_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/policy_tag_manager_serialization_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/policy_tag_manager_serialization_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getTaxonomyNameTemplate()
    {
        if (null == self::$taxonomyNameTemplate) {
            self::$taxonomyNameTemplate = new PathTemplate('projects/{project}/locations/{location}/taxonomies/{taxonomy}');
        }

        return self::$taxonomyNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'taxonomy' => self::getTaxonomyNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
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
     * a taxonomy resource.
     *
     * @param string $project
     * @param string $location
     * @param string $taxonomy
     *
     * @return string The formatted taxonomy resource.
     * @experimental
     */
    public static function taxonomyName($project, $location, $taxonomy)
    {
        return self::getTaxonomyNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'taxonomy' => $taxonomy,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - taxonomy: projects/{project}/locations/{location}/taxonomies/{taxonomy}.
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
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'datacatalog.googleapis.com:443'.
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
    }

    /**
     * Imports all taxonomies and their policy tags to a project as new
     * taxonomies.
     *
     * This method provides a bulk taxonomy / policy tag creation using nested
     * proto structure.
     *
     * Sample code:
     * ```
     * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
     * try {
     *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $policyTagManagerSerializationClient->importTaxonomies($formattedParent);
     * } finally {
     *     $policyTagManagerSerializationClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Resource name of project that the newly created taxonomies will
     *                             belong to.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type InlineSource $inlineSource
     *          Inline source used for taxonomies import
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataCatalog\V1beta1\ImportTaxonomiesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function importTaxonomies($parent, array $optionalArgs = [])
    {
        $request = new ImportTaxonomiesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['inlineSource'])) {
            $request->setInlineSource($optionalArgs['inlineSource']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ImportTaxonomies',
            ImportTaxonomiesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Exports all taxonomies and their policy tags in a project.
     *
     * This method generates SerializedTaxonomy protos with nested policy tags
     * that can be used as an input for future ImportTaxonomies calls.
     *
     * Sample code:
     * ```
     * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
     * try {
     *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $formattedTaxonomies = [];
     *     $response = $policyTagManagerSerializationClient->exportTaxonomies($formattedParent, $formattedTaxonomies);
     * } finally {
     *     $policyTagManagerSerializationClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. Resource name of the project that taxonomies to be exported
     *                               will share.
     * @param string[] $taxonomies   Required. Resource names of the taxonomies to be exported.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type bool $serializedTaxonomies
     *          Export taxonomies as serialized taxonomies.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataCatalog\V1beta1\ExportTaxonomiesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function exportTaxonomies($parent, $taxonomies, array $optionalArgs = [])
    {
        $request = new ExportTaxonomiesRequest();
        $request->setParent($parent);
        $request->setTaxonomies($taxonomies);
        if (isset($optionalArgs['serializedTaxonomies'])) {
            $request->setSerializedTaxonomies($optionalArgs['serializedTaxonomies']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ExportTaxonomies',
            ExportTaxonomiesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
