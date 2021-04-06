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
 * https://github.com/google/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/test_case.proto
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
use Google\Cloud\Dialogflow\Cx\V3beta1\BatchDeleteTestCasesRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\BatchRunTestCasesRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\CalculateCoverageRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\CalculateCoverageRequest\CoverageType;
use Google\Cloud\Dialogflow\Cx\V3beta1\CalculateCoverageResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\CreateTestCaseRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ExportTestCasesRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\GetTestCaseRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\GetTestCaseResultRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ImportTestCasesRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTestCaseResultsRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTestCaseResultsResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTestCasesRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\ListTestCasesResponse;
use Google\Cloud\Dialogflow\Cx\V3beta1\RunTestCaseRequest;
use Google\Cloud\Dialogflow\Cx\V3beta1\TestCase;
use Google\Cloud\Dialogflow\Cx\V3beta1\TestCaseResult;

use Google\Cloud\Dialogflow\Cx\V3beta1\UpdateTestCaseRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [Test Cases][google.cloud.dialogflow.cx.v3beta1.TestCase] and
 * [Test Case Results][google.cloud.dialogflow.cx.v3beta1.TestCaseResult].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $testCasesClient = new TestCasesClient();
 * try {
 *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
 *     $formattedNames = [
 *         $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]'),
 *     ];
 *     $testCasesClient->batchDeleteTestCases($formattedParent, $formattedNames);
 * } finally {
 *     $testCasesClient->close();
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
class TestCasesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3beta1.TestCases';

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

    private static $agentNameTemplate;

    private static $environmentNameTemplate;

    private static $testCaseNameTemplate;

    private static $testCaseResultNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/test_cases_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/test_cases_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/test_cases_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/test_cases_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAgentNameTemplate()
    {
        if (self::$agentNameTemplate == null) {
            self::$agentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}');
        }

        return self::$agentNameTemplate;
    }

    private static function getEnvironmentNameTemplate()
    {
        if (self::$environmentNameTemplate == null) {
            self::$environmentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/environments/{environment}');
        }

        return self::$environmentNameTemplate;
    }

    private static function getTestCaseNameTemplate()
    {
        if (self::$testCaseNameTemplate == null) {
            self::$testCaseNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/testCases/{test_case}');
        }

        return self::$testCaseNameTemplate;
    }

    private static function getTestCaseResultNameTemplate()
    {
        if (self::$testCaseResultNameTemplate == null) {
            self::$testCaseResultNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/testCases/{test_case}/results/{result}');
        }

        return self::$testCaseResultNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'agent' => self::getAgentNameTemplate(),
                'environment' => self::getEnvironmentNameTemplate(),
                'testCase' => self::getTestCaseNameTemplate(),
                'testCaseResult' => self::getTestCaseResultNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     *
     * @return string The formatted agent resource.
     *
     * @experimental
     */
    public static function agentName($project, $location, $agent)
    {
        return self::getAgentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a environment
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $environment
     *
     * @return string The formatted environment resource.
     *
     * @experimental
     */
    public static function environmentName($project, $location, $agent, $environment)
    {
        return self::getEnvironmentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a test_case
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $testCase
     *
     * @return string The formatted test_case resource.
     *
     * @experimental
     */
    public static function testCaseName($project, $location, $agent, $testCase)
    {
        return self::getTestCaseNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'test_case' => $testCase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * test_case_result resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $testCase
     * @param string $result
     *
     * @return string The formatted test_case_result resource.
     *
     * @experimental
     */
    public static function testCaseResultName($project, $location, $agent, $testCase, $result)
    {
        return self::getTestCaseResultNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'test_case' => $testCase,
            'result' => $result,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/locations/{location}/agents/{agent}
     * - environment: projects/{project}/locations/{location}/agents/{agent}/environments/{environment}
     * - testCase: projects/{project}/locations/{location}/agents/{agent}/testCases/{test_case}
     * - testCaseResult: projects/{project}/locations/{location}/agents/{agent}/testCases/{test_case}/results/{result}
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
     * Batch deletes test cases.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $formattedNames = [
     *         $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]'),
     *     ];
     *     $testCasesClient->batchDeleteTestCases($formattedParent, $formattedNames);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. The agent to delete test cases from.
     *                               Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param string[] $names        Required. Format of test case names: `projects/<Project ID>/locations/
     *                               <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     * @param array    $optionalArgs {
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
    public function batchDeleteTestCases($parent, $names, array $optionalArgs = [])
    {
        $request = new BatchDeleteTestCasesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setNames($names);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('BatchDeleteTestCases', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Kicks off a batch run of test cases.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $formattedTestCases = [
     *         $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]'),
     *     ];
     *     $operationResponse = $testCasesClient->batchRunTestCases($formattedParent, $formattedTestCases);
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
     *     $operationResponse = $testCasesClient->batchRunTestCases($formattedParent, $formattedTestCases);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $testCasesClient->resumeOperation($operationName, 'batchRunTestCases');
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
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. Agent name. Format: `projects/<Project ID>/locations/<Location ID>/agents/
     *                               <AgentID>`.
     * @param string[] $testCases    Required. Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                               ID>/testCases/<TestCase ID>`.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type string $environment
     *           Optional. If not set, draft environment is assumed. Format: `projects/<Project
     *           ID>/locations/<Location ID>/agents/<Agent ID>/environments/<Environment
     *           ID>`.
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
    public function batchRunTestCases($parent, $testCases, array $optionalArgs = [])
    {
        $request = new BatchRunTestCasesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTestCases($testCases);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['environment'])) {
            $request->setEnvironment($optionalArgs['environment']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('BatchRunTestCases', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Calculates the test coverage for an agent.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedAgent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $type = CoverageType::COVERAGE_TYPE_UNSPECIFIED;
     *     $response = $testCasesClient->calculateCoverage($formattedAgent, $type);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $agent        Required. The agent to calculate coverage for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param int    $type         Required. The type of coverage requested.
     *                             For allowed values, use constants defined on {@see \Google\Cloud\Dialogflow\Cx\V3beta1\CalculateCoverageRequest\CoverageType}
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
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\CalculateCoverageResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function calculateCoverage($agent, $type, array $optionalArgs = [])
    {
        $request = new CalculateCoverageRequest();
        $requestParamHeaders = [];
        $request->setAgent($agent);
        $request->setType($type);
        $requestParamHeaders['agent'] = $agent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CalculateCoverage', CalculateCoverageResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Creates a test case for the given agent.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $testCase = new TestCase();
     *     $response = $testCasesClient->createTestCase($formattedParent, $testCase);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. The agent to create the test case for.
     *                               Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param TestCase $testCase     Required. The test case to create.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TestCase
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function createTestCase($parent, $testCase, array $optionalArgs = [])
    {
        $request = new CreateTestCaseRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTestCase($testCase);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateTestCase', TestCase::class, $optionalArgs, $request)->wait();
    }

    /**
     * Exports the test cases under the agent to a Cloud Storage bucket or a local
     * file. Filter can be applied to export a subset of test cases.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $operationResponse = $testCasesClient->exportTestCases($formattedParent);
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
     *     $operationResponse = $testCasesClient->exportTestCases($formattedParent);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $testCasesClient->resumeOperation($operationName, 'exportTestCases');
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
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent where to export test cases from.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $gcsUri
     *           The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI to
     *           export the test cases to. The format of this URI must be
     *           `gs://<bucket-name>/<object-name>`. If unspecified, the serialized test
     *           cases is returned inline.
     *     @type int $dataFormat
     *           The data format of the exported test cases. If not specified, `BLOB` is
     *           assumed.
     *           For allowed values, use constants defined on {@see \Google\Cloud\Dialogflow\Cx\V3beta1\ExportTestCasesRequest\DataFormat}
     *     @type string $filter
     *           The filter expression used to filter exported test cases, see
     *           [API Filtering](https://aip.dev/160). The expression is case insensitive
     *           and supports the following syntax:
     *
     *           name = <value> [OR name = <value>] ...
     *
     *           For example:
     *
     *           *   "name = t1 OR name = t2" matches the test case with the exact resource
     *           name "t1" or "t2".
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
    public function exportTestCases($parent, array $optionalArgs = [])
    {
        $request = new ExportTestCasesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['gcsUri'])) {
            $request->setGcsUri($optionalArgs['gcsUri']);
        }

        if (isset($optionalArgs['dataFormat'])) {
            $request->setDataFormat($optionalArgs['dataFormat']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('ExportTestCases', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets a test case.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedName = $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]');
     *     $response = $testCasesClient->getTestCase($formattedName);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the testcase.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/testCases/<TestCase ID>`.
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
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TestCase
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getTestCase($name, array $optionalArgs = [])
    {
        $request = new GetTestCaseRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetTestCase', TestCase::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a test case result.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedName = $testCasesClient->testCaseResultName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]', '[RESULT]');
     *     $response = $testCasesClient->getTestCaseResult($formattedName);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the testcase.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`.
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
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TestCaseResult
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getTestCaseResult($name, array $optionalArgs = [])
    {
        $request = new GetTestCaseResultRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetTestCaseResult', TestCaseResult::class, $optionalArgs, $request)->wait();
    }

    /**
     * Imports the test cases from a Cloud Storage bucket or a local file. It
     * always creates new test cases and won't overwite any existing ones. The
     * provided ID in the imported test case is neglected.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     $operationResponse = $testCasesClient->importTestCases($formattedParent);
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
     *     $operationResponse = $testCasesClient->importTestCases($formattedParent);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $testCasesClient->resumeOperation($operationName, 'importTestCases');
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
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent to import test cases to.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $gcsUri
     *           The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
     *           to import test cases from. The format of this URI must be
     *           `gs://<bucket-name>/<object-name>`.
     *     @type string $content
     *           Uncompressed raw byte content for test cases.
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
    public function importTestCases($parent, array $optionalArgs = [])
    {
        $request = new ImportTestCasesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['gcsUri'])) {
            $request->setGcsUri($optionalArgs['gcsUri']);
        }

        if (isset($optionalArgs['content'])) {
            $request->setContent($optionalArgs['content']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('ImportTestCases', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Fetches a list of results for a given test case.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $testCasesClient->listTestCaseResults($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $testCasesClient->listTestCaseResults($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The test case to list results for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>/
     *                             testCases/<TestCase ID>`. Specify a `-` as a wildcard for TestCase ID to
     *                             list results across multiple test cases.
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
     *     @type string $filter
     *           The filter expression used to filter test case results. See
     *           [API Filtering](https://aip.dev/160).
     *
     *           The expression is case insensitive. Only 'AND' is supported for logical
     *           operators. The supported syntax is listed below in detail:
     *
     *           <field> <operator> <value> [AND <field> <operator> <value>] ...
     *           [AND latest]
     *
     *           The supported fields and operators are:
     *           field                 operator
     *           `environment`         `=`, `IN`  (Use value `draft` for draft environment)
     *           `test_time`           `>`, `<`
     *
     *           `latest` only returns the latest test result in all results for each test
     *           case.
     *
     *           Examples:
     *           *   "environment=draft AND latest" matches the latest test result for each
     *           test case in the draft environment.
     *           *   "environment IN (e1,e2)" matches any test case results with an
     *           environment resource name of either "e1" or "e2".
     *           *   "test_time > 1602540713" matches any test case results with test time
     *           later than a unix timestamp in seconds 1602540713.
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
    public function listTestCaseResults($parent, array $optionalArgs = [])
    {
        $request = new ListTestCaseResultsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListTestCaseResults', $optionalArgs, ListTestCaseResultsResponse::class, $request);
    }

    /**
     * Fetches a list of test cases for a given agent.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedParent = $testCasesClient->agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $testCasesClient->listTestCases($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $testCasesClient->listTestCases($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The agent to list all pages for.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
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
     *     @type int $view
     *           Specifies whether response should include all fields or just the metadata.
     *           For allowed values, use constants defined on {@see \Google\Cloud\Dialogflow\Cx\V3beta1\ListTestCasesRequest\TestCaseView}
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
    public function listTestCases($parent, array $optionalArgs = [])
    {
        $request = new ListTestCasesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListTestCases', $optionalArgs, ListTestCasesResponse::class, $request);
    }

    /**
     * Kicks off a test case run.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $formattedName = $testCasesClient->testCaseName('[PROJECT]', '[LOCATION]', '[AGENT]', '[TEST_CASE]');
     *     $operationResponse = $testCasesClient->runTestCase($formattedName);
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
     *     $operationResponse = $testCasesClient->runTestCase($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $testCasesClient->resumeOperation($operationName, 'runTestCase');
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
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format of test case name to run: `projects/<Project ID>/locations/
     *                             <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $environment
     *           Optional. Environment name. If not set, draft environment is assumed.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/environments/<Environment ID>`.
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
    public function runTestCase($name, array $optionalArgs = [])
    {
        $request = new RunTestCaseRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['environment'])) {
            $request->setEnvironment($optionalArgs['environment']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('RunTestCase', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Updates the specified test case.
     *
     * Sample code:
     * ```
     * $testCasesClient = new TestCasesClient();
     * try {
     *     $testCase = new TestCase();
     *     $updateMask = new FieldMask();
     *     $response = $testCasesClient->updateTestCase($testCase, $updateMask);
     * } finally {
     *     $testCasesClient->close();
     * }
     * ```
     *
     * @param TestCase  $testCase     Required. The test case to update.
     * @param FieldMask $updateMask   Required. The mask to specify which fields should be updated. The
     *                                [`creationTime`][google.cloud.dialogflow.cx.v3beta1.TestCase.creation_time] and
     *                                [`lastTestResult`][google.cloud.dialogflow.cx.v3beta1.TestCase.last_test_result] cannot be updated.
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
     * @return \Google\Cloud\Dialogflow\Cx\V3beta1\TestCase
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateTestCase($testCase, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateTestCaseRequest();
        $requestParamHeaders = [];
        $request->setTestCase($testCase);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['test_case.name'] = $testCase->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateTestCase', TestCase::class, $optionalArgs, $request)->wait();
    }
}
