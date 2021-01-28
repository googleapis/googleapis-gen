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
 * https://github.com/google/googleapis/blob/master/google/iam/credentials/v1/iamcredentials.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Iam\Credentials\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Iam\Credentials\V1\GenerateAccessTokenRequest;
use Google\Iam\Credentials\V1\GenerateAccessTokenResponse;
use Google\Iam\Credentials\V1\GenerateIdTokenRequest;
use Google\Iam\Credentials\V1\GenerateIdTokenResponse;
use Google\Iam\Credentials\V1\SignBlobRequest;
use Google\Iam\Credentials\V1\SignBlobResponse;
use Google\Iam\Credentials\V1\SignJwtRequest;
use Google\Iam\Credentials\V1\SignJwtResponse;
use Google\Protobuf\Duration;

/**
 * Service Description: A service account is a special type of Google account that belongs to your
 * application or a virtual machine (VM), instead of to an individual end user.
 * Your application assumes the identity of the service account to call Google
 * APIs, so that the users aren't directly involved.
 *
 * Service account credentials are used to temporarily assume the identity
 * of the service account. Supported credential types include OAuth 2.0 access
 * tokens, OpenID Connect ID tokens, self-signed JSON Web Tokens (JWTs), and
 * more.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $iamCredentialsClient = new IamCredentialsClient();
 * try {
 *     $formattedName = $iamCredentialsClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
 *     $scope = [];
 *     $response = $iamCredentialsClient->generateAccessToken($formattedName, $scope);
 * } finally {
 *     $iamCredentialsClient->close();
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
class IamCredentialsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.iam.credentials.v1.IAMCredentials';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'iamcredentials.googleapis.com';

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
    private static $serviceAccountNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/iam_credentials_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/iam_credentials_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/iam_credentials_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/iam_credentials_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getServiceAccountNameTemplate()
    {
        if (null == self::$serviceAccountNameTemplate) {
            self::$serviceAccountNameTemplate = new PathTemplate('projects/{project}/serviceAccounts/{service_account}');
        }

        return self::$serviceAccountNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'serviceAccount' => self::getServiceAccountNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a service_account resource.
     *
     * @param string $project
     * @param string $serviceAccount
     *
     * @return string The formatted service_account resource.
     * @experimental
     */
    public static function serviceAccountName($project, $serviceAccount)
    {
        return self::getServiceAccountNameTemplate()->render([
            'project' => $project,
            'service_account' => $serviceAccount,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - serviceAccount: projects/{project}/serviceAccounts/{service_account}.
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
     *           as "<uri>:<port>". Default 'iamcredentials.googleapis.com:443'.
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
     * Generates an OAuth 2.0 access token for a service account.
     *
     * Sample code:
     * ```
     * $iamCredentialsClient = new IamCredentialsClient();
     * try {
     *     $formattedName = $iamCredentialsClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $scope = [];
     *     $response = $iamCredentialsClient->generateAccessToken($formattedName, $scope);
     * } finally {
     *     $iamCredentialsClient->close();
     * }
     * ```
     *
     * @param string   $name         Required. The resource name of the service account for which the credentials
     *                               are requested, in the following format:
     *                               `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                               character is required; replacing it with a project ID is invalid.
     * @param string[] $scope        Required. Code to identify the scopes to be included in the OAuth 2.0 access token.
     *                               See https://developers.google.com/identity/protocols/googlescopes for more
     *                               information.
     *                               At least one value required.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type string[] $delegates
     *          The sequence of service accounts in a delegation chain. Each service
     *          account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on its next service account in the chain. The last service account in the
     *          chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on the service account that is specified in the `name` field of the
     *          request.
     *
     *          The delegates must have the following format:
     *          `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *          character is required; replacing it with a project ID is invalid.
     *     @type Duration $lifetime
     *          The desired lifetime duration of the access token in seconds.
     *          Must be set to a value less than or equal to 3600 (1 hour). If a value is
     *          not specified, the token's lifetime will be set to a default value of one
     *          hour.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Credentials\V1\GenerateAccessTokenResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function generateAccessToken($name, $scope, array $optionalArgs = [])
    {
        $request = new GenerateAccessTokenRequest();
        $request->setName($name);
        $request->setScope($scope);
        if (isset($optionalArgs['delegates'])) {
            $request->setDelegates($optionalArgs['delegates']);
        }
        if (isset($optionalArgs['lifetime'])) {
            $request->setLifetime($optionalArgs['lifetime']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GenerateAccessToken',
            GenerateAccessTokenResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Generates an OpenID Connect ID token for a service account.
     *
     * Sample code:
     * ```
     * $iamCredentialsClient = new IamCredentialsClient();
     * try {
     *     $formattedName = $iamCredentialsClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $audience = '';
     *     $response = $iamCredentialsClient->generateIdToken($formattedName, $audience);
     * } finally {
     *     $iamCredentialsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account for which the credentials
     *                             are requested, in the following format:
     *                             `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                             character is required; replacing it with a project ID is invalid.
     * @param string $audience     Required. The audience for the token, such as the API or account that this token
     *                             grants access to.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string[] $delegates
     *          The sequence of service accounts in a delegation chain. Each service
     *          account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on its next service account in the chain. The last service account in the
     *          chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on the service account that is specified in the `name` field of the
     *          request.
     *
     *          The delegates must have the following format:
     *          `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *          character is required; replacing it with a project ID is invalid.
     *     @type bool $includeEmail
     *          Include the service account email in the token. If set to `true`, the
     *          token will contain `email` and `email_verified` claims.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Credentials\V1\GenerateIdTokenResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function generateIdToken($name, $audience, array $optionalArgs = [])
    {
        $request = new GenerateIdTokenRequest();
        $request->setName($name);
        $request->setAudience($audience);
        if (isset($optionalArgs['delegates'])) {
            $request->setDelegates($optionalArgs['delegates']);
        }
        if (isset($optionalArgs['includeEmail'])) {
            $request->setIncludeEmail($optionalArgs['includeEmail']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GenerateIdToken',
            GenerateIdTokenResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Signs a blob using a service account's system-managed private key.
     *
     * Sample code:
     * ```
     * $iamCredentialsClient = new IamCredentialsClient();
     * try {
     *     $formattedName = $iamCredentialsClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $payload = '';
     *     $response = $iamCredentialsClient->signBlob($formattedName, $payload);
     * } finally {
     *     $iamCredentialsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account for which the credentials
     *                             are requested, in the following format:
     *                             `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                             character is required; replacing it with a project ID is invalid.
     * @param string $payload      Required. The bytes to sign.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string[] $delegates
     *          The sequence of service accounts in a delegation chain. Each service
     *          account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on its next service account in the chain. The last service account in the
     *          chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on the service account that is specified in the `name` field of the
     *          request.
     *
     *          The delegates must have the following format:
     *          `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *          character is required; replacing it with a project ID is invalid.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Credentials\V1\SignBlobResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function signBlob($name, $payload, array $optionalArgs = [])
    {
        $request = new SignBlobRequest();
        $request->setName($name);
        $request->setPayload($payload);
        if (isset($optionalArgs['delegates'])) {
            $request->setDelegates($optionalArgs['delegates']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SignBlob',
            SignBlobResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Signs a JWT using a service account's system-managed private key.
     *
     * Sample code:
     * ```
     * $iamCredentialsClient = new IamCredentialsClient();
     * try {
     *     $formattedName = $iamCredentialsClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $payload = '';
     *     $response = $iamCredentialsClient->signJwt($formattedName, $payload);
     * } finally {
     *     $iamCredentialsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account for which the credentials
     *                             are requested, in the following format:
     *                             `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                             character is required; replacing it with a project ID is invalid.
     * @param string $payload      Required. The JWT payload to sign: a JSON object that contains a JWT Claims Set.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string[] $delegates
     *          The sequence of service accounts in a delegation chain. Each service
     *          account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on its next service account in the chain. The last service account in the
     *          chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *          on the service account that is specified in the `name` field of the
     *          request.
     *
     *          The delegates must have the following format:
     *          `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *          character is required; replacing it with a project ID is invalid.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Credentials\V1\SignJwtResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function signJwt($name, $payload, array $optionalArgs = [])
    {
        $request = new SignJwtRequest();
        $request->setName($name);
        $request->setPayload($payload);
        if (isset($optionalArgs['delegates'])) {
            $request->setDelegates($optionalArgs['delegates']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SignJwt',
            SignJwtResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
