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
 * https://github.com/google/googleapis/blob/master/google/appengine/v1/appengine.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Appengine\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AppEngine\V1\AuthorizedCertificate;
use Google\Cloud\AppEngine\V1\CreateAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\DeleteAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\GetAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\ListAuthorizedCertificatesRequest;
use Google\Cloud\AppEngine\V1\ListAuthorizedCertificatesResponse;
use Google\Cloud\AppEngine\V1\UpdateAuthorizedCertificateRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Manages SSL certificates a user is authorized to administer. A user can
 * administer any SSL certificates applicable to their authorized domains.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
 * try {
 *     // Iterate over pages of elements
 *     $pagedResponse = $authorizedCertificatesClient->listAuthorizedCertificates();
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
 *     $pagedResponse = $authorizedCertificatesClient->listAuthorizedCertificates();
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $authorizedCertificatesClient->close();
 * }
 * ```
 *
 * @experimental
 */
class AuthorizedCertificatesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.appengine.v1.AuthorizedCertificates';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'appengine.googleapis.com';

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
        'https://www.googleapis.com/auth/appengine.admin',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/authorized_certificates_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/authorized_certificates_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/authorized_certificates_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/authorized_certificates_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'appengine.googleapis.com:443'.
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
     * Lists all SSL certificates the user is authorized to administer.
     *
     * Sample code:
     * ```
     * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $authorizedCertificatesClient->listAuthorizedCertificates();
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
     *     $pagedResponse = $authorizedCertificatesClient->listAuthorizedCertificates();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $authorizedCertificatesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Name of the parent `Application` resource. Example: `apps/myapp`.
     *     @type int $view
     *          Controls the set of fields returned in the `LIST` response.
     *          For allowed values, use constants defined on {@see \Google\Cloud\AppEngine\V1\AuthorizedCertificateView}
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
    public function listAuthorizedCertificates(array $optionalArgs = [])
    {
        $request = new ListAuthorizedCertificatesRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }
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
            'ListAuthorizedCertificates',
            $optionalArgs,
            ListAuthorizedCertificatesResponse::class,
            $request
        );
    }

    /**
     * Gets the specified SSL certificate.
     *
     * Sample code:
     * ```
     * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
     * try {
     *     $response = $authorizedCertificatesClient->getAuthorizedCertificate();
     * } finally {
     *     $authorizedCertificatesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the resource requested. Example:
     *          `apps/myapp/authorizedCertificates/12345`.
     *     @type int $view
     *          Controls the set of fields returned in the `GET` response.
     *          For allowed values, use constants defined on {@see \Google\Cloud\AppEngine\V1\AuthorizedCertificateView}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\AuthorizedCertificate
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getAuthorizedCertificate(array $optionalArgs = [])
    {
        $request = new GetAuthorizedCertificateRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAuthorizedCertificate',
            AuthorizedCertificate::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Uploads the specified SSL certificate.
     *
     * Sample code:
     * ```
     * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
     * try {
     *     $response = $authorizedCertificatesClient->createAuthorizedCertificate();
     * } finally {
     *     $authorizedCertificatesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Name of the parent `Application` resource. Example: `apps/myapp`.
     *     @type AuthorizedCertificate $certificate
     *          SSL certificate data.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\AuthorizedCertificate
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createAuthorizedCertificate(array $optionalArgs = [])
    {
        $request = new CreateAuthorizedCertificateRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['certificate'])) {
            $request->setCertificate($optionalArgs['certificate']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateAuthorizedCertificate',
            AuthorizedCertificate::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the specified SSL certificate. To renew a certificate and maintain
     * its existing domain mappings, update `certificate_data` with a new
     * certificate. The new certificate must be applicable to the same domains as
     * the original certificate. The certificate `display_name` may also be
     * updated.
     *
     * Sample code:
     * ```
     * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
     * try {
     *     $response = $authorizedCertificatesClient->updateAuthorizedCertificate();
     * } finally {
     *     $authorizedCertificatesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the resource to update. Example:
     *          `apps/myapp/authorizedCertificates/12345`.
     *     @type AuthorizedCertificate $certificate
     *          An `AuthorizedCertificate` containing the updated resource. Only fields set
     *          in the field mask will be updated.
     *     @type FieldMask $updateMask
     *          Standard field mask for the set of fields to be updated. Updates are only
     *          supported on the `certificate_raw_data` and `display_name` fields.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\AuthorizedCertificate
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateAuthorizedCertificate(array $optionalArgs = [])
    {
        $request = new UpdateAuthorizedCertificateRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['certificate'])) {
            $request->setCertificate($optionalArgs['certificate']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateAuthorizedCertificate',
            AuthorizedCertificate::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes the specified SSL certificate.
     *
     * Sample code:
     * ```
     * $authorizedCertificatesClient = new AuthorizedCertificatesClient();
     * try {
     *     $authorizedCertificatesClient->deleteAuthorizedCertificate();
     * } finally {
     *     $authorizedCertificatesClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the resource to delete. Example:
     *          `apps/myapp/authorizedCertificates/12345`.
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
    public function deleteAuthorizedCertificate(array $optionalArgs = [])
    {
        $request = new DeleteAuthorizedCertificateRequest();
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
            'DeleteAuthorizedCertificate',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
