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
 * https://github.com/google/googleapis/blob/master/google/cloud/notebooks/v1beta1/service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Notebooks\V1beta1\Gapic;

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
use Google\Cloud\Notebooks\V1Beta1\Environment;
use Google\Cloud\Notebooks\V1beta1\CreateEnvironmentRequest;
use Google\Cloud\Notebooks\V1beta1\CreateInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\DeleteEnvironmentRequest;
use Google\Cloud\Notebooks\V1beta1\DeleteInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\GetEnvironmentRequest;
use Google\Cloud\Notebooks\V1beta1\GetInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\Instance;
use Google\Cloud\Notebooks\V1beta1\Instance\AcceleratorType;
use Google\Cloud\Notebooks\V1beta1\IsInstanceUpgradeableRequest;
use Google\Cloud\Notebooks\V1beta1\IsInstanceUpgradeableResponse;
use Google\Cloud\Notebooks\V1beta1\ListEnvironmentsRequest;
use Google\Cloud\Notebooks\V1beta1\ListEnvironmentsResponse;
use Google\Cloud\Notebooks\V1beta1\ListInstancesRequest;
use Google\Cloud\Notebooks\V1beta1\ListInstancesResponse;
use Google\Cloud\Notebooks\V1beta1\RegisterInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\ReportInstanceInfoRequest;
use Google\Cloud\Notebooks\V1beta1\ResetInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\SetInstanceAcceleratorRequest;
use Google\Cloud\Notebooks\V1beta1\SetInstanceLabelsRequest;
use Google\Cloud\Notebooks\V1beta1\SetInstanceMachineTypeRequest;
use Google\Cloud\Notebooks\V1beta1\StartInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\StopInstanceRequest;
use Google\Cloud\Notebooks\V1beta1\UpgradeInstanceInternalRequest;
use Google\Cloud\Notebooks\V1beta1\UpgradeInstanceRequest;
use Google\LongRunning\Operation;

