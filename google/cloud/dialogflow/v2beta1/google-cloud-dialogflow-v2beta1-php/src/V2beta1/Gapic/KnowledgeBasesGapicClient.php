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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/v2beta1/knowledge_base.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Dialogflow\V2beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2beta1\CreateKnowledgeBaseRequest;
use Google\Cloud\Dialogflow\V2beta1\DeleteKnowledgeBaseRequest;
use Google\Cloud\Dialogflow\V2beta1\GetKnowledgeBaseRequest;
use Google\Cloud\Dialogflow\V2beta1\KnowledgeBase;
use Google\Cloud\Dialogflow\V2beta1\ListKnowledgeBasesRequest;
use Google\Cloud\Dialogflow\V2beta1\ListKnowledgeBasesResponse;
use Google\Cloud\Dialogflow\V2beta1\UpdateKnowledgeBaseRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [KnowledgeBases][google.cloud.dialogflow.v2beta1.KnowledgeBase].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $knowledgeBasesClient = new KnowledgeBasesClient();
 * try {
 *     $formattedParent = $knowledgeBasesClient->projectName('[PROJECT]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $knowledgeBasesClient->listKnowledgeBases($formattedParent);
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
 *     $pagedResponse = $knowledgeBasesClient->listKnowledgeBases($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $knowledgeBasesClient->close();
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
class KnowledgeBasesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.v2beta1.KnowledgeBases';

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
    private static $knowledgeBaseNameTemplate;
    private static $locationNameTemplate;
    private static $projectNameTemplate;
    private static $projectKnowledgeBaseNameTemplate;
    private static $projectLocationKnowledgeBaseNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/knowledge_bases_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/knowledge_bases_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/knowledge_bases_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/knowledge_bases_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getKnowledgeBaseNameTemplate()
    {
        if (null == self::$knowledgeBaseNameTemplate) {
            self::$knowledgeBaseNameTemplate = new PathTemplate('projects/{project}/knowledgeBases/{knowledge_base}');
        }

        return self::$knowledgeBaseNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectKnowledgeBaseNameTemplate()
    {
        if (null == self::$projectKnowledgeBaseNameTemplate) {
            self::$projectKnowledgeBaseNameTemplate = new PathTemplate('projects/{project}/knowledgeBases/{knowledge_base}');
        }

        return self::$projectKnowledgeBaseNameTemplate;
    }

    private static function getProjectLocationKnowledgeBaseNameTemplate()
    {
        if (null == self::$projectLocationKnowledgeBaseNameTemplate) {
            self::$projectLocationKnowledgeBaseNameTemplate = new PathTemplate('projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}');
        }

        return self::$projectLocationKnowledgeBaseNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'knowledgeBase' => self::getKnowledgeBaseNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectKnowledgeBase' => self::getProjectKnowledgeBaseNameTemplate(),
                'projectLocationKnowledgeBase' => self::getProjectLocationKnowledgeBaseNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted knowledge_base resource.
     * @experimental
     */
    public static function knowledgeBaseName($project, $knowledgeBase)
    {
        return self::getKnowledgeBaseNameTemplate()->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
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
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     * @experimental
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted project_knowledge_base resource.
     * @experimental
     */
    public static function projectKnowledgeBaseName($project, $knowledgeBase)
    {
        return self::getProjectKnowledgeBaseNameTemplate()->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_location_knowledge_base resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     *
     * @return string The formatted project_location_knowledge_base resource.
     * @experimental
     */
    public static function projectLocationKnowledgeBaseName($project, $location, $knowledgeBase)
    {
        return self::getProjectLocationKnowledgeBaseNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - knowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     * - projectKnowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - projectLocationKnowledgeBase: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}.
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
     * Returns the list of all knowledge bases of the specified agent.
     *
     * Note: The `projects.agent.knowledgeBases` resource is deprecated;
     * only use `projects.knowledgeBases`.
     *
     * Sample code:
     * ```
     * $knowledgeBasesClient = new KnowledgeBasesClient();
     * try {
     *     $formattedParent = $knowledgeBasesClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $knowledgeBasesClient->listKnowledgeBases($formattedParent);
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
     *     $pagedResponse = $knowledgeBasesClient->listKnowledgeBases($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $knowledgeBasesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The project to list of knowledge bases for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>`.
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
     *          The filter expression used to filter knowledge bases returned by the list
     *          method. The expression has the following syntax:
     *
     *            <field> <operator> <value> [AND <field> <operator> <value>] ...
     *
     *          The following fields and operators are supported:
     *
     *          * display_name with has(:) operator
     *          * language_code with equals(=) operator
     *
     *          Examples:
     *
     *          * 'language_code=en-us' matches knowledge bases with en-us language code.
     *          * 'display_name:articles' matches knowledge bases whose display name
     *            contains "articles".
     *          * 'display_name:"Best Articles"' matches knowledge bases whose display
     *            name contains "Best Articles".
     *          * 'language_code=en-gb AND display_name=articles' matches all knowledge
     *            bases whose display name contains "articles" and whose language code is
     *            "en-gb".
     *
     *          Note: An empty filter string (i.e. "") is a no-op and will result in no
     *          filtering.
     *
     *          For more information about filtering, see
     *          [API Filtering](https://aip.dev/160).
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
    public function listKnowledgeBases($parent, array $optionalArgs = [])
    {
        $request = new ListKnowledgeBasesRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListKnowledgeBases',
            $optionalArgs,
            ListKnowledgeBasesResponse::class,
            $request
        );
    }

    /**
     * Retrieves the specified knowledge base.
     *
     * Note: The `projects.agent.knowledgeBases` resource is deprecated;
     * only use `projects.knowledgeBases`.
     *
     * Sample code:
     * ```
     * $knowledgeBasesClient = new KnowledgeBasesClient();
     * try {
     *     $name = '';
     *     $response = $knowledgeBasesClient->getKnowledgeBase($name);
     * } finally {
     *     $knowledgeBasesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the knowledge base to retrieve.
     *                             Format `projects/<Project ID>/locations/<Location
     *                             ID>/knowledgeBases/<Knowledge Base ID>`.
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
     * @return \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getKnowledgeBase($name, array $optionalArgs = [])
    {
        $request = new GetKnowledgeBaseRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetKnowledgeBase',
            KnowledgeBase::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a knowledge base.
     *
     * Note: The `projects.agent.knowledgeBases` resource is deprecated;
     * only use `projects.knowledgeBases`.
     *
     * Sample code:
     * ```
     * $knowledgeBasesClient = new KnowledgeBasesClient();
     * try {
     *     $formattedParent = $knowledgeBasesClient->projectName('[PROJECT]');
     *     $knowledgeBase = new KnowledgeBase();
     *     $response = $knowledgeBasesClient->createKnowledgeBase($formattedParent, $knowledgeBase);
     * } finally {
     *     $knowledgeBasesClient->close();
     * }
     * ```
     *
     * @param string        $parent        Required. The project to create a knowledge base for.
     *                                     Format: `projects/<Project ID>/locations/<Location ID>`.
     * @param KnowledgeBase $knowledgeBase Required. The knowledge base to create.
     * @param array         $optionalArgs  {
     *                                     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createKnowledgeBase($parent, $knowledgeBase, array $optionalArgs = [])
    {
        $request = new CreateKnowledgeBaseRequest();
        $request->setParent($parent);
        $request->setKnowledgeBase($knowledgeBase);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateKnowledgeBase',
            KnowledgeBase::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes the specified knowledge base.
     *
     * Note: The `projects.agent.knowledgeBases` resource is deprecated;
     * only use `projects.knowledgeBases`.
     *
     * Sample code:
     * ```
     * $knowledgeBasesClient = new KnowledgeBasesClient();
     * try {
     *     $name = '';
     *     $knowledgeBasesClient->deleteKnowledgeBase($name);
     * } finally {
     *     $knowledgeBasesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the knowledge base to delete.
     *                             Format: `projects/<Project ID>/locations/<Location
     *                             ID>/knowledgeBases/<Knowledge Base ID>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type bool $force
     *          Optional. Force deletes the knowledge base. When set to true, any documents
     *          in the knowledge base are also deleted.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteKnowledgeBase($name, array $optionalArgs = [])
    {
        $request = new DeleteKnowledgeBaseRequest();
        $request->setName($name);
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteKnowledgeBase',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the specified knowledge base.
     *
     * Note: The `projects.agent.knowledgeBases` resource is deprecated;
     * only use `projects.knowledgeBases`.
     *
     * Sample code:
     * ```
     * $knowledgeBasesClient = new KnowledgeBasesClient();
     * try {
     *     $knowledgeBase = new KnowledgeBase();
     *     $response = $knowledgeBasesClient->updateKnowledgeBase($knowledgeBase);
     * } finally {
     *     $knowledgeBasesClient->close();
     * }
     * ```
     *
     * @param KnowledgeBase $knowledgeBase Required. The knowledge base to update.
     * @param array         $optionalArgs  {
     *                                     Optional.
     *
     *     @type FieldMask $updateMask
     *          Optional. Not specified means `update all`.
     *          Currently, only `display_name` can be updated, an InvalidArgument will be
     *          returned for attempting to update other fields.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateKnowledgeBase($knowledgeBase, array $optionalArgs = [])
    {
        $request = new UpdateKnowledgeBaseRequest();
        $request->setKnowledgeBase($knowledgeBase);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'knowledge_base.name' => $request->getKnowledgeBase()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateKnowledgeBase',
            KnowledgeBase::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
