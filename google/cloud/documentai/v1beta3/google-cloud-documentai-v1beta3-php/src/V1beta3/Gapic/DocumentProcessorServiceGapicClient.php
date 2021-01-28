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
 * https://github.com/google/googleapis/blob/master/google/cloud/documentai/v1beta3/document_processor_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\DocumentAi\V1beta3\Gapic;

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
use Google\Cloud\DocumentAI\V1beta3\BatchProcessRequest;
use Google\Cloud\DocumentAI\V1beta3\BatchProcessRequest\BatchInputConfig;
use Google\Cloud\DocumentAI\V1beta3\BatchProcessRequest\BatchOutputConfig;
use Google\Cloud\DocumentAI\V1beta3\Document;
use Google\Cloud\DocumentAI\V1beta3\ProcessRequest;
use Google\Cloud\DocumentAI\V1beta3\ProcessResponse;
use Google\Cloud\DocumentAI\V1beta3\ReviewDocumentRequest;
use Google\LongRunning\Operation;

/**
 * Service Description: Service to call Cloud DocumentAI to process documents according to the
 * processor's definition. Processors are built using state-of-the-art Google
 * AI such as natural language, computer vision, and translation to extract
 * structured information from unstructured or semi-structured documents.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $documentProcessorServiceClient = new DocumentProcessorServiceClient();
 * try {
 *     $formattedName = $documentProcessorServiceClient->processorName('[PROJECT]', '[LOCATION]', '[PROCESSOR]');
 *     $response = $documentProcessorServiceClient->processDocument($formattedName);
 * } finally {
 *     $documentProcessorServiceClient->close();
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
class DocumentProcessorServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.documentai.v1beta3.DocumentProcessorService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'us-documentai.googleapis.com';

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
    private static $humanReviewConfigNameTemplate;
    private static $processorNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/document_processor_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/document_processor_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/document_processor_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/document_processor_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getHumanReviewConfigNameTemplate()
    {
        if (null == self::$humanReviewConfigNameTemplate) {
            self::$humanReviewConfigNameTemplate = new PathTemplate('projects/{project}/locations/{location}/processors/{processor}/humanReviewConfig');
        }

        return self::$humanReviewConfigNameTemplate;
    }

    private static function getProcessorNameTemplate()
    {
        if (null == self::$processorNameTemplate) {
            self::$processorNameTemplate = new PathTemplate('projects/{project}/locations/{location}/processors/{processor}');
        }

        return self::$processorNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'humanReviewConfig' => self::getHumanReviewConfigNameTemplate(),
                'processor' => self::getProcessorNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a human_review_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $processor
     *
     * @return string The formatted human_review_config resource.
     * @experimental
     */
    public static function humanReviewConfigName($project, $location, $processor)
    {
        return self::getHumanReviewConfigNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'processor' => $processor,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a processor resource.
     *
     * @param string $project
     * @param string $location
     * @param string $processor
     *
     * @return string The formatted processor resource.
     * @experimental
     */
    public static function processorName($project, $location, $processor)
    {
        return self::getProcessorNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'processor' => $processor,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - humanReviewConfig: projects/{project}/locations/{location}/processors/{processor}/humanReviewConfig
     * - processor: projects/{project}/locations/{location}/processors/{processor}.
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
     *           as "<uri>:<port>". Default 'us-documentai.googleapis.com:443'.
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
     * Processes a single document.
     *
     * Sample code:
     * ```
     * $documentProcessorServiceClient = new DocumentProcessorServiceClient();
     * try {
     *     $formattedName = $documentProcessorServiceClient->processorName('[PROJECT]', '[LOCATION]', '[PROCESSOR]');
     *     $response = $documentProcessorServiceClient->processDocument($formattedName);
     * } finally {
     *     $documentProcessorServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The processor resource name.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type Document $document
     *          The document payload, the [content] and [mime_type] fields must be set.
     *     @type bool $skipHumanReview
     *          Whether Human Review feature should be skipped for this request. Default to
     *          false.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DocumentAI\V1beta3\ProcessResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function processDocument($name, array $optionalArgs = [])
    {
        $request = new ProcessRequest();
        $request->setName($name);
        if (isset($optionalArgs['document'])) {
            $request->setDocument($optionalArgs['document']);
        }
        if (isset($optionalArgs['skipHumanReview'])) {
            $request->setSkipHumanReview($optionalArgs['skipHumanReview']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ProcessDocument',
            ProcessResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * LRO endpoint to batch process many documents. The output is written
     * to Cloud Storage as JSON in the [Document] format.
     *
     * Sample code:
     * ```
     * $documentProcessorServiceClient = new DocumentProcessorServiceClient();
     * try {
     *     $formattedName = $documentProcessorServiceClient->processorName('[PROJECT]', '[LOCATION]', '[PROCESSOR]');
     *     $operationResponse = $documentProcessorServiceClient->batchProcessDocuments($formattedName);
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
     *     $operationResponse = $documentProcessorServiceClient->batchProcessDocuments($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $documentProcessorServiceClient->resumeOperation($operationName, 'batchProcessDocuments');
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
     *     $documentProcessorServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The processor resource name.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type BatchInputConfig[] $inputConfigs
     *          The input config for each single document in the batch process.
     *     @type BatchOutputConfig $outputConfig
     *          The overall output config for batch process.
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
    public function batchProcessDocuments($name, array $optionalArgs = [])
    {
        $request = new BatchProcessRequest();
        $request->setName($name);
        if (isset($optionalArgs['inputConfigs'])) {
            $request->setInputConfigs($optionalArgs['inputConfigs']);
        }
        if (isset($optionalArgs['outputConfig'])) {
            $request->setOutputConfig($optionalArgs['outputConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'BatchProcessDocuments',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Send a document for Human Review. The input document should be processed by
     * the specified processor.
     *
     * Sample code:
     * ```
     * $documentProcessorServiceClient = new DocumentProcessorServiceClient();
     * try {
     *     $formattedHumanReviewConfig = $documentProcessorServiceClient->humanReviewConfigName('[PROJECT]', '[LOCATION]', '[PROCESSOR]');
     *     $operationResponse = $documentProcessorServiceClient->reviewDocument($formattedHumanReviewConfig);
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
     *     $operationResponse = $documentProcessorServiceClient->reviewDocument($formattedHumanReviewConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $documentProcessorServiceClient->resumeOperation($operationName, 'reviewDocument');
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
     *     $documentProcessorServiceClient->close();
     * }
     * ```
     *
     * @param string $humanReviewConfig Required. The resource name of the HumanReviewConfig that the document will be
     *                                  reviewed with.
     * @param array  $optionalArgs      {
     *                                  Optional.
     *
     *     @type Document $document
     *          The document that needs human review.
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
    public function reviewDocument($humanReviewConfig, array $optionalArgs = [])
    {
        $request = new ReviewDocumentRequest();
        $request->setHumanReviewConfig($humanReviewConfig);
        if (isset($optionalArgs['document'])) {
            $request->setDocument($optionalArgs['document']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'human_review_config' => $request->getHumanReviewConfig(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ReviewDocument',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