/**
 * Service Description: API v1beta1 service for Cloud AI Platform Notebooks.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $notebookServiceClient = new NotebookServiceClient();
 * try {
 *     $parent = '';
 *     // Iterate over pages of elements
 *     $pagedResponse = $notebookServiceClient->listInstances($parent);
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
 *     $pagedResponse = $notebookServiceClient->listInstances($parent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $notebookServiceClient->close();
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
class NotebookServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.notebooks.v1beta1.NotebookService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'notebooks.googleapis.com';

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
    private static $environmentNameTemplate;
    private static $instanceNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/notebook_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/notebook_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/notebook_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/notebook_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEnvironmentNameTemplate()
    {
        if (null == self::$environmentNameTemplate) {
            self::$environmentNameTemplate = new PathTemplate('projects/{project}/environments/{environment}');
        }

        return self::$environmentNameTemplate;
    }

    private static function getInstanceNameTemplate()
    {
        if (null == self::$instanceNameTemplate) {
            self::$instanceNameTemplate = new PathTemplate('projects/{project}/instances/{instance}');
        }

        return self::$instanceNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'environment' => self::getEnvironmentNameTemplate(),
                'instance' => self::getInstanceNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a environment resource.
     *
     * @param string $project
     * @param string $environment
     *
     * @return string The formatted environment resource.
     * @experimental
     */
    public static function environmentName($project, $environment)
    {
        return self::getEnvironmentNameTemplate()->render([
            'project' => $project,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a instance resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     * @experimental
     */
    public static function instanceName($project, $instance)
    {
        return self::getInstanceNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - environment: projects/{project}/environments/{environment}
     * - instance: projects/{project}/instances/{instance}.
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
     *           as "<uri>:<port>". Default 'notebooks.googleapis.com:443'.
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
     * Lists instances in a given project and location.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $notebookServiceClient->listInstances($parent);
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
     *     $pagedResponse = $notebookServiceClient->listInstances($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Format:
     *                             `parent=projects/{project_id}/locations/{location}`
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
    public function listInstances($parent, array $optionalArgs = [])
    {
        $request = new ListInstancesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListInstances',
            $optionalArgs,
            ListInstancesResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $response = $notebookServiceClient->getInstance($name);
     * } finally {
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
     * @return \Google\Cloud\Notebooks\V1beta1\Instance
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getInstance($name, array $optionalArgs = [])
    {
        $request = new GetInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetInstance',
            Instance::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Instance in a given project and location.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $parent = '';
     *     $instanceId = '';
     *     $instance = new Instance();
     *     $operationResponse = $notebookServiceClient->createInstance($parent, $instanceId, $instance);
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
     *     $operationResponse = $notebookServiceClient->createInstance($parent, $instanceId, $instance);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'createInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. Format:
     *                               `parent=projects/{project_id}/locations/{location}`
     * @param string   $instanceId   Required. User-defined unique ID of this instance.
     * @param Instance $instance     Required. The instance to be created.
     * @param array    $optionalArgs {
     *                               Optional.
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
    public function createInstance($parent, $instanceId, $instance, array $optionalArgs = [])
    {
        $request = new CreateInstanceRequest();
        $request->setParent($parent);
        $request->setInstanceId($instanceId);
        $request->setInstance($instance);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Registers an existing legacy notebook instance to the Notebooks API server.
     * Legacy instances are instances created with the legacy Compute Engine
     * calls. They are not manageable by the Notebooks API out of the box. This
     * call makes these instances manageable by the Notebooks API.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $parent = '';
     *     $instanceId = '';
     *     $operationResponse = $notebookServiceClient->registerInstance($parent, $instanceId);
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
     *     $operationResponse = $notebookServiceClient->registerInstance($parent, $instanceId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'registerInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Format:
     *                             `parent=projects/{project_id}/locations/{location}`
     * @param string $instanceId   Required. User defined unique ID of this instance. The `instance_id` must
     *                             be 1 to 63 characters long and contain only lowercase letters,
     *                             numeric characters, and dashes. The first character must be a lowercase
     *                             letter and the last character cannot be a dash.
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
    public function registerInstance($parent, $instanceId, array $optionalArgs = [])
    {
        $request = new RegisterInstanceRequest();
        $request->setParent($parent);
        $request->setInstanceId($instanceId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'RegisterInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the guest accelerators of a single Instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $type = AcceleratorType::ACCELERATOR_TYPE_UNSPECIFIED;
     *     $coreCount = 0;
     *     $operationResponse = $notebookServiceClient->setInstanceAccelerator($name, $type, $coreCount);
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
     *     $operationResponse = $notebookServiceClient->setInstanceAccelerator($name, $type, $coreCount);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'setInstanceAccelerator');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param int    $type         Required. Type of this accelerator.
     *                             For allowed values, use constants defined on {@see \Google\Cloud\Notebooks\V1beta1\Instance\AcceleratorType}
     * @param int    $coreCount    Required. Count of cores of this accelerator. Note that not all combinations
     *                             of `type` and `core_count` are valid. Check [GPUs on
     *                             Compute Engine](https://cloud.google.com/compute/docs/gpus/#gpus-list) to
     *                             find a valid combination. TPUs are not supported.
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
    public function setInstanceAccelerator($name, $type, $coreCount, array $optionalArgs = [])
    {
        $request = new SetInstanceAcceleratorRequest();
        $request->setName($name);
        $request->setType($type);
        $request->setCoreCount($coreCount);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'SetInstanceAccelerator',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the machine type of a single Instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $machineType = '';
     *     $operationResponse = $notebookServiceClient->setInstanceMachineType($name, $machineType);
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
     *     $operationResponse = $notebookServiceClient->setInstanceMachineType($name, $machineType);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'setInstanceMachineType');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param string $machineType  Required. The [Compute Engine machine
     *                             type](https://cloud.google.com/compute/docs/machine-types).
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
    public function setInstanceMachineType($name, $machineType, array $optionalArgs = [])
    {
        $request = new SetInstanceMachineTypeRequest();
        $request->setName($name);
        $request->setMachineType($machineType);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'SetInstanceMachineType',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the labels of an Instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->setInstanceLabels($name);
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
     *     $operationResponse = $notebookServiceClient->setInstanceLabels($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'setInstanceLabels');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $labels
     *          Labels to apply to this instance.
     *          These can be later modified by the setLabels method
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
    public function setInstanceLabels($name, array $optionalArgs = [])
    {
        $request = new SetInstanceLabelsRequest();
        $request->setName($name);
        if (isset($optionalArgs['labels'])) {
            $request->setLabels($optionalArgs['labels']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'SetInstanceLabels',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->deleteInstance($name);
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
     *     $operationResponse = $notebookServiceClient->deleteInstance($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'deleteInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
    public function deleteInstance($name, array $optionalArgs = [])
    {
        $request = new DeleteInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Starts a notebook instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->startInstance($name);
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
     *     $operationResponse = $notebookServiceClient->startInstance($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'startInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
    public function startInstance($name, array $optionalArgs = [])
    {
        $request = new StartInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'StartInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Stops a notebook instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->stopInstance($name);
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
     *     $operationResponse = $notebookServiceClient->stopInstance($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'stopInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
    public function stopInstance($name, array $optionalArgs = [])
    {
        $request = new StopInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'StopInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Resets a notebook instance.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->resetInstance($name);
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
     *     $operationResponse = $notebookServiceClient->resetInstance($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'resetInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
    public function resetInstance($name, array $optionalArgs = [])
    {
        $request = new ResetInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ResetInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Allows notebook instances to
     * report their latest instance information to the Notebooks
     * API server. The server will merge the reported information to
     * the instance metadata store. Do not use this method directly.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $vmId = '';
     *     $operationResponse = $notebookServiceClient->reportInstanceInfo($name, $vmId);
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
     *     $operationResponse = $notebookServiceClient->reportInstanceInfo($name, $vmId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'reportInstanceInfo');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param string $vmId         Required. The VM hardware token for authenticating the VM.
     *                             https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type array $metadata
     *          The metadata reported to Notebooks API. This will be merged to the instance
     *          metadata store
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
    public function reportInstanceInfo($name, $vmId, array $optionalArgs = [])
    {
        $request = new ReportInstanceInfoRequest();
        $request->setName($name);
        $request->setVmId($vmId);
        if (isset($optionalArgs['metadata'])) {
            $request->setMetadata($optionalArgs['metadata']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ReportInstanceInfo',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Check if a notebook instance is upgradable.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $notebookInstance = '';
     *     $response = $notebookServiceClient->isInstanceUpgradeable($notebookInstance);
     * } finally {
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $notebookInstance Required. Format:
     *                                 `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param array  $optionalArgs     {
     *                                 Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Notebooks\V1beta1\IsInstanceUpgradeableResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function isInstanceUpgradeable($notebookInstance, array $optionalArgs = [])
    {
        $request = new IsInstanceUpgradeableRequest();
        $request->setNotebookInstance($notebookInstance);

        $requestParams = new RequestParamsHeaderDescriptor([
          'notebook_instance' => $request->getNotebookInstance(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'IsInstanceUpgradeable',
            IsInstanceUpgradeableResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Upgrades a notebook instance to the latest version.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->upgradeInstance($name);
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
     *     $operationResponse = $notebookServiceClient->upgradeInstance($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'upgradeInstance');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
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
    public function upgradeInstance($name, array $optionalArgs = [])
    {
        $request = new UpgradeInstanceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpgradeInstance',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Allows notebook instances to
     * call this endpoint to upgrade themselves. Do not use this method directly.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $vmId = '';
     *     $operationResponse = $notebookServiceClient->upgradeInstanceInternal($name, $vmId);
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
     *     $operationResponse = $notebookServiceClient->upgradeInstanceInternal($name, $vmId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'upgradeInstanceInternal');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * @param string $vmId         Required. The VM hardware token for authenticating the VM.
     *                             https://cloud.google.com/compute/docs/instances/verifying-instance-identity
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
    public function upgradeInstanceInternal($name, $vmId, array $optionalArgs = [])
    {
        $request = new UpgradeInstanceInternalRequest();
        $request->setName($name);
        $request->setVmId($vmId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpgradeInstanceInternal',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists environments in a project.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $notebookServiceClient->listEnvironments($parent);
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
     *     $pagedResponse = $notebookServiceClient->listEnvironments($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Format: `projects/{project_id}/locations/{location}`
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
    public function listEnvironments($parent, array $optionalArgs = [])
    {
        $request = new ListEnvironmentsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListEnvironments',
            $optionalArgs,
            ListEnvironmentsResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Environment.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $response = $notebookServiceClient->getEnvironment($name);
     * } finally {
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/environments/{environment_id}`
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
     * @return \Google\Cloud\Notebooks\V1Beta1\Environment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getEnvironment($name, array $optionalArgs = [])
    {
        $request = new GetEnvironmentRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetEnvironment',
            Environment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new Environment.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $parent = '';
     *     $environmentId = '';
     *     $environment = new Environment();
     *     $operationResponse = $notebookServiceClient->createEnvironment($parent, $environmentId, $environment);
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
     *     $operationResponse = $notebookServiceClient->createEnvironment($parent, $environmentId, $environment);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'createEnvironment');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string      $parent        Required. Format: `projects/{project_id}/locations/{location}`
     * @param string      $environmentId Required. User-defined unique ID of this environment. The `environment_id` must
     *                                   be 1 to 63 characters long and contain only lowercase letters,
     *                                   numeric characters, and dashes. The first character must be a lowercase
     *                                   letter and the last character cannot be a dash.
     * @param Environment $environment   Required. The environment to be created.
     * @param array       $optionalArgs  {
     *                                   Optional.
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
    public function createEnvironment($parent, $environmentId, $environment, array $optionalArgs = [])
    {
        $request = new CreateEnvironmentRequest();
        $request->setParent($parent);
        $request->setEnvironmentId($environmentId);
        $request->setEnvironment($environment);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateEnvironment',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a single Environment.
     *
     * Sample code:
     * ```
     * $notebookServiceClient = new NotebookServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $notebookServiceClient->deleteEnvironment($name);
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
     *     $operationResponse = $notebookServiceClient->deleteEnvironment($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $notebookServiceClient->resumeOperation($operationName, 'deleteEnvironment');
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
     *     $notebookServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Format:
     *                             `projects/{project_id}/locations/{location}/environments/{environment_id}`
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
    public function deleteEnvironment($name, array $optionalArgs = [])
    {
        $request = new DeleteEnvironmentRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteEnvironment',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
