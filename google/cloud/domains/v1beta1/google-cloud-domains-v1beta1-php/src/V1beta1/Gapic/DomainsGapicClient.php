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
 * https://github.com/google/googleapis/blob/master/google/cloud/domains/v1beta1/domains.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Domains\V1beta1\Gapic;

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
use Google\Cloud\Domains\V1beta1\AuthorizationCode;
use Google\Cloud\Domains\V1beta1\ConfigureContactSettingsRequest;
use Google\Cloud\Domains\V1beta1\ConfigureDnsSettingsRequest;
use Google\Cloud\Domains\V1beta1\ConfigureManagementSettingsRequest;
use Google\Cloud\Domains\V1beta1\ContactSettings;
use Google\Cloud\Domains\V1beta1\DeleteRegistrationRequest;
use Google\Cloud\Domains\V1beta1\DnsSettings;
use Google\Cloud\Domains\V1beta1\ExportRegistrationRequest;
use Google\Cloud\Domains\V1beta1\GetRegistrationRequest;
use Google\Cloud\Domains\V1beta1\ListRegistrationsRequest;
use Google\Cloud\Domains\V1beta1\ListRegistrationsResponse;
use Google\Cloud\Domains\V1beta1\ManagementSettings;
use Google\Cloud\Domains\V1beta1\RegisterDomainRequest;
use Google\Cloud\Domains\V1beta1\Registration;
use Google\Cloud\Domains\V1beta1\ResetAuthorizationCodeRequest;
use Google\Cloud\Domains\V1beta1\RetrieveAuthorizationCodeRequest;
use Google\Cloud\Domains\V1beta1\RetrieveRegisterParametersRequest;
use Google\Cloud\Domains\V1beta1\RetrieveRegisterParametersResponse;
use Google\Cloud\Domains\V1beta1\SearchDomainsRequest;
use Google\Cloud\Domains\V1beta1\SearchDomainsResponse;
use Google\Cloud\Domains\V1beta1\UpdateRegistrationRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Type\Money;

