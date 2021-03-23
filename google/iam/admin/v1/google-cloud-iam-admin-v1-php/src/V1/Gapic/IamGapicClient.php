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
 * https://github.com/google/googleapis/blob/master/google/iam/admin/v1/iam.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Iam\Admin\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Iam\Admin\V1\CreateRoleRequest;
use Google\Iam\Admin\V1\CreateServiceAccountKeyRequest;
use Google\Iam\Admin\V1\CreateServiceAccountRequest;
use Google\Iam\Admin\V1\DeleteRoleRequest;
use Google\Iam\Admin\V1\DeleteServiceAccountKeyRequest;
use Google\Iam\Admin\V1\DeleteServiceAccountRequest;
use Google\Iam\Admin\V1\DisableServiceAccountRequest;
use Google\Iam\Admin\V1\EnableServiceAccountRequest;
use Google\Iam\Admin\V1\GetRoleRequest;
use Google\Iam\Admin\V1\GetServiceAccountKeyRequest;
use Google\Iam\Admin\V1\GetServiceAccountRequest;
use Google\Iam\Admin\V1\LintPolicyRequest;
use Google\Iam\Admin\V1\LintPolicyResponse;
use Google\Iam\Admin\V1\ListRolesRequest;
use Google\Iam\Admin\V1\ListRolesResponse;
use Google\Iam\Admin\V1\ListServiceAccountKeysRequest;
use Google\Iam\Admin\V1\ListServiceAccountKeysResponse;
use Google\Iam\Admin\V1\ListServiceAccountsRequest;
use Google\Iam\Admin\V1\ListServiceAccountsResponse;
use Google\Iam\Admin\V1\PatchServiceAccountRequest;
use Google\Iam\Admin\V1\QueryAuditableServicesRequest;
use Google\Iam\Admin\V1\QueryAuditableServicesResponse;
use Google\Iam\Admin\V1\QueryGrantableRolesRequest;
use Google\Iam\Admin\V1\QueryGrantableRolesResponse;
use Google\Iam\Admin\V1\QueryTestablePermissionsRequest;
use Google\Iam\Admin\V1\QueryTestablePermissionsResponse;
use Google\Iam\Admin\V1\Role;
use Google\Iam\Admin\V1\ServiceAccount;
use Google\Iam\Admin\V1\ServiceAccountKey;
use Google\Iam\Admin\V1\SignBlobRequest;
use Google\Iam\Admin\V1\SignBlobResponse;
use Google\Iam\Admin\V1\SignJwtRequest;
use Google\Iam\Admin\V1\SignJwtResponse;
use Google\Iam\Admin\V1\UndeleteRoleRequest;
use Google\Iam\Admin\V1\UndeleteServiceAccountRequest;
use Google\Iam\Admin\V1\UndeleteServiceAccountResponse;
use Google\Iam\Admin\V1\UpdateRoleRequest;
use Google\Iam\Admin\V1\UploadServiceAccountKeyRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;
use Google\Type\Expr;

