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
 * https://github.com/google/googleapis/blob/master/google/cloud/datalabeling/v1beta1/data_labeling_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Datalabeling\V1beta1\Gapic;

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
use Google\Cloud\DataLabeling\V1beta1\AnnotatedDataset;
use Google\Cloud\DataLabeling\V1beta1\AnnotationSpecSet;
use Google\Cloud\DataLabeling\V1beta1\BoundingPolyConfig;
use Google\Cloud\DataLabeling\V1beta1\CreateAnnotationSpecSetRequest;
use Google\Cloud\DataLabeling\V1beta1\CreateDatasetRequest;
use Google\Cloud\DataLabeling\V1beta1\CreateEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\CreateInstructionRequest;
use Google\Cloud\DataLabeling\V1beta1\DataItem;
use Google\Cloud\DataLabeling\V1beta1\Dataset;
use Google\Cloud\DataLabeling\V1beta1\DeleteAnnotatedDatasetRequest;
use Google\Cloud\DataLabeling\V1beta1\DeleteAnnotationSpecSetRequest;
use Google\Cloud\DataLabeling\V1beta1\DeleteDatasetRequest;
use Google\Cloud\DataLabeling\V1beta1\DeleteEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\DeleteInstructionRequest;
use Google\Cloud\DataLabeling\V1beta1\Evaluation;
use Google\Cloud\DataLabeling\V1beta1\EvaluationJob;
use Google\Cloud\DataLabeling\V1beta1\EventConfig;
use Google\Cloud\DataLabeling\V1beta1\Example;
use Google\Cloud\DataLabeling\V1beta1\ExportDataRequest;
use Google\Cloud\DataLabeling\V1beta1\GetAnnotatedDatasetRequest;
use Google\Cloud\DataLabeling\V1beta1\GetAnnotationSpecSetRequest;
use Google\Cloud\DataLabeling\V1beta1\GetDataItemRequest;
use Google\Cloud\DataLabeling\V1beta1\GetDatasetRequest;
use Google\Cloud\DataLabeling\V1beta1\GetEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\GetEvaluationRequest;
use Google\Cloud\DataLabeling\V1beta1\GetExampleRequest;
use Google\Cloud\DataLabeling\V1beta1\GetInstructionRequest;
use Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig;
use Google\Cloud\DataLabeling\V1beta1\ImageClassificationConfig;
use Google\Cloud\DataLabeling\V1beta1\ImportDataRequest;
use Google\Cloud\DataLabeling\V1beta1\InputConfig;
use Google\Cloud\DataLabeling\V1beta1\Instruction;
use Google\Cloud\DataLabeling\V1beta1\LabelImageRequest;
use Google\Cloud\DataLabeling\V1beta1\LabelImageRequest\Feature;
use Google\Cloud\DataLabeling\V1beta1\LabelTextRequest;
use Google\Cloud\DataLabeling\V1beta1\LabelVideoRequest;
use Google\Cloud\DataLabeling\V1beta1\ListAnnotatedDatasetsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListAnnotatedDatasetsResponse;
use Google\Cloud\DataLabeling\V1beta1\ListAnnotationSpecSetsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListAnnotationSpecSetsResponse;
use Google\Cloud\DataLabeling\V1beta1\ListDataItemsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListDataItemsResponse;
use Google\Cloud\DataLabeling\V1beta1\ListDatasetsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListDatasetsResponse;
use Google\Cloud\DataLabeling\V1beta1\ListEvaluationJobsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListEvaluationJobsResponse;
use Google\Cloud\DataLabeling\V1beta1\ListExamplesRequest;
use Google\Cloud\DataLabeling\V1beta1\ListExamplesResponse;
use Google\Cloud\DataLabeling\V1beta1\ListInstructionsRequest;
use Google\Cloud\DataLabeling\V1beta1\ListInstructionsResponse;
use Google\Cloud\DataLabeling\V1beta1\ObjectDetectionConfig;
use Google\Cloud\DataLabeling\V1beta1\ObjectTrackingConfig;
use Google\Cloud\DataLabeling\V1beta1\OutputConfig;
use Google\Cloud\DataLabeling\V1beta1\PauseEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\PolylineConfig;
use Google\Cloud\DataLabeling\V1beta1\ResumeEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\SearchEvaluationsRequest;
use Google\Cloud\DataLabeling\V1beta1\SearchEvaluationsResponse;
use Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsRequest;
use Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse;
use Google\Cloud\DataLabeling\V1beta1\SegmentationConfig;
use Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig;
use Google\Cloud\DataLabeling\V1beta1\TextEntityExtractionConfig;
use Google\Cloud\DataLabeling\V1beta1\UpdateEvaluationJobRequest;
use Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for the AI Platform Data Labeling API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $dataLabelingServiceClient = new DataLabelingServiceClient();
 * try {
 *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
 *     $dataset = new Dataset();
 *     $response = $dataLabelingServiceClient->createDataset($formattedParent, $dataset);
 * } finally {
 *     $dataLabelingServiceClient->close();
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
class DataLabelingServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.datalabeling.v1beta1.DataLabelingService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'datalabeling.googleapis.com';

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
    private static $annotatedDatasetNameTemplate;
    private static $annotationSpecSetNameTemplate;
    private static $dataItemNameTemplate;
    private static $datasetNameTemplate;
    private static $evaluationNameTemplate;
    private static $evaluationJobNameTemplate;
    private static $exampleNameTemplate;
    private static $instructionNameTemplate;
    private static $projectNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/data_labeling_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/data_labeling_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/data_labeling_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/data_labeling_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAnnotatedDatasetNameTemplate()
    {
        if (null == self::$annotatedDatasetNameTemplate) {
            self::$annotatedDatasetNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}');
        }

        return self::$annotatedDatasetNameTemplate;
    }

    private static function getAnnotationSpecSetNameTemplate()
    {
        if (null == self::$annotationSpecSetNameTemplate) {
            self::$annotationSpecSetNameTemplate = new PathTemplate('projects/{project}/annotationSpecSets/{annotation_spec_set}');
        }

        return self::$annotationSpecSetNameTemplate;
    }

    private static function getDataItemNameTemplate()
    {
        if (null == self::$dataItemNameTemplate) {
            self::$dataItemNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}/dataItems/{data_item}');
        }

        return self::$dataItemNameTemplate;
    }

    private static function getDatasetNameTemplate()
    {
        if (null == self::$datasetNameTemplate) {
            self::$datasetNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}');
        }

        return self::$datasetNameTemplate;
    }

    private static function getEvaluationNameTemplate()
    {
        if (null == self::$evaluationNameTemplate) {
            self::$evaluationNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}/evaluations/{evaluation}');
        }

        return self::$evaluationNameTemplate;
    }

    private static function getEvaluationJobNameTemplate()
    {
        if (null == self::$evaluationJobNameTemplate) {
            self::$evaluationJobNameTemplate = new PathTemplate('projects/{project}/evaluationJobs/{evaluation_job}');
        }

        return self::$evaluationJobNameTemplate;
    }

    private static function getExampleNameTemplate()
    {
        if (null == self::$exampleNameTemplate) {
            self::$exampleNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}/examples/{example}');
        }

        return self::$exampleNameTemplate;
    }

    private static function getInstructionNameTemplate()
    {
        if (null == self::$instructionNameTemplate) {
            self::$instructionNameTemplate = new PathTemplate('projects/{project}/instructions/{instruction}');
        }

        return self::$instructionNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'annotatedDataset' => self::getAnnotatedDatasetNameTemplate(),
                'annotationSpecSet' => self::getAnnotationSpecSetNameTemplate(),
                'dataItem' => self::getDataItemNameTemplate(),
                'dataset' => self::getDatasetNameTemplate(),
                'evaluation' => self::getEvaluationNameTemplate(),
                'evaluationJob' => self::getEvaluationJobNameTemplate(),
                'example' => self::getExampleNameTemplate(),
                'instruction' => self::getInstructionNameTemplate(),
                'project' => self::getProjectNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a annotated_dataset resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $annotatedDataset
     *
     * @return string The formatted annotated_dataset resource.
     * @experimental
     */
    public static function annotatedDatasetName($project, $dataset, $annotatedDataset)
    {
        return self::getAnnotatedDatasetNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
            'annotated_dataset' => $annotatedDataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a annotation_spec_set resource.
     *
     * @param string $project
     * @param string $annotationSpecSet
     *
     * @return string The formatted annotation_spec_set resource.
     * @experimental
     */
    public static function annotationSpecSetName($project, $annotationSpecSet)
    {
        return self::getAnnotationSpecSetNameTemplate()->render([
            'project' => $project,
            'annotation_spec_set' => $annotationSpecSet,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a data_item resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $dataItem
     *
     * @return string The formatted data_item resource.
     * @experimental
     */
    public static function dataItemName($project, $dataset, $dataItem)
    {
        return self::getDataItemNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
            'data_item' => $dataItem,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a dataset resource.
     *
     * @param string $project
     * @param string $dataset
     *
     * @return string The formatted dataset resource.
     * @experimental
     */
    public static function datasetName($project, $dataset)
    {
        return self::getDatasetNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a evaluation resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $evaluation
     *
     * @return string The formatted evaluation resource.
     * @experimental
     */
    public static function evaluationName($project, $dataset, $evaluation)
    {
        return self::getEvaluationNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a evaluation_job resource.
     *
     * @param string $project
     * @param string $evaluationJob
     *
     * @return string The formatted evaluation_job resource.
     * @experimental
     */
    public static function evaluationJobName($project, $evaluationJob)
    {
        return self::getEvaluationJobNameTemplate()->render([
            'project' => $project,
            'evaluation_job' => $evaluationJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a example resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $annotatedDataset
     * @param string $example
     *
     * @return string The formatted example resource.
     * @experimental
     */
    public static function exampleName($project, $dataset, $annotatedDataset, $example)
    {
        return self::getExampleNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
            'annotated_dataset' => $annotatedDataset,
            'example' => $example,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a instruction resource.
     *
     * @param string $project
     * @param string $instruction
     *
     * @return string The formatted instruction resource.
     * @experimental
     */
    public static function instructionName($project, $instruction)
    {
        return self::getInstructionNameTemplate()->render([
            'project' => $project,
            'instruction' => $instruction,
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
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - annotatedDataset: projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}
     * - annotationSpecSet: projects/{project}/annotationSpecSets/{annotation_spec_set}
     * - dataItem: projects/{project}/datasets/{dataset}/dataItems/{data_item}
     * - dataset: projects/{project}/datasets/{dataset}
     * - evaluation: projects/{project}/datasets/{dataset}/evaluations/{evaluation}
     * - evaluationJob: projects/{project}/evaluationJobs/{evaluation_job}
     * - example: projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}/examples/{example}
     * - instruction: projects/{project}/instructions/{instruction}
     * - project: projects/{project}.
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
     *           as "<uri>:<port>". Default 'datalabeling.googleapis.com:443'.
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
     * Creates dataset. If success return a Dataset resource.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     $dataset = new Dataset();
     *     $response = $dataLabelingServiceClient->createDataset($formattedParent, $dataset);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. Dataset resource parent, format:
     *                              projects/{project_id}
     * @param Dataset $dataset      Required. The dataset to be created.
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
     * @return \Google\Cloud\DataLabeling\V1beta1\Dataset
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

        return $this->startCall(
            'CreateDataset',
            Dataset::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets dataset by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $response = $dataLabelingServiceClient->getDataset($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Dataset resource name, format:
     *                             projects/{project_id}/datasets/{dataset_id}
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
     * @return \Google\Cloud\DataLabeling\V1beta1\Dataset
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDataset($name, array $optionalArgs = [])
    {
        $request = new GetDatasetRequest();
        $request->setName($name);

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
     * Lists datasets under a project. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listDatasets($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listDatasets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Dataset resource parent, format:
     *                             projects/{project_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. Filter on dataset is not supported at this moment.
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
     * Deletes a dataset by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $dataLabelingServiceClient->deleteDataset($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Dataset resource name, format:
     *                             projects/{project_id}/datasets/{dataset_id}
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

        return $this->startCall(
            'DeleteDataset',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Imports data into dataset based on source locations defined in request.
     * It can be called multiple times for the same dataset. Each dataset can
     * only have one long running operation running on it. For example, no
     * labeling task (also long running operation) can be started while
     * importing is still ongoing. Vice versa.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $inputConfig = new InputConfig();
     *     $operationResponse = $dataLabelingServiceClient->importData($formattedName, $inputConfig);
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
     *     $operationResponse = $dataLabelingServiceClient->importData($formattedName, $inputConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'importData');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string      $name         Required. Dataset resource name, format:
     *                                  projects/{project_id}/datasets/{dataset_id}
     * @param InputConfig $inputConfig  Required. Specify the input source of the data.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type string $userEmailAddress
     *          Email of the user who started the import task and should be notified by
     *          email. If empty no notification will be sent.
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
    public function importData($name, $inputConfig, array $optionalArgs = [])
    {
        $request = new ImportDataRequest();
        $request->setName($name);
        $request->setInputConfig($inputConfig);
        if (isset($optionalArgs['userEmailAddress'])) {
            $request->setUserEmailAddress($optionalArgs['userEmailAddress']);
        }

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
     * Exports data and annotations from dataset.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $formattedAnnotatedDataset = $dataLabelingServiceClient->annotatedDatasetName('[PROJECT]', '[DATASET]', '[ANNOTATED_DATASET]');
     *     $outputConfig = new OutputConfig();
     *     $operationResponse = $dataLabelingServiceClient->exportData($formattedName, $formattedAnnotatedDataset, $outputConfig);
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
     *     $operationResponse = $dataLabelingServiceClient->exportData($formattedName, $formattedAnnotatedDataset, $outputConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'exportData');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string       $name             Required. Dataset resource name, format:
     *                                       projects/{project_id}/datasets/{dataset_id}
     * @param string       $annotatedDataset Required. Annotated dataset resource name. DataItem in
     *                                       Dataset and their annotations in specified annotated dataset will be
     *                                       exported. It's in format of
     *                                       projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *                                       {annotated_dataset_id}
     * @param OutputConfig $outputConfig     Required. Specify the output destination.
     * @param array        $optionalArgs     {
     *                                       Optional.
     *
     *     @type string $filter
     *          Optional. Filter is not supported at this moment.
     *     @type string $userEmailAddress
     *          Email of the user who started the export task and should be notified by
     *          email. If empty no notification will be sent.
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
    public function exportData($name, $annotatedDataset, $outputConfig, array $optionalArgs = [])
    {
        $request = new ExportDataRequest();
        $request->setName($name);
        $request->setAnnotatedDataset($annotatedDataset);
        $request->setOutputConfig($outputConfig);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['userEmailAddress'])) {
            $request->setUserEmailAddress($optionalArgs['userEmailAddress']);
        }

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
     * Gets a data item in a dataset by resource name. This API can be
     * called after data are imported into dataset.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->dataItemName('[PROJECT]', '[DATASET]', '[DATA_ITEM]');
     *     $response = $dataLabelingServiceClient->getDataItem($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the data item to get, format:
     *                             projects/{project_id}/datasets/{dataset_id}/dataItems/{data_item_id}
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
     * @return \Google\Cloud\DataLabeling\V1beta1\DataItem
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDataItem($name, array $optionalArgs = [])
    {
        $request = new GetDataItemRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDataItem',
            DataItem::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists data items in a dataset. This API can be called after data
     * are imported into dataset. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listDataItems($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listDataItems($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Name of the dataset to list data items, format:
     *                             projects/{project_id}/datasets/{dataset_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. Filter is not supported at this moment.
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
     * Gets an annotated dataset by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->annotatedDatasetName('[PROJECT]', '[DATASET]', '[ANNOTATED_DATASET]');
     *     $response = $dataLabelingServiceClient->getAnnotatedDataset($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the annotated dataset to get, format:
     *                             projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *                             {annotated_dataset_id}
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
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotatedDataset
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getAnnotatedDataset($name, array $optionalArgs = [])
    {
        $request = new GetAnnotatedDatasetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAnnotatedDataset',
            AnnotatedDataset::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists annotated datasets for a dataset. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listAnnotatedDatasets($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listAnnotatedDatasets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Name of the dataset to list annotated datasets, format:
     *                             projects/{project_id}/datasets/{dataset_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. Filter is not supported at this moment.
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
    public function listAnnotatedDatasets($parent, array $optionalArgs = [])
    {
        $request = new ListAnnotatedDatasetsRequest();
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
            'ListAnnotatedDatasets',
            $optionalArgs,
            ListAnnotatedDatasetsResponse::class,
            $request
        );
    }

    /**
     * Deletes an annotated dataset by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->annotatedDatasetName('[PROJECT]', '[DATASET]', '[ANNOTATED_DATASET]');
     *     $dataLabelingServiceClient->deleteAnnotatedDataset($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the annotated dataset to delete, format:
     *                             projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *                             {annotated_dataset_id}
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
    public function deleteAnnotatedDataset($name, array $optionalArgs = [])
    {
        $request = new DeleteAnnotatedDatasetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteAnnotatedDataset',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Starts a labeling task for image. The type of image labeling task is
     * configured by feature in the request.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $basicConfig = new HumanAnnotationConfig();
     *     $feature = Feature::FEATURE_UNSPECIFIED;
     *     $operationResponse = $dataLabelingServiceClient->labelImage($formattedParent, $basicConfig, $feature);
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
     *     $operationResponse = $dataLabelingServiceClient->labelImage($formattedParent, $basicConfig, $feature);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'labelImage');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string                $parent       Required. Name of the dataset to request labeling task, format:
     *                                            projects/{project_id}/datasets/{dataset_id}
     * @param HumanAnnotationConfig $basicConfig  Required. Basic human annotation config.
     * @param int                   $feature      Required. The type of image labeling task.
     *                                            For allowed values, use constants defined on {@see \Google\Cloud\DataLabeling\V1beta1\LabelImageRequest\Feature}
     * @param array                 $optionalArgs {
     *                                            Optional.
     *
     *     @type ImageClassificationConfig $imageClassificationConfig
     *          Configuration for image classification task.
     *          One of image_classification_config, bounding_poly_config,
     *          polyline_config and segmentation_config are required.
     *     @type BoundingPolyConfig $boundingPolyConfig
     *          Configuration for bounding box and bounding poly task.
     *          One of image_classification_config, bounding_poly_config,
     *          polyline_config and segmentation_config are required.
     *     @type PolylineConfig $polylineConfig
     *          Configuration for polyline task.
     *          One of image_classification_config, bounding_poly_config,
     *          polyline_config and segmentation_config are required.
     *     @type SegmentationConfig $segmentationConfig
     *          Configuration for segmentation task.
     *          One of image_classification_config, bounding_poly_config,
     *          polyline_config and segmentation_config are required.
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
    public function labelImage($parent, $basicConfig, $feature, array $optionalArgs = [])
    {
        $request = new LabelImageRequest();
        $request->setParent($parent);
        $request->setBasicConfig($basicConfig);
        $request->setFeature($feature);
        if (isset($optionalArgs['imageClassificationConfig'])) {
            $request->setImageClassificationConfig($optionalArgs['imageClassificationConfig']);
        }
        if (isset($optionalArgs['boundingPolyConfig'])) {
            $request->setBoundingPolyConfig($optionalArgs['boundingPolyConfig']);
        }
        if (isset($optionalArgs['polylineConfig'])) {
            $request->setPolylineConfig($optionalArgs['polylineConfig']);
        }
        if (isset($optionalArgs['segmentationConfig'])) {
            $request->setSegmentationConfig($optionalArgs['segmentationConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'LabelImage',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Starts a labeling task for video. The type of video labeling task is
     * configured by feature in the request.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $basicConfig = new HumanAnnotationConfig();
     *     $feature = Feature::FEATURE_UNSPECIFIED;
     *     $operationResponse = $dataLabelingServiceClient->labelVideo($formattedParent, $basicConfig, $feature);
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
     *     $operationResponse = $dataLabelingServiceClient->labelVideo($formattedParent, $basicConfig, $feature);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'labelVideo');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string                $parent       Required. Name of the dataset to request labeling task, format:
     *                                            projects/{project_id}/datasets/{dataset_id}
     * @param HumanAnnotationConfig $basicConfig  Required. Basic human annotation config.
     * @param int                   $feature      Required. The type of video labeling task.
     *                                            For allowed values, use constants defined on {@see \Google\Cloud\DataLabeling\V1beta1\LabelVideoRequest\Feature}
     * @param array                 $optionalArgs {
     *                                            Optional.
     *
     *     @type VideoClassificationConfig $videoClassificationConfig
     *          Configuration for video classification task.
     *          One of video_classification_config, object_detection_config,
     *          object_tracking_config and event_config is required.
     *     @type ObjectDetectionConfig $objectDetectionConfig
     *          Configuration for video object detection task.
     *          One of video_classification_config, object_detection_config,
     *          object_tracking_config and event_config is required.
     *     @type ObjectTrackingConfig $objectTrackingConfig
     *          Configuration for video object tracking task.
     *          One of video_classification_config, object_detection_config,
     *          object_tracking_config and event_config is required.
     *     @type EventConfig $eventConfig
     *          Configuration for video event task.
     *          One of video_classification_config, object_detection_config,
     *          object_tracking_config and event_config is required.
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
    public function labelVideo($parent, $basicConfig, $feature, array $optionalArgs = [])
    {
        $request = new LabelVideoRequest();
        $request->setParent($parent);
        $request->setBasicConfig($basicConfig);
        $request->setFeature($feature);
        if (isset($optionalArgs['videoClassificationConfig'])) {
            $request->setVideoClassificationConfig($optionalArgs['videoClassificationConfig']);
        }
        if (isset($optionalArgs['objectDetectionConfig'])) {
            $request->setObjectDetectionConfig($optionalArgs['objectDetectionConfig']);
        }
        if (isset($optionalArgs['objectTrackingConfig'])) {
            $request->setObjectTrackingConfig($optionalArgs['objectTrackingConfig']);
        }
        if (isset($optionalArgs['eventConfig'])) {
            $request->setEventConfig($optionalArgs['eventConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'LabelVideo',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Starts a labeling task for text. The type of text labeling task is
     * configured by feature in the request.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->datasetName('[PROJECT]', '[DATASET]');
     *     $basicConfig = new HumanAnnotationConfig();
     *     $feature = Feature::FEATURE_UNSPECIFIED;
     *     $operationResponse = $dataLabelingServiceClient->labelText($formattedParent, $basicConfig, $feature);
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
     *     $operationResponse = $dataLabelingServiceClient->labelText($formattedParent, $basicConfig, $feature);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'labelText');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string                $parent       Required. Name of the data set to request labeling task, format:
     *                                            projects/{project_id}/datasets/{dataset_id}
     * @param HumanAnnotationConfig $basicConfig  Required. Basic human annotation config.
     * @param int                   $feature      Required. The type of text labeling task.
     *                                            For allowed values, use constants defined on {@see \Google\Cloud\DataLabeling\V1beta1\LabelTextRequest\Feature}
     * @param array                 $optionalArgs {
     *                                            Optional.
     *
     *     @type TextClassificationConfig $textClassificationConfig
     *          Configuration for text classification task.
     *          One of text_classification_config and text_entity_extraction_config
     *          is required.
     *     @type TextEntityExtractionConfig $textEntityExtractionConfig
     *          Configuration for entity extraction task.
     *          One of text_classification_config and text_entity_extraction_config
     *          is required.
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
    public function labelText($parent, $basicConfig, $feature, array $optionalArgs = [])
    {
        $request = new LabelTextRequest();
        $request->setParent($parent);
        $request->setBasicConfig($basicConfig);
        $request->setFeature($feature);
        if (isset($optionalArgs['textClassificationConfig'])) {
            $request->setTextClassificationConfig($optionalArgs['textClassificationConfig']);
        }
        if (isset($optionalArgs['textEntityExtractionConfig'])) {
            $request->setTextEntityExtractionConfig($optionalArgs['textEntityExtractionConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'LabelText',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets an example by resource name, including both data and annotation.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->exampleName('[PROJECT]', '[DATASET]', '[ANNOTATED_DATASET]', '[EXAMPLE]');
     *     $response = $dataLabelingServiceClient->getExample($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of example, format:
     *                             projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *                             {annotated_dataset_id}/examples/{example_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. An expression for filtering Examples. Filter by
     *          annotation_spec.display_name is supported. Format
     *          "annotation_spec.display_name = {display_name}"
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\Example
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getExample($name, array $optionalArgs = [])
    {
        $request = new GetExampleRequest();
        $request->setName($name);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetExample',
            Example::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists examples in an annotated dataset. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->annotatedDatasetName('[PROJECT]', '[DATASET]', '[ANNOTATED_DATASET]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listExamples($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listExamples($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Example resource parent.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. An expression for filtering Examples. For annotated datasets that
     *          have annotation spec set, filter by
     *          annotation_spec.display_name is supported. Format
     *          "annotation_spec.display_name = {display_name}"
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
    public function listExamples($parent, array $optionalArgs = [])
    {
        $request = new ListExamplesRequest();
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
            'ListExamples',
            $optionalArgs,
            ListExamplesResponse::class,
            $request
        );
    }

    /**
     * Creates an annotation spec set by providing a set of labels.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     $annotationSpecSet = new AnnotationSpecSet();
     *     $response = $dataLabelingServiceClient->createAnnotationSpecSet($formattedParent, $annotationSpecSet);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string            $parent            Required. AnnotationSpecSet resource parent, format:
     *                                             projects/{project_id}
     * @param AnnotationSpecSet $annotationSpecSet Required. Annotation spec set to create. Annotation specs must be included.
     *                                             Only one annotation spec will be accepted for annotation specs with same
     *                                             display_name.
     * @param array             $optionalArgs      {
     *                                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpecSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createAnnotationSpecSet($parent, $annotationSpecSet, array $optionalArgs = [])
    {
        $request = new CreateAnnotationSpecSetRequest();
        $request->setParent($parent);
        $request->setAnnotationSpecSet($annotationSpecSet);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateAnnotationSpecSet',
            AnnotationSpecSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets an annotation spec set by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->annotationSpecSetName('[PROJECT]', '[ANNOTATION_SPEC_SET]');
     *     $response = $dataLabelingServiceClient->getAnnotationSpecSet($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. AnnotationSpecSet resource name, format:
     *                             projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}
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
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpecSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getAnnotationSpecSet($name, array $optionalArgs = [])
    {
        $request = new GetAnnotationSpecSetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAnnotationSpecSet',
            AnnotationSpecSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists annotation spec sets for a project. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listAnnotationSpecSets($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listAnnotationSpecSets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Parent of AnnotationSpecSet resource, format:
     *                             projects/{project_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. Filter is not supported at this moment.
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
    public function listAnnotationSpecSets($parent, array $optionalArgs = [])
    {
        $request = new ListAnnotationSpecSetsRequest();
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
            'ListAnnotationSpecSets',
            $optionalArgs,
            ListAnnotationSpecSetsResponse::class,
            $request
        );
    }

    /**
     * Deletes an annotation spec set by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->annotationSpecSetName('[PROJECT]', '[ANNOTATION_SPEC_SET]');
     *     $dataLabelingServiceClient->deleteAnnotationSpecSet($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. AnnotationSpec resource name, format:
     *                             `projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}`.
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
    public function deleteAnnotationSpecSet($name, array $optionalArgs = [])
    {
        $request = new DeleteAnnotationSpecSetRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteAnnotationSpecSet',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates an instruction for how data should be labeled.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     $instruction = new Instruction();
     *     $operationResponse = $dataLabelingServiceClient->createInstruction($formattedParent, $instruction);
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
     *     $operationResponse = $dataLabelingServiceClient->createInstruction($formattedParent, $instruction);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $dataLabelingServiceClient->resumeOperation($operationName, 'createInstruction');
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
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string      $parent       Required. Instruction resource parent, format:
     *                                  projects/{project_id}
     * @param Instruction $instruction  Required. Instruction of how to perform the labeling task.
     * @param array       $optionalArgs {
     *                                  Optional.
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
    public function createInstruction($parent, $instruction, array $optionalArgs = [])
    {
        $request = new CreateInstructionRequest();
        $request->setParent($parent);
        $request->setInstruction($instruction);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateInstruction',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets an instruction by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->instructionName('[PROJECT]', '[INSTRUCTION]');
     *     $response = $dataLabelingServiceClient->getInstruction($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Instruction resource name, format:
     *                             projects/{project_id}/instructions/{instruction_id}
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
     * @return \Google\Cloud\DataLabeling\V1beta1\Instruction
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getInstruction($name, array $optionalArgs = [])
    {
        $request = new GetInstructionRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetInstruction',
            Instruction::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists instructions for a project. Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listInstructions($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listInstructions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Instruction resource parent, format:
     *                             projects/{project_id}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. Filter is not supported at this moment.
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
    public function listInstructions($parent, array $optionalArgs = [])
    {
        $request = new ListInstructionsRequest();
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
            'ListInstructions',
            $optionalArgs,
            ListInstructionsResponse::class,
            $request
        );
    }

    /**
     * Deletes an instruction object by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->instructionName('[PROJECT]', '[INSTRUCTION]');
     *     $dataLabelingServiceClient->deleteInstruction($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Instruction resource name, format:
     *                             projects/{project_id}/instructions/{instruction_id}
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
    public function deleteInstruction($name, array $optionalArgs = [])
    {
        $request = new DeleteInstructionRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteInstruction',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets an evaluation by resource name (to search, use
     * [projects.evaluations.search][google.cloud.datalabeling.v1beta1.DataLabelingService.SearchEvaluations]).
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->evaluationName('[PROJECT]', '[DATASET]', '[EVALUATION]');
     *     $response = $dataLabelingServiceClient->getEvaluation($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Name of the evaluation. Format:
     *
     * "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id}</var>'
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
     * @return \Google\Cloud\DataLabeling\V1beta1\Evaluation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getEvaluation($name, array $optionalArgs = [])
    {
        $request = new GetEvaluationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetEvaluation',
            Evaluation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Searches [evaluations][google.cloud.datalabeling.v1beta1.Evaluation] within a project.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->evaluationName('[PROJECT]', '[DATASET]', '[EVALUATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->searchEvaluations($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->searchEvaluations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Evaluation search parent (project ID). Format:
     *                             "projects/<var>{project_id}</var>"
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. To search evaluations, you can filter by the following:
     *
     *          * evaluation<span>_</span>job.evaluation_job_id (the last part of
     *            [EvaluationJob.name][google.cloud.datalabeling.v1beta1.EvaluationJob.name])
     *          * evaluation<span>_</span>job.model_id (the <var>{model_name}</var> portion
     *            of [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version])
     *          * evaluation<span>_</span>job.evaluation_job_run_time_start (Minimum
     *            threshold for the
     *            [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *            the evaluation)
     *          * evaluation<span>_</span>job.evaluation_job_run_time_end (Maximum
     *            threshold for the
     *            [evaluationJobRunTime][google.cloud.datalabeling.v1beta1.Evaluation.evaluation_job_run_time] that created
     *            the evaluation)
     *          * evaluation<span>_</span>job.job_state ([EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state])
     *          * annotation<span>_</span>spec.display_name (the Evaluation contains a
     *            metric for the annotation spec with this
     *            [displayName][google.cloud.datalabeling.v1beta1.AnnotationSpec.display_name])
     *
     *          To filter by multiple critiera, use the `AND` operator or the `OR`
     *          operator. The following examples shows a string that filters by several
     *          critiera:
     *
     *          "evaluation<span>_</span>job.evaluation_job_id =
     *          <var>{evaluation_job_id}</var> AND evaluation<span>_</span>job.model_id =
     *          <var>{model_name}</var> AND
     *          evaluation<span>_</span>job.evaluation_job_run_time_start =
     *          <var>{timestamp_1}</var> AND
     *          evaluation<span>_</span>job.evaluation_job_run_time_end =
     *          <var>{timestamp_2}</var> AND annotation<span>_</span>spec.display_name =
     *          <var>{display_name}</var>"
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
    public function searchEvaluations($parent, array $optionalArgs = [])
    {
        $request = new SearchEvaluationsRequest();
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
            'SearchEvaluations',
            $optionalArgs,
            SearchEvaluationsResponse::class,
            $request
        );
    }

    /**
     * Searches example comparisons from an evaluation. The return format is a
     * list of example comparisons that show ground truth and prediction(s) for
     * a single input. Search by providing an evaluation ID.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->evaluationName('[PROJECT]', '[DATASET]', '[EVALUATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->searchExampleComparisons($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->searchExampleComparisons($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. Name of the [Evaluation][google.cloud.datalabeling.v1beta1.Evaluation] resource to search for example
     *                       comparisons from. Format:
     *
     * "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id}</var>"
     * @param array $optionalArgs {
     *                            Optional.
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
    public function searchExampleComparisons($parent, array $optionalArgs = [])
    {
        $request = new SearchExampleComparisonsRequest();
        $request->setParent($parent);
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
            'SearchExampleComparisons',
            $optionalArgs,
            SearchExampleComparisonsResponse::class,
            $request
        );
    }

    /**
     * Creates an evaluation job.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     $job = new EvaluationJob();
     *     $response = $dataLabelingServiceClient->createEvaluationJob($formattedParent, $job);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string        $parent       Required. Evaluation job resource parent. Format:
     *                                    "projects/<var>{project_id}</var>"
     * @param EvaluationJob $job          Required. The evaluation job to create.
     * @param array         $optionalArgs {
     *                                    Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createEvaluationJob($parent, $job, array $optionalArgs = [])
    {
        $request = new CreateEvaluationJobRequest();
        $request->setParent($parent);
        $request->setJob($job);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateEvaluationJob',
            EvaluationJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates an evaluation job. You can only update certain fields of the job's
     * [EvaluationJobConfig][google.cloud.datalabeling.v1beta1.EvaluationJobConfig]: `humanAnnotationConfig.instruction`,
     * `exampleCount`, and `exampleSamplePercentage`.
     *
     * If you want to change any other aspect of the evaluation job, you must
     * delete the job and create a new one.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $evaluationJob = new EvaluationJob();
     *     $response = $dataLabelingServiceClient->updateEvaluationJob($evaluationJob);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param EvaluationJob $evaluationJob Required. Evaluation job that is going to be updated.
     * @param array         $optionalArgs  {
     *                                     Optional.
     *
     *     @type FieldMask $updateMask
     *          Optional. Mask for which fields to update. You can only provide the
     *          following fields:
     *
     *          * `evaluationJobConfig.humanAnnotationConfig.instruction`
     *          * `evaluationJobConfig.exampleCount`
     *          * `evaluationJobConfig.exampleSamplePercentage`
     *
     *          You can provide more than one of these fields by separating them with
     *          commas.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateEvaluationJob($evaluationJob, array $optionalArgs = [])
    {
        $request = new UpdateEvaluationJobRequest();
        $request->setEvaluationJob($evaluationJob);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'evaluation_job.name' => $request->getEvaluationJob()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateEvaluationJob',
            EvaluationJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets an evaluation job by resource name.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->evaluationJobName('[PROJECT]', '[EVALUATION_JOB]');
     *     $response = $dataLabelingServiceClient->getEvaluationJob($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Name of the evaluation job. Format:
     *
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
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
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getEvaluationJob($name, array $optionalArgs = [])
    {
        $request = new GetEvaluationJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetEvaluationJob',
            EvaluationJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Pauses an evaluation job. Pausing an evaluation job that is already in a
     * `PAUSED` state is a no-op.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->evaluationJobName('[PROJECT]', '[EVALUATION_JOB]');
     *     $dataLabelingServiceClient->pauseEvaluationJob($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Name of the evaluation job that is going to be paused. Format:
     *
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
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
    public function pauseEvaluationJob($name, array $optionalArgs = [])
    {
        $request = new PauseEvaluationJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'PauseEvaluationJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Resumes a paused evaluation job. A deleted evaluation job can't be resumed.
     * Resuming a running or scheduled evaluation job is a no-op.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->evaluationJobName('[PROJECT]', '[EVALUATION_JOB]');
     *     $dataLabelingServiceClient->resumeEvaluationJob($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Name of the evaluation job that is going to be resumed. Format:
     *
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
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
    public function resumeEvaluationJob($name, array $optionalArgs = [])
    {
        $request = new ResumeEvaluationJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ResumeEvaluationJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Stops and deletes an evaluation job.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedName = $dataLabelingServiceClient->evaluationJobName('[PROJECT]', '[EVALUATION_JOB]');
     *     $dataLabelingServiceClient->deleteEvaluationJob($formattedName);
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. Name of the evaluation job that is going to be deleted. Format:
     *
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
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
    public function deleteEvaluationJob($name, array $optionalArgs = [])
    {
        $request = new DeleteEvaluationJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteEvaluationJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all evaluation jobs within a project with possible filters.
     * Pagination is supported.
     *
     * Sample code:
     * ```
     * $dataLabelingServiceClient = new DataLabelingServiceClient();
     * try {
     *     $formattedParent = $dataLabelingServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $dataLabelingServiceClient->listEvaluationJobs($formattedParent);
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
     *     $pagedResponse = $dataLabelingServiceClient->listEvaluationJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $dataLabelingServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Evaluation job resource parent. Format:
     *                             "projects/<var>{project_id}</var>"
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          Optional. You can filter the jobs to list by model_id (also known as
     *          model_name, as described in
     *          [EvaluationJob.modelVersion][google.cloud.datalabeling.v1beta1.EvaluationJob.model_version]) or by
     *          evaluation job state (as described in [EvaluationJob.state][google.cloud.datalabeling.v1beta1.EvaluationJob.state]). To filter
     *          by both criteria, use the `AND` operator or the `OR` operator. For example,
     *          you can use the following string for your filter:
     *          "evaluation<span>_</span>job.model_id = <var>{model_name}</var> AND
     *          evaluation<span>_</span>job.state = <var>{evaluation_job_state}</var>"
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
    public function listEvaluationJobs($parent, array $optionalArgs = [])
    {
        $request = new ListEvaluationJobsRequest();
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
            'ListEvaluationJobs',
            $optionalArgs,
            ListEvaluationJobsResponse::class,
            $request
        );
    }
}