/**
 * Service Description: The Cloud Domains API enables management and configuration of domain names.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $domainsClient = new DomainsClient();
 * try {
 *     $query = '';
 *     $formattedLocation = $domainsClient->locationName('[PROJECT]', '[LOCATION]');
 *     $response = $domainsClient->searchDomains($query, $formattedLocation);
 * } finally {
 *     $domainsClient->close();
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
class DomainsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.domains.v1beta1.Domains';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'domains.googleapis.com';

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
    private static $registrationNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/domains_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/domains_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/domains_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/domains_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getRegistrationNameTemplate()
    {
        if (null == self::$registrationNameTemplate) {
            self::$registrationNameTemplate = new PathTemplate('projects/{project}/locations/{location}/registrations/{registration}');
        }

        return self::$registrationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'registration' => self::getRegistrationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a registration resource.
     *
     * @param string $project
     * @param string $location
     * @param string $registration
     *
     * @return string The formatted registration resource.
     * @experimental
     */
    public static function registrationName($project, $location, $registration)
    {
        return self::getRegistrationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'registration' => $registration,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - registration: projects/{project}/locations/{location}/registrations/{registration}.
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
     *           as "<uri>:<port>". Default 'domains.googleapis.com:443'.
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
     * Searches for available domain names similar to the provided query.
     *
     * Availability results from this method are approximate; call
     * `RetrieveRegisterParameters` on a domain before registering to confirm
     * availability.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $query = '';
     *     $formattedLocation = $domainsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $domainsClient->searchDomains($query, $formattedLocation);
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $query        Required. String used to search for available domain names.
     * @param string $location     Required. The location. Must be in the format `projects/&#42;/locations/*`.
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
     * @return \Google\Cloud\Domains\V1beta1\SearchDomainsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function searchDomains($query, $location, array $optionalArgs = [])
    {
        $request = new SearchDomainsRequest();
        $request->setQuery($query);
        $request->setLocation($location);

        $requestParams = new RequestParamsHeaderDescriptor([
          'location' => $request->getLocation(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SearchDomains',
            SearchDomainsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets parameters needed to register a new domain name, including price and
     * up-to-date availability. Use the returned values to call `RegisterDomain`.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $domainName = '';
     *     $formattedLocation = $domainsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $domainsClient->retrieveRegisterParameters($domainName, $formattedLocation);
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $domainName   Required. The domain name. Unicode domain names must be expressed in Punycode format.
     * @param string $location     Required. The location. Must be in the format `projects/&#42;/locations/*`.
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
     * @return \Google\Cloud\Domains\V1beta1\RetrieveRegisterParametersResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function retrieveRegisterParameters($domainName, $location, array $optionalArgs = [])
    {
        $request = new RetrieveRegisterParametersRequest();
        $request->setDomainName($domainName);
        $request->setLocation($location);

        $requestParams = new RequestParamsHeaderDescriptor([
          'location' => $request->getLocation(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'RetrieveRegisterParameters',
            RetrieveRegisterParametersResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Registers a new domain name and creates a corresponding `Registration`
     * resource.
     *
     * Call `RetrieveRegisterParameters` first to check availability of the domain
     * name and determine parameters like price that are needed to build a call to
     * this method.
     *
     * A successful call creates a `Registration` resource in state
     * `REGISTRATION_PENDING`, which resolves to `ACTIVE` within 1-2
     * minutes, indicating that the domain was successfully registered. If the
     * resource ends up in state `REGISTRATION_FAILED`, it indicates that the
     * domain was not registered successfully, and you can safely delete the
     * resource and retry registration.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedParent = $domainsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $registration = new Registration();
     *     $yearlyPrice = new Money();
     *     $operationResponse = $domainsClient->registerDomain($formattedParent, $registration, $yearlyPrice);
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
     *     $operationResponse = $domainsClient->registerDomain($formattedParent, $registration, $yearlyPrice);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'registerDomain');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string       $parent       Required. The parent resource of the `Registration`. Must be in the
     *                                   format `projects/&#42;/locations/*`.
     * @param Registration $registration Required. The complete `Registration` resource to be created.
     * @param Money        $yearlyPrice  Required. Yearly price to register or renew the domain.
     *                                   The value that should be put here can be obtained from
     *                                   RetrieveRegisterParameters or SearchDomains calls.
     * @param array        $optionalArgs {
     *                                   Optional.
     *
     *     @type int[] $domainNotices
     *          The list of domain notices that you acknowledge. Call
     *          `RetrieveRegisterParameters` to see the notices that need acknowledgement.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Domains\V1beta1\DomainNotice}
     *     @type int[] $contactNotices
     *          The list of contact notices that the caller acknowledges. The notices
     *          required here depend on the values specified in
     *          `registration.contact_settings`.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Domains\V1beta1\ContactNotice}
     *     @type bool $validateOnly
     *          When true, only validation will be performed, without actually registering
     *          the domain. Follows:
     *          https://cloud.google.com/apis/design/design_patterns#request_validation
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
    public function registerDomain($parent, $registration, $yearlyPrice, array $optionalArgs = [])
    {
        $request = new RegisterDomainRequest();
        $request->setParent($parent);
        $request->setRegistration($registration);
        $request->setYearlyPrice($yearlyPrice);
        if (isset($optionalArgs['domainNotices'])) {
            $request->setDomainNotices($optionalArgs['domainNotices']);
        }
        if (isset($optionalArgs['contactNotices'])) {
            $request->setContactNotices($optionalArgs['contactNotices']);
        }
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'RegisterDomain',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists the `Registration` resources in a project.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedParent = $domainsClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $domainsClient->listRegistrations($formattedParent);
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
     *     $pagedResponse = $domainsClient->listRegistrations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The project and location from which to list `Registration`s, specified in
     *                             the format `projects/&#42;/locations/*`.
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
     *          Filter expression to restrict the `Registration`s returned.
     *
     *          The expression must specify the field name, a comparison operator, and the
     *          value that you want to use for filtering. The value must be a string, a
     *          number, a boolean, or an enum value. The comparison operator should be one
     *          of =, !=, >, <, >=, <=, or : for prefix or wildcard matches.
     *
     *          For example, to filter to a specific domain name, use an expression like
     *          `domainName="example.com"`. You can also check for the existence of a
     *          field; for example, to find domains using custom DNS settings, use an
     *          expression like `dnsSettings.customDns:*`.
     *
     *          You can also create compound filters by combining expressions with the
     *          `AND` and `OR` operators. For example, to find domains that are suspended
     *          or have specific issues flagged, use an expression like
     *          `(state=SUSPENDED) OR (issue:*)`.
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
    public function listRegistrations($parent, array $optionalArgs = [])
    {
        $request = new ListRegistrationsRequest();
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
            'ListRegistrations',
            $optionalArgs,
            ListRegistrationsResponse::class,
            $request
        );
    }

    /**
     * Gets the details of a `Registration` resource.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedName = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $response = $domainsClient->getRegistration($formattedName);
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the `Registration` to get, in the format
     *                             `projects/&#42;/locations/&#42;/registrations/*`.
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
     * @return \Google\Cloud\Domains\V1beta1\Registration
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getRegistration($name, array $optionalArgs = [])
    {
        $request = new GetRegistrationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetRegistration',
            Registration::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates select fields of a `Registration` resource, notably `labels`. To
     * update other fields, use the appropriate custom update method:.
     *
     * * To update management settings, see `ConfigureManagementSettings`
     * * To update DNS configuration, see `ConfigureDnsSettings`
     * * To update contact information, see `ConfigureContactSettings`
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $operationResponse = $domainsClient->updateRegistration($updateMask);
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
     *     $operationResponse = $domainsClient->updateRegistration($updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'updateRegistration');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param FieldMask $updateMask   Required. The field mask describing which fields to update as a comma-separated list.
     *                                For example, if only the labels are being updated, the `update_mask` would
     *                                be `"labels"`.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type Registration $registration
     *          Fields of the `Registration` to update.
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
    public function updateRegistration($updateMask, array $optionalArgs = [])
    {
        $request = new UpdateRegistrationRequest();
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['registration'])) {
            $request->setRegistration($optionalArgs['registration']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration.name' => $request->getRegistration()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateRegistration',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates a `Registration`'s management settings.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedRegistration = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $updateMask = new FieldMask();
     *     $operationResponse = $domainsClient->configureManagementSettings($formattedRegistration, $updateMask);
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
     *     $operationResponse = $domainsClient->configureManagementSettings($formattedRegistration, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'configureManagementSettings');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string    $registration Required. The name of the `Registration` whose management settings are being updated,
     *                                in the format `projects/&#42;/locations/&#42;/registrations/*`.
     * @param FieldMask $updateMask   Required. The field mask describing which fields to update as a comma-separated list.
     *                                For example, if only the transfer lock is being updated, the `update_mask`
     *                                would be `"transfer_lock_state"`.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type ManagementSettings $managementSettings
     *          Fields of the `ManagementSettings` to update.
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
    public function configureManagementSettings($registration, $updateMask, array $optionalArgs = [])
    {
        $request = new ConfigureManagementSettingsRequest();
        $request->setRegistration($registration);
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['managementSettings'])) {
            $request->setManagementSettings($optionalArgs['managementSettings']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration' => $request->getRegistration(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ConfigureManagementSettings',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates a `Registration`'s DNS settings.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedRegistration = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $updateMask = new FieldMask();
     *     $operationResponse = $domainsClient->configureDnsSettings($formattedRegistration, $updateMask);
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
     *     $operationResponse = $domainsClient->configureDnsSettings($formattedRegistration, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'configureDnsSettings');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string    $registration Required. The name of the `Registration` whose DNS settings are being updated,
     *                                in the format `projects/&#42;/locations/&#42;/registrations/*`.
     * @param FieldMask $updateMask   Required. The field mask describing which fields to update as a comma-separated list.
     *                                For example, if only the name servers are being updated for an existing
     *                                Custom DNS configuration, the `update_mask` would be
     *                                `"custom_dns.name_servers"`.
     *
     * When changing the DNS provider from one type to another, pass the new
     * provider's field name as part of the field mask. For example, when changing
     * from a Google Domains DNS configuration to a Custom DNS configuration, the
     * `update_mask` would be `"custom_dns"`. //
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type DnsSettings $dnsSettings
     *          Fields of the `DnsSettings` to update.
     *     @type bool $validateOnly
     *          Validate the request without actually updating the DNS settings.
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
    public function configureDnsSettings($registration, $updateMask, array $optionalArgs = [])
    {
        $request = new ConfigureDnsSettingsRequest();
        $request->setRegistration($registration);
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['dnsSettings'])) {
            $request->setDnsSettings($optionalArgs['dnsSettings']);
        }
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration' => $request->getRegistration(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ConfigureDnsSettings',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates a `Registration`'s contact settings. Some changes require
     * confirmation by the domain's registrant contact .
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedRegistration = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $updateMask = new FieldMask();
     *     $operationResponse = $domainsClient->configureContactSettings($formattedRegistration, $updateMask);
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
     *     $operationResponse = $domainsClient->configureContactSettings($formattedRegistration, $updateMask);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'configureContactSettings');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string    $registration Required. The name of the `Registration` whose contact settings are being updated,
     *                                in the format `projects/&#42;/locations/&#42;/registrations/*`.
     * @param FieldMask $updateMask   Required. The field mask describing which fields to update as a comma-separated list.
     *                                For example, if only the registrant contact is being updated, the
     *                                `update_mask` would be `"registrant_contact"`.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type ContactSettings $contactSettings
     *          Fields of the `ContactSettings` to update.
     *     @type int[] $contactNotices
     *          The list of contact notices that the caller acknowledges. The notices
     *          required here depend on the values specified in `contact_settings`.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Domains\V1beta1\ContactNotice}
     *     @type bool $validateOnly
     *          Validate the request without actually updating the contact settings.
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
    public function configureContactSettings($registration, $updateMask, array $optionalArgs = [])
    {
        $request = new ConfigureContactSettingsRequest();
        $request->setRegistration($registration);
        $request->setUpdateMask($updateMask);
        if (isset($optionalArgs['contactSettings'])) {
            $request->setContactSettings($optionalArgs['contactSettings']);
        }
        if (isset($optionalArgs['contactNotices'])) {
            $request->setContactNotices($optionalArgs['contactNotices']);
        }
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration' => $request->getRegistration(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ConfigureContactSettings',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Exports a `Registration` that you no longer want to use with
     * Cloud Domains. You can continue to use the domain in
     * [Google Domains](https://domains.google/) until it expires.
     *
     * If the export is successful:
     *
     * * The resource's `state` becomes `EXPORTED`, meaning that it is no longer
     * managed by Cloud Domains
     * * Because individual users can own domains in Google Domains, the calling
     * user becomes the domain's sole owner. Permissions for the domain are
     * subsequently managed in Google Domains.
     * * Without further action, the domain does not renew automatically.
     * The new owner can set up billing in Google Domains to renew the domain
     * if needed.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedName = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $operationResponse = $domainsClient->exportRegistration($formattedName);
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
     *     $operationResponse = $domainsClient->exportRegistration($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'exportRegistration');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the `Registration` to export,
     *                             in the format `projects/&#42;/locations/&#42;/registrations/*`.
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
    public function exportRegistration($name, array $optionalArgs = [])
    {
        $request = new ExportRegistrationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ExportRegistration',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a `Registration` resource.
     *
     * This method only works on resources in one of the following states:
     *
     * * `state` is `EXPORTED` with `expire_time` in the past
     * * `state` is `REGISTRATION_FAILED`
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedName = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $operationResponse = $domainsClient->deleteRegistration($formattedName);
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
     *     $operationResponse = $domainsClient->deleteRegistration($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $domainsClient->resumeOperation($operationName, 'deleteRegistration');
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
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the `Registration` to delete,
     *                             in the format `projects/&#42;/locations/&#42;/registrations/*`.
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
    public function deleteRegistration($name, array $optionalArgs = [])
    {
        $request = new DeleteRegistrationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteRegistration',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets the authorization code of the `Registration` for the purpose of
     * transferring the domain to another registrar.
     *
     * You can call this method only after 60 days have elapsed since the initial
     * domain registration.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedRegistration = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $response = $domainsClient->retrieveAuthorizationCode($formattedRegistration);
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $registration Required. The name of the `Registration` whose authorization code is being retrieved,
     *                             in the format `projects/&#42;/locations/&#42;/registrations/*`.
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
     * @return \Google\Cloud\Domains\V1beta1\AuthorizationCode
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function retrieveAuthorizationCode($registration, array $optionalArgs = [])
    {
        $request = new RetrieveAuthorizationCodeRequest();
        $request->setRegistration($registration);

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration' => $request->getRegistration(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'RetrieveAuthorizationCode',
            AuthorizationCode::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Resets the authorization code of the `Registration` to a new random string.
     *
     * You can call this method only after 60 days have elapsed since the initial
     * domain registration.
     *
     * Sample code:
     * ```
     * $domainsClient = new DomainsClient();
     * try {
     *     $formattedRegistration = $domainsClient->registrationName('[PROJECT]', '[LOCATION]', '[REGISTRATION]');
     *     $response = $domainsClient->resetAuthorizationCode($formattedRegistration);
     * } finally {
     *     $domainsClient->close();
     * }
     * ```
     *
     * @param string $registration Required. The name of the `Registration` whose authorization code is being reset,
     *                             in the format `projects/&#42;/locations/&#42;/registrations/*`.
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
     * @return \Google\Cloud\Domains\V1beta1\AuthorizationCode
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function resetAuthorizationCode($registration, array $optionalArgs = [])
    {
        $request = new ResetAuthorizationCodeRequest();
        $request->setRegistration($registration);

        $requestParams = new RequestParamsHeaderDescriptor([
          'registration' => $request->getRegistration(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ResetAuthorizationCode',
            AuthorizationCode::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
