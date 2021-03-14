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
use Google\Cloud\AppEngine\V1\BatchUpdateIngressRulesRequest;
use Google\Cloud\AppEngine\V1\BatchUpdateIngressRulesResponse;
use Google\Cloud\AppEngine\V1\CreateIngressRuleRequest;
use Google\Cloud\AppEngine\V1\DeleteIngressRuleRequest;
use Google\Cloud\AppEngine\V1\FirewallRule;
use Google\Cloud\AppEngine\V1\GetIngressRuleRequest;
use Google\Cloud\AppEngine\V1\ListIngressRulesRequest;
use Google\Cloud\AppEngine\V1\ListIngressRulesResponse;
use Google\Cloud\AppEngine\V1\UpdateIngressRuleRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Firewall resources are used to define a collection of access control rules
 * for an Application. Each rule is defined with a position which specifies
 * the rule's order in the sequence of rules, an IP range to be matched against
 * requests, and an action to take upon matching requests.
 *
 * Every request is evaluated against the Firewall rules in priority order.
 * Processesing stops at the first rule which matches the request's IP address.
 * A final rule always specifies an action that applies to all remaining
 * IP addresses. The default final rule for a newly-created application will be
 * set to "allow" if not otherwise specified by the user.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $firewallClient = new FirewallClient();
 * try {
 *     // Iterate over pages of elements
 *     $pagedResponse = $firewallClient->listIngressRules();
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
 *     $pagedResponse = $firewallClient->listIngressRules();
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $firewallClient->close();
 * }
 * ```
 *
 * @experimental
 */
class FirewallGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.appengine.v1.Firewall';

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
            'clientConfig' => __DIR__.'/../resources/firewall_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/firewall_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/firewall_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/firewall_rest_client_config.php',
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
     * Lists the firewall rules of an application.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $firewallClient->listIngressRules();
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
     *     $pagedResponse = $firewallClient->listIngressRules();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Name of the Firewall collection to retrieve.
     *          Example: `apps/myapp/firewall/ingressRules`.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type string $matchingAddress
     *          A valid IP Address. If set, only rules matching this address will be
     *          returned. The first returned rule will be the rule that fires on requests
     *          from this IP.
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
    public function listIngressRules(array $optionalArgs = [])
    {
        $request = new ListIngressRulesRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['matchingAddress'])) {
            $request->setMatchingAddress($optionalArgs['matchingAddress']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListIngressRules',
            $optionalArgs,
            ListIngressRulesResponse::class,
            $request
        );
    }

    /**
     * Replaces the entire firewall ruleset in one bulk operation. This overrides
     * and replaces the rules of an existing firewall with the new rules.
     *
     * If the final rule does not match traffic with the '*' wildcard IP range,
     * then an "allow all" rule is explicitly added to the end of the list.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     $response = $firewallClient->batchUpdateIngressRules();
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the Firewall collection to set.
     *          Example: `apps/myapp/firewall/ingressRules`.
     *     @type FirewallRule[] $ingressRules
     *          A list of FirewallRules to replace the existing set.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\BatchUpdateIngressRulesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchUpdateIngressRules(array $optionalArgs = [])
    {
        $request = new BatchUpdateIngressRulesRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['ingressRules'])) {
            $request->setIngressRules($optionalArgs['ingressRules']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'BatchUpdateIngressRules',
            BatchUpdateIngressRulesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a firewall rule for the application.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     $response = $firewallClient->createIngressRule();
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Name of the parent Firewall collection in which to create a new rule.
     *          Example: `apps/myapp/firewall/ingressRules`.
     *     @type FirewallRule $rule
     *          A FirewallRule containing the new resource.
     *
     *          The user may optionally provide a position at which the new rule will be
     *          placed. The positions define a sequential list starting at 1. If a rule
     *          already exists at the given position, rules greater than the provided
     *          position will be moved forward by one.
     *
     *          If no position is provided, the server will place the rule as the second to
     *          last rule in the sequence before the required default allow-all or deny-all
     *          rule.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\FirewallRule
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createIngressRule(array $optionalArgs = [])
    {
        $request = new CreateIngressRuleRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['rule'])) {
            $request->setRule($optionalArgs['rule']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateIngressRule',
            FirewallRule::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the specified firewall rule.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     $response = $firewallClient->getIngressRule();
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the Firewall resource to retrieve.
     *          Example: `apps/myapp/firewall/ingressRules/100`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\FirewallRule
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getIngressRule(array $optionalArgs = [])
    {
        $request = new GetIngressRuleRequest();
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
            'GetIngressRule',
            FirewallRule::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the specified firewall rule.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     $response = $firewallClient->updateIngressRule();
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the Firewall resource to update.
     *          Example: `apps/myapp/firewall/ingressRules/100`.
     *     @type FirewallRule $rule
     *          A FirewallRule containing the updated resource
     *     @type FieldMask $updateMask
     *          Standard field mask for the set of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AppEngine\V1\FirewallRule
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateIngressRule(array $optionalArgs = [])
    {
        $request = new UpdateIngressRuleRequest();
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
        }
        if (isset($optionalArgs['rule'])) {
            $request->setRule($optionalArgs['rule']);
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
            'UpdateIngressRule',
            FirewallRule::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes the specified firewall rule.
     *
     * Sample code:
     * ```
     * $firewallClient = new FirewallClient();
     * try {
     *     $firewallClient->deleteIngressRule();
     * } finally {
     *     $firewallClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $name
     *          Name of the Firewall resource to delete.
     *          Example: `apps/myapp/firewall/ingressRules/100`.
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
    public function deleteIngressRule(array $optionalArgs = [])
    {
        $request = new DeleteIngressRuleRequest();
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
            'DeleteIngressRule',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
