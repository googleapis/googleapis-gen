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
 * https://github.com/google/googleapis/blob/master/google/cloud/bigquery/reservation/v1beta1/reservation.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\BigQuery\Reservation\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\BigQuery\Reservation\V1beta1\Assignment;
use Google\Cloud\BigQuery\Reservation\V1beta1\BiReservation;
use Google\Cloud\BigQuery\Reservation\V1beta1\CapacityCommitment;
use Google\Cloud\BigQuery\Reservation\V1beta1\CreateAssignmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\CreateCapacityCommitmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\CreateReservationRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\DeleteAssignmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\DeleteCapacityCommitmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\DeleteReservationRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\GetBiReservationRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\GetCapacityCommitmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\GetReservationRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListAssignmentsRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListAssignmentsResponse;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListCapacityCommitmentsRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListCapacityCommitmentsResponse;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListReservationsRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\ListReservationsResponse;
use Google\Cloud\BigQuery\Reservation\V1beta1\MergeCapacityCommitmentsRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\MoveAssignmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\Reservation;
use Google\Cloud\BigQuery\Reservation\V1beta1\SearchAssignmentsRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\SearchAssignmentsResponse;
use Google\Cloud\BigQuery\Reservation\V1beta1\SplitCapacityCommitmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\SplitCapacityCommitmentResponse;
use Google\Cloud\BigQuery\Reservation\V1beta1\UpdateBiReservationRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\UpdateCapacityCommitmentRequest;
use Google\Cloud\BigQuery\Reservation\V1beta1\UpdateReservationRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: This API allows users to manage their flat-rate BigQuery reservations.
 *
 * A reservation provides computational resource guarantees, in the form of
 * [slots](https://cloud.google.com/bigquery/docs/slots), to users. A slot is a
 * unit of computational power in BigQuery, and serves as the basic unit of
 * parallelism. In a scan of a multi-partitioned table, a single slot operates
 * on a single partition of the table. A reservation resource exists as a child
 * resource of the admin project and location, e.g.:
 *   `projects/myproject/locations/US/reservations/reservationName`.
 *
 * A capacity commitment is a way to purchase compute capacity for BigQuery jobs
 * (in the form of slots) with some committed period of usage. A capacity
 * commitment resource exists as a child resource of the admin project and
 * location, e.g.:
 *   `projects/myproject/locations/US/capacityCommitments/id`.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $reservationServiceClient = new ReservationServiceClient();
 * try {
 *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $response = $reservationServiceClient->createReservation($formattedParent);
 * } finally {
 *     $reservationServiceClient->close();
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
class ReservationServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.bigquery.reservation.v1beta1.ReservationService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'bigqueryreservation.googleapis.com';

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
        'https://www.googleapis.com/auth/bigquery',
        'https://www.googleapis.com/auth/cloud-platform',
    ];
    private static $assignmentNameTemplate;
    private static $biReservationNameTemplate;
    private static $capacityCommitmentNameTemplate;
    private static $locationNameTemplate;
    private static $reservationNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/reservation_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/reservation_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/reservation_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/reservation_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAssignmentNameTemplate()
    {
        if (null == self::$assignmentNameTemplate) {
            self::$assignmentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/reservations/{reservation}/assignments/{assignment}');
        }

        return self::$assignmentNameTemplate;
    }

    private static function getBiReservationNameTemplate()
    {
        if (null == self::$biReservationNameTemplate) {
            self::$biReservationNameTemplate = new PathTemplate('projects/{project}/locations/{location}/bireservation/{bireservation}');
        }

        return self::$biReservationNameTemplate;
    }

    private static function getCapacityCommitmentNameTemplate()
    {
        if (null == self::$capacityCommitmentNameTemplate) {
            self::$capacityCommitmentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/capacityCommitments/{capacity_commitment}');
        }

        return self::$capacityCommitmentNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getReservationNameTemplate()
    {
        if (null == self::$reservationNameTemplate) {
            self::$reservationNameTemplate = new PathTemplate('projects/{project}/locations/{location}/reservations/{reservation}');
        }

        return self::$reservationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'assignment' => self::getAssignmentNameTemplate(),
                'biReservation' => self::getBiReservationNameTemplate(),
                'capacityCommitment' => self::getCapacityCommitmentNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'reservation' => self::getReservationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a assignment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reservation
     * @param string $assignment
     *
     * @return string The formatted assignment resource.
     * @experimental
     */
    public static function assignmentName($project, $location, $reservation, $assignment)
    {
        return self::getAssignmentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'reservation' => $reservation,
            'assignment' => $assignment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a bi_reservation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $bireservation
     *
     * @return string The formatted bi_reservation resource.
     * @experimental
     */
    public static function biReservationName($project, $location, $bireservation)
    {
        return self::getBiReservationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'bireservation' => $bireservation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a capacity_commitment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $capacityCommitment
     *
     * @return string The formatted capacity_commitment resource.
     * @experimental
     */
    public static function capacityCommitmentName($project, $location, $capacityCommitment)
    {
        return self::getCapacityCommitmentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'capacity_commitment' => $capacityCommitment,
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
     * a reservation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reservation
     *
     * @return string The formatted reservation resource.
     * @experimental
     */
    public static function reservationName($project, $location, $reservation)
    {
        return self::getReservationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'reservation' => $reservation,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - assignment: projects/{project}/locations/{location}/reservations/{reservation}/assignments/{assignment}
     * - biReservation: projects/{project}/locations/{location}/bireservation/{bireservation}
     * - capacityCommitment: projects/{project}/locations/{location}/capacityCommitments/{capacity_commitment}
     * - location: projects/{project}/locations/{location}
     * - reservation: projects/{project}/locations/{location}/reservations/{reservation}.
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
     *           as "<uri>:<port>". Default 'bigqueryreservation.googleapis.com:443'.
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
     * Creates a new reservation resource.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $reservationServiceClient->createReservation($formattedParent);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Project, location. E.g.,
     *                             `projects/myproject/locations/US`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $reservationId
     *          The reservation ID. This field must only contain lower case alphanumeric
     *          characters or dash. Max length is 64 characters.
     *     @type Reservation $reservation
     *          Content of the new reservation to create.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\Reservation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createReservation($parent, array $optionalArgs = [])
    {
        $request = new CreateReservationRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['reservationId'])) {
            $request->setReservationId($optionalArgs['reservationId']);
        }
        if (isset($optionalArgs['reservation'])) {
            $request->setReservation($optionalArgs['reservation']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateReservation',
            Reservation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the reservations for the project in the specified location.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $reservationServiceClient->listReservations($formattedParent);
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
     *     $pagedResponse = $reservationServiceClient->listReservations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name containing project and location, e.g.:
     *                             `projects/myproject/locations/US`
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
     *          Can be used to filter out reservations based on names, capacity, etc, e.g.:
     *          filter="reservation.slot_capacity > 200"
     *          filter="reservation.name = \"*dev/*\""
     *          Advanced filtering syntax can be
     *          [here](https://cloud.google.com/logging/docs/view/advanced-filters).
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
    public function listReservations($parent, array $optionalArgs = [])
    {
        $request = new ListReservationsRequest();
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
            'ListReservations',
            $optionalArgs,
            ListReservationsResponse::class,
            $request
        );
    }

    /**
     * Returns information about the reservation.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->reservationName('[PROJECT]', '[LOCATION]', '[RESERVATION]');
     *     $response = $reservationServiceClient->getReservation($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the reservation to retrieve. E.g.,
     *                             `projects/myproject/locations/US/reservations/team1-prod`
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
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\Reservation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getReservation($name, array $optionalArgs = [])
    {
        $request = new GetReservationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetReservation',
            Reservation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a reservation.
     * Returns `google.rpc.Code.FAILED_PRECONDITION` when reservation has
     * assignments.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->reservationName('[PROJECT]', '[LOCATION]', '[RESERVATION]');
     *     $reservationServiceClient->deleteReservation($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the reservation to retrieve. E.g.,
     *                             `projects/myproject/locations/US/reservations/team1-prod`
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
    public function deleteReservation($name, array $optionalArgs = [])
    {
        $request = new DeleteReservationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteReservation',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates an existing reservation resource.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $response = $reservationServiceClient->updateReservation();
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type Reservation $reservation
     *          Content of the reservation to update.
     *     @type FieldMask $updateMask
     *          Standard field mask for the set of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\Reservation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateReservation(array $optionalArgs = [])
    {
        $request = new UpdateReservationRequest();
        if (isset($optionalArgs['reservation'])) {
            $request->setReservation($optionalArgs['reservation']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'reservation.name' => $request->getReservation()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateReservation',
            Reservation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new capacity commitment resource.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $reservationServiceClient->createCapacityCommitment($formattedParent);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Resource name of the parent reservation. E.g.,
     *                             `projects/myproject/locations/US`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type CapacityCommitment $capacityCommitment
     *          Content of the capacity commitment to create.
     *     @type bool $enforceSingleAdminProjectPerOrg
     *          If true, fail the request if another project in the organization has a
     *          capacity commitment.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\CapacityCommitment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createCapacityCommitment($parent, array $optionalArgs = [])
    {
        $request = new CreateCapacityCommitmentRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['capacityCommitment'])) {
            $request->setCapacityCommitment($optionalArgs['capacityCommitment']);
        }
        if (isset($optionalArgs['enforceSingleAdminProjectPerOrg'])) {
            $request->setEnforceSingleAdminProjectPerOrg($optionalArgs['enforceSingleAdminProjectPerOrg']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateCapacityCommitment',
            CapacityCommitment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the capacity commitments for the admin project.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $reservationServiceClient->listCapacityCommitments($formattedParent);
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
     *     $pagedResponse = $reservationServiceClient->listCapacityCommitments($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Resource name of the parent reservation. E.g.,
     *                             `projects/myproject/locations/US`
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
    public function listCapacityCommitments($parent, array $optionalArgs = [])
    {
        $request = new ListCapacityCommitmentsRequest();
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
            'ListCapacityCommitments',
            $optionalArgs,
            ListCapacityCommitmentsResponse::class,
            $request
        );
    }

    /**
     * Returns information about the capacity commitment.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->capacityCommitmentName('[PROJECT]', '[LOCATION]', '[CAPACITY_COMMITMENT]');
     *     $response = $reservationServiceClient->getCapacityCommitment($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the capacity commitment to retrieve. E.g.,
     *                             `projects/myproject/locations/US/capacityCommitments/123`
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
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\CapacityCommitment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getCapacityCommitment($name, array $optionalArgs = [])
    {
        $request = new GetCapacityCommitmentRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetCapacityCommitment',
            CapacityCommitment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a capacity commitment. Attempting to delete capacity commitment
     * before its commitment_end_time will fail with the error code
     * `google.rpc.Code.FAILED_PRECONDITION`.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->capacityCommitmentName('[PROJECT]', '[LOCATION]', '[CAPACITY_COMMITMENT]');
     *     $reservationServiceClient->deleteCapacityCommitment($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the capacity commitment to delete. E.g.,
     *                             `projects/myproject/locations/US/capacityCommitments/123`
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
    public function deleteCapacityCommitment($name, array $optionalArgs = [])
    {
        $request = new DeleteCapacityCommitmentRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteCapacityCommitment',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates an existing capacity commitment.
     *
     * Only `plan` and `renewal_plan` fields can be updated.
     *
     * Plan can only be changed to a plan of a longer commitment period.
     * Attempting to change to a plan with shorter commitment period will fail
     * with the error code `google.rpc.Code.FAILED_PRECONDITION`.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $response = $reservationServiceClient->updateCapacityCommitment();
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type CapacityCommitment $capacityCommitment
     *          Content of the capacity commitment to update.
     *     @type FieldMask $updateMask
     *          Standard field mask for the set of fields to be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\CapacityCommitment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateCapacityCommitment(array $optionalArgs = [])
    {
        $request = new UpdateCapacityCommitmentRequest();
        if (isset($optionalArgs['capacityCommitment'])) {
            $request->setCapacityCommitment($optionalArgs['capacityCommitment']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'capacity_commitment.name' => $request->getCapacityCommitment()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateCapacityCommitment',
            CapacityCommitment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Splits capacity commitment to two commitments of the same plan and
     * `commitment_end_time`.
     *
     * A common use case is to enable downgrading commitments.
     *
     * For example, in order to downgrade from 10000 slots to 8000, you might
     * split a 10000 capacity commitment into commitments of 2000 and 8000. Then,
     * you would change the plan of the first one to `FLEX` and then delete it.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->capacityCommitmentName('[PROJECT]', '[LOCATION]', '[CAPACITY_COMMITMENT]');
     *     $response = $reservationServiceClient->splitCapacityCommitment($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name e.g.,:
     *                             `projects/myproject/locations/US/capacityCommitments/123`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $slotCount
     *          Number of slots in the capacity commitment after the split.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\SplitCapacityCommitmentResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function splitCapacityCommitment($name, array $optionalArgs = [])
    {
        $request = new SplitCapacityCommitmentRequest();
        $request->setName($name);
        if (isset($optionalArgs['slotCount'])) {
            $request->setSlotCount($optionalArgs['slotCount']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SplitCapacityCommitment',
            SplitCapacityCommitmentResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Merges capacity commitments of the same plan into a single commitment.
     *
     * The resulting capacity commitment has the greater commitment_end_time
     * out of the to-be-merged capacity commitments.
     *
     * Attempting to merge capacity commitments of different plan will fail
     * with the error code `google.rpc.Code.FAILED_PRECONDITION`.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $response = $reservationServiceClient->mergeCapacityCommitments();
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $parent
     *          Parent resource that identifies admin project and location e.g.,
     *           `projects/myproject/locations/us`
     *     @type string[] $capacityCommitmentIds
     *          Ids of capacity commitments to merge.
     *          These capacity commitments must exist under admin project and location
     *          specified in the parent.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\CapacityCommitment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function mergeCapacityCommitments(array $optionalArgs = [])
    {
        $request = new MergeCapacityCommitmentsRequest();
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
        }
        if (isset($optionalArgs['capacityCommitmentIds'])) {
            $request->setCapacityCommitmentIds($optionalArgs['capacityCommitmentIds']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MergeCapacityCommitments',
            CapacityCommitment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates an assignment object which allows the given project to submit jobs
     * of a certain type using slots from the specified reservation.
     *
     * Currently a
     * resource (project, folder, organization) can only have one assignment per
     * each (job_type, location) combination, and that reservation will be used
     * for all jobs of the matching type.
     *
     * Different assignments can be created on different levels of the
     * projects, folders or organization hierarchy.  During query execution,
     * the assignment is looked up at the project, folder and organization levels
     * in that order. The first assignment found is applied to the query.
     *
     * When creating assignments, it does not matter if other assignments exist at
     * higher levels.
     *
     * Example:
     *
     * * The organization `organizationA` contains two projects, `project1`
     *   and `project2`.
     * * Assignments for all three entities (`organizationA`, `project1`, and
     *   `project2`) could all be created and mapped to the same or different
     *   reservations.
     *
     * Returns `google.rpc.Code.PERMISSION_DENIED` if user does not have
     * 'bigquery.admin' permissions on the project using the reservation
     * and the project that owns this reservation.
     *
     * Returns `google.rpc.Code.INVALID_ARGUMENT` when location of the assignment
     * does not match location of the reservation.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->reservationName('[PROJECT]', '[LOCATION]', '[RESERVATION]');
     *     $response = $reservationServiceClient->createAssignment($formattedParent);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name of the assignment
     *                             E.g. `projects/myproject/locations/US/reservations/team1-prod`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type Assignment $assignment
     *          Assignment resource to create.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\Assignment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createAssignment($parent, array $optionalArgs = [])
    {
        $request = new CreateAssignmentRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['assignment'])) {
            $request->setAssignment($optionalArgs['assignment']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateAssignment',
            Assignment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists assignments.
     *
     * Only explicitly created assignments will be returned.
     *
     * Example:
     *
     * * Organization `organizationA` contains two projects, `project1` and
     *   `project2`.
     * * Reservation `res1` exists and was created previously.
     * * CreateAssignment was used previously to define the following
     *   associations between entities and reservations: `<organizationA, res1>`
     *   and `<project1, res1>`
     *
     * In this example, ListAssignments will just return the above two assignments
     * for reservation `res1`, and no expansion/merge will happen.
     *
     * The wildcard "-" can be used for
     * reservations in the request. In that case all assignments belongs to the
     * specified project and location will be listed.
     *
     * **Note** "-" cannot be used for projects nor locations.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->reservationName('[PROJECT]', '[LOCATION]', '[RESERVATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $reservationServiceClient->listAssignments($formattedParent);
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
     *     $pagedResponse = $reservationServiceClient->listAssignments($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource name e.g.:
     *
     * `projects/myproject/locations/US/reservations/team1-prod`
     *
     * Or:
     *
     * `projects/myproject/locations/US/reservations/-`
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
    public function listAssignments($parent, array $optionalArgs = [])
    {
        $request = new ListAssignmentsRequest();
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
            'ListAssignments',
            $optionalArgs,
            ListAssignmentsResponse::class,
            $request
        );
    }

    /**
     * Deletes a assignment. No expansion will happen.
     *
     * Example:
     *
     * * Organization `organizationA` contains two projects, `project1` and
     *   `project2`.
     * * Reservation `res1` exists and was created previously.
     * * CreateAssignment was used previously to define the following
     *   associations between entities and reservations: `<organizationA, res1>`
     *   and `<project1, res1>`
     *
     * In this example, deletion of the `<organizationA, res1>` assignment won't
     * affect the other assignment `<project1, res1>`. After said deletion,
     * queries from `project1` will still use `res1` while queries from
     * `project2` will switch to use on-demand mode.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->assignmentName('[PROJECT]', '[LOCATION]', '[RESERVATION]', '[ASSIGNMENT]');
     *     $reservationServiceClient->deleteAssignment($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the resource, e.g.
     *                             `projects/myproject/locations/US/reservations/team1-prod/assignments/123`
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
    public function deleteAssignment($name, array $optionalArgs = [])
    {
        $request = new DeleteAssignmentRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteAssignment',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Looks up assignments for a specified resource for a particular region.
     * If the request is about a project:.
     *
     * 1. Assignments created on the project will be returned if they exist.
     * 2. Otherwise assignments created on the closest ancestor will be
     *    returned.
     * 3. Assignments for different JobTypes will all be returned.
     *
     * The same logic applies if the request is about a folder.
     *
     * If the request is about an organization, then assignments created on the
     * organization will be returned (organization doesn't have ancestors).
     *
     * Comparing to ListAssignments, there are some behavior
     * differences:
     *
     * 1. permission on the assignee will be verified in this API.
     * 2. Hierarchy lookup (project->folder->organization) happens in this API.
     * 3. Parent here is `projects/&#42;/locations/*`, instead of
     *    `projects/&#42;/locations/*reservations/*`.
     *
     * **Note** "-" cannot be used for projects
     * nor locations.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedParent = $reservationServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $reservationServiceClient->searchAssignments($formattedParent);
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
     *     $pagedResponse = $reservationServiceClient->searchAssignments($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the admin project(containing project and
     *                             location), e.g.:
     *                             `projects/myproject/locations/US`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $query
     *          Please specify resource name as assignee in the query.
     *
     *          Examples:
     *
     *          * `assignee=projects/myproject`
     *          * `assignee=folders/123`
     *          * `assignee=organizations/456`
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
    public function searchAssignments($parent, array $optionalArgs = [])
    {
        $request = new SearchAssignmentsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['query'])) {
            $request->setQuery($optionalArgs['query']);
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
            'SearchAssignments',
            $optionalArgs,
            SearchAssignmentsResponse::class,
            $request
        );
    }

    /**
     * Moves an assignment under a new reservation.
     *
     * This differs from removing an existing assignment and recreating a new one
     * by providing a transactional change that ensures an assignee always has an
     * associated reservation.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->assignmentName('[PROJECT]', '[LOCATION]', '[RESERVATION]', '[ASSIGNMENT]');
     *     $response = $reservationServiceClient->moveAssignment($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the assignment,
     *                             e.g.
     *                             `projects/myproject/locations/US/reservations/team1-prod/assignments/123`
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $destinationId
     *          The new reservation ID, e.g.:
     *            `projects/myotherproject/locations/US/reservations/team2-prod`
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\Assignment
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function moveAssignment($name, array $optionalArgs = [])
    {
        $request = new MoveAssignmentRequest();
        $request->setName($name);
        if (isset($optionalArgs['destinationId'])) {
            $request->setDestinationId($optionalArgs['destinationId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'MoveAssignment',
            Assignment::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves a BI reservation.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $formattedName = $reservationServiceClient->biReservationName('[PROJECT]', '[LOCATION]', '[BIRESERVATION]');
     *     $response = $reservationServiceClient->getBiReservation($formattedName);
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the requested reservation, for example:
     *                             `projects/{project_id}/locations/{location_id}/bireservation`
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
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\BiReservation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getBiReservation($name, array $optionalArgs = [])
    {
        $request = new GetBiReservationRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetBiReservation',
            BiReservation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates a BI reservation.
     *
     * Only fields specified in the `field_mask` are updated.
     *
     * A singleton BI reservation always exists with default size 0.
     * In order to reserve BI capacity it needs to be updated to an amount
     * greater than 0. In order to release BI capacity reservation size
     * must be set to 0.
     *
     * Sample code:
     * ```
     * $reservationServiceClient = new ReservationServiceClient();
     * try {
     *     $response = $reservationServiceClient->updateBiReservation();
     * } finally {
     *     $reservationServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type BiReservation $reservation
     *          A reservation to update.
     *     @type FieldMask $updateMask
     *          A list of fields to be updated in this request.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1beta1\BiReservation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateBiReservation(array $optionalArgs = [])
    {
        $request = new UpdateBiReservationRequest();
        if (isset($optionalArgs['reservation'])) {
            $request->setReservation($optionalArgs['reservation']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'reservation.name' => $request->getReservation()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateBiReservation',
            BiReservation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
