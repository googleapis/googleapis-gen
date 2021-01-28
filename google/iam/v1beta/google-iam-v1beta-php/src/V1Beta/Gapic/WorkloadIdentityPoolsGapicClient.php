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
 * https://github.com/google/googleapis/blob/master/google/iam/v1beta/workload_identity_pool.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Iam\V1Beta\Gapic;

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
use Google\Iam\V1beta\CreateWorkloadIdentityPoolProviderRequest;
use Google\Iam\V1beta\CreateWorkloadIdentityPoolRequest;
use Google\Iam\V1beta\DeleteWorkloadIdentityPoolProviderRequest;
use Google\Iam\V1beta\DeleteWorkloadIdentityPoolRequest;
use Google\Iam\V1beta\GetWorkloadIdentityPoolProviderRequest;
use Google\Iam\V1beta\GetWorkloadIdentityPoolRequest;
use Google\Iam\V1beta\ListWorkloadIdentityPoolProvidersRequest;
use Google\Iam\V1beta\ListWorkloadIdentityPoolProvidersResponse;
use Google\Iam\V1beta\ListWorkloadIdentityPoolsRequest;
use Google\Iam\V1beta\ListWorkloadIdentityPoolsResponse;
use Google\Iam\V1beta\UndeleteWorkloadIdentityPoolProviderRequest;
use Google\Iam\V1beta\UndeleteWorkloadIdentityPoolRequest;
use Google\Iam\V1beta\UpdateWorkloadIdentityPoolProviderRequest;
use Google\Iam\V1beta\UpdateWorkloadIdentityPoolRequest;
use Google\Iam\V1beta\WorkloadIdentityPool;
use Google\Iam\V1beta\WorkloadIdentityPoolProvider;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Manages WorkloadIdentityPools.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
 * try {
 *     $formattedParent = $workloadIdentityPoolsClient->projectName('[PROJECT]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPools($formattedParent);
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
 *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPools($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $workloadIdentityPoolsClient->close();
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
class WorkloadIdentityPoolsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.iam.v1beta.WorkloadIdentityPools';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'iam.googleapis.com';

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
    private static $projectNameTemplate;
    private static $workloadIdentityPoolNameTemplate;
    private static $workloadIdentityPoolProviderNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/workload_identity_pools_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/workload_identity_pools_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/workload_identity_pools_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/workload_identity_pools_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getWorkloadIdentityPoolNameTemplate()
    {
        if (null == self::$workloadIdentityPoolNameTemplate) {
            self::$workloadIdentityPoolNameTemplate = new PathTemplate('projects/{project}/locations/{location}/workloadIdentityPools/{workload_identity_pool}');
        }

        return self::$workloadIdentityPoolNameTemplate;
    }

    private static function getWorkloadIdentityPoolProviderNameTemplate()
    {
        if (null == self::$workloadIdentityPoolProviderNameTemplate) {
            self::$workloadIdentityPoolProviderNameTemplate = new PathTemplate('projects/{project}/locations/{location}/workloadIdentityPools/{workload_identity_pool}/providers/{workload_identity_pool_provider}');
        }

        return self::$workloadIdentityPoolProviderNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'project' => self::getProjectNameTemplate(),
                'workloadIdentityPool' => self::getWorkloadIdentityPoolNameTemplate(),
                'workloadIdentityPoolProvider' => self::getWorkloadIdentityPoolProviderNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
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
     * a workload_identity_pool resource.
     *
     * @param string $project
     * @param string $location
     * @param string $workloadIdentityPool
     *
     * @return string The formatted workload_identity_pool resource.
     * @experimental
     */
    public static function workloadIdentityPoolName($project, $location, $workloadIdentityPool)
    {
        return self::getWorkloadIdentityPoolNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'workload_identity_pool' => $workloadIdentityPool,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a workload_identity_pool_provider resource.
     *
     * @param string $project
     * @param string $location
     * @param string $workloadIdentityPool
     * @param string $workloadIdentityPoolProvider
     *
     * @return string The formatted workload_identity_pool_provider resource.
     * @experimental
     */
    public static function workloadIdentityPoolProviderName($project, $location, $workloadIdentityPool, $workloadIdentityPoolProvider)
    {
        return self::getWorkloadIdentityPoolProviderNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'workload_identity_pool' => $workloadIdentityPool,
            'workload_identity_pool_provider' => $workloadIdentityPoolProvider,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}
     * - workloadIdentityPool: projects/{project}/locations/{location}/workloadIdentityPools/{workload_identity_pool}
     * - workloadIdentityPoolProvider: projects/{project}/locations/{location}/workloadIdentityPools/{workload_identity_pool}/providers/{workload_identity_pool_provider}.
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
     *           as "<uri>:<port>". Default 'iam.googleapis.com:443'.
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
     * Lists all non-deleted
     * [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool]s in a
     * project. If `show_deleted` is set to `true`, then deleted pools are also
     * listed.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedParent = $workloadIdentityPoolsClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPools($formattedParent);
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
     *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPools($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource to list pools for.
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
     *     @type bool $showDeleted
     *          Whether to return soft-deleted pools.
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
    public function listWorkloadIdentityPools($parent, array $optionalArgs = [])
    {
        $request = new ListWorkloadIdentityPoolsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['showDeleted'])) {
            $request->setShowDeleted($optionalArgs['showDeleted']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListWorkloadIdentityPools',
            $optionalArgs,
            ListWorkloadIdentityPoolsResponse::class,
            $request
        );
    }

    /**
     * Gets an individual
     * [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]');
     *     $response = $workloadIdentityPoolsClient->getWorkloadIdentityPool($formattedName);
     * } finally {
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the pool to retrieve.
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
     * @return \Google\Iam\V1beta\WorkloadIdentityPool
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getWorkloadIdentityPool($name, array $optionalArgs = [])
    {
        $request = new GetWorkloadIdentityPoolRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetWorkloadIdentityPool',
            WorkloadIdentityPool::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new
     * [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     *
     * You cannot reuse the name of a deleted pool until 30 days after deletion.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedParent = $workloadIdentityPoolsClient->projectName('[PROJECT]');
     *     $workloadIdentityPool = new WorkloadIdentityPool();
     *     $workloadIdentityPoolId = '';
     *     $operationResponse = $workloadIdentityPoolsClient->createWorkloadIdentityPool($formattedParent, $workloadIdentityPool, $workloadIdentityPoolId);
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
     *     $operationResponse = $workloadIdentityPoolsClient->createWorkloadIdentityPool($formattedParent, $workloadIdentityPool, $workloadIdentityPoolId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'createWorkloadIdentityPool');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string               $parent                 Required. The parent resource to create the pool in. The only supported
     *                                                     location is `global`.
     * @param WorkloadIdentityPool $workloadIdentityPool   Required. The pool to create.
     * @param string               $workloadIdentityPoolId Required. The ID to use for the pool, which becomes the
     *                                                     final component of the resource name. This value should be 4-32 characters,
     *                                                     and may contain the characters [a-z0-9-]. The prefix `gcp-` is
     *                                                     reserved for use by Google, and may not be specified.
     * @param array                $optionalArgs           {
     *                                                     Optional.
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
    public function createWorkloadIdentityPool($parent, $workloadIdentityPool, $workloadIdentityPoolId, array $optionalArgs = [])
    {
        $request = new CreateWorkloadIdentityPoolRequest();
        $request->setParent($parent);
        $request->setWorkloadIdentityPool($workloadIdentityPool);
        $request->setWorkloadIdentityPoolId($workloadIdentityPoolId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateWorkloadIdentityPool',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing
     * [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $workloadIdentityPool = new WorkloadIdentityPool();
     *     $updateMask = new FieldMask();
     *     $operationResponse = $workloadIdentityPoolsClient->updateWorkloadIdentityPool($workloadIdentityPool, $updateMask);
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
     *     $operationResponse = $workloadIdentityPoolsClient->updateWorkloadIdentityPool($workloadIdentityPool, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'updateWorkloadIdentityPool');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param WorkloadIdentityPool $workloadIdentityPool Required. The pool to update. The `name` field is used to identify the pool.
     * @param FieldMask            $updateMask           Required. The list of fields update.
     * @param array                $optionalArgs         {
     *                                                   Optional.
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
    public function updateWorkloadIdentityPool($workloadIdentityPool, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateWorkloadIdentityPoolRequest();
        $request->setWorkloadIdentityPool($workloadIdentityPool);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'workload_identity_pool.name' => $request->getWorkloadIdentityPool()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateWorkloadIdentityPool',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a
     * [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     *
     * You cannot use a deleted pool to exchange external
     * credentials for Google Cloud credentials. However, deletion does
     * not revoke credentials that have already been issued.
     * Credentials issued for a deleted pool do not grant access to resources.
     * If the pool is undeleted, and the credentials are not expired, they
     * grant access again.
     * You can undelete a pool for 30 days. After 30 days, deletion is
     * permanent.
     * You cannot update deleted pools. However, you can view and list them.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]');
     *     $operationResponse = $workloadIdentityPoolsClient->deleteWorkloadIdentityPool($formattedName);
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
     *     $operationResponse = $workloadIdentityPoolsClient->deleteWorkloadIdentityPool($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'deleteWorkloadIdentityPool');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the pool to delete.
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
    public function deleteWorkloadIdentityPool($name, array $optionalArgs = [])
    {
        $request = new DeleteWorkloadIdentityPoolRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteWorkloadIdentityPool',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Undeletes a [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool],
     * as long as it was deleted fewer than 30 days ago.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]');
     *     $operationResponse = $workloadIdentityPoolsClient->undeleteWorkloadIdentityPool($formattedName);
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
     *     $operationResponse = $workloadIdentityPoolsClient->undeleteWorkloadIdentityPool($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'undeleteWorkloadIdentityPool');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the pool to undelete.
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
    public function undeleteWorkloadIdentityPool($name, array $optionalArgs = [])
    {
        $request = new UndeleteWorkloadIdentityPoolRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UndeleteWorkloadIdentityPool',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists all non-deleted
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityPoolProvider]s
     * in a [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     * If `show_deleted` is set to `true`, then deleted providers are also listed.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedParent = $workloadIdentityPoolsClient->workloadIdentityPoolName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPoolProviders($formattedParent);
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
     *     $pagedResponse = $workloadIdentityPoolsClient->listWorkloadIdentityPoolProviders($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The pool to list providers for.
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
     *     @type bool $showDeleted
     *          Whether to return soft-deleted providers.
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
    public function listWorkloadIdentityPoolProviders($parent, array $optionalArgs = [])
    {
        $request = new ListWorkloadIdentityPoolProvidersRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['showDeleted'])) {
            $request->setShowDeleted($optionalArgs['showDeleted']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListWorkloadIdentityPoolProviders',
            $optionalArgs,
            ListWorkloadIdentityPoolProvidersResponse::class,
            $request
        );
    }

    /**
     * Gets an individual
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityPoolProvider].
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolProviderName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]', '[WORKLOAD_IDENTITY_POOL_PROVIDER]');
     *     $response = $workloadIdentityPoolsClient->getWorkloadIdentityPoolProvider($formattedName);
     * } finally {
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the provider to retrieve.
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
     * @return \Google\Iam\V1beta\WorkloadIdentityPoolProvider
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getWorkloadIdentityPoolProvider($name, array $optionalArgs = [])
    {
        $request = new GetWorkloadIdentityPoolProviderRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetWorkloadIdentityPoolProvider',
            WorkloadIdentityPoolProvider::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityProvider]
     * in a [WorkloadIdentityPool][google.iam.v1beta.WorkloadIdentityPool].
     *
     * You cannot reuse the name of a deleted provider until 30 days after
     * deletion.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedParent = $workloadIdentityPoolsClient->workloadIdentityPoolName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]');
     *     $workloadIdentityPoolProvider = new WorkloadIdentityPoolProvider();
     *     $workloadIdentityPoolProviderId = '';
     *     $operationResponse = $workloadIdentityPoolsClient->createWorkloadIdentityPoolProvider($formattedParent, $workloadIdentityPoolProvider, $workloadIdentityPoolProviderId);
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
     *     $operationResponse = $workloadIdentityPoolsClient->createWorkloadIdentityPoolProvider($formattedParent, $workloadIdentityPoolProvider, $workloadIdentityPoolProviderId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'createWorkloadIdentityPoolProvider');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string                       $parent                         Required. The pool to create this provider in.
     * @param WorkloadIdentityPoolProvider $workloadIdentityPoolProvider   Required. The provider to create.
     * @param string                       $workloadIdentityPoolProviderId Required. The ID for the provider, which becomes the
     *                                                                     final component of the resource name. This value must be 4-32 characters,
     *                                                                     and may contain the characters [a-z0-9-]. The prefix `gcp-` is
     *                                                                     reserved for use by Google, and may not be specified.
     * @param array                        $optionalArgs                   {
     *                                                                     Optional.
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
    public function createWorkloadIdentityPoolProvider($parent, $workloadIdentityPoolProvider, $workloadIdentityPoolProviderId, array $optionalArgs = [])
    {
        $request = new CreateWorkloadIdentityPoolProviderRequest();
        $request->setParent($parent);
        $request->setWorkloadIdentityPoolProvider($workloadIdentityPoolProvider);
        $request->setWorkloadIdentityPoolProviderId($workloadIdentityPoolProviderId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateWorkloadIdentityPoolProvider',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityProvider].
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $workloadIdentityPoolProvider = new WorkloadIdentityPoolProvider();
     *     $updateMask = new FieldMask();
     *     $operationResponse = $workloadIdentityPoolsClient->updateWorkloadIdentityPoolProvider($workloadIdentityPoolProvider, $updateMask);
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
     *     $operationResponse = $workloadIdentityPoolsClient->updateWorkloadIdentityPoolProvider($workloadIdentityPoolProvider, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'updateWorkloadIdentityPoolProvider');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param WorkloadIdentityPoolProvider $workloadIdentityPoolProvider Required. The provider to update.
     * @param FieldMask                    $updateMask                   Required. The list of fields to update.
     * @param array                        $optionalArgs                 {
     *                                                                   Optional.
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
    public function updateWorkloadIdentityPoolProvider($workloadIdentityPoolProvider, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateWorkloadIdentityPoolProviderRequest();
        $request->setWorkloadIdentityPoolProvider($workloadIdentityPoolProvider);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'workload_identity_pool_provider.name' => $request->getWorkloadIdentityPoolProvider()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateWorkloadIdentityPoolProvider',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityProvider].
     * Deleting a provider does not revoke credentials that have already been
     * issued; they continue to grant access.
     * You can undelete a provider for 30 days. After 30 days, deletion is
     * permanent.
     * You cannot update deleted providers. However, you can view and list them.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolProviderName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]', '[WORKLOAD_IDENTITY_POOL_PROVIDER]');
     *     $operationResponse = $workloadIdentityPoolsClient->deleteWorkloadIdentityPoolProvider($formattedName);
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
     *     $operationResponse = $workloadIdentityPoolsClient->deleteWorkloadIdentityPoolProvider($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'deleteWorkloadIdentityPoolProvider');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the provider to delete.
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
    public function deleteWorkloadIdentityPoolProvider($name, array $optionalArgs = [])
    {
        $request = new DeleteWorkloadIdentityPoolProviderRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteWorkloadIdentityPoolProvider',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Undeletes a
     * [WorkloadIdentityPoolProvider][google.iam.v1beta.WorkloadIdentityProvider],
     * as long as it was deleted fewer than 30 days ago.
     *
     * Sample code:
     * ```
     * $workloadIdentityPoolsClient = new WorkloadIdentityPoolsClient();
     * try {
     *     $formattedName = $workloadIdentityPoolsClient->workloadIdentityPoolProviderName('[PROJECT]', '[LOCATION]', '[WORKLOAD_IDENTITY_POOL]', '[WORKLOAD_IDENTITY_POOL_PROVIDER]');
     *     $operationResponse = $workloadIdentityPoolsClient->undeleteWorkloadIdentityPoolProvider($formattedName);
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
     *     $operationResponse = $workloadIdentityPoolsClient->undeleteWorkloadIdentityPoolProvider($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workloadIdentityPoolsClient->resumeOperation($operationName, 'undeleteWorkloadIdentityPoolProvider');
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
     *     $workloadIdentityPoolsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the provider to undelete.
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
    public function undeleteWorkloadIdentityPoolProvider($name, array $optionalArgs = [])
    {
        $request = new UndeleteWorkloadIdentityPoolProviderRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UndeleteWorkloadIdentityPoolProvider',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
