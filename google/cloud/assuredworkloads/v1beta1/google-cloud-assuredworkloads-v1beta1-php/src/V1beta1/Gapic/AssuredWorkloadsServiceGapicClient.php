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
 * https://github.com/google/googleapis/blob/master/google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\AssuredWorkloads\V1beta1\Gapic;

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
use Google\Cloud\AssuredWorkloads\V1beta1\CreateWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\DeleteWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\GetWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\ListWorkloadsRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\ListWorkloadsResponse;
use Google\Cloud\AssuredWorkloads\V1beta1\UpdateWorkloadRequest;
use Google\Cloud\AssuredWorkloads\V1beta1\Workload;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service to manage AssuredWorkloads.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
 * try {
 *     $formattedParent = $assuredWorkloadsServiceClient->locationName('[ORGANIZATION]', '[LOCATION]');
 *     $workload = new Workload();
 *     $operationResponse = $assuredWorkloadsServiceClient->createWorkload($formattedParent, $workload);
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
 *     $operationResponse = $assuredWorkloadsServiceClient->createWorkload($formattedParent, $workload);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $assuredWorkloadsServiceClient->resumeOperation($operationName, 'createWorkload');
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
 *     $assuredWorkloadsServiceClient->close();
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
class AssuredWorkloadsServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.assuredworkloads.v1beta1.AssuredWorkloadsService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'assuredworkloads.googleapis.com';

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
    private static $workloadNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/assured_workloads_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/assured_workloads_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/assured_workloads_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/assured_workloads_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('organizations/{organization}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getWorkloadNameTemplate()
    {
        if (null == self::$workloadNameTemplate) {
            self::$workloadNameTemplate = new PathTemplate('organizations/{organization}/locations/{location}/workloads/{workload}');
        }

        return self::$workloadNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'workload' => self::getWorkloadNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($organization, $location)
    {
        return self::getLocationNameTemplate()->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a workload resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $workload
     *
     * @return string The formatted workload resource.
     * @experimental
     */
    public static function workloadName($organization, $location, $workload)
    {
        return self::getWorkloadNameTemplate()->render([
            'organization' => $organization,
            'location' => $location,
            'workload' => $workload,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: organizations/{organization}/locations/{location}
     * - workload: organizations/{organization}/locations/{location}/workloads/{workload}.
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
     *           as "<uri>:<port>". Default 'assuredworkloads.googleapis.com:443'.
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
     * Creates Assured Workload.
     *
     * Sample code:
     * ```
     * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
     * try {
     *     $formattedParent = $assuredWorkloadsServiceClient->locationName('[ORGANIZATION]', '[LOCATION]');
     *     $workload = new Workload();
     *     $operationResponse = $assuredWorkloadsServiceClient->createWorkload($formattedParent, $workload);
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
     *     $operationResponse = $assuredWorkloadsServiceClient->createWorkload($formattedParent, $workload);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $assuredWorkloadsServiceClient->resumeOperation($operationName, 'createWorkload');
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
     *     $assuredWorkloadsServiceClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. The resource name of the new Workload's parent.
     *                               Must be of the form `organizations/{org_id}/locations/{location_id}`.
     * @param Workload $workload     Required. Assured Workload to create
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type string $externalId
     *          Optional. A identifier associated with the workload and underlying projects which
     *          allows for the break down of billing costs for a workload. The value
     *          provided for the identifier will add a label to the workload and contained
     *          projects with the identifier as the value.
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
    public function createWorkload($parent, $workload, array $optionalArgs = [])
    {
        $request = new CreateWorkloadRequest();
        $request->setParent($parent);
        $request->setWorkload($workload);
        if (isset($optionalArgs['externalId'])) {
            $request->setExternalId($optionalArgs['externalId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateWorkload',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing workload.
     * Currently allows updating of workload display_name and labels.
     * For force updates don't set etag field in the Workload.
     * Only one update operation per workload can be in progress.
     *
     * Sample code:
     * ```
     * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
     * try {
     *     $workload = new Workload();
     *     $updateMask = new FieldMask();
     *     $response = $assuredWorkloadsServiceClient->updateWorkload($workload, $updateMask);
     * } finally {
     *     $assuredWorkloadsServiceClient->close();
     * }
     * ```
     *
     * @param Workload  $workload     Required. The workload to update.
     *                                The workload’s `name` field is used to identify the workload to be updated.
     *                                Format:
     *                                organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     * @param FieldMask $updateMask   Required. The list of fields to be updated.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateWorkload($workload, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateWorkloadRequest();
        $request->setWorkload($workload);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'workload.name' => $request->getWorkload()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateWorkload',
            Workload::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes the workload. Make sure that workload's direct children are already
     * in a deleted state, otherwise the request will fail with a
     * FAILED_PRECONDITION error.
     *
     * Sample code:
     * ```
     * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
     * try {
     *     $formattedName = $assuredWorkloadsServiceClient->workloadName('[ORGANIZATION]', '[LOCATION]', '[WORKLOAD]');
     *     $assuredWorkloadsServiceClient->deleteWorkload($formattedName);
     * } finally {
     *     $assuredWorkloadsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The `name` field is used to identify the workload.
     *                             Format:
     *                             organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $etag
     *          Optional. The etag of the workload.
     *          If this is provided, it must match the server's etag.
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
    public function deleteWorkload($name, array $optionalArgs = [])
    {
        $request = new DeleteWorkloadRequest();
        $request->setName($name);
        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteWorkload',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets Assured Workload associated with a CRM Node.
     *
     * Sample code:
     * ```
     * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
     * try {
     *     $formattedName = $assuredWorkloadsServiceClient->workloadName('[ORGANIZATION]', '[LOCATION]', '[WORKLOAD]');
     *     $response = $assuredWorkloadsServiceClient->getWorkload($formattedName);
     * } finally {
     *     $assuredWorkloadsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the Workload to fetch. This is the workloads's
     *                             relative path in the API, formatted as
     *                             "organizations/{organization_id}/locations/{location_id}/workloads/{workload_id}".
     *                             For example,
     *                             "organizations/123/locations/us-east1/workloads/assured-workload-1".
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
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getWorkload($name, array $optionalArgs = [])
    {
        $request = new GetWorkloadRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetWorkload',
            Workload::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists Assured Workloads under a CRM Node.
     *
     * Sample code:
     * ```
     * $assuredWorkloadsServiceClient = new AssuredWorkloadsServiceClient();
     * try {
     *     $formattedParent = $assuredWorkloadsServiceClient->locationName('[ORGANIZATION]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $assuredWorkloadsServiceClient->listWorkloads($formattedParent);
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
     *     $pagedResponse = $assuredWorkloadsServiceClient->listWorkloads($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $assuredWorkloadsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Parent Resource to list workloads from.
     *                             Must be of the form `organizations/{org_id}/locations/{location}`.
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
     *          A custom filter for filtering by properties of a workload. At this time,
     *          only filtering by labels is supported.
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
    public function listWorkloads($parent, array $optionalArgs = [])
    {
        $request = new ListWorkloadsRequest();
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
            'ListWorkloads',
            $optionalArgs,
            ListWorkloadsResponse::class,
            $request
        );
    }
}
