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
 * https://github.com/google/googleapis/blob/master/google/api/servicecontrol/v1/service_controller.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Api\Servicecontrol\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ServiceControl\V1\CheckRequest;
use Google\Cloud\ServiceControl\V1\CheckResponse;
use Google\Cloud\ServiceControl\V1\Operation;
use Google\Cloud\ServiceControl\V1\ReportRequest;
use Google\Cloud\ServiceControl\V1\ReportResponse;

/**
 * Service Description: [Google Service Control API](https://cloud.google.com/service-control/overview).
 *
 * Lets clients check and report operations against a [managed
 * service](https://cloud.google.com/service-management/reference/rpc/google.api/servicemanagement.v1#google.api.servicemanagement.v1.ManagedService).
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $serviceControllerClient = new ServiceControllerClient();
 * try {
 *     $response = $serviceControllerClient->check();
 * } finally {
 *     $serviceControllerClient->close();
 * }
 * ```
 *
 * @experimental
 */
class ServiceControllerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.api.servicecontrol.v1.ServiceController';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'servicecontrol.googleapis.com';

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
        'https://www.googleapis.com/auth/servicecontrol',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/service_controller_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/service_controller_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/service_controller_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/service_controller_rest_client_config.php',
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
     *           as "<uri>:<port>". Default 'servicecontrol.googleapis.com:443'.
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
     * Checks whether an operation on a service should be allowed to proceed
     * based on the configuration of the service and related policies. It must be
     * called before the operation is executed.
     *
     * If feasible, the client should cache the check results and reuse them for
     * 60 seconds. In case of any server errors, the client should rely on the
     * cached results for much longer time to avoid outage.
     * WARNING: There is general 60s delay for the configuration and policy
     * propagation, therefore callers MUST NOT depend on the `Check` method having
     * the latest policy information.
     *
     * NOTE: the [CheckRequest][google.api.servicecontrol.v1.CheckRequest] has the size limit of 64KB.
     *
     * This method requires the `servicemanagement.services.check` permission
     * on the specified service. For more information, see
     * [Cloud IAM](https://cloud.google.com/iam).
     *
     * Sample code:
     * ```
     * $serviceControllerClient = new ServiceControllerClient();
     * try {
     *     $response = $serviceControllerClient->check();
     * } finally {
     *     $serviceControllerClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $serviceName
     *          The service name as specified in its service configuration. For example,
     *          `"pubsub.googleapis.com"`.
     *
     *          See
     *          [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     *          for the definition of a service name.
     *     @type Operation $operation
     *          The operation to be checked.
     *     @type string $serviceConfigId
     *          Specifies which version of service configuration should be used to process
     *          the request.
     *
     *          If unspecified or no matching version can be found, the
     *          latest one will be used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ServiceControl\V1\CheckResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function check(array $optionalArgs = [])
    {
        $request = new CheckRequest();
        if (isset($optionalArgs['serviceName'])) {
            $request->setServiceName($optionalArgs['serviceName']);
        }
        if (isset($optionalArgs['operation'])) {
            $request->setOperation($optionalArgs['operation']);
        }
        if (isset($optionalArgs['serviceConfigId'])) {
            $request->setServiceConfigId($optionalArgs['serviceConfigId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'service_name' => $request->getServiceName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'Check',
            CheckResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Reports operation results to Google Service Control, such as logs and
     * metrics. It should be called after an operation is completed.
     *
     * If feasible, the client should aggregate reporting data for up to 5
     * seconds to reduce API traffic. Limiting aggregation to 5 seconds is to
     * reduce data loss during client crashes. Clients should carefully choose
     * the aggregation time window to avoid data loss risk more than 0.01%
     * for business and compliance reasons.
     *
     * NOTE: the [ReportRequest][google.api.servicecontrol.v1.ReportRequest] has the size limit (wire-format byte size) of
     * 1MB.
     *
     * This method requires the `servicemanagement.services.report` permission
     * on the specified service. For more information, see
     * [Google Cloud IAM](https://cloud.google.com/iam).
     *
     * Sample code:
     * ```
     * $serviceControllerClient = new ServiceControllerClient();
     * try {
     *     $response = $serviceControllerClient->report();
     * } finally {
     *     $serviceControllerClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $serviceName
     *          The service name as specified in its service configuration. For example,
     *          `"pubsub.googleapis.com"`.
     *
     *          See
     *          [google.api.Service](https://cloud.google.com/service-management/reference/rpc/google.api#google.api.Service)
     *          for the definition of a service name.
     *     @type Operation[] $operations
     *          Operations to be reported.
     *
     *          Typically the service should report one operation per request.
     *          Putting multiple operations into a single request is allowed, but should
     *          be used only when multiple operations are natually available at the time
     *          of the report.
     *
     *          There is no limit on the number of operations in the same ReportRequest,
     *          however the ReportRequest size should be no larger than 1MB. See
     *          [ReportResponse.report_errors][google.api.servicecontrol.v1.ReportResponse.report_errors] for partial failure behavior.
     *     @type string $serviceConfigId
     *          Specifies which version of service config should be used to process the
     *          request.
     *
     *          If unspecified or no matching version can be found, the
     *          latest one will be used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ServiceControl\V1\ReportResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function report(array $optionalArgs = [])
    {
        $request = new ReportRequest();
        if (isset($optionalArgs['serviceName'])) {
            $request->setServiceName($optionalArgs['serviceName']);
        }
        if (isset($optionalArgs['operations'])) {
            $request->setOperations($optionalArgs['operations']);
        }
        if (isset($optionalArgs['serviceConfigId'])) {
            $request->setServiceConfigId($optionalArgs['serviceConfigId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'service_name' => $request->getServiceName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'Report',
            ReportResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
