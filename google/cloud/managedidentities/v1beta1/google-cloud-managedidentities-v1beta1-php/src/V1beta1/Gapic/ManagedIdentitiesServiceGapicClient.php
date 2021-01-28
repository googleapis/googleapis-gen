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
 * https://github.com/google/googleapis/blob/master/google/cloud/managedidentities/v1beta1/managed_identities_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Managedidentities\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ManagedIdentities\V1beta1\AttachTrustRequest;
use Google\Cloud\ManagedIdentities\V1beta1\CreateMicrosoftAdDomainRequest;
use Google\Cloud\ManagedIdentities\V1beta1\DeleteDomainRequest;
use Google\Cloud\ManagedIdentities\V1beta1\DetachTrustRequest;
use Google\Cloud\ManagedIdentities\V1beta1\Domain;
use Google\Cloud\ManagedIdentities\V1beta1\GetDomainRequest;
use Google\Cloud\ManagedIdentities\V1beta1\ListDomainsRequest;
use Google\Cloud\ManagedIdentities\V1beta1\ListDomainsResponse;
use Google\Cloud\ManagedIdentities\V1beta1\ReconfigureTrustRequest;
use Google\Cloud\ManagedIdentities\V1beta1\ResetAdminPasswordRequest;
use Google\Cloud\ManagedIdentities\V1beta1\ResetAdminPasswordResponse;
use Google\Cloud\ManagedIdentities\V1beta1\Trust;
use Google\Cloud\ManagedIdentities\V1beta1\UpdateDomainRequest;
use Google\Cloud\ManagedIdentities\V1beta1\ValidateTrustRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
 * try {
 *     $operationResponse = $managedIdentitiesServiceClient->deleteDomain();
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
 *     $operationResponse = $managedIdentitiesServiceClient->deleteDomain();
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'deleteDomain');
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
 *     $managedIdentitiesServiceClient->close();
 * }
 * ```
 *
 * @experimental
 */
class ManagedIdentitiesServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.managedidentities.v1beta1.ManagedIdentitiesService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'managedidentities.googleapis.com';

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

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/managed_identities_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/managed_identities_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/managed_identities_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/managed_identities_service_rest_client_config.php',
                ],
            ],
        ];
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
     *           as "<uri>:<port>". Default 'managedidentities.googleapis.com:443'.
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
     * Deletes a domain.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->deleteDomain();
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
     *     $operationResponse = $managedIdentitiesServiceClient->deleteDomain();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'deleteDomain');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The domain resource name using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
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
    public function deleteDomain(array $optionalArgs = [])
    {
        $request = new DeleteDomainRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteDomain',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Creates a Microsoft AD domain.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->createMicrosoftAdDomain();
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
     *     $operationResponse = $managedIdentitiesServiceClient->createMicrosoftAdDomain();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'createMicrosoftAdDomain');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          The resource project name and location using the form:
     *          `projects/{project_id}/locations/global`
     *     @type string $domainName
     *          A domain name, e.g. mydomain.myorg.com, with the following restrictions:
     *           * Must contain only lowercase letters, numbers, periods and hyphens.
     *           * Must start with a letter.
     *           * Must contain between 2-64 characters.
     *           * Must end with a number or a letter.
     *           * Must not start with period.
     *           * First segement length (mydomain form example above) shouldn't exceed
     *             15 chars.
     *           * The last segment cannot be fully numeric.
     *           * Must be unique within the customer project.
     *     @type Domain $domain
     *          A Managed Identity domain resource.
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
    public function createMicrosoftAdDomain(array $optionalArgs = [])
    {
        $request = new CreateMicrosoftAdDomainRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['domainName'])) {
            $request->setDomainName($optionalArgs['domainName']);
        }
        if (isset($optionalArgs['domain'])) {
            $request->setDomain($optionalArgs['domain']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateMicrosoftAdDomain',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Resets a domain's administrator password.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $response = $managedIdentitiesServiceClient->resetAdminPassword();
     * } finally {
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The domain resource name using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ManagedIdentities\V1beta1\ResetAdminPasswordResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function resetAdminPassword(array $optionalArgs = [])
    {
        $request = new ResetAdminPasswordRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ResetAdminPassword',
            ResetAdminPasswordResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists domains in a project.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $managedIdentitiesServiceClient->listDomains();
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
     *     $pagedResponse = $managedIdentitiesServiceClient->listDomains();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Required. The resource name of the domain location using the form:
     *          `projects/{project_id}/locations/global`
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
     *          Optional. A filter specifying constraints of a list operation.
     *          For example, `Domain.fqdn="mydomain.myorginization"`.
     *     @type string $orderBy
     *          Optional. Specifies the ordering of results. See
     *          [Sorting
     *          order](https://cloud.google.com/apis/design/design_patterns#sorting_order)
     *          for more information.
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
    public function listDomains(array $optionalArgs = [])
    {
        $request = new ListDomainsRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
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
            'ListDomains',
            $optionalArgs,
            ListDomainsResponse::class,
            $request
        );
    }

    /**
     * Gets information about a domain.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $response = $managedIdentitiesServiceClient->getDomain();
     * } finally {
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The domain resource name using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ManagedIdentities\V1beta1\Domain
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDomain(array $optionalArgs = [])
    {
        $request = new GetDomainRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDomain',
            Domain::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the metadata and configuration of a domain.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->updateDomain();
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
     *     $operationResponse = $managedIdentitiesServiceClient->updateDomain();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'updateDomain');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $updateMask
     *          Mask of fields to update. At least one path must be supplied in this
     *          field. The elements of the repeated paths field may only include
     *          fields from [Domain][google.cloud.managedidentities.v1beta1.Domain]:
     *           * `labels`
     *           * `locations`
     *           * `authorized_networks`
     *     @type Domain $domain
     *          Domain message with updated fields. Only supported fields specified in
     *          update_mask are updated.
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
    public function updateDomain(array $optionalArgs = [])
    {
        $request = new UpdateDomainRequest();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }
        if (isset($optionalArgs['domain'])) {
            $request->setDomain($optionalArgs['domain']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'domain.name' => $request->getDomain()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateDomain',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Adds an AD trust to a domain.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->attachTrust();
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
     *     $operationResponse = $managedIdentitiesServiceClient->attachTrust();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'attachTrust');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource domain name, project name and location using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type Trust $trust
     *          The domain trust resource.
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
    public function attachTrust(array $optionalArgs = [])
    {
        $request = new AttachTrustRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['trust'])) {
            $request->setTrust($optionalArgs['trust']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'AttachTrust',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the DNS conditional forwarder.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->reconfigureTrust();
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
     *     $operationResponse = $managedIdentitiesServiceClient->reconfigureTrust();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'reconfigureTrust');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource domain name, project name and location using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type string $targetDomainName
     *          The fully-qualified target domain name which will be in trust with current
     *          domain.
     *     @type string[] $targetDnsIpAddresses
     *          The target DNS server IP addresses to resolve the remote domain involved
     *          in the trust.
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
    public function reconfigureTrust(array $optionalArgs = [])
    {
        $request = new ReconfigureTrustRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['targetDomainName'])) {
            $request->setTargetDomainName($optionalArgs['targetDomainName']);
        }
        if (isset($optionalArgs['targetDnsIpAddresses'])) {
            $request->setTargetDnsIpAddresses($optionalArgs['targetDnsIpAddresses']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ReconfigureTrust',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Removes an AD trust.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->detachTrust();
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
     *     $operationResponse = $managedIdentitiesServiceClient->detachTrust();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'detachTrust');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource domain name, project name, and location using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type Trust $trust
     *          The domain trust resource to removed.
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
    public function detachTrust(array $optionalArgs = [])
    {
        $request = new DetachTrustRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['trust'])) {
            $request->setTrust($optionalArgs['trust']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DetachTrust',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Validates a trust state, that the target domain is reachable, and that the
     * target domain is able to accept incoming trust requests.
     *
     * Sample code:
     * ```
     * $managedIdentitiesServiceClient = new ManagedIdentitiesServiceClient();
     * try {
     *     $operationResponse = $managedIdentitiesServiceClient->validateTrust();
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
     *     $operationResponse = $managedIdentitiesServiceClient->validateTrust();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $managedIdentitiesServiceClient->resumeOperation($operationName, 'validateTrust');
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
     *     $managedIdentitiesServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource domain name, project name, and location using the form:
     *          `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type Trust $trust
     *          The domain trust to validate trust state for.
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
    public function validateTrust(array $optionalArgs = [])
    {
        $request = new ValidateTrustRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['trust'])) {
            $request->setTrust($optionalArgs['trust']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ValidateTrust',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