/**
 * Service Description: Creates and manages Identity and Access Management (IAM) resources.
 *
 * You can use this service to work with all of the following resources:
 *
 * * **Service accounts**, which identify an application or a virtual machine
 *   (VM) instance rather than a person
 * * **Service account keys**, which service accounts use to authenticate with
 *   Google APIs
 * * **IAM policies for service accounts**, which specify the roles that a
 *   member has for the service account
 * * **IAM custom roles**, which help you limit the number of permissions that
 *   you grant to members
 *
 * In addition, you can use this service to complete the following tasks, among
 * others:
 *
 * * Test whether a service account can use specific permissions
 * * Check which roles you can grant for a specific resource
 * * Lint, or validate, condition expressions in an IAM policy
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $iamClient = new IamClient();
 * try {
 *     $formattedName = $iamClient->projectName('[PROJECT]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $iamClient->listServiceAccounts($formattedName);
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
 *     $pagedResponse = $iamClient->listServiceAccounts($formattedName);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $iamClient->close();
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
class IamGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.iam.admin.v1.IAM';

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
    private static $keyNameTemplate;
    private static $projectNameTemplate;
    private static $serviceAccountNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/iam_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/iam_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/iam_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/iam_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getKeyNameTemplate()
    {
        if (null == self::$keyNameTemplate) {
            self::$keyNameTemplate = new PathTemplate('projects/{project}/serviceAccounts/{service_account}/keys/{key}');
        }

        return self::$keyNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
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
                'key' => self::getKeyNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'serviceAccount' => self::getServiceAccountNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a key resource.
     *
     * @param string $project
     * @param string $serviceAccount
     * @param string $key
     *
     * @return string The formatted key resource.
     * @experimental
     */
    public static function keyName($project, $serviceAccount, $key)
    {
        return self::getKeyNameTemplate()->render([
            'project' => $project,
            'service_account' => $serviceAccount,
            'key' => $key,
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
     * - key: projects/{project}/serviceAccounts/{service_account}/keys/{key}
     * - project: projects/{project}
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
    }

    /**
     * Lists every [ServiceAccount][google.iam.admin.v1.ServiceAccount] that belongs to a specific project.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $iamClient->listServiceAccounts($formattedName);
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
     *     $pagedResponse = $iamClient->listServiceAccounts($formattedName);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the project associated with the service
     *                             accounts, such as `projects/my-project-123`.
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
    public function listServiceAccounts($name, array $optionalArgs = [])
    {
        $request = new ListServiceAccountsRequest();
        $request->setName($name);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListServiceAccounts',
            $optionalArgs,
            ListServiceAccountsResponse::class,
            $request
        );
    }

    /**
     * Gets a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $response = $iamClient->getServiceAccount($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account in the following format:
     *                             `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *                             Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *                             the account. The `ACCOUNT` value can be the `email` address or the
     *                             `unique_id` of the service account.
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
     * @return \Google\Iam\Admin\V1\ServiceAccount
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getServiceAccount($name, array $optionalArgs = [])
    {
        $request = new GetServiceAccountRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetServiceAccount',
            ServiceAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->projectName('[PROJECT]');
     *     $accountId = '';
     *     $response = $iamClient->createServiceAccount($formattedName, $accountId);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the project associated with the service
     *                             accounts, such as `projects/my-project-123`.
     * @param string $accountId    Required. The account id that is used to generate the service account
     *                             email address and a stable unique id. It is unique within a project,
     *                             must be 6-30 characters long, and match the regular expression
     *                             `[a-z](https://cloud.google.com[-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type ServiceAccount $serviceAccount
     *          The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to
     *          create. Currently, only the following values are user assignable:
     *          `display_name` and `description`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccount
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createServiceAccount($name, $accountId, array $optionalArgs = [])
    {
        $request = new CreateServiceAccountRequest();
        $request->setName($name);
        $request->setAccountId($accountId);
        if (isset($optionalArgs['serviceAccount'])) {
            $request->setServiceAccount($optionalArgs['serviceAccount']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateServiceAccount',
            ServiceAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * **Note:** We are in the process of deprecating this method. Use
     * [PatchServiceAccount][google.iam.admin.v1.IAM.PatchServiceAccount] instead.
     *
     * Updates a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * You can update only the `display_name` and `description` fields.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->updateServiceAccount();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource name of the service account.
     *
     *          Use one of the following formats:
     *
     *          * `projects/{PROJECT_ID}/serviceAccounts/{EMAIL_ADDRESS}`
     *          * `projects/{PROJECT_ID}/serviceAccounts/{UNIQUE_ID}`
     *
     *          As an alternative, you can use the `-` wildcard character instead of the
     *          project ID:
     *
     *          * `projects/-/serviceAccounts/{EMAIL_ADDRESS}`
     *          * `projects/-/serviceAccounts/{UNIQUE_ID}`
     *
     *          When possible, avoid using the `-` wildcard character, because it can cause
     *          response messages to contain misleading error codes. For example, if you
     *          try to get the service account
     *          `projects/-/serviceAccounts/fake&#64;example.com`, which does not exist, the
     *          response contains an HTTP `403 Forbidden` error instead of a `404 Not
     *          Found` error.
     *     @type string $projectId
     *          Output only. The ID of the project that owns the service account.
     *     @type string $uniqueId
     *          Output only. The unique, stable numeric ID for the service account.
     *
     *          Each service account retains its unique ID even if you delete the service
     *          account. For example, if you delete a service account, then create a new
     *          service account with the same name, the new service account has a different
     *          unique ID than the deleted service account.
     *     @type string $email
     *          Output only. The email address of the service account.
     *     @type string $displayName
     *          Optional. A user-specified, human-readable name for the service account. The maximum
     *          length is 100 UTF-8 bytes.
     *     @type string $etag
     *          Deprecated. Do not use.
     *     @type string $description
     *          Optional. A user-specified, human-readable description of the service account. The
     *          maximum length is 256 UTF-8 bytes.
     *     @type string $oauth2ClientId
     *          Output only. The OAuth 2.0 client ID for the service account.
     *     @type bool $disabled
     *          Output only. Whether the service account is disabled.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccount
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateServiceAccount(array $optionalArgs = [])
    {
        $request = new ServiceAccount();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['projectId'])) {
            $request->setProjectId($optionalArgs['projectId']);
        }
        if (isset($optionalArgs['uniqueId'])) {
            $request->setUniqueId($optionalArgs['uniqueId']);
        }
        if (isset($optionalArgs['email'])) {
            $request->setEmail($optionalArgs['email']);
        }
        if (isset($optionalArgs['displayName'])) {
            $request->setDisplayName($optionalArgs['displayName']);
        }
        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }
        if (isset($optionalArgs['description'])) {
            $request->setDescription($optionalArgs['description']);
        }
        if (isset($optionalArgs['oauth2ClientId'])) {
            $request->setOauth2ClientId($optionalArgs['oauth2ClientId']);
        }
        if (isset($optionalArgs['disabled'])) {
            $request->setDisabled($optionalArgs['disabled']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateServiceAccount',
            ServiceAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Patches a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->patchServiceAccount();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type ServiceAccount $serviceAccount
     *     @type FieldMask $updateMask
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccount
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function patchServiceAccount(array $optionalArgs = [])
    {
        $request = new PatchServiceAccountRequest();
        if (isset($optionalArgs['serviceAccount'])) {
            $request->setServiceAccount($optionalArgs['serviceAccount']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'service_account.name' => $request->getServiceAccount()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'PatchServiceAccount',
            ServiceAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * **Warning:** After you delete a service account, you might not be able to
     * undelete it. If you know that you need to re-enable the service account in
     * the future, use [DisableServiceAccount][google.iam.admin.v1.IAM.DisableServiceAccount] instead.
     *
     * If you delete a service account, IAM permanently removes the service
     * account 30 days later. Google Cloud cannot recover the service account
     * after it is permanently removed, even if you file a support request.
     *
     * To help avoid unplanned outages, we recommend that you disable the service
     * account before you delete it. Use [DisableServiceAccount][google.iam.admin.v1.IAM.DisableServiceAccount] to disable the
     * service account, then wait at least 24 hours and watch for unintended
     * consequences. If there are no unintended consequences, you can delete the
     * service account.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $iamClient->deleteServiceAccount($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account in the following format:
     *                             `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *                             Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *                             the account. The `ACCOUNT` value can be the `email` address or the
     *                             `unique_id` of the service account.
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
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteServiceAccount($name, array $optionalArgs = [])
    {
        $request = new DeleteServiceAccountRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteServiceAccount',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Restores a deleted [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * **Important:** It is not always possible to restore a deleted service
     * account. Use this method only as a last resort.
     *
     * After you delete a service account, IAM permanently removes the service
     * account 30 days later. There is no way to restore a deleted service account
     * that has been permanently removed.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->undeleteServiceAccount();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource name of the service account in the following format:
     *          `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT_UNIQUE_ID}`.
     *          Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *          the account.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\UndeleteServiceAccountResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function undeleteServiceAccount(array $optionalArgs = [])
    {
        $request = new UndeleteServiceAccountRequest();
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
            'UndeleteServiceAccount',
            UndeleteServiceAccountResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Enables a [ServiceAccount][google.iam.admin.v1.ServiceAccount] that was disabled by
     * [DisableServiceAccount][google.iam.admin.v1.IAM.DisableServiceAccount].
     *
     * If the service account is already enabled, then this method has no effect.
     *
     * If the service account was disabled by other means—for example, if Google
     * disabled the service account because it was compromised—you cannot use this
     * method to enable the service account.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $iamClient->enableServiceAccount();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource name of the service account in the following format:
     *          `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *          Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *          the account. The `ACCOUNT` value can be the `email` address or the
     *          `unique_id` of the service account.
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
    public function enableServiceAccount(array $optionalArgs = [])
    {
        $request = new EnableServiceAccountRequest();
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
            'EnableServiceAccount',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Disables a [ServiceAccount][google.iam.admin.v1.ServiceAccount] immediately.
     *
     * If an application uses the service account to authenticate, that
     * application can no longer call Google APIs or access Google Cloud
     * resources. Existing access tokens for the service account are rejected, and
     * requests for new access tokens will fail.
     *
     * To re-enable the service account, use [EnableServiceAccount][google.iam.admin.v1.IAM.EnableServiceAccount]. After you
     * re-enable the service account, its existing access tokens will be accepted,
     * and you can request new access tokens.
     *
     * To help avoid unplanned outages, we recommend that you disable the service
     * account before you delete it. Use this method to disable the service
     * account, then wait at least 24 hours and watch for unintended consequences.
     * If there are no unintended consequences, you can delete the service account
     * with [DeleteServiceAccount][google.iam.admin.v1.IAM.DeleteServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $iamClient->disableServiceAccount();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource name of the service account in the following format:
     *          `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *          Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *          the account. The `ACCOUNT` value can be the `email` address or the
     *          `unique_id` of the service account.
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
    public function disableServiceAccount(array $optionalArgs = [])
    {
        $request = new DisableServiceAccountRequest();
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
            'DisableServiceAccount',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists every [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey] for a service account.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $response = $iamClient->listServiceAccountKeys($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name Required. The resource name of the service account in the following format:
     *                     `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *
     * Using `-` as a wildcard for the `PROJECT_ID`, will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int[] $keyTypes
     *          Filters the types of keys the user wants to include in the list
     *          response. Duplicate key types are not allowed. If no key type
     *          is provided, all keys are returned.
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\ListServiceAccountKeysRequest\KeyType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ListServiceAccountKeysResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listServiceAccountKeys($name, array $optionalArgs = [])
    {
        $request = new ListServiceAccountKeysRequest();
        $request->setName($name);
        if (isset($optionalArgs['keyTypes'])) {
            $request->setKeyTypes($optionalArgs['keyTypes']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ListServiceAccountKeys',
            ListServiceAccountKeysResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->keyName('[PROJECT]', '[SERVICE_ACCOUNT]', '[KEY]');
     *     $response = $iamClient->getServiceAccountKey($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name Required. The resource name of the service account key in the following format:
     *                     `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}`.
     *
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $publicKeyType
     *          The output format of the public key requested.
     *          X509_PEM is the default output format.
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\ServiceAccountPublicKeyType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccountKey
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getServiceAccountKey($name, array $optionalArgs = [])
    {
        $request = new GetServiceAccountKeyRequest();
        $request->setName($name);
        if (isset($optionalArgs['publicKeyType'])) {
            $request->setPublicKeyType($optionalArgs['publicKeyType']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetServiceAccountKey',
            ServiceAccountKey::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $response = $iamClient->createServiceAccountKey($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account in the following format:
     *                             `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *                             Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *                             the account. The `ACCOUNT` value can be the `email` address or the
     *                             `unique_id` of the service account.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $privateKeyType
     *          The output format of the private key. The default value is
     *          `TYPE_GOOGLE_CREDENTIALS_FILE`, which is the Google Credentials File
     *          format.
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\ServiceAccountPrivateKeyType}
     *     @type int $keyAlgorithm
     *          Which type of key and algorithm to use for the key.
     *          The default is currently a 2K RSA key.  However this may change in the
     *          future.
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\ServiceAccountKeyAlgorithm}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccountKey
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createServiceAccountKey($name, array $optionalArgs = [])
    {
        $request = new CreateServiceAccountKeyRequest();
        $request->setName($name);
        if (isset($optionalArgs['privateKeyType'])) {
            $request->setPrivateKeyType($optionalArgs['privateKeyType']);
        }
        if (isset($optionalArgs['keyAlgorithm'])) {
            $request->setKeyAlgorithm($optionalArgs['keyAlgorithm']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateServiceAccountKey',
            ServiceAccountKey::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey], using a public key that you provide.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->uploadServiceAccountKey();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The resource name of the service account in the following format:
     *          `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *          Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *          the account. The `ACCOUNT` value can be the `email` address or the
     *          `unique_id` of the service account.
     *     @type string $publicKeyData
     *          A field that allows clients to upload their own public key. If set,
     *          use this public key data to create a service account key for given
     *          service account.
     *          Please note, the expected format for this field is X509_PEM.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\ServiceAccountKey
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function uploadServiceAccountKey(array $optionalArgs = [])
    {
        $request = new UploadServiceAccountKeyRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['publicKeyData'])) {
            $request->setPublicKeyData($optionalArgs['publicKeyData']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UploadServiceAccountKey',
            ServiceAccountKey::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]. Deleting a service account key does not
     * revoke short-lived credentials that have been issued based on the service
     * account key.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->keyName('[PROJECT]', '[SERVICE_ACCOUNT]', '[KEY]');
     *     $iamClient->deleteServiceAccountKey($formattedName);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the service account key in the following format:
     *                             `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}`.
     *                             Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *                             the account. The `ACCOUNT` value can be the `email` address or the
     *                             `unique_id` of the service account.
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
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteServiceAccountKey($name, array $optionalArgs = [])
    {
        $request = new DeleteServiceAccountKeyRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteServiceAccountKey',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * **Note:** This method is deprecated. Use the
     * [`signBlob`](https://cloud.google.com/iam/help/rest-credentials/v1/projects.serviceAccounts/signBlob)
     * method in the IAM Service Account Credentials API instead. If you currently
     * use this method, see the [migration
     * guide](https://cloud.google.com/iam/help/credentials/migrate-api) for
     * instructions.
     *
     * Signs a blob using the system-managed private key for a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $bytesToSign = '';
     *     $response = $iamClient->signBlob($formattedName, $bytesToSign);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name Required. Deprecated. [Migrate to Service Account Credentials
     *                     API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     * @param string $bytesToSign Required. Deprecated. [Migrate to Service Account Credentials
     *                            API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *
     * The bytes to sign.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\SignBlobResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function signBlob($name, $bytesToSign, array $optionalArgs = [])
    {
        $request = new SignBlobRequest();
        $request->setName($name);
        $request->setBytesToSign($bytesToSign);

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
     * **Note:** This method is deprecated. Use the
     * [`signJwt`](https://cloud.google.com/iam/help/rest-credentials/v1/projects.serviceAccounts/signJwt)
     * method in the IAM Service Account Credentials API instead. If you currently
     * use this method, see the [migration
     * guide](https://cloud.google.com/iam/help/credentials/migrate-api) for
     * instructions.
     *
     * Signs a JSON Web Token (JWT) using the system-managed private key for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $formattedName = $iamClient->serviceAccountName('[PROJECT]', '[SERVICE_ACCOUNT]');
     *     $payload = '';
     *     $response = $iamClient->signJwt($formattedName, $payload);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $name Required. Deprecated. [Migrate to Service Account Credentials
     *                     API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the service account.
     * @param string $payload Required. Deprecated. [Migrate to Service Account Credentials
     *                        API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *
     * The JWT payload to sign. Must be a serialized JSON object that contains a
     * JWT Claims Set. For example: `{"sub": "user&#64;example.com", "iat": 313435}`
     *
     * If the JWT Claims Set contains an expiration time (`exp`) claim, it must be
     * an integer timestamp that is not in the past and no more than 1 hour in the
     * future.
     *
     * If the JWT Claims Set does not contain an expiration time (`exp`) claim,
     * this claim is added automatically, with a timestamp that is 1 hour in the
     * future.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\SignJwtResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function signJwt($name, $payload, array $optionalArgs = [])
    {
        $request = new SignJwtRequest();
        $request->setName($name);
        $request->setPayload($payload);

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

    /**
     * Gets the IAM policy that is attached to a [ServiceAccount][google.iam.admin.v1.ServiceAccount]. This IAM
     * policy specifies which members have access to the service account.
     *
     * This method does not tell you whether the service account has been granted
     * any roles on other resources. To check whether a service account has role
     * grants on a resource, use the `getIamPolicy` method for that resource. For
     * example, to view the role grants for a project, call the Resource Manager
     * API's
     * [`projects.getIamPolicy`](https://cloud.google.com/resource-manager/reference/rest/v1/projects/getIamPolicy)
     * method.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $resource = '';
     *     $response = $iamClient->getIamPolicy($resource);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type GetPolicyOptions $options
     *          OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *          `GetIamPolicy`. This field is only used by Cloud IAM.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $request->setResource($resource);
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sets the IAM policy that is attached to a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Use this method to grant or revoke access to the service account. For
     * example, you could grant a member the ability to impersonate the service
     * account.
     *
     * This method does not enable the service account to access other resources.
     * To grant roles to a service account on a resource, follow these steps:
     *
     * 1. Call the resource's `getIamPolicy` method to get its current IAM policy.
     * 2. Edit the policy so that it binds the service account to an IAM role for
     * the resource.
     * 3. Call the resource's `setIamPolicy` method to update its IAM policy.
     *
     * For detailed instructions, see
     * [Granting roles to a service account for specific
     * resources](https://cloud.google.com/iam/help/service-accounts/granting-access-to-service-accounts).
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $resource = '';
     *     $policy = new Policy();
     *     $response = $iamClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
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
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $request->setResource($resource);
        $request->setPolicy($policy);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Tests whether the caller has the specified permissions on a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $resource = '';
     *     $permissions = [];
     *     $response = $iamClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
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
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $request->setResource($resource);
        $request->setPermissions($permissions);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'TestIamPermissions',
            TestIamPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists roles that can be granted on a Google Cloud resource. A role is
     * grantable if the IAM policy for the resource can contain bindings to the
     * role.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $fullResourceName = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $iamClient->queryGrantableRoles($fullResourceName);
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
     *     $pagedResponse = $iamClient->queryGrantableRoles($fullResourceName);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param string $fullResourceName Required. The full resource name to query from the list of grantable roles.
     *
     * The name follows the Google Cloud Platform resource format.
     * For example, a Cloud Platform project with id `my-project` will be named
     * `//cloudresourcemanager.googleapis.com/projects/my-project`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $view
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\RoleView}
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
    public function queryGrantableRoles($fullResourceName, array $optionalArgs = [])
    {
        $request = new QueryGrantableRolesRequest();
        $request->setFullResourceName($fullResourceName);
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        return $this->getPagedListResponse(
            'QueryGrantableRoles',
            $optionalArgs,
            QueryGrantableRolesResponse::class,
            $request
        );
    }

    /**
     * Lists every predefined [Role][google.iam.admin.v1.Role] that IAM supports, or every custom role
     * that is defined for an organization or project.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $iamClient->listRoles();
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
     *     $pagedResponse = $iamClient->listRoles();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          The `parent` parameter's value depends on the target resource for the
     *          request, namely
     *          [`roles`](https://cloud.google.com/iam/reference/rest/v1/roles),
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles), or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `parent` value format is described below:
     *
     *          * [`roles.list()`](https://cloud.google.com/iam/reference/rest/v1/roles/list): An empty string.
     *            This method doesn't require a resource; it simply returns all
     *            [predefined roles](https://cloud.google.com/iam/docs/understanding-roles#predefined_roles) in
     *            Cloud IAM. Example request URL:
     *            `https://iam.googleapis.com/v1/roles`
     *
     *          * [`projects.roles.list()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/list):
     *            `projects/{PROJECT_ID}`. This method lists all project-level
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles).
     *            Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     *
     *          * [`organizations.roles.list()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/list):
     *            `organizations/{ORGANIZATION_ID}`. This method lists all
     *            organization-level [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles).
     *            Example request URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type int $view
     *          Optional view for the returned Role objects. When `FULL` is specified,
     *          the `includedPermissions` field is returned, which includes a list of all
     *          permissions in the role. The default value is `BASIC`, which does not
     *          return the `includedPermissions` field.
     *          For allowed values, use constants defined on {@see \Google\Iam\Admin\V1\RoleView}
     *     @type bool $showDeleted
     *          Include Roles that have been deleted.
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
    public function listRoles(array $optionalArgs = [])
    {
        $request = new ListRolesRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
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
            'ListRoles',
            $optionalArgs,
            ListRolesResponse::class,
            $request
        );
    }

    /**
     * Gets the definition of a [Role][google.iam.admin.v1.Role].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->getRole();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The `name` parameter's value depends on the target resource for the
     *          request, namely
     *          [`roles`](https://cloud.google.com/iam/reference/rest/v1/roles),
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles), or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `name` value format is described below:
     *
     *          * [`roles.get()`](https://cloud.google.com/iam/reference/rest/v1/roles/get): `roles/{ROLE_NAME}`.
     *            This method returns results from all
     *            [predefined roles](https://cloud.google.com/iam/docs/understanding-roles#predefined_roles) in
     *            Cloud IAM. Example request URL:
     *            `https://iam.googleapis.com/v1/roles/{ROLE_NAME}`
     *
     *          * [`projects.roles.get()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/get):
     *            `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method returns only
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that have been
     *            created at the project level. Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          * [`organizations.roles.get()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/get):
     *            `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *            returns only [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that
     *            have been created at the organization level. Example request URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\Role
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getRole(array $optionalArgs = [])
    {
        $request = new GetRoleRequest();
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
            'GetRole',
            Role::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new custom [Role][google.iam.admin.v1.Role].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->createRole();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          The `parent` parameter's value depends on the target resource for the
     *          request, namely
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles) or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `parent` value format is described below:
     *
     *          * [`projects.roles.create()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/create):
     *            `projects/{PROJECT_ID}`. This method creates project-level
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles).
     *            Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     *
     *          * [`organizations.roles.create()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/create):
     *            `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles). Example request
     *            URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type string $roleId
     *          The role ID to use for this role.
     *
     *          A role ID may contain alphanumeric characters, underscores (`_`), and
     *          periods (`.`). It must contain a minimum of 3 characters and a maximum of
     *          64 characters.
     *     @type Role $role
     *          The Role resource to create.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\Role
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createRole(array $optionalArgs = [])
    {
        $request = new CreateRoleRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['roleId'])) {
            $request->setRoleId($optionalArgs['roleId']);
        }
        if (isset($optionalArgs['role'])) {
            $request->setRole($optionalArgs['role']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateRole',
            Role::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the definition of a custom [Role][google.iam.admin.v1.Role].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->updateRole();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The `name` parameter's value depends on the target resource for the
     *          request, namely
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles) or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `name` value format is described below:
     *
     *          * [`projects.roles.patch()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/patch):
     *            `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method updates only
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that have been
     *            created at the project level. Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          * [`organizations.roles.patch()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/patch):
     *            `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *            updates only [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that
     *            have been created at the organization level. Example request URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type Role $role
     *          The updated role.
     *     @type FieldMask $updateMask
     *          A mask describing which fields in the Role have changed.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\Role
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateRole(array $optionalArgs = [])
    {
        $request = new UpdateRoleRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['role'])) {
            $request->setRole($optionalArgs['role']);
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
            'UpdateRole',
            Role::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a custom [Role][google.iam.admin.v1.Role].
     *
     * When you delete a custom role, the following changes occur immediately:
     *
     * * You cannot bind a member to the custom role in an IAM
     * [Policy][google.iam.v1.Policy].
     * * Existing bindings to the custom role are not changed, but they have no
     * effect.
     * * By default, the response from [ListRoles][google.iam.admin.v1.IAM.ListRoles] does not include the custom
     * role.
     *
     * You have 7 days to undelete the custom role. After 7 days, the following
     * changes occur:
     *
     * * The custom role is permanently deleted and cannot be recovered.
     * * If an IAM policy contains a binding to the custom role, the binding is
     * permanently removed.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->deleteRole();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The `name` parameter's value depends on the target resource for the
     *          request, namely
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles) or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `name` value format is described below:
     *
     *          * [`projects.roles.delete()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/delete):
     *            `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method deletes only
     *            [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that have been
     *            created at the project level. Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          * [`organizations.roles.delete()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/delete):
     *            `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *            deletes only [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that
     *            have been created at the organization level. Example request URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type string $etag
     *          Used to perform a consistent read-modify-write.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\Role
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteRole(array $optionalArgs = [])
    {
        $request = new DeleteRoleRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
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
            'DeleteRole',
            Role::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Undeletes a custom [Role][google.iam.admin.v1.Role].
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->undeleteRole();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          The `name` parameter's value depends on the target resource for the
     *          request, namely
     *          [`projects`](https://cloud.google.com/iam/reference/rest/v1/projects.roles) or
     *          [`organizations`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles). Each
     *          resource type's `name` value format is described below:
     *
     *          * [`projects.roles.undelete()`](https://cloud.google.com/iam/reference/rest/v1/projects.roles/undelete):
     *            `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method undeletes
     *            only [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that have been
     *            created at the project level. Example request URL:
     *            `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          * [`organizations.roles.undelete()`](https://cloud.google.com/iam/reference/rest/v1/organizations.roles/undelete):
     *            `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *            undeletes only [custom roles](https://cloud.google.com/iam/docs/understanding-custom-roles) that
     *            have been created at the organization level. Example request URL:
     *            `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *
     *          Note: Wildcard (*) values are invalid; you must specify a complete project
     *          ID or organization ID.
     *     @type string $etag
     *          Used to perform a consistent read-modify-write.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\Role
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function undeleteRole(array $optionalArgs = [])
    {
        $request = new UndeleteRoleRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
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
            'UndeleteRole',
            Role::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists every permission that you can test on a resource. A permission is
     * testable if you can check whether a member has that permission on the
     * resource.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $iamClient->queryTestablePermissions();
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
     *     $pagedResponse = $iamClient->queryTestablePermissions();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $fullResourceName
     *          Required. The full resource name to query from the list of testable
     *          permissions.
     *
     *          The name follows the Google Cloud Platform resource format.
     *          For example, a Cloud Platform project with id `my-project` will be named
     *          `//cloudresourcemanager.googleapis.com/projects/my-project`.
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
    public function queryTestablePermissions(array $optionalArgs = [])
    {
        $request = new QueryTestablePermissionsRequest();
        if (isset($optionalArgs['fullResourceName'])) {
            $request->setFullResourceName($optionalArgs['fullResourceName']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        return $this->getPagedListResponse(
            'QueryTestablePermissions',
            $optionalArgs,
            QueryTestablePermissionsResponse::class,
            $request
        );
    }

    /**
     * Returns a list of services that allow you to opt into audit logs that are
     * not generated by default.
     *
     * To learn more about audit logs, see the [Logging
     * documentation](https://cloud.google.com/logging/docs/audit).
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->queryAuditableServices();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $fullResourceName
     *          Required. The full resource name to query from the list of auditable
     *          services.
     *
     *          The name follows the Google Cloud Platform resource format.
     *          For example, a Cloud Platform project with id `my-project` will be named
     *          `//cloudresourcemanager.googleapis.com/projects/my-project`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\QueryAuditableServicesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function queryAuditableServices(array $optionalArgs = [])
    {
        $request = new QueryAuditableServicesRequest();
        if (isset($optionalArgs['fullResourceName'])) {
            $request->setFullResourceName($optionalArgs['fullResourceName']);
        }

        return $this->startCall(
            'QueryAuditableServices',
            QueryAuditableServicesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lints, or validates, an IAM policy. Currently checks the
     * [google.iam.v1.Binding.condition][google.iam.v1.Binding.condition] field, which contains a condition
     * expression for a role binding.
     *
     * Successful calls to this method always return an HTTP `200 OK` status code,
     * even if the linter detects an issue in the IAM policy.
     *
     * Sample code:
     * ```
     * $iamClient = new IamClient();
     * try {
     *     $response = $iamClient->lintPolicy();
     * } finally {
     *     $iamClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $fullResourceName
     *          The full resource name of the policy this lint request is about.
     *
     *          The name follows the Google Cloud Platform (GCP) resource format.
     *          For example, a GCP project with ID `my-project` will be named
     *          `//cloudresourcemanager.googleapis.com/projects/my-project`.
     *
     *          The resource name is not used to read the policy instance from the Cloud
     *          IAM database. The candidate policy for lint has to be provided in the same
     *          request object.
     *     @type Expr $condition
     *          [google.iam.v1.Binding.condition] [google.iam.v1.Binding.condition] object to be linted.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Iam\Admin\V1\LintPolicyResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function lintPolicy(array $optionalArgs = [])
    {
        $request = new LintPolicyRequest();
        if (isset($optionalArgs['fullResourceName'])) {
            $request->setFullResourceName($optionalArgs['fullResourceName']);
        }
        if (isset($optionalArgs['condition'])) {
            $request->setCondition($optionalArgs['condition']);
        }

        return $this->startCall(
            'LintPolicy',
            LintPolicyResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
