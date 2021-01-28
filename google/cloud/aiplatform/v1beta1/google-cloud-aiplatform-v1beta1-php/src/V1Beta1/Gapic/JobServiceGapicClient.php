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
 * https://github.com/google/googleapis/blob/master/google/cloud/aiplatform/v1beta1/job_service.proto
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
use Google\Cloud\Aiplatform\V1beta1\BatchPredictionJob;
use Google\Cloud\Aiplatform\V1beta1\CancelBatchPredictionJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CancelCustomJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CancelDataLabelingJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CancelHyperparameterTuningJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CreateBatchPredictionJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CreateCustomJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CreateDataLabelingJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CreateHyperparameterTuningJobRequest;
use Google\Cloud\Aiplatform\V1beta1\CustomJob;
use Google\Cloud\Aiplatform\V1beta1\DataLabelingJob;
use Google\Cloud\Aiplatform\V1beta1\DeleteBatchPredictionJobRequest;
use Google\Cloud\Aiplatform\V1beta1\DeleteCustomJobRequest;
use Google\Cloud\Aiplatform\V1beta1\DeleteDataLabelingJobRequest;
use Google\Cloud\Aiplatform\V1beta1\DeleteHyperparameterTuningJobRequest;
use Google\Cloud\Aiplatform\V1beta1\GetBatchPredictionJobRequest;
use Google\Cloud\Aiplatform\V1beta1\GetCustomJobRequest;
use Google\Cloud\Aiplatform\V1beta1\GetDataLabelingJobRequest;
use Google\Cloud\Aiplatform\V1beta1\GetHyperparameterTuningJobRequest;
use Google\Cloud\Aiplatform\V1beta1\HyperparameterTuningJob;
use Google\Cloud\Aiplatform\V1beta1\ListBatchPredictionJobsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListBatchPredictionJobsResponse;
use Google\Cloud\Aiplatform\V1beta1\ListCustomJobsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListCustomJobsResponse;
use Google\Cloud\Aiplatform\V1beta1\ListDataLabelingJobsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListDataLabelingJobsResponse;
use Google\Cloud\Aiplatform\V1beta1\ListHyperparameterTuningJobsRequest;
use Google\Cloud\Aiplatform\V1beta1\ListHyperparameterTuningJobsResponse;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: A service for creating and managing AI Platform's jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $jobServiceClient = new JobServiceClient();
 * try {
 *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $customJob = new CustomJob();
 *     $response = $jobServiceClient->createCustomJob($formattedParent, $customJob);
 * } finally {
 *     $jobServiceClient->close();
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
class JobServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1beta1.JobService';

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
    private static $batchPredictionJobNameTemplate;
    private static $customJobNameTemplate;
    private static $dataLabelingJobNameTemplate;
    private static $datasetNameTemplate;
    private static $hyperparameterTuningJobNameTemplate;
    private static $locationNameTemplate;
    private static $modelNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/job_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/job_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/job_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/job_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBatchPredictionJobNameTemplate()
    {
        if (null == self::$batchPredictionJobNameTemplate) {
            self::$batchPredictionJobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}');
        }

        return self::$batchPredictionJobNameTemplate;
    }

    private static function getCustomJobNameTemplate()
    {
        if (null == self::$customJobNameTemplate) {
            self::$customJobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/customJobs/{custom_job}');
        }

        return self::$customJobNameTemplate;
    }

    private static function getDataLabelingJobNameTemplate()
    {
        if (null == self::$dataLabelingJobNameTemplate) {
            self::$dataLabelingJobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}');
        }

        return self::$dataLabelingJobNameTemplate;
    }

    private static function getDatasetNameTemplate()
    {
        if (null == self::$datasetNameTemplate) {
            self::$datasetNameTemplate = new PathTemplate('projects/{project}/locations/{location}/datasets/{dataset}');
        }

        return self::$datasetNameTemplate;
    }

    private static function getHyperparameterTuningJobNameTemplate()
    {
        if (null == self::$hyperparameterTuningJobNameTemplate) {
            self::$hyperparameterTuningJobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}');
        }

        return self::$hyperparameterTuningJobNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getModelNameTemplate()
    {
        if (null == self::$modelNameTemplate) {
            self::$modelNameTemplate = new PathTemplate('projects/{project}/locations/{location}/models/{model}');
        }

        return self::$modelNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'batchPredictionJob' => self::getBatchPredictionJobNameTemplate(),
                'customJob' => self::getCustomJobNameTemplate(),
                'dataLabelingJob' => self::getDataLabelingJobNameTemplate(),
                'dataset' => self::getDatasetNameTemplate(),
                'hyperparameterTuningJob' => self::getHyperparameterTuningJobNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'model' => self::getModelNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a batch_prediction_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $batchPredictionJob
     *
     * @return string The formatted batch_prediction_job resource.
     * @experimental
     */
    public static function batchPredictionJobName($project, $location, $batchPredictionJob)
    {
        return self::getBatchPredictionJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'batch_prediction_job' => $batchPredictionJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a custom_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $customJob
     *
     * @return string The formatted custom_job resource.
     * @experimental
     */
    public static function customJobName($project, $location, $customJob)
    {
        return self::getCustomJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'custom_job' => $customJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a data_labeling_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataLabelingJob
     *
     * @return string The formatted data_labeling_job resource.
     * @experimental
     */
    public static function dataLabelingJobName($project, $location, $dataLabelingJob)
    {
        return self::getDataLabelingJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'data_labeling_job' => $dataLabelingJob,
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
     * a hyperparameter_tuning_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $hyperparameterTuningJob
     *
     * @return string The formatted hyperparameter_tuning_job resource.
     * @experimental
     */
    public static function hyperparameterTuningJobName($project, $location, $hyperparameterTuningJob)
    {
        return self::getHyperparameterTuningJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'hyperparameter_tuning_job' => $hyperparameterTuningJob,
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
     * Formats a string containing the fully-qualified path to represent
     * a model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $model
     *
     * @return string The formatted model resource.
     * @experimental
     */
    public static function modelName($project, $location, $model)
    {
        return self::getModelNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'model' => $model,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - batchPredictionJob: projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}
     * - customJob: projects/{project}/locations/{location}/customJobs/{custom_job}
     * - dataLabelingJob: projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}
     * - dataset: projects/{project}/locations/{location}/datasets/{dataset}
     * - hyperparameterTuningJob: projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}
     * - location: projects/{project}/locations/{location}
     * - model: projects/{project}/locations/{location}/models/{model}.
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
     * Creates a CustomJob. A created CustomJob right away
     * will be attempted to be run.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $customJob = new CustomJob();
     *     $response = $jobServiceClient->createCustomJob($formattedParent, $customJob);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The resource name of the Location to create the CustomJob in.
     *                                Format: `projects/{project}/locations/{location}`
     * @param CustomJob $customJob    Required. The CustomJob to create.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\CustomJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createCustomJob($parent, $customJob, array $optionalArgs = [])
    {
        $request = new CreateCustomJobRequest();
        $request->setParent($parent);
        $request->setCustomJob($customJob);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateCustomJob',
            CustomJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a CustomJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->customJobName('[PROJECT]', '[LOCATION]', '[CUSTOM_JOB]');
     *     $response = $jobServiceClient->getCustomJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the CustomJob resource.
     *                             Format:
     *                             `projects/{project}/locations/{location}/customJobs/{custom_job}`
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
     * @return \Google\Cloud\Aiplatform\V1beta1\CustomJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getCustomJob($name, array $optionalArgs = [])
    {
        $request = new GetCustomJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetCustomJob',
            CustomJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists CustomJobs in a Location.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $jobServiceClient->listCustomJobs($formattedParent);
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
     *     $pagedResponse = $jobServiceClient->listCustomJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Location to list the CustomJobs from.
     *                             Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *
     *          Supported fields:
     *
     *            * `display_name` supports = and !=.
     *
     *            * `state` supports = and !=.
     *
     *          Some examples of using the filter are:
     *
     *           * `state="JOB_STATE_SUCCEEDED" AND display_name="my_job"`
     *
     *           * `state="JOB_STATE_RUNNING" OR display_name="my_job"`
     *
     *           * `NOT display_name="my_job"`
     *
     *           * `state="JOB_STATE_FAILED"`
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
    public function listCustomJobs($parent, array $optionalArgs = [])
    {
        $request = new ListCustomJobsRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListCustomJobs',
            $optionalArgs,
            ListCustomJobsResponse::class,
            $request
        );
    }

    /**
     * Deletes a CustomJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->customJobName('[PROJECT]', '[LOCATION]', '[CUSTOM_JOB]');
     *     $operationResponse = $jobServiceClient->deleteCustomJob($formattedName);
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
     *     $operationResponse = $jobServiceClient->deleteCustomJob($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $jobServiceClient->resumeOperation($operationName, 'deleteCustomJob');
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
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the CustomJob resource to be deleted.
     *                             Format:
     *                             `projects/{project}/locations/{location}/customJobs/{custom_job}`
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
    public function deleteCustomJob($name, array $optionalArgs = [])
    {
        $request = new DeleteCustomJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteCustomJob',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Cancels a CustomJob.
     * Starts asynchronous cancellation on the CustomJob. The server
     * makes a best effort to cancel the job, but success is not
     * guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1beta1.JobService.GetCustomJob] or
     * other methods to check whether the cancellation succeeded or whether the
     * job completed despite cancellation. On successful cancellation,
     * the CustomJob is not deleted; instead it becomes a job with
     * a [CustomJob.error][google.cloud.aiplatform.v1beta1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1beta1.CustomJob.state] is set to
     * `CANCELLED`.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->customJobName('[PROJECT]', '[LOCATION]', '[CUSTOM_JOB]');
     *     $jobServiceClient->cancelCustomJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the CustomJob to cancel.
     *                             Format:
     *                             `projects/{project}/locations/{location}/customJobs/{custom_job}`
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
    public function cancelCustomJob($name, array $optionalArgs = [])
    {
        $request = new CancelCustomJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CancelCustomJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a DataLabelingJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $dataLabelingJob = new DataLabelingJob();
     *     $response = $jobServiceClient->createDataLabelingJob($formattedParent, $dataLabelingJob);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string          $parent          Required. The parent of the DataLabelingJob.
     *                                         Format: `projects/{project}/locations/{location}`
     * @param DataLabelingJob $dataLabelingJob Required. The DataLabelingJob to create.
     * @param array           $optionalArgs    {
     *                                         Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\DataLabelingJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createDataLabelingJob($parent, $dataLabelingJob, array $optionalArgs = [])
    {
        $request = new CreateDataLabelingJobRequest();
        $request->setParent($parent);
        $request->setDataLabelingJob($dataLabelingJob);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateDataLabelingJob',
            DataLabelingJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a DataLabelingJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->dataLabelingJobName('[PROJECT]', '[LOCATION]', '[DATA_LABELING_JOB]');
     *     $response = $jobServiceClient->getDataLabelingJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the DataLabelingJob.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
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
     * @return \Google\Cloud\Aiplatform\V1beta1\DataLabelingJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDataLabelingJob($name, array $optionalArgs = [])
    {
        $request = new GetDataLabelingJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDataLabelingJob',
            DataLabelingJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists DataLabelingJobs in a Location.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $jobServiceClient->listDataLabelingJobs($formattedParent);
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
     *     $pagedResponse = $jobServiceClient->listDataLabelingJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent of the DataLabelingJob.
     *                             Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *
     *          Supported fields:
     *
     *            * `display_name` supports = and !=.
     *
     *            * `state` supports = and !=.
     *
     *          Some examples of using the filter are:
     *
     *           * `state="JOB_STATE_SUCCEEDED" AND display_name="my_job"`
     *
     *           * `state="JOB_STATE_RUNNING" OR display_name="my_job"`
     *
     *           * `NOT display_name="my_job"`
     *
     *           * `state="JOB_STATE_FAILED"`
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
     *          Mask specifying which fields to read. FieldMask represents a set of
     *          symbolic field paths. For example, the mask can be `paths: "name"`. The
     *          "name" here is a field in DataLabelingJob.
     *          If this field is not set, all fields of the DataLabelingJob are returned.
     *     @type string $orderBy
     *          A comma-separated list of fields to order by, sorted in ascending order by
     *          default.
     *          Use `desc` after a field name for descending.
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
    public function listDataLabelingJobs($parent, array $optionalArgs = [])
    {
        $request = new ListDataLabelingJobsRequest();
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
            'ListDataLabelingJobs',
            $optionalArgs,
            ListDataLabelingJobsResponse::class,
            $request
        );
    }

    /**
     * Deletes a DataLabelingJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->dataLabelingJobName('[PROJECT]', '[LOCATION]', '[DATA_LABELING_JOB]');
     *     $operationResponse = $jobServiceClient->deleteDataLabelingJob($formattedName);
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
     *     $operationResponse = $jobServiceClient->deleteDataLabelingJob($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $jobServiceClient->resumeOperation($operationName, 'deleteDataLabelingJob');
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
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the DataLabelingJob to be deleted.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
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
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteDataLabelingJob($name, array $optionalArgs = [])
    {
        $request = new DeleteDataLabelingJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteDataLabelingJob',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->dataLabelingJobName('[PROJECT]', '[LOCATION]', '[DATA_LABELING_JOB]');
     *     $jobServiceClient->cancelDataLabelingJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the DataLabelingJob.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
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
    public function cancelDataLabelingJob($name, array $optionalArgs = [])
    {
        $request = new CancelDataLabelingJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CancelDataLabelingJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a HyperparameterTuningJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $hyperparameterTuningJob = new HyperparameterTuningJob();
     *     $response = $jobServiceClient->createHyperparameterTuningJob($formattedParent, $hyperparameterTuningJob);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string                  $parent                  Required. The resource name of the Location to create the HyperparameterTuningJob in.
     *                                                         Format: `projects/{project}/locations/{location}`
     * @param HyperparameterTuningJob $hyperparameterTuningJob Required. The HyperparameterTuningJob to create.
     * @param array                   $optionalArgs            {
     *                                                         Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\HyperparameterTuningJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createHyperparameterTuningJob($parent, $hyperparameterTuningJob, array $optionalArgs = [])
    {
        $request = new CreateHyperparameterTuningJobRequest();
        $request->setParent($parent);
        $request->setHyperparameterTuningJob($hyperparameterTuningJob);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateHyperparameterTuningJob',
            HyperparameterTuningJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a HyperparameterTuningJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->hyperparameterTuningJobName('[PROJECT]', '[LOCATION]', '[HYPERPARAMETER_TUNING_JOB]');
     *     $response = $jobServiceClient->getHyperparameterTuningJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the HyperparameterTuningJob resource.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
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
     * @return \Google\Cloud\Aiplatform\V1beta1\HyperparameterTuningJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getHyperparameterTuningJob($name, array $optionalArgs = [])
    {
        $request = new GetHyperparameterTuningJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetHyperparameterTuningJob',
            HyperparameterTuningJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists HyperparameterTuningJobs in a Location.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $jobServiceClient->listHyperparameterTuningJobs($formattedParent);
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
     *     $pagedResponse = $jobServiceClient->listHyperparameterTuningJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Location to list the HyperparameterTuningJobs
     *                             from. Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *
     *          Supported fields:
     *
     *            * `display_name` supports = and !=.
     *
     *            * `state` supports = and !=.
     *
     *          Some examples of using the filter are:
     *
     *           * `state="JOB_STATE_SUCCEEDED" AND display_name="my_job"`
     *
     *           * `state="JOB_STATE_RUNNING" OR display_name="my_job"`
     *
     *           * `NOT display_name="my_job"`
     *
     *           * `state="JOB_STATE_FAILED"`
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
    public function listHyperparameterTuningJobs($parent, array $optionalArgs = [])
    {
        $request = new ListHyperparameterTuningJobsRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListHyperparameterTuningJobs',
            $optionalArgs,
            ListHyperparameterTuningJobsResponse::class,
            $request
        );
    }

    /**
     * Deletes a HyperparameterTuningJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->hyperparameterTuningJobName('[PROJECT]', '[LOCATION]', '[HYPERPARAMETER_TUNING_JOB]');
     *     $operationResponse = $jobServiceClient->deleteHyperparameterTuningJob($formattedName);
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
     *     $operationResponse = $jobServiceClient->deleteHyperparameterTuningJob($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $jobServiceClient->resumeOperation($operationName, 'deleteHyperparameterTuningJob');
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
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the HyperparameterTuningJob resource to be deleted.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
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
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteHyperparameterTuningJob($name, array $optionalArgs = [])
    {
        $request = new DeleteHyperparameterTuningJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteHyperparameterTuningJob',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Cancels a HyperparameterTuningJob.
     * Starts asynchronous cancellation on the HyperparameterTuningJob. The server
     * makes a best effort to cancel the job, but success is not
     * guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1beta1.JobService.GetHyperparameterTuningJob] or
     * other methods to check whether the cancellation succeeded or whether the
     * job completed despite cancellation. On successful cancellation,
     * the HyperparameterTuningJob is not deleted; instead it becomes a job with
     * a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
     * of 1, corresponding to `Code.CANCELLED`, and
     * [HyperparameterTuningJob.state][google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.state] is set to `CANCELLED`.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->hyperparameterTuningJobName('[PROJECT]', '[LOCATION]', '[HYPERPARAMETER_TUNING_JOB]');
     *     $jobServiceClient->cancelHyperparameterTuningJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the HyperparameterTuningJob to cancel.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
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
    public function cancelHyperparameterTuningJob($name, array $optionalArgs = [])
    {
        $request = new CancelHyperparameterTuningJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CancelHyperparameterTuningJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a BatchPredictionJob. A BatchPredictionJob once created will
     * right away be attempted to start.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $batchPredictionJob = new BatchPredictionJob();
     *     $response = $jobServiceClient->createBatchPredictionJob($formattedParent, $batchPredictionJob);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string             $parent             Required. The resource name of the Location to create the BatchPredictionJob in.
     *                                               Format: `projects/{project}/locations/{location}`
     * @param BatchPredictionJob $batchPredictionJob Required. The BatchPredictionJob to create.
     * @param array              $optionalArgs       {
     *                                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\BatchPredictionJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createBatchPredictionJob($parent, $batchPredictionJob, array $optionalArgs = [])
    {
        $request = new CreateBatchPredictionJobRequest();
        $request->setParent($parent);
        $request->setBatchPredictionJob($batchPredictionJob);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateBatchPredictionJob',
            BatchPredictionJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a BatchPredictionJob.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->batchPredictionJobName('[PROJECT]', '[LOCATION]', '[BATCH_PREDICTION_JOB]');
     *     $response = $jobServiceClient->getBatchPredictionJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the BatchPredictionJob resource.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
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
     * @return \Google\Cloud\Aiplatform\V1beta1\BatchPredictionJob
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getBatchPredictionJob($name, array $optionalArgs = [])
    {
        $request = new GetBatchPredictionJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetBatchPredictionJob',
            BatchPredictionJob::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists BatchPredictionJobs in a Location.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedParent = $jobServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $jobServiceClient->listBatchPredictionJobs($formattedParent);
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
     *     $pagedResponse = $jobServiceClient->listBatchPredictionJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Location to list the BatchPredictionJobs
     *                             from. Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          The standard list filter.
     *
     *          Supported fields:
     *
     *            * `display_name` supports = and !=.
     *
     *            * `state` supports = and !=.
     *
     *          Some examples of using the filter are:
     *
     *           * `state="JOB_STATE_SUCCEEDED" AND display_name="my_job"`
     *
     *           * `state="JOB_STATE_RUNNING" OR display_name="my_job"`
     *
     *           * `NOT display_name="my_job"`
     *
     *           * `state="JOB_STATE_FAILED"`
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
    public function listBatchPredictionJobs($parent, array $optionalArgs = [])
    {
        $request = new ListBatchPredictionJobsRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListBatchPredictionJobs',
            $optionalArgs,
            ListBatchPredictionJobsResponse::class,
            $request
        );
    }

    /**
     * Deletes a BatchPredictionJob. Can only be called on jobs that already
     * finished.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->batchPredictionJobName('[PROJECT]', '[LOCATION]', '[BATCH_PREDICTION_JOB]');
     *     $operationResponse = $jobServiceClient->deleteBatchPredictionJob($formattedName);
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
     *     $operationResponse = $jobServiceClient->deleteBatchPredictionJob($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $jobServiceClient->resumeOperation($operationName, 'deleteBatchPredictionJob');
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
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the BatchPredictionJob resource to be deleted.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
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
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteBatchPredictionJob($name, array $optionalArgs = [])
    {
        $request = new DeleteBatchPredictionJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteBatchPredictionJob',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Cancels a BatchPredictionJob.
     *
     * Starts asynchronous cancellation on the BatchPredictionJob. The server
     * makes the best effort to cancel the job, but success is not
     * guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1beta1.JobService.GetBatchPredictionJob] or
     * other methods to check whether the cancellation succeeded or whether the
     * job completed despite cancellation. On a successful cancellation,
     * the BatchPredictionJob is not deleted;instead its
     * [BatchPredictionJob.state][google.cloud.aiplatform.v1beta1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
     * outputted by the job are not deleted.
     *
     * Sample code:
     * ```
     * $jobServiceClient = new JobServiceClient();
     * try {
     *     $formattedName = $jobServiceClient->batchPredictionJobName('[PROJECT]', '[LOCATION]', '[BATCH_PREDICTION_JOB]');
     *     $jobServiceClient->cancelBatchPredictionJob($formattedName);
     * } finally {
     *     $jobServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The name of the BatchPredictionJob to cancel.
     *                     Format:
     *
     * `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
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
    public function cancelBatchPredictionJob($name, array $optionalArgs = [])
    {
        $request = new CancelBatchPredictionJobRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CancelBatchPredictionJob',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
