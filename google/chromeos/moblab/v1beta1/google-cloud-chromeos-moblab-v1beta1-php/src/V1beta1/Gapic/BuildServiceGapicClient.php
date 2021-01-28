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
 * https://github.com/google/googleapis/blob/master/google/chromeos/moblab/v1beta1/build_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Chromeos\Moblab\V1beta1\Gapic;

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
use Google\Chromeos\Moblab\V1beta1\CheckBuildStageStatusRequest;
use Google\Chromeos\Moblab\V1beta1\CheckBuildStageStatusResponse;
use Google\Chromeos\Moblab\V1beta1\ListBuildsRequest;
use Google\Chromeos\Moblab\V1beta1\ListBuildsResponse;
use Google\Chromeos\Moblab\V1beta1\StageBuildMetadata;
use Google\Chromeos\Moblab\V1beta1\StageBuildRequest;
use Google\Chromeos\Moblab\V1beta1\StageBuildResponse;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Manages Chrome OS build services.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $buildServiceClient = new BuildServiceClient();
 * try {
 *     $formattedParent = $buildServiceClient->modelName('[BUILD_TARGET]', '[MODEL]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $buildServiceClient->listBuilds($formattedParent);
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
 *     $pagedResponse = $buildServiceClient->listBuilds($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $buildServiceClient->close();
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
class BuildServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.chromeos.moblab.v1beta1.BuildService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'chromeosmoblab.googleapis.com';

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
        'https://www.googleapis.com/auth/moblabapi',
    ];
    private static $buildArtifactNameTemplate;
    private static $modelNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/build_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/build_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/build_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/build_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBuildArtifactNameTemplate()
    {
        if (null == self::$buildArtifactNameTemplate) {
            self::$buildArtifactNameTemplate = new PathTemplate('buildTargets/{build_target}/models/{model}/builds/{build}/artifacts/{artifact}');
        }

        return self::$buildArtifactNameTemplate;
    }

    private static function getModelNameTemplate()
    {
        if (null == self::$modelNameTemplate) {
            self::$modelNameTemplate = new PathTemplate('buildTargets/{build_target}/models/{model}');
        }

        return self::$modelNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'buildArtifact' => self::getBuildArtifactNameTemplate(),
                'model' => self::getModelNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a build_artifact resource.
     *
     * @param string $buildTarget
     * @param string $model
     * @param string $build
     * @param string $artifact
     *
     * @return string The formatted build_artifact resource.
     * @experimental
     */
    public static function buildArtifactName($buildTarget, $model, $build, $artifact)
    {
        return self::getBuildArtifactNameTemplate()->render([
            'build_target' => $buildTarget,
            'model' => $model,
            'build' => $build,
            'artifact' => $artifact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a model resource.
     *
     * @param string $buildTarget
     * @param string $model
     *
     * @return string The formatted model resource.
     * @experimental
     */
    public static function modelName($buildTarget, $model)
    {
        return self::getModelNameTemplate()->render([
            'build_target' => $buildTarget,
            'model' => $model,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - buildArtifact: buildTargets/{build_target}/models/{model}/builds/{build}/artifacts/{artifact}
     * - model: buildTargets/{build_target}/models/{model}.
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
     *           as "<uri>:<port>". Default 'chromeosmoblab.googleapis.com:443'.
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
     * Lists all builds for the given build target and model in descending order
     * for the milestones and build versions.
     *
     * Sample code:
     * ```
     * $buildServiceClient = new BuildServiceClient();
     * try {
     *     $formattedParent = $buildServiceClient->modelName('[BUILD_TARGET]', '[MODEL]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $buildServiceClient->listBuilds($formattedParent);
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
     *     $pagedResponse = $buildServiceClient->listBuilds($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $buildServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The full resource name of the model. The model id is the same as
     *                             the build target id for non-unified builds.
     *                             For example,
     *                             'buildTargets/octopus/models/bobba'.
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
     *          Optional. Filter that specifies value constraints of fields. For example, the
     *          filter can be set as "filter='milestone=milestones/80'" to only select
     *          builds in milestone 80.
     *     @type FieldMask $readMask
     *          Optional. Read mask that specifies which Build fields to return. If empty, all Build
     *          fields will be returned.
     *          Valid fields: name, milestone, build_version.
     *          For example, if the read_mask is set as "read_mask='milestone'", the
     *          ListBuilds will return a list of Builds object with only the milestone
     *          field.
     *     @type FieldMask $groupBy
     *          Optional. The operation that groups by all the Build fields specified in the read
     *          mask. The group_by field should be the same as the read_mask field in
     *          convention of SQL.
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
    public function listBuilds($parent, array $optionalArgs = [])
    {
        $request = new ListBuildsRequest();
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
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
        }
        if (isset($optionalArgs['groupBy'])) {
            $request->setGroupBy($optionalArgs['groupBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListBuilds',
            $optionalArgs,
            ListBuildsResponse::class,
            $request
        );
    }

    /**
     * Checks the stage status for a given build artifact in a partner Google
     * Cloud Storage bucket.
     *
     * Sample code:
     * ```
     * $buildServiceClient = new BuildServiceClient();
     * try {
     *     $formattedName = $buildServiceClient->buildArtifactName('[BUILD_TARGET]', '[MODEL]', '[BUILD]', '[ARTIFACT]');
     *     $response = $buildServiceClient->checkBuildStageStatus($formattedName);
     * } finally {
     *     $buildServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The full resource name of the build artifact.
     *                             For example,
     *                             'buildTargets/octopus/models/bobba/builds/12607.6.0/artifacts/chromeos-moblab-peng-staging'.
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
     * @return \Google\Chromeos\Moblab\V1beta1\CheckBuildStageStatusResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function checkBuildStageStatus($name, array $optionalArgs = [])
    {
        $request = new CheckBuildStageStatusRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CheckBuildStageStatus',
            CheckBuildStageStatusResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Stages a given build artifact from a internal Google Cloud Storage bucket
     * to a partner Google Cloud Storage bucket. If any of objects has already
     * been copied, it will overwrite the previous objects. Operation <response:
     * [StageBuildResponse][google.chromeos.moblab.v1beta1.StageBuildResponse],
     *            metadata: [StageBuildMetadata][google.chromeos.moblab.v1beta1.StageBuildMetadata]>.
     *
     * Sample code:
     * ```
     * $buildServiceClient = new BuildServiceClient();
     * try {
     *     $formattedName = $buildServiceClient->buildArtifactName('[BUILD_TARGET]', '[MODEL]', '[BUILD]', '[ARTIFACT]');
     *     $operationResponse = $buildServiceClient->stageBuild($formattedName);
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
     *     $operationResponse = $buildServiceClient->stageBuild($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $buildServiceClient->resumeOperation($operationName, 'stageBuild');
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
     *     $buildServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The full resource name of the build artifact.
     *                             For example,
     *                             'buildTargets/octopus/models/bobba/builds/12607.6.0/artifacts/chromeos-moblab-peng-staging'.
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
    public function stageBuild($name, array $optionalArgs = [])
    {
        $request = new StageBuildRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'StageBuild',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
