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
 * https://github.com/google/googleapis/blob/master/google/streetview/publish/v1/streetview_publish.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Streetview\Publish\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;
use Google\Streetview\Publish\V1\BatchDeletePhotosRequest;
use Google\Streetview\Publish\V1\BatchDeletePhotosResponse;
use Google\Streetview\Publish\V1\BatchGetPhotosRequest;
use Google\Streetview\Publish\V1\BatchGetPhotosResponse;
use Google\Streetview\Publish\V1\BatchUpdatePhotosRequest;
use Google\Streetview\Publish\V1\BatchUpdatePhotosResponse;
use Google\Streetview\Publish\V1\CreatePhotoRequest;
use Google\Streetview\Publish\V1\DeletePhotoRequest;
use Google\Streetview\Publish\V1\GetPhotoRequest;
use Google\Streetview\Publish\V1\ListPhotosRequest;
use Google\Streetview\Publish\V1\ListPhotosResponse;
use Google\Streetview\Publish\V1\Photo;
use Google\Streetview\Publish\V1\PhotoView;
use Google\Streetview\Publish\V1\UpdatePhotoRequest;
use Google\Streetview\Publish\V1\UploadRef;

/**
 * Service Description: Publishes and connects user-contributed photos on Street View.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
 * try {
 *     $response = $streetViewPublishServiceClient->startUpload();
 * } finally {
 *     $streetViewPublishServiceClient->close();
 * }
 * ```
 *
 * @experimental
 */
class StreetViewPublishServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.streetview.publish.v1.StreetViewPublishService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'streetviewpublish.googleapis.com';

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
        'https://www.googleapis.com/auth/streetviewpublish',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/street_view_publish_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/street_view_publish_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/street_view_publish_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/street_view_publish_service_rest_client_config.php',
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
     *           as "<uri>:<port>". Default 'streetviewpublish.googleapis.com:443'.
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
     * Creates an upload session to start uploading photo bytes. The method uses
     * the upload URL of the returned
     * [UploadRef][google.streetview.publish.v1.UploadRef] to upload the bytes for
     * the [Photo][google.streetview.publish.v1.Photo].
     *
     * In addition to the photo requirements shown in
     * https://support.google.com/maps/answer/7012050?hl=en&ref_topic=6275604,
     * the photo must meet the following requirements:
     *
     * * Photo Sphere XMP metadata must be included in the photo medadata. See
     * https://developers.google.com/streetview/spherical-metadata for the
     * required fields.
     * * The pixel size of the photo must meet the size requirements listed in
     * https://support.google.com/maps/answer/7012050?hl=en&ref_topic=6275604, and
     * the photo must be a full 360 horizontally.
     *
     * After the upload completes, the method uses
     * [UploadRef][google.streetview.publish.v1.UploadRef] with
     * [CreatePhoto][google.streetview.publish.v1.StreetViewPublishService.CreatePhoto]
     * to create the [Photo][google.streetview.publish.v1.Photo] object entry.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $response = $streetViewPublishServiceClient->startUpload();
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
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
     * @return \Google\Streetview\Publish\V1\UploadRef
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function startUpload(array $optionalArgs = [])
    {
        $request = new GPBEmpty();

        return $this->startCall(
            'StartUpload',
            UploadRef::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * After the client finishes uploading the photo with the returned
     * [UploadRef][google.streetview.publish.v1.UploadRef],
     * [CreatePhoto][google.streetview.publish.v1.StreetViewPublishService.CreatePhoto]
     * publishes the uploaded [Photo][google.streetview.publish.v1.Photo] to
     * Street View on Google Maps.
     *
     * Currently, the only way to set heading, pitch, and roll in CreatePhoto is
     * through the [Photo Sphere XMP
     * metadata](https://developers.google.com/streetview/spherical-metadata) in
     * the photo bytes. CreatePhoto ignores the `pose.heading`, `pose.pitch`,
     * `pose.roll`, `pose.altitude`, and `pose.level` fields in Pose.
     *
     * This method returns the following error codes:
     *
     * * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] if
     * the request is malformed or if the uploaded photo is not a 360 photo.
     * * [google.rpc.Code.NOT_FOUND][google.rpc.Code.NOT_FOUND] if the upload
     * reference does not exist.
     * * [google.rpc.Code.RESOURCE_EXHAUSTED][google.rpc.Code.RESOURCE_EXHAUSTED]
     * if the account has reached the storage limit.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photo = new Photo();
     *     $response = $streetViewPublishServiceClient->createPhoto($photo);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param Photo $photo        Required. Photo to create.
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
     * @return \Google\Streetview\Publish\V1\Photo
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createPhoto($photo, array $optionalArgs = [])
    {
        $request = new CreatePhotoRequest();
        $request->setPhoto($photo);

        return $this->startCall(
            'CreatePhoto',
            Photo::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the metadata of the specified
     * [Photo][google.streetview.publish.v1.Photo].
     *
     * This method returns the following error codes:
     *
     * * [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED] if
     * the requesting user did not create the requested
     * [Photo][google.streetview.publish.v1.Photo].
     * * [google.rpc.Code.NOT_FOUND][google.rpc.Code.NOT_FOUND] if the requested
     * [Photo][google.streetview.publish.v1.Photo] does not exist.
     * * [google.rpc.Code.UNAVAILABLE][google.rpc.Code.UNAVAILABLE] if the
     * requested [Photo][google.streetview.publish.v1.Photo] is still being
     * indexed.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photoId = '';
     *     $view = PhotoView::BASIC;
     *     $response = $streetViewPublishServiceClient->getPhoto($photoId, $view);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param string $photoId      Required. ID of the [Photo][google.streetview.publish.v1.Photo].
     * @param int    $view         Specifies if a download URL for the photo bytes should be returned in the
     *                             [Photo][google.streetview.publish.v1.Photo] response.
     *                             For allowed values, use constants defined on {@see \Google\Streetview\Publish\V1\PhotoView}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $languageCode
     *          The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *          information, see
     *          http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *          If language_code is unspecified, the user's language preference for Google
     *          services is used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Streetview\Publish\V1\Photo
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getPhoto($photoId, $view, array $optionalArgs = [])
    {
        $request = new GetPhotoRequest();
        $request->setPhotoId($photoId);
        $request->setView($view);
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'photo_id' => $request->getPhotoId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetPhoto',
            Photo::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the metadata of the specified
     * [Photo][google.streetview.publish.v1.Photo] batch.
     *
     * Note that if
     * [BatchGetPhotos][google.streetview.publish.v1.StreetViewPublishService.BatchGetPhotos]
     * fails, either critical fields are missing or there is an authentication
     * error. Even if
     * [BatchGetPhotos][google.streetview.publish.v1.StreetViewPublishService.BatchGetPhotos]
     * succeeds, individual photos in the batch may have failures.
     * These failures are specified in each
     * [PhotoResponse.status][google.streetview.publish.v1.PhotoResponse.status]
     * in
     * [BatchGetPhotosResponse.results][google.streetview.publish.v1.BatchGetPhotosResponse.results].
     * See
     * [GetPhoto][google.streetview.publish.v1.StreetViewPublishService.GetPhoto]
     * for specific failures that can occur per photo.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photoIds = [];
     *     $view = PhotoView::BASIC;
     *     $response = $streetViewPublishServiceClient->batchGetPhotos($photoIds, $view);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param string[] $photoIds     Required. IDs of the [Photos][google.streetview.publish.v1.Photo]. HTTP GET
     *                               requests require the following syntax for the URL query parameter:
     *                               `photoIds=<id1>&photoIds=<id2>&...`.
     * @param int      $view         Specifies if a download URL for the photo bytes should be returned in the
     *                               Photo response.
     *                               For allowed values, use constants defined on {@see \Google\Streetview\Publish\V1\PhotoView}
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type string $languageCode
     *          The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *          information, see
     *          http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *          If language_code is unspecified, the user's language preference for Google
     *          services is used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Streetview\Publish\V1\BatchGetPhotosResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchGetPhotos($photoIds, $view, array $optionalArgs = [])
    {
        $request = new BatchGetPhotosRequest();
        $request->setPhotoIds($photoIds);
        $request->setView($view);
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        return $this->startCall(
            'BatchGetPhotos',
            BatchGetPhotosResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the [Photos][google.streetview.publish.v1.Photo] that belong to
     * the user.
     *
     * <aside class="note"><b>Note:</b> Recently created photos that are still
     * being indexed are not returned in the response.</aside>
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $view = PhotoView::BASIC;
     *     $filter = '';
     *     // Iterate over pages of elements
     *     $pagedResponse = $streetViewPublishServiceClient->listPhotos($view, $filter);
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
     *     $pagedResponse = $streetViewPublishServiceClient->listPhotos($view, $filter);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param int    $view   Specifies if a download URL for the photos bytes should be returned in the
     *                       Photos response.
     *                       For allowed values, use constants defined on {@see \Google\Streetview\Publish\V1\PhotoView}
     * @param string $filter The filter expression. For example: `placeId=ChIJj61dQgK6j4AR4GeTYWZsKWw`.
     *
     * The only filter supported at the moment is `placeId`.
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
     *     @type string $languageCode
     *          The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *          information, see
     *          http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *          If language_code is unspecified, the user's language preference for Google
     *          services is used.
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
    public function listPhotos($view, $filter, array $optionalArgs = [])
    {
        $request = new ListPhotosRequest();
        $request->setView($view);
        $request->setFilter($filter);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        return $this->getPagedListResponse(
            'ListPhotos',
            $optionalArgs,
            ListPhotosResponse::class,
            $request
        );
    }

    /**
     * Updates the metadata of a [Photo][google.streetview.publish.v1.Photo], such
     * as pose, place association, connections, etc. Changing the pixels of a
     * photo is not supported.
     *
     * Only the fields specified in the
     * [updateMask][google.streetview.publish.v1.UpdatePhotoRequest.update_mask]
     * field are used. If `updateMask` is not present, the update applies to all
     * fields.
     *
     * This method returns the following error codes:
     *
     * * [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED] if
     * the requesting user did not create the requested photo.
     * * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] if
     * the request is malformed.
     * * [google.rpc.Code.NOT_FOUND][google.rpc.Code.NOT_FOUND] if the requested
     * photo does not exist.
     * * [google.rpc.Code.UNAVAILABLE][google.rpc.Code.UNAVAILABLE] if the
     * requested [Photo][google.streetview.publish.v1.Photo] is still being
     * indexed.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photo = new Photo();
     *     $updateMask = new FieldMask();
     *     $response = $streetViewPublishServiceClient->updatePhoto($photo, $updateMask);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param Photo     $photo      Required. [Photo][google.streetview.publish.v1.Photo] object containing the
     *                              new metadata.
     * @param FieldMask $updateMask Mask that identifies fields on the photo metadata to update.
     *                              If not present, the old [Photo][google.streetview.publish.v1.Photo]
     *                              metadata is entirely replaced with the
     *                              new [Photo][google.streetview.publish.v1.Photo] metadata in this request.
     *                              The update fails if invalid fields are specified. Multiple fields can be
     *                              specified in a comma-delimited list.
     *
     * The following fields are valid:
     *
     * * `pose.heading`
     * * `pose.latLngPair`
     * * `pose.pitch`
     * * `pose.roll`
     * * `pose.level`
     * * `pose.altitude`
     * * `connections`
     * * `places`
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
     * @return \Google\Streetview\Publish\V1\Photo
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updatePhoto($photo, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdatePhotoRequest();
        $request->setPhoto($photo);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'photo.photo_id.id' => $request->getPhoto()->getPhotoId()->getId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdatePhoto',
            Photo::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the metadata of [Photos][google.streetview.publish.v1.Photo], such
     * as pose, place association, connections, etc. Changing the pixels of photos
     * is not supported.
     *
     * Note that if
     * [BatchUpdatePhotos][google.streetview.publish.v1.StreetViewPublishService.BatchUpdatePhotos]
     * fails, either critical fields are missing or there is an authentication
     * error. Even if
     * [BatchUpdatePhotos][google.streetview.publish.v1.StreetViewPublishService.BatchUpdatePhotos]
     * succeeds, individual photos in the batch may have failures.
     * These failures are specified in each
     * [PhotoResponse.status][google.streetview.publish.v1.PhotoResponse.status]
     * in
     * [BatchUpdatePhotosResponse.results][google.streetview.publish.v1.BatchUpdatePhotosResponse.results].
     * See
     * [UpdatePhoto][google.streetview.publish.v1.StreetViewPublishService.UpdatePhoto]
     * for specific failures that can occur per photo.
     *
     * Only the fields specified in
     * [updateMask][google.streetview.publish.v1.UpdatePhotoRequest.update_mask]
     * field are used. If `updateMask` is not present, the update applies to all
     * fields.
     *
     * The number of
     * [UpdatePhotoRequest][google.streetview.publish.v1.UpdatePhotoRequest]
     * messages in a
     * [BatchUpdatePhotosRequest][google.streetview.publish.v1.BatchUpdatePhotosRequest]
     * must not exceed 20.
     *
     * <aside class="note"><b>Note:</b> To update
     * [Pose.altitude][google.streetview.publish.v1.Pose.altitude],
     * [Pose.latLngPair][google.streetview.publish.v1.Pose.lat_lng_pair] has to be
     * filled as well. Otherwise, the request will fail.</aside>
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $updatePhotoRequests = [];
     *     $response = $streetViewPublishServiceClient->batchUpdatePhotos($updatePhotoRequests);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param UpdatePhotoRequest[] $updatePhotoRequests Required. List of
     *                                                  [UpdatePhotoRequests][google.streetview.publish.v1.UpdatePhotoRequest].
     * @param array                $optionalArgs        {
     *                                                  Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Streetview\Publish\V1\BatchUpdatePhotosResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchUpdatePhotos($updatePhotoRequests, array $optionalArgs = [])
    {
        $request = new BatchUpdatePhotosRequest();
        $request->setUpdatePhotoRequests($updatePhotoRequests);

        return $this->startCall(
            'BatchUpdatePhotos',
            BatchUpdatePhotosResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a [Photo][google.streetview.publish.v1.Photo] and its metadata.
     *
     * This method returns the following error codes:
     *
     * * [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED] if
     * the requesting user did not create the requested photo.
     * * [google.rpc.Code.NOT_FOUND][google.rpc.Code.NOT_FOUND] if the photo ID
     * does not exist.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photoId = '';
     *     $streetViewPublishServiceClient->deletePhoto($photoId);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param string $photoId      Required. ID of the [Photo][google.streetview.publish.v1.Photo].
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
    public function deletePhoto($photoId, array $optionalArgs = [])
    {
        $request = new DeletePhotoRequest();
        $request->setPhotoId($photoId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'photo_id' => $request->getPhotoId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeletePhoto',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a list of [Photos][google.streetview.publish.v1.Photo] and their
     * metadata.
     *
     * Note that if
     * [BatchDeletePhotos][google.streetview.publish.v1.StreetViewPublishService.BatchDeletePhotos]
     * fails, either critical fields are missing or there was an authentication
     * error. Even if
     * [BatchDeletePhotos][google.streetview.publish.v1.StreetViewPublishService.BatchDeletePhotos]
     * succeeds, individual photos in the batch may have failures.
     * These failures are specified in each
     * [PhotoResponse.status][google.streetview.publish.v1.PhotoResponse.status]
     * in
     * [BatchDeletePhotosResponse.results][google.streetview.publish.v1.BatchDeletePhotosResponse.status].
     * See
     * [DeletePhoto][google.streetview.publish.v1.StreetViewPublishService.DeletePhoto]
     * for specific failures that can occur per photo.
     *
     * Sample code:
     * ```
     * $streetViewPublishServiceClient = new StreetViewPublishServiceClient();
     * try {
     *     $photoIds = [];
     *     $response = $streetViewPublishServiceClient->batchDeletePhotos($photoIds);
     * } finally {
     *     $streetViewPublishServiceClient->close();
     * }
     * ```
     *
     * @param string[] $photoIds     Required. IDs of the [Photos][google.streetview.publish.v1.Photo]. HTTP
     *                               GET requests require the following syntax for the URL query parameter:
     *                               `photoIds=<id1>&photoIds=<id2>&...`.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Streetview\Publish\V1\BatchDeletePhotosResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchDeletePhotos($photoIds, array $optionalArgs = [])
    {
        $request = new BatchDeletePhotosRequest();
        $request->setPhotoIds($photoIds);

        return $this->startCall(
            'BatchDeletePhotos',
            BatchDeletePhotosResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
