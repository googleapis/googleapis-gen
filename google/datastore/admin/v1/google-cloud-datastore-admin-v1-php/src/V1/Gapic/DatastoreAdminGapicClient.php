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
 * https://github.com/google/googleapis/blob/master/google/datastore/admin/v1/datastore_admin.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Datastore\Admin\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Datastore\Admin\V1\EntityFilter;
use Google\Datastore\Admin\V1\ExportEntitiesRequest;
use Google\Datastore\Admin\V1\ExportEntitiesResponse;
use Google\Datastore\Admin\V1\GetIndexRequest;
use Google\Datastore\Admin\V1\ImportEntitiesRequest;
use Google\Datastore\Admin\V1\Index;
use Google\Datastore\Admin\V1\ListIndexesRequest;
use Google\Datastore\Admin\V1\ListIndexesResponse;
use Google\LongRunning\Operation;

/**
 * Service Description: Google Cloud Datastore Admin API.
 *
 *
 * The Datastore Admin API provides several admin services for Cloud Datastore.
 *
 * -----------------------------------------------------------------------------
 * ## Concepts
 *
 * Project, namespace, kind, and entity as defined in the Google Cloud Datastore
 * API.
 *
 * Operation: An Operation represents work being performed in the background.
 *
 * EntityFilter: Allows specifying a subset of entities in a project. This is
 * specified as a combination of kinds and namespaces (either or both of which
 * may be all).
 *
 * -----------------------------------------------------------------------------
 * ## Services
 *
 * # Export/Import
 *
 * The Export/Import service provides the ability to copy all or a subset of
 * entities to/from Google Cloud Storage.
 *
 * Exported data may be imported into Cloud Datastore for any Google Cloud
 * Platform project. It is not restricted to the export source project. It is
 * possible to export from one project and then import into another.
 *
 * Exported data can also be loaded into Google BigQuery for analysis.
 *
 * Exports and imports are performed asynchronously. An Operation resource is
 * created for each export/import. The state (including any errors encountered)
 * of the export/import may be queried via the Operation resource.
 *
 * # Index
 *
 * The index service manages Cloud Datastore composite indexes.
 *
 * Index creation and deletion are performed asynchronously.
 * An Operation resource is created for each such asynchronous operation.
 * The state of the operation (including any errors encountered)
 * may be queried via the Operation resource.
 *
 * # Operation
 *
 * The Operations collection provides a record of actions performed for the
 * specified project (including any operations in progress). Operations are not
 * created directly but through calls on other collections or resources.
 *
 * An operation that is not yet done may be cancelled. The request to cancel is
 * asynchronous and the operation may continue to run for some time after the
 * request to cancel is made.
 *
 * An operation that is done may be deleted so that it is no longer listed as
 * part of the Operation collection.
 *
 * ListOperations returns all pending operations, but not completed operations.
 *
 * Operations are created by service DatastoreAdmin,
 * but are accessed via service google.longrunning.Operations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $datastoreAdminClient = new DatastoreAdminClient();
 * try {
 *     $projectId = '';
 *     $outputUrlPrefix = '';
 *     $operationResponse = $datastoreAdminClient->exportEntities($projectId, $outputUrlPrefix);
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
 *     $operationResponse = $datastoreAdminClient->exportEntities($projectId, $outputUrlPrefix);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $datastoreAdminClient->resumeOperation($operationName, 'exportEntities');
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
 *     $datastoreAdminClient->close();
 * }
 * ```
 *
 * @experimental
 */
class DatastoreAdminGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.datastore.admin.v1.DatastoreAdmin';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'datastore.googleapis.com';

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
        'https://www.googleapis.com/auth/datastore',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/datastore_admin_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/datastore_admin_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/datastore_admin_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/datastore_admin_rest_client_config.php',
                ],
            ],
        ];
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
     *           as "<uri>:<port>". Default 'datastore.googleapis.com:443'.
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
     * Exports a copy of all or a subset of entities from Google Cloud Datastore
     * to another storage system, such as Google Cloud Storage. Recent updates to
     * entities may not be reflected in the export. The export occurs in the
     * background and its progress can be monitored and managed via the
     * Operation resource that is created. The output of an export may only be
     * used once the associated operation is done. If an export operation is
     * cancelled before completion it may leave partial data behind in Google
     * Cloud Storage.
     *
     * Sample code:
     * ```
     * $datastoreAdminClient = new DatastoreAdminClient();
     * try {
     *     $projectId = '';
     *     $outputUrlPrefix = '';
     *     $operationResponse = $datastoreAdminClient->exportEntities($projectId, $outputUrlPrefix);
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
     *     $operationResponse = $datastoreAdminClient->exportEntities($projectId, $outputUrlPrefix);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datastoreAdminClient->resumeOperation($operationName, 'exportEntities');
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
     *     $datastoreAdminClient->close();
     * }
     * ```
     *
     * @param string $projectId       Required. Project ID against which to make the request.
     * @param string $outputUrlPrefix Required. Location for the export metadata and data files.
     *
     * The full resource URL of the external storage location. Currently, only
     * Google Cloud Storage is supported. So output_url_prefix should be of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the
     * name of the Cloud Storage bucket and `NAMESPACE_PATH` is an optional Cloud
     * Storage namespace path (this is not a Cloud Datastore namespace). For more
     * information about Cloud Storage namespace paths, see
     * [Object name
     * considerations](https://cloud.google.com/storage/docs/naming#object-considerations).
     *
     * The resulting files will be nested deeper than the specified URL prefix.
     * The final output URL will be provided in the
     * [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url] field. That
     * value should be used for subsequent ImportEntities operations.
     *
     * By nesting the data files deeper, the same Cloud Storage bucket can be used
     * in multiple ExportEntities operations without conflict.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type array $labels
     *          Client-assigned labels.
     *     @type EntityFilter $entityFilter
     *          Description of what data from the project is included in the export.
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
    public function exportEntities($projectId, $outputUrlPrefix, array $optionalArgs = [])
    {
        $request = new ExportEntitiesRequest();
        $request->setProjectId($projectId);
        $request->setOutputUrlPrefix($outputUrlPrefix);
        if (isset($optionalArgs['labels'])) {
            $request->setLabels($optionalArgs['labels']);
        }
        if (isset($optionalArgs['entityFilter'])) {
            $request->setEntityFilter($optionalArgs['entityFilter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'project_id' => $request->getProjectId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ExportEntities',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Imports entities into Google Cloud Datastore. Existing entities with the
     * same key are overwritten. The import occurs in the background and its
     * progress can be monitored and managed via the Operation resource that is
     * created. If an ImportEntities operation is cancelled, it is possible
     * that a subset of the data has already been imported to Cloud Datastore.
     *
     * Sample code:
     * ```
     * $datastoreAdminClient = new DatastoreAdminClient();
     * try {
     *     $projectId = '';
     *     $inputUrl = '';
     *     $operationResponse = $datastoreAdminClient->importEntities($projectId, $inputUrl);
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
     *     $operationResponse = $datastoreAdminClient->importEntities($projectId, $inputUrl);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $datastoreAdminClient->resumeOperation($operationName, 'importEntities');
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
     *     $datastoreAdminClient->close();
     * }
     * ```
     *
     * @param string $projectId Required. Project ID against which to make the request.
     * @param string $inputUrl  Required. The full resource URL of the external storage location. Currently, only
     *                          Google Cloud Storage is supported. So input_url should be of the form:
     *                          `gs://BUCKET_NAME[/NAMESPACE_PATH]/OVERALL_EXPORT_METADATA_FILE`, where
     *                          `BUCKET_NAME` is the name of the Cloud Storage bucket, `NAMESPACE_PATH` is
     *                          an optional Cloud Storage namespace path (this is not a Cloud Datastore
     *                          namespace), and `OVERALL_EXPORT_METADATA_FILE` is the metadata file written
     *                          by the ExportEntities operation. For more information about Cloud Storage
     *                          namespace paths, see
     *                          [Object name
     *                          considerations](https://cloud.google.com/storage/docs/naming#object-considerations).
     *
     * For more information, see
     * [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url].
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type array $labels
     *          Client-assigned labels.
     *     @type EntityFilter $entityFilter
     *          Optionally specify which kinds/namespaces are to be imported. If provided,
     *          the list must be a subset of the EntityFilter used in creating the export,
     *          otherwise a FAILED_PRECONDITION error will be returned. If no filter is
     *          specified then all entities from the export are imported.
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
    public function importEntities($projectId, $inputUrl, array $optionalArgs = [])
    {
        $request = new ImportEntitiesRequest();
        $request->setProjectId($projectId);
        $request->setInputUrl($inputUrl);
        if (isset($optionalArgs['labels'])) {
            $request->setLabels($optionalArgs['labels']);
        }
        if (isset($optionalArgs['entityFilter'])) {
            $request->setEntityFilter($optionalArgs['entityFilter']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'project_id' => $request->getProjectId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ImportEntities',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets an index.
     *
     * Sample code:
     * ```
     * $datastoreAdminClient = new DatastoreAdminClient();
     * try {
     *     $response = $datastoreAdminClient->getIndex();
     * } finally {
     *     $datastoreAdminClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $projectId
     *          Project ID against which to make the request.
     *     @type string $indexId
     *          The resource ID of the index to get.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Datastore\Admin\V1\Index
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getIndex(array $optionalArgs = [])
    {
        $request = new GetIndexRequest();
        if (isset($optionalArgs['projectId'])) {
            $request->setProjectId($optionalArgs['projectId']);
        }
        if (isset($optionalArgs['indexId'])) {
            $request->setIndexId($optionalArgs['indexId']);
        }

        return $this->startCall(
            'GetIndex',
            Index::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the indexes that match the specified filters.  Datastore uses an
     * eventually consistent query to fetch the list of indexes and may
     * occasionally return stale results.
     *
     * Sample code:
     * ```
     * $datastoreAdminClient = new DatastoreAdminClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $datastoreAdminClient->listIndexes();
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
     *     $pagedResponse = $datastoreAdminClient->listIndexes();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $datastoreAdminClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $projectId
     *          Project ID against which to make the request.
     *     @type string $filter
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
    public function listIndexes(array $optionalArgs = [])
    {
        $request = new ListIndexesRequest();
        if (isset($optionalArgs['projectId'])) {
            $request->setProjectId($optionalArgs['projectId']);
        }
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
          'project_id' => $request->getProjectId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListIndexes',
            $optionalArgs,
            ListIndexesResponse::class,
            $request
        );
    }
}
