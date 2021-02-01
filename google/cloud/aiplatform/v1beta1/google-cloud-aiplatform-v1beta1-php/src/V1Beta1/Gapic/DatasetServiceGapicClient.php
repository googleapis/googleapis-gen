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
 * https://github.com/google/googleapis/blob/master/google/cloud/aiplatform/v1beta1/dataset_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Aiplatform\V1Beta1\Gapic;

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
use Google\Cloud\Aiplatform\V1beta1\AnnotationSpec;
use Google\Cloud\Aiplatform\V1beta1\CreateDatasetRequest;
use Google\Cloud\Aiplatform\V1beta1\Dataset;
use Google\Cloud\Aiplatform\V1beta1\DeleteDatasetRequest;
use Google\Cloud\Aiplatform\V1beta1\ExportDataConfig;
use Google\Cloud\Aiplatform\V1beta1\ExportDataRequest;
use Google\Cloud\Aiplatform\V1beta1\GetAnnotationSpecRequest;
use Google\Cloud\Aiplatform\V1beta1\GetDatasetRequest;
use Google\Cloud\Aiplatform\V1beta1\ImportDataConfig;
use Google\Cloud\Aiplatform\V1beta1\ImportDataRequest;
use Google\Cloud\Aiplatform\V1beta1\ListAnnotationsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListAnnotationsResponse;
use Google\Cloud\Aiplatform\V1beta1\ListDataItemsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListDataItemsResponse;
use Google\Cloud\Aiplatform\V1beta1\ListDatasetsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListDatasetsResponse;
use Google\Cloud\Aiplatform\V1beta1\UpdateDatasetRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $datasetServiceClient = new DatasetServiceClient();
 * try {
 *     $formattedParent = $datasetServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $dataset = new Dataset();
 *     $operationResponse = $datasetServiceClient->createDataset($formattedParent, $dataset);
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
 *     $operationResponse = $datasetServiceClient->createDataset($formattedParent, $dataset);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $datasetServiceClient->resumeOperation($operationName, 'createDataset');
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
 *     $datasetServiceClient->close();
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
class DatasetServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1beta1.DatasetService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

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
    private static $annotationSpecNameTemplate;
    private static $dataItemNameTemplate;
    private static $datasetNameTemplate;
    private static $locationNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/dataset_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/dataset_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/dataset_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/dataset_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAnnotationSpecNameTemplate()
    {
        if (null == self::$annotationSpecNameTemplate) {
            self::$annotationSpecNameTemplate = new PathTemplate('projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}');
        }

        return self::$annotationSpecNameTemplate;
    }

    private static function getDataItemNameTemplate()
    {
        if (null == self::$dataItemNameTemplate) {
            self::$dataItemNameTemplate = new PathTemplate('projects/{project}/locations/{location}/datasets/{dataset}/dataItems/{data_item}');
        }

        return self::$dataItemNameTemplate;
    }

    private static function getDatasetNameTemplate()
    {
        if (null == self::$datasetNameTemplate) {
            self::$datasetNameTemplate = new PathTemplate('projects/{project}/locations/{location}/datasets/{dataset}');
        }

        return self::$datasetNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'annotationSpec' => self::getAnnotationSpecNameTemplate(),
                'dataItem' => self::getDataItemNameTemplate(),
                'dataset' => self::getDatasetNameTemplate(),
                'location' => self::getLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a annotation_spec resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     * @param string $annotationSpec
     *
     * @return string The formatted annotation_spec resource.
     * @experimental
     */
    public static function annotationSpecName($project, $location, $dataset, $annotationSpec)
    {
        return self::getAnnotationSpecNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
            'annotation_spec' => $annotationSpec,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a data_item resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     * @param string $dataItem
     *
     * @return string The formatted data_item resource.
     * @experimental
     */
    public static function dataItemName($project, $location, $dataset, $dataItem)
    {
        return self::getDataItemNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
            'data_item' => $dataItem,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a dataset resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     *
     * @return string The formatted dataset resource.
     * @experimental
     */
    public static function datasetName($project, $location, $dataset)
    {
        return self::getDatasetNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
        ]);
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
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - annotationSpec: projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}
     * - dataItem: projects/{project}/locations/{location}/datasets/{dataset}/dataItems/{data_item}
     * - dataset: projects/{project}/locations/{location}/datasets/{dataset}
     * - location: projects/{project}/locations/{location}.
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
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
     * Creates a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedParent = $datasetServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $dataset = new Dataset();
     *     $operationResponse = $datasetServiceClient->createDataset($formattedParent, $dataset);
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
     *     $operationResponse = $datasetServiceClient->createDataset($formattedParent, $dataset);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datasetServiceClient->resumeOperation($operationName, 'createDataset');
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
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The resource name of the Location to create the Dataset in.
     *                              Format: `projects/{project}/locations/{location}`
     * @param Dataset $dataset      Required. The Dataset to create.
     * @param array   $optionalArgs {
     *                              Optional.
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
    public function createDataset($parent, $dataset, array $optionalArgs = [])
    {
        $request = new CreateDatasetRequest();
        $request->setParent($parent);
        $request->setDataset($dataset);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateDataset',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedName = $datasetServiceClient->datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
     *     $response = $datasetServiceClient->getDataset($formattedName);
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Dataset resource.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type FieldMask $readMask
     *          Mask specifying which fields to read.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\Dataset
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDataset($name, array $optionalArgs = [])
    {
        $request = new GetDatasetRequest();
        $request->setName($name);
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDataset',
            Dataset::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $dataset = new Dataset();
     *     $updateMask = new FieldMask();
     *     $response = $datasetServiceClient->updateDataset($dataset, $updateMask);
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param Dataset   $dataset    Required. The Dataset which replaces the resource on the server.
     * @param FieldMask $updateMask Required. The update mask applies to the resource.
     *                              For the `FieldMask` definition, see
     *                              [FieldMask](https://tinyurl.com/protobufs/google.protobuf#fieldmask).
     *                              Updatable fields:
     *
     *   * `display_name`
     *   * `description`
     *   * `labels`
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
     * @return \Google\Cloud\Aiplatform\V1beta1\Dataset
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateDataset($dataset, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateDatasetRequest();
        $request->setDataset($dataset);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'dataset.name' => $request->getDataset()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateDataset',
            Dataset::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists Datasets in a Location.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedParent = $datasetServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $datasetServiceClient->listDatasets($formattedParent);
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
     *     $pagedResponse = $datasetServiceClient->listDatasets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The name of the Dataset's parent resource.
     *                             Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          An expression for filtering the results of the request. For field names
     *          both snake_case and camelCase are supported.
     *
     *            * `display_name`: supports = and !=
     *            * `metadata_schema_uri`: supports = and !=
     *            * `labels` supports general map functions that is:
     *              * `labels.key=value` - key:value equality
     *              * `labels.key:* or labels:key - key existence
     *              * A key including a space must be quoted. `labels."a key"`.
     *
     *          Some examples:
     *            * `displayName="myDisplayName"`
     *            * `labels.myKey="myValue"`
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type FieldMask $readMask
     *          Mask specifying which fields to read.
     *     @type string $orderBy
     *          A comma-separated list of fields to order by, sorted in ascending order.
     *          Use "desc" after a field name for descending.
     *          Supported fields:
     *            * `display_name`
     *            * `create_time`
     *            * `update_time`
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
    public function listDatasets($parent, array $optionalArgs = [])
    {
        $request = new ListDatasetsRequest();
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
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
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
            'ListDatasets',
            $optionalArgs,
            ListDatasetsResponse::class,
            $request
        );
    }

    /**
     * Deletes a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedName = $datasetServiceClient->datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
     *     $operationResponse = $datasetServiceClient->deleteDataset($formattedName);
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
     *     $operationResponse = $datasetServiceClient->deleteDataset($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datasetServiceClient->resumeOperation($operationName, 'deleteDataset');
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
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the Dataset to delete.
     *                             Format:
     *                             `projects/{project}/locations/{location}/datasets/{dataset}`
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
    public function deleteDataset($name, array $optionalArgs = [])
    {
        $request = new DeleteDatasetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteDataset',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Imports data into a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedName = $datasetServiceClient->datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
     *     $importConfigs = [];
     *     $operationResponse = $datasetServiceClient->importData($formattedName, $importConfigs);
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
     *     $operationResponse = $datasetServiceClient->importData($formattedName, $importConfigs);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datasetServiceClient->resumeOperation($operationName, 'importData');
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
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string             $name          Required. The name of the Dataset resource.
     *                                          Format:
     *                                          `projects/{project}/locations/{location}/datasets/{dataset}`
     * @param ImportDataConfig[] $importConfigs Required. The desired input locations. The contents of all input locations will be
     *                                          imported in one batch.
     * @param array              $optionalArgs  {
     *                                          Optional.
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
    public function importData($name, $importConfigs, array $optionalArgs = [])
    {
        $request = new ImportDataRequest();
        $request->setName($name);
        $request->setImportConfigs($importConfigs);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ImportData',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Exports data from a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedName = $datasetServiceClient->datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
     *     $exportConfig = new ExportDataConfig();
     *     $operationResponse = $datasetServiceClient->exportData($formattedName, $exportConfig);
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
     *     $operationResponse = $datasetServiceClient->exportData($formattedName, $exportConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datasetServiceClient->resumeOperation($operationName, 'exportData');
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
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string           $name         Required. The name of the Dataset resource.
     *                                       Format:
     *                                       `projects/{project}/locations/{location}/datasets/{dataset}`
     * @param ExportDataConfig $exportConfig Required. The desired output location.
     * @param array            $optionalArgs {
     *                                       Optional.
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
    public function exportData($name, $exportConfig, array $optionalArgs = [])
    {
        $request = new ExportDataRequest();
        $request->setName($name);
        $request->setExportConfig($exportConfig);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ExportData',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists DataItems in a Dataset.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedParent = $datasetServiceClient->datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $datasetServiceClient->listDataItems($formattedParent);
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
     *     $pagedResponse = $datasetServiceClient->listDataItems($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Dataset to list DataItems from.
     *                             Format:
     *                             `projects/{project}/locations/{location}/datasets/{dataset}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type FieldMask $readMask
     *          Mask specifying which fields to read.
     *     @type string $orderBy
     *          A comma-separated list of fields to order by, sorted in ascending order.
     *          Use "desc" after a field name for descending.
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
    public function listDataItems($parent, array $optionalArgs = [])
    {
        $request = new ListDataItemsRequest();
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
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
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
            'ListDataItems',
            $optionalArgs,
            ListDataItemsResponse::class,
            $request
        );
    }

    /**
     * Gets an AnnotationSpec.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedName = $datasetServiceClient->annotationSpecName('[PROJECT]', '[LOCATION]', '[DATASET]', '[ANNOTATION_SPEC]');
     *     $response = $datasetServiceClient->getAnnotationSpec($formattedName);
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the AnnotationSpec resource.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}`
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type FieldMask $readMask
     *          Mask specifying which fields to read.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\AnnotationSpec
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getAnnotationSpec($name, array $optionalArgs = [])
    {
        $request = new GetAnnotationSpecRequest();
        $request->setName($name);
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAnnotationSpec',
            AnnotationSpec::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists Annotations belongs to a dataitem.
     *
     * Sample code:
     * ```
     * $datasetServiceClient = new DatasetServiceClient();
     * try {
     *     $formattedParent = $datasetServiceClient->dataItemName('[PROJECT]', '[LOCATION]', '[DATASET]', '[DATA_ITEM]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $datasetServiceClient->listAnnotations($formattedParent);
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
     *     $pagedResponse = $datasetServiceClient->listAnnotations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $datasetServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The resource name of the DataItem to list Annotations from.
     *                       Format:
     *
     * `projects/{project}/locations/{location}/datasets/{dataset}/dataItems/{data_item}`
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type FieldMask $readMask
     *          Mask specifying which fields to read.
     *     @type string $orderBy
     *          A comma-separated list of fields to order by, sorted in ascending order.
     *          Use "desc" after a field name for descending.
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
    public function listAnnotations($parent, array $optionalArgs = [])
    {
        $request = new ListAnnotationsRequest();
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
        if (isset($optionalArgs['readMask'])) {
            $request->setReadMask($optionalArgs['readMask']);
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
            'ListAnnotations',
            $optionalArgs,
            ListAnnotationsResponse::class,
            $request
        );
    }
}
