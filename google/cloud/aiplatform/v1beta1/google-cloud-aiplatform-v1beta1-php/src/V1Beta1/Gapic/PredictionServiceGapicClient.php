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
 * https://github.com/google/googleapis/blob/master/google/cloud/aiplatform/v1beta1/prediction_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Aiplatform\V1Beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Aiplatform\V1beta1\ExplainRequest;
use Google\Cloud\Aiplatform\V1beta1\ExplainResponse;
use Google\Cloud\Aiplatform\V1beta1\PredictRequest;
use Google\Cloud\Aiplatform\V1beta1\PredictResponse;
use Google\Protobuf\Value;

/**
 * Service Description: A service for online predictions and explanations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $predictionServiceClient = new PredictionServiceClient();
 * try {
 *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
 *     $instances = [];
 *     $response = $predictionServiceClient->predict($formattedEndpoint, $instances);
 * } finally {
 *     $predictionServiceClient->close();
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
class PredictionServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1beta1.PredictionService';

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
    private static $endpointNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/prediction_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/prediction_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/prediction_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/prediction_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEndpointNameTemplate()
    {
        if (null == self::$endpointNameTemplate) {
            self::$endpointNameTemplate = new PathTemplate('projects/{project}/locations/{location}/endpoints/{endpoint}');
        }

        return self::$endpointNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'endpoint' => self::getEndpointNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     * @experimental
     */
    public static function endpointName($project, $location, $endpoint)
    {
        return self::getEndpointNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}.
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
    }

    /**
     * Perform an online prediction.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $instances = [];
     *     $response = $predictionServiceClient->predict($formattedEndpoint, $instances);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string  $endpoint     Required. The name of the Endpoint requested to serve the prediction.
     *                              Format:
     *                              `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param Value[] $instances    Required. The instances that are the input to the prediction call.
     *                              A DeployedModel may have an upper limit on the number of instances it
     *                              supports per request, and when it is exceeded the prediction call errors
     *                              in case of AutoML Models, or, in case of customer created Models, the
     *                              behaviour is as documented by that Model.
     *                              The schema of any single instance may be specified via Endpoint's
     *                              DeployedModels' [Model's][google.cloud.aiplatform.v1beta1.DeployedModel.model]
     *                              [PredictSchemata's][google.cloud.aiplatform.v1beta1.Model.predict_schemata]
     *                              [instance_schema_uri][google.cloud.aiplatform.v1beta1.PredictSchemata.instance_schema_uri].
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type Value $parameters
     *          The parameters that govern the prediction. The schema of the parameters may
     *          be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1beta1.DeployedModel.model]
     *          [PredictSchemata's][google.cloud.aiplatform.v1beta1.Model.predict_schemata]
     *          [parameters_schema_uri][google.cloud.aiplatform.v1beta1.PredictSchemata.parameters_schema_uri].
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\PredictResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function predict($endpoint, $instances, array $optionalArgs = [])
    {
        $request = new PredictRequest();
        $request->setEndpoint($endpoint);
        $request->setInstances($instances);
        if (isset($optionalArgs['parameters'])) {
            $request->setParameters($optionalArgs['parameters']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'endpoint' => $request->getEndpoint(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'Predict',
            PredictResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Perform an online explanation.
     *
     * If [deployed_model_id][google.cloud.aiplatform.v1beta1.ExplainRequest.deployed_model_id] is specified,
     * the corresponding DeployModel must have
     * [explanation_spec][google.cloud.aiplatform.v1beta1.DeployedModel.explanation_spec]
     * populated. If [deployed_model_id][google.cloud.aiplatform.v1beta1.ExplainRequest.deployed_model_id]
     * is not specified, all DeployedModels must have
     * [explanation_spec][google.cloud.aiplatform.v1beta1.DeployedModel.explanation_spec]
     * populated. Only deployed AutoML tabular Models have
     * explanation_spec.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $instances = [];
     *     $response = $predictionServiceClient->explain($formattedEndpoint, $instances);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string  $endpoint     Required. The name of the Endpoint requested to serve the explanation.
     *                              Format:
     *                              `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param Value[] $instances    Required. The instances that are the input to the explanation call.
     *                              A DeployedModel may have an upper limit on the number of instances it
     *                              supports per request, and when it is exceeded the explanation call errors
     *                              in case of AutoML Models, or, in case of customer created Models, the
     *                              behaviour is as documented by that Model.
     *                              The schema of any single instance may be specified via Endpoint's
     *                              DeployedModels' [Model's][google.cloud.aiplatform.v1beta1.DeployedModel.model]
     *                              [PredictSchemata's][google.cloud.aiplatform.v1beta1.Model.predict_schemata]
     *                              [instance_schema_uri][google.cloud.aiplatform.v1beta1.PredictSchemata.instance_schema_uri].
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type Value $parameters
     *          The parameters that govern the prediction. The schema of the parameters may
     *          be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1beta1.DeployedModel.model]
     *          [PredictSchemata's][google.cloud.aiplatform.v1beta1.Model.predict_schemata]
     *          [parameters_schema_uri][google.cloud.aiplatform.v1beta1.PredictSchemata.parameters_schema_uri].
     *     @type string $deployedModelId
     *          If specified, this ExplainRequest will be served by the chosen
     *          DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1beta1.Endpoint.traffic_split].
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Aiplatform\V1beta1\ExplainResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function explain($endpoint, $instances, array $optionalArgs = [])
    {
        $request = new ExplainRequest();
        $request->setEndpoint($endpoint);
        $request->setInstances($instances);
        if (isset($optionalArgs['parameters'])) {
            $request->setParameters($optionalArgs['parameters']);
        }
        if (isset($optionalArgs['deployedModelId'])) {
            $request->setDeployedModelId($optionalArgs['deployedModelId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'endpoint' => $request->getEndpoint(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'Explain',
            ExplainResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
