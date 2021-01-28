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
 * https://github.com/google/googleapis/blob/master/google/monitoring/v3/service_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Monitoring\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Monitoring\V3\CreateServiceLevelObjectiveRequest;
use Google\Cloud\Monitoring\V3\CreateServiceRequest;
use Google\Cloud\Monitoring\V3\DeleteServiceLevelObjectiveRequest;
use Google\Cloud\Monitoring\V3\DeleteServiceRequest;
use Google\Cloud\Monitoring\V3\GetServiceLevelObjectiveRequest;
use Google\Cloud\Monitoring\V3\GetServiceRequest;
use Google\Cloud\Monitoring\V3\ListServiceLevelObjectivesRequest;
use Google\Cloud\Monitoring\V3\ListServiceLevelObjectivesResponse;
use Google\Cloud\Monitoring\V3\ListServicesRequest;
use Google\Cloud\Monitoring\V3\ListServicesResponse;
use Google\Cloud\Monitoring\V3\Service;
use Google\Cloud\Monitoring\V3\ServiceLevelObjective;
use Google\Cloud\Monitoring\V3\ServiceLevelObjective\View;
use Google\Cloud\Monitoring\V3\UpdateServiceLevelObjectiveRequest;
use Google\Cloud\Monitoring\V3\UpdateServiceRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: The Cloud Monitoring Service-Oriented Monitoring API has endpoints for
 * managing and querying aspects of a workspace's services. These include the
 * `Service`'s monitored resources, its Service-Level Objectives, and a taxonomy
 * of categorized Health Metrics.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
 * try {
 *     $parent = '';
 *     $service = new Service();
 *     $response = $serviceMonitoringServiceClient->createService($parent, $service);
 * } finally {
 *     $serviceMonitoringServiceClient->close();
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
class ServiceMonitoringServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.monitoring.v3.ServiceMonitoringService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'monitoring.googleapis.com';

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
        'https://www.googleapis.com/auth/monitoring',
        'https://www.googleapis.com/auth/monitoring.read',
        'https://www.googleapis.com/auth/monitoring.write',
    ];
    private static $folderServiceNameTemplate;
    private static $folderServiceServiceLevelObjectiveNameTemplate;
    private static $organizationServiceNameTemplate;
    private static $organizationServiceServiceLevelObjectiveNameTemplate;
    private static $projectServiceNameTemplate;
    private static $projectServiceServiceLevelObjectiveNameTemplate;
    private static $serviceNameTemplate;
    private static $serviceLevelObjectiveNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/service_monitoring_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/service_monitoring_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/service_monitoring_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/service_monitoring_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFolderServiceNameTemplate()
    {
        if (null == self::$folderServiceNameTemplate) {
            self::$folderServiceNameTemplate = new PathTemplate('folders/{folder}/services/{service}');
        }

        return self::$folderServiceNameTemplate;
    }

    private static function getFolderServiceServiceLevelObjectiveNameTemplate()
    {
        if (null == self::$folderServiceServiceLevelObjectiveNameTemplate) {
            self::$folderServiceServiceLevelObjectiveNameTemplate = new PathTemplate('folders/{folder}/services/{service}/serviceLevelObjectives/{service_level_objective}');
        }

        return self::$folderServiceServiceLevelObjectiveNameTemplate;
    }

    private static function getOrganizationServiceNameTemplate()
    {
        if (null == self::$organizationServiceNameTemplate) {
            self::$organizationServiceNameTemplate = new PathTemplate('organizations/{organization}/services/{service}');
        }

        return self::$organizationServiceNameTemplate;
    }

    private static function getOrganizationServiceServiceLevelObjectiveNameTemplate()
    {
        if (null == self::$organizationServiceServiceLevelObjectiveNameTemplate) {
            self::$organizationServiceServiceLevelObjectiveNameTemplate = new PathTemplate('organizations/{organization}/services/{service}/serviceLevelObjectives/{service_level_objective}');
        }

        return self::$organizationServiceServiceLevelObjectiveNameTemplate;
    }

    private static function getProjectServiceNameTemplate()
    {
        if (null == self::$projectServiceNameTemplate) {
            self::$projectServiceNameTemplate = new PathTemplate('projects/{project}/services/{service}');
        }

        return self::$projectServiceNameTemplate;
    }

    private static function getProjectServiceServiceLevelObjectiveNameTemplate()
    {
        if (null == self::$projectServiceServiceLevelObjectiveNameTemplate) {
            self::$projectServiceServiceLevelObjectiveNameTemplate = new PathTemplate('projects/{project}/services/{service}/serviceLevelObjectives/{service_level_objective}');
        }

        return self::$projectServiceServiceLevelObjectiveNameTemplate;
    }

    private static function getServiceNameTemplate()
    {
        if (null == self::$serviceNameTemplate) {
            self::$serviceNameTemplate = new PathTemplate('projects/{project}/services/{service}');
        }

        return self::$serviceNameTemplate;
    }

    private static function getServiceLevelObjectiveNameTemplate()
    {
        if (null == self::$serviceLevelObjectiveNameTemplate) {
            self::$serviceLevelObjectiveNameTemplate = new PathTemplate('projects/{project}/services/{service}/serviceLevelObjectives/{service_level_objective}');
        }

        return self::$serviceLevelObjectiveNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'folderService' => self::getFolderServiceNameTemplate(),
                'folderServiceServiceLevelObjective' => self::getFolderServiceServiceLevelObjectiveNameTemplate(),
                'organizationService' => self::getOrganizationServiceNameTemplate(),
                'organizationServiceServiceLevelObjective' => self::getOrganizationServiceServiceLevelObjectiveNameTemplate(),
                'projectService' => self::getProjectServiceNameTemplate(),
                'projectServiceServiceLevelObjective' => self::getProjectServiceServiceLevelObjectiveNameTemplate(),
                'service' => self::getServiceNameTemplate(),
                'serviceLevelObjective' => self::getServiceLevelObjectiveNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a folder_service resource.
     *
     * @param string $folder
     * @param string $service
     *
     * @return string The formatted folder_service resource.
     * @experimental
     */
    public static function folderServiceName($folder, $service)
    {
        return self::getFolderServiceNameTemplate()->render([
            'folder' => $folder,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a folder_service_service_level_objective resource.
     *
     * @param string $folder
     * @param string $service
     * @param string $serviceLevelObjective
     *
     * @return string The formatted folder_service_service_level_objective resource.
     * @experimental
     */
    public static function folderServiceServiceLevelObjectiveName($folder, $service, $serviceLevelObjective)
    {
        return self::getFolderServiceServiceLevelObjectiveNameTemplate()->render([
            'folder' => $folder,
            'service' => $service,
            'service_level_objective' => $serviceLevelObjective,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a organization_service resource.
     *
     * @param string $organization
     * @param string $service
     *
     * @return string The formatted organization_service resource.
     * @experimental
     */
    public static function organizationServiceName($organization, $service)
    {
        return self::getOrganizationServiceNameTemplate()->render([
            'organization' => $organization,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a organization_service_service_level_objective resource.
     *
     * @param string $organization
     * @param string $service
     * @param string $serviceLevelObjective
     *
     * @return string The formatted organization_service_service_level_objective resource.
     * @experimental
     */
    public static function organizationServiceServiceLevelObjectiveName($organization, $service, $serviceLevelObjective)
    {
        return self::getOrganizationServiceServiceLevelObjectiveNameTemplate()->render([
            'organization' => $organization,
            'service' => $service,
            'service_level_objective' => $serviceLevelObjective,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_service resource.
     *
     * @param string $project
     * @param string $service
     *
     * @return string The formatted project_service resource.
     * @experimental
     */
    public static function projectServiceName($project, $service)
    {
        return self::getProjectServiceNameTemplate()->render([
            'project' => $project,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project_service_service_level_objective resource.
     *
     * @param string $project
     * @param string $service
     * @param string $serviceLevelObjective
     *
     * @return string The formatted project_service_service_level_objective resource.
     * @experimental
     */
    public static function projectServiceServiceLevelObjectiveName($project, $service, $serviceLevelObjective)
    {
        return self::getProjectServiceServiceLevelObjectiveNameTemplate()->render([
            'project' => $project,
            'service' => $service,
            'service_level_objective' => $serviceLevelObjective,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a service resource.
     *
     * @param string $project
     * @param string $service
     *
     * @return string The formatted service resource.
     * @experimental
     */
    public static function serviceName($project, $service)
    {
        return self::getServiceNameTemplate()->render([
            'project' => $project,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a service_level_objective resource.
     *
     * @param string $project
     * @param string $service
     * @param string $serviceLevelObjective
     *
     * @return string The formatted service_level_objective resource.
     * @experimental
     */
    public static function serviceLevelObjectiveName($project, $service, $serviceLevelObjective)
    {
        return self::getServiceLevelObjectiveNameTemplate()->render([
            'project' => $project,
            'service' => $service,
            'service_level_objective' => $serviceLevelObjective,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderService: folders/{folder}/services/{service}
     * - folderServiceServiceLevelObjective: folders/{folder}/services/{service}/serviceLevelObjectives/{service_level_objective}
     * - organizationService: organizations/{organization}/services/{service}
     * - organizationServiceServiceLevelObjective: organizations/{organization}/services/{service}/serviceLevelObjectives/{service_level_objective}
     * - projectService: projects/{project}/services/{service}
     * - projectServiceServiceLevelObjective: projects/{project}/services/{service}/serviceLevelObjectives/{service_level_objective}
     * - service: projects/{project}/services/{service}
     * - serviceLevelObjective: projects/{project}/services/{service}/serviceLevelObjectives/{service_level_objective}.
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
     *           as "<uri>:<port>". Default 'monitoring.googleapis.com:443'.
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
     * Create a `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $parent = '';
     *     $service = new Service();
     *     $response = $serviceMonitoringServiceClient->createService($parent, $service);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. Resource name of the parent workspace. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]
     * @param Service $service      Required. The `Service` to create.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type string $serviceId
     *          Optional. The Service id to use for this Service. If omitted, an id will be
     *          generated instead. Must match the pattern `[a-z0-9\-]+`
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\Service
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createService($parent, $service, array $optionalArgs = [])
    {
        $request = new CreateServiceRequest();
        $request->setParent($parent);
        $request->setService($service);
        if (isset($optionalArgs['serviceId'])) {
            $request->setServiceId($optionalArgs['serviceId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateService',
            Service::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Get the named `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $name = '';
     *     $response = $serviceMonitoringServiceClient->getService($name);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Resource name of the `Service`. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
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
     * @return \Google\Cloud\Monitoring\V3\Service
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getService($name, array $optionalArgs = [])
    {
        $request = new GetServiceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetService',
            Service::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * List `Service`s for this workspace.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $serviceMonitoringServiceClient->listServices($parent);
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
     *     $pagedResponse = $serviceMonitoringServiceClient->listServices($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. Resource name of the parent containing the listed services, either a
     *                       project or a Monitoring Workspace. The formats are:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]
     *     workspaces/[HOST_PROJECT_ID_OR_NUMBER]
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $filter
     *          A filter specifying what `Service`s to return. The filter currently
     *          supports the following fields:
     *
     *              - `identifier_case`
     *              - `app_engine.module_id`
     *              - `cloud_endpoints.service`
     *              - `cluster_istio.location`
     *              - `cluster_istio.cluster_name`
     *              - `cluster_istio.service_namespace`
     *              - `cluster_istio.service_name`
     *
     *          `identifier_case` refers to which option in the identifier oneof is
     *          populated. For example, the filter `identifier_case = "CUSTOM"` would match
     *          all services with a value for the `custom` field. Valid options are
     *          "CUSTOM", "APP_ENGINE", "CLOUD_ENDPOINTS", and "CLUSTER_ISTIO".
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
    public function listServices($parent, array $optionalArgs = [])
    {
        $request = new ListServicesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
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
            'ListServices',
            $optionalArgs,
            ListServicesResponse::class,
            $request
        );
    }

    /**
     * Update this `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $service = new Service();
     *     $response = $serviceMonitoringServiceClient->updateService($service);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param Service $service      Required. The `Service` to draw updates from.
     *                              The given `name` specifies the resource to update.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type FieldMask $updateMask
     *          A set of field paths defining which fields to use for the update.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\Service
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateService($service, array $optionalArgs = [])
    {
        $request = new UpdateServiceRequest();
        $request->setService($service);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'service.name' => $request->getService()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateService',
            Service::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Soft delete this `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $name = '';
     *     $serviceMonitoringServiceClient->deleteService($name);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Resource name of the `Service` to delete. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
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
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteService($name, array $optionalArgs = [])
    {
        $request = new DeleteServiceRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteService',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Create a `ServiceLevelObjective` for the given `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $parent = '';
     *     $serviceLevelObjective = new ServiceLevelObjective();
     *     $response = $serviceMonitoringServiceClient->createServiceLevelObjective($parent, $serviceLevelObjective);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. Resource name of the parent `Service`. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
     * @param ServiceLevelObjective $serviceLevelObjective Required. The `ServiceLevelObjective` to create.
     *                                                     The provided `name` will be respected if no `ServiceLevelObjective` exists
     *                                                     with this name.
     * @param array                 $optionalArgs          {
     *                                                     Optional.
     *
     *     @type string $serviceLevelObjectiveId
     *          Optional. The ServiceLevelObjective id to use for this
     *          ServiceLevelObjective. If omitted, an id will be generated instead. Must
     *          match the pattern `[a-z0-9\-]+`
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\ServiceLevelObjective
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createServiceLevelObjective($parent, $serviceLevelObjective, array $optionalArgs = [])
    {
        $request = new CreateServiceLevelObjectiveRequest();
        $request->setParent($parent);
        $request->setServiceLevelObjective($serviceLevelObjective);
        if (isset($optionalArgs['serviceLevelObjectiveId'])) {
            $request->setServiceLevelObjectiveId($optionalArgs['serviceLevelObjectiveId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateServiceLevelObjective',
            ServiceLevelObjective::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Get a `ServiceLevelObjective` by name.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $name = '';
     *     $response = $serviceMonitoringServiceClient->getServiceLevelObjective($name);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Resource name of the `ServiceLevelObjective` to get. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]/serviceLevelObjectives/[SLO_NAME]
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $view
     *          View of the `ServiceLevelObjective` to return. If `DEFAULT`, return the
     *          `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     *          `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     *          `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Monitoring\V3\ServiceLevelObjective\View}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\ServiceLevelObjective
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getServiceLevelObjective($name, array $optionalArgs = [])
    {
        $request = new GetServiceLevelObjectiveRequest();
        $request->setName($name);
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
            'GetServiceLevelObjective',
            ServiceLevelObjective::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * List the `ServiceLevelObjective`s for the given `Service`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $parent = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $serviceMonitoringServiceClient->listServiceLevelObjectives($parent);
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
     *     $pagedResponse = $serviceMonitoringServiceClient->listServiceLevelObjectives($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. Resource name of the parent containing the listed SLOs, either a
     *                       project or a Monitoring Workspace. The formats are:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
     *     workspaces/[HOST_PROJECT_ID_OR_NUMBER]/services/-
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $filter
     *          A filter specifying what `ServiceLevelObjective`s to return.
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
     *          View of the `ServiceLevelObjective`s to return. If `DEFAULT`, return each
     *          `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     *          `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     *          `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Monitoring\V3\ServiceLevelObjective\View}
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
    public function listServiceLevelObjectives($parent, array $optionalArgs = [])
    {
        $request = new ListServiceLevelObjectivesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListServiceLevelObjectives',
            $optionalArgs,
            ListServiceLevelObjectivesResponse::class,
            $request
        );
    }

    /**
     * Update the given `ServiceLevelObjective`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $serviceLevelObjective = new ServiceLevelObjective();
     *     $response = $serviceMonitoringServiceClient->updateServiceLevelObjective($serviceLevelObjective);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param ServiceLevelObjective $serviceLevelObjective Required. The `ServiceLevelObjective` to draw updates from.
     *                                                     The given `name` specifies the resource to update.
     * @param array                 $optionalArgs          {
     *                                                     Optional.
     *
     *     @type FieldMask $updateMask
     *          A set of field paths defining which fields to use for the update.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\ServiceLevelObjective
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateServiceLevelObjective($serviceLevelObjective, array $optionalArgs = [])
    {
        $request = new UpdateServiceLevelObjectiveRequest();
        $request->setServiceLevelObjective($serviceLevelObjective);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'service_level_objective.name' => $request->getServiceLevelObjective()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateServiceLevelObjective',
            ServiceLevelObjective::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Delete the given `ServiceLevelObjective`.
     *
     * Sample code:
     * ```
     * $serviceMonitoringServiceClient = new ServiceMonitoringServiceClient();
     * try {
     *     $name = '';
     *     $serviceMonitoringServiceClient->deleteServiceLevelObjective($name);
     * } finally {
     *     $serviceMonitoringServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Resource name of the `ServiceLevelObjective` to delete. The format is:
     *
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]/serviceLevelObjectives/[SLO_NAME]
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
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteServiceLevelObjective($name, array $optionalArgs = [])
    {
        $request = new DeleteServiceLevelObjectiveRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteServiceLevelObjective',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
