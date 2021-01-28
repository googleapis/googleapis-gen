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
 * https://github.com/google/googleapis/blob/master/google/cloud/gkehub/v1beta1/membership.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Gkehub\V1beta1\Gapic;

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
use Google\Cloud\GkeHub\V1beta1\ConnectAgent;
use Google\Cloud\GkeHub\V1beta1\CreateMembershipRequest;
use Google\Cloud\GkeHub\V1beta1\DeleteMembershipRequest;
use Google\Cloud\GkeHub\V1beta1\GenerateConnectManifestRequest;
use Google\Cloud\GkeHub\V1beta1\GenerateConnectManifestResponse;
use Google\Cloud\GkeHub\V1beta1\GenerateExclusivityManifestRequest;
use Google\Cloud\GkeHub\V1beta1\GenerateExclusivityManifestResponse;
use Google\Cloud\GkeHub\V1beta1\GetMembershipRequest;
use Google\Cloud\GkeHub\V1beta1\ListMembershipsRequest;
use Google\Cloud\GkeHub\V1beta1\ListMembershipsResponse;
use Google\Cloud\GkeHub\V1beta1\Membership;
use Google\Cloud\GkeHub\V1beta1\UpdateMembershipRequest;
use Google\Cloud\GkeHub\V1beta1\ValidateExclusivityRequest;
use Google\Cloud\GkeHub\V1beta1\ValidateExclusivityResponse;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: GKE Hub CRUD API for the Membership resource.
 * The Membership service is currently only available in the global location.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
 * try {
 *     $parent = '';
 *     // Iterate over pages of elements
 *     $pagedResponse = $gkeHubMembershipServiceClient->listMemberships($parent);
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
 *     $pagedResponse = $gkeHubMembershipServiceClient->listMemberships($parent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $gkeHubMembershipServiceClient->close();
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
class GkeHubMembershipServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.gkehub.v1beta1.GkeHubMembershipService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'gkehub.googleapis.com';

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
    private static $membershipNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/gke_hub_membership_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/gke_hub_membership_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/gke_hub_membership_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/gke_hub_membership_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getMembershipNameTemplate()
    {
        if (null == self::$membershipNameTemplate) {
            self::$membershipNameTemplate = new PathTemplate('projects/{project}/locations/{location}/memberships/{membership}');
        }

        return self::$membershipNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'membership' => self::getMembershipNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a membership resource.
     *
     * @param string $project
     * @param string $location
     * @param string $membership
     *
     * @return string The formatted membership resource.
     * @experimental
     */
    public static function membershipName($project, $location, $membership)
    {
        return self::getMembershipNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'membership' => $membership,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - membership: projects/{project}/locations/{location}/memberships/{membership}.
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
     *           as "<uri>:<port>". Default 'gkehub.googleapis.com:443'.
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
     * Lists Memberships in a given project and location.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $gkeHubMembershipServiceClient->listMemberships($parent);
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
     *     $pagedResponse = $gkeHubMembershipServiceClient->listMemberships($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent (project and location) where the Memberships will be listed.
     *                             Specified in the format `projects/&#42;/locations/*`.
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
     *          Optional. Lists Memberships that match the filter expression, following the syntax
     *          outlined in https://google.aip.dev/160.
     *
     *          Examples:
     *
     *            - Name is `bar` in project `foo-proj` and location `global`:
     *
     *                name = "projects/foo-proj/locations/global/membership/bar"
     *
     *            - Memberships that have a label called `foo`:
     *
     *                labels.foo:*
     *
     *            - Memberships that have a label called `foo` whose value is `bar`:
     *
     *                labels.foo = bar
     *
     *            - Memberships in the CREATING state:
     *
     *                state = CREATING
     *     @type string $orderBy
     *          Optional. One or more fields to compare and use to sort the output.
     *          See https://google.aip.dev/132#ordering.
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
    public function listMemberships($parent, array $optionalArgs = [])
    {
        $request = new ListMembershipsRequest();
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
        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListMemberships',
            $optionalArgs,
            ListMembershipsResponse::class,
            $request
        );
    }

    /**
     * Gets the details of a Membership.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $name = '';
     *     $response = $gkeHubMembershipServiceClient->getMembership($name);
     * } finally {
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Membership resource name in the format
     *                             `projects/&#42;/locations/&#42;/memberships/*`.
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
     * @return \Google\Cloud\GkeHub\V1beta1\Membership
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getMembership($name, array $optionalArgs = [])
    {
        $request = new GetMembershipRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetMembership',
            Membership::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Adds a new Membership.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $parent = '';
     *     $membershipId = '';
     *     $resource = new Membership();
     *     $operationResponse = $gkeHubMembershipServiceClient->createMembership($parent, $membershipId, $resource);
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
     *     $operationResponse = $gkeHubMembershipServiceClient->createMembership($parent, $membershipId, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gkeHubMembershipServiceClient->resumeOperation($operationName, 'createMembership');
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
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent (project and location) where the Memberships will be created.
     *                             Specified in the format `projects/&#42;/locations/*`.
     * @param string $membershipId Required. Client chosen ID for the membership. `membership_id` must be a valid RFC
     *                             1123 compliant DNS label:
     *
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     *
     * Which can be expressed as the regex: `[a-z0-9](https://cloud.google.com[-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     * @param Membership $resource     Required. The membership to create.
     * @param array      $optionalArgs {
     *                                 Optional.
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
    public function createMembership($parent, $membershipId, $resource, array $optionalArgs = [])
    {
        $request = new CreateMembershipRequest();
        $request->setParent($parent);
        $request->setMembershipId($membershipId);
        $request->setResource($resource);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateMembership',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Removes a Membership.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $name = '';
     *     $operationResponse = $gkeHubMembershipServiceClient->deleteMembership($name);
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
     *     $operationResponse = $gkeHubMembershipServiceClient->deleteMembership($name);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gkeHubMembershipServiceClient->resumeOperation($operationName, 'deleteMembership');
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
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Membership resource name in the format
     *                             `projects/&#42;/locations/&#42;/memberships/*`.
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
    public function deleteMembership($name, array $optionalArgs = [])
    {
        $request = new DeleteMembershipRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteMembership',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing Membership.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $name = '';
     *     $updateMask = new FieldMask();
     *     $resource = new Membership();
     *     $operationResponse = $gkeHubMembershipServiceClient->updateMembership($name, $updateMask, $resource);
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
     *     $operationResponse = $gkeHubMembershipServiceClient->updateMembership($name, $updateMask, $resource);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $gkeHubMembershipServiceClient->resumeOperation($operationName, 'updateMembership');
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
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string     $name         Required. The membership resource name in the format:
     *                                 `projects/[project_id]/locations/global/memberships/[membership_id]`
     * @param FieldMask  $updateMask   Required. Mask of fields to update. At least one field path must be specified in this
     *                                 mask.
     * @param Membership $resource     Required. Only fields specified in update_mask are updated.
     *                                 If you specify a field in the update_mask but don't specify its value here
     *                                 that field will be deleted.
     *                                 If you are updating a map field, set the value of a key to null or empty
     *                                 string to delete the key from the map. It's not possible to update a key's
     *                                 value to the empty string.
     * @param array      $optionalArgs {
     *                                 Optional.
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
    public function updateMembership($name, $updateMask, $resource, array $optionalArgs = [])
    {
        $request = new UpdateMembershipRequest();
        $request->setName($name);
        $request->setUpdateMask($updateMask);
        $request->setResource($resource);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateMembership',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Generates the manifest for deployment of the GKE connect agent.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $name = '';
     *     $response = $gkeHubMembershipServiceClient->generateConnectManifest($name);
     * } finally {
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Membership resource name the Agent will associate with, in the format
     *                             `projects/&#42;/locations/&#42;/memberships/*`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type ConnectAgent $connectAgent
     *          Optional. The connect agent to generate manifest for.
     *     @type string $version
     *          Optional. The Connect agent version to use. Defaults to the most current version.
     *     @type bool $isUpgrade
     *          Optional. If true, generate the resources for upgrade only. Some resources
     *          generated only for installation (e.g. secrets) will be excluded.
     *     @type string $registry
     *          Optional. The registry to fetch the connect agent image from. Defaults to
     *          gcr.io/gkeconnect.
     *     @type string $imagePullSecretContent
     *          Optional. The image pull secret content for the registry, if not public.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\GkeHub\V1beta1\GenerateConnectManifestResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function generateConnectManifest($name, array $optionalArgs = [])
    {
        $request = new GenerateConnectManifestRequest();
        $request->setName($name);
        if (isset($optionalArgs['connectAgent'])) {
            $request->setConnectAgent($optionalArgs['connectAgent']);
        }
        if (isset($optionalArgs['version'])) {
            $request->setVersion($optionalArgs['version']);
        }
        if (isset($optionalArgs['isUpgrade'])) {
            $request->setIsUpgrade($optionalArgs['isUpgrade']);
        }
        if (isset($optionalArgs['registry'])) {
            $request->setRegistry($optionalArgs['registry']);
        }
        if (isset($optionalArgs['imagePullSecretContent'])) {
            $request->setImagePullSecretContent($optionalArgs['imagePullSecretContent']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GenerateConnectManifest',
            GenerateConnectManifestResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * ValidateExclusivity validates the state of exclusivity in the cluster.
     * The validation does not depend on an existing Hub membership resource.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $parent = '';
     *     $intendedMembership = '';
     *     $response = $gkeHubMembershipServiceClient->validateExclusivity($parent, $intendedMembership);
     * } finally {
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $parent             Required. The parent (project and location) where the Memberships will be created.
     *                                   Specified in the format `projects/&#42;/locations/*`.
     * @param string $intendedMembership Required. The intended membership name under the `parent`. This method only does
     *                                   validation in anticipation of a CreateMembership call with the same name.
     * @param array  $optionalArgs       {
     *                                   Optional.
     *
     *     @type string $crManifest
     *          Optional. The YAML of the membership CR in the cluster. Empty if the membership
     *          CR does not exist.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\GkeHub\V1beta1\ValidateExclusivityResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function validateExclusivity($parent, $intendedMembership, array $optionalArgs = [])
    {
        $request = new ValidateExclusivityRequest();
        $request->setParent($parent);
        $request->setIntendedMembership($intendedMembership);
        if (isset($optionalArgs['crManifest'])) {
            $request->setCrManifest($optionalArgs['crManifest']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ValidateExclusivity',
            ValidateExclusivityResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * GenerateExclusivityManifest generates the manifests to update the
     * exclusivity artifacts in the cluster if needed.
     *
     * Exclusivity artifacts include the Membership custom resource definition
     * (CRD) and the singleton Membership custom resource (CR). Combined with
     * ValidateExclusivity, exclusivity artifacts guarantee that a Kubernetes
     * cluster is only registered to a single GKE Hub.
     *
     * The Membership CRD is versioned, and may require conversion when the GKE
     * Hub API server begins serving a newer version of the CRD and
     * corresponding CR. The response will be the converted CRD and CR if there
     * are any differences between the versions.
     *
     * Sample code:
     * ```
     * $gkeHubMembershipServiceClient = new GkeHubMembershipServiceClient();
     * try {
     *     $name = '';
     *     $response = $gkeHubMembershipServiceClient->generateExclusivityManifest($name);
     * } finally {
     *     $gkeHubMembershipServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Membership resource name in the format
     *                             `projects/&#42;/locations/&#42;/memberships/*`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $crdManifest
     *          Optional. The YAML manifest of the membership CRD retrieved by
     *          `kubectl get customresourcedefinitions membership`.
     *          Leave empty if the resource does not exist.
     *     @type string $crManifest
     *          Optional. The YAML manifest of the membership CR retrieved by
     *          `kubectl get memberships membership`.
     *          Leave empty if the resource does not exist.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\GkeHub\V1beta1\GenerateExclusivityManifestResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function generateExclusivityManifest($name, array $optionalArgs = [])
    {
        $request = new GenerateExclusivityManifestRequest();
        $request->setName($name);
        if (isset($optionalArgs['crdManifest'])) {
            $request->setCrdManifest($optionalArgs['crdManifest']);
        }
        if (isset($optionalArgs['crManifest'])) {
            $request->setCrManifest($optionalArgs['crManifest']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GenerateExclusivityManifest',
            GenerateExclusivityManifestResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
