// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/vision/v1/image_annotator.proto

package com.google.cloud.vision.v1;

public interface ImageSourceOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.vision.v1.ImageSource)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * **Use `image_uri` instead.**
   * The Google Cloud Storage  URI of the form
   * `gs://bucket_name/object_name`. Object versioning is not supported. See
   * [Google Cloud Storage Request
   * URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
   * </pre>
   *
   * <code>string gcs_image_uri = 1;</code>
   * @return The gcsImageUri.
   */
  java.lang.String getGcsImageUri();
  /**
   * <pre>
   * **Use `image_uri` instead.**
   * The Google Cloud Storage  URI of the form
   * `gs://bucket_name/object_name`. Object versioning is not supported. See
   * [Google Cloud Storage Request
   * URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
   * </pre>
   *
   * <code>string gcs_image_uri = 1;</code>
   * @return The bytes for gcsImageUri.
   */
  com.google.protobuf.ByteString
      getGcsImageUriBytes();

  /**
   * <pre>
   * The URI of the source image. Can be either:
   * 1. A Google Cloud Storage URI of the form
   *    `gs://bucket_name/object_name`. Object versioning is not supported. See
   *    [Google Cloud Storage Request
   *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
   *    info.
   * 2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
   *    HTTP/HTTPS URLs, Google cannot guarantee that the request will be
   *    completed. Your request may fail if the specified host denies the
   *    request (e.g. due to request throttling or DOS prevention), or if Google
   *    throttles requests to the site for abuse prevention. You should not
   *    depend on externally-hosted images for production applications.
   * When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
   * precedence.
   * </pre>
   *
   * <code>string image_uri = 2;</code>
   * @return The imageUri.
   */
  java.lang.String getImageUri();
  /**
   * <pre>
   * The URI of the source image. Can be either:
   * 1. A Google Cloud Storage URI of the form
   *    `gs://bucket_name/object_name`. Object versioning is not supported. See
   *    [Google Cloud Storage Request
   *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
   *    info.
   * 2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
   *    HTTP/HTTPS URLs, Google cannot guarantee that the request will be
   *    completed. Your request may fail if the specified host denies the
   *    request (e.g. due to request throttling or DOS prevention), or if Google
   *    throttles requests to the site for abuse prevention. You should not
   *    depend on externally-hosted images for production applications.
   * When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
   * precedence.
   * </pre>
   *
   * <code>string image_uri = 2;</code>
   * @return The bytes for imageUri.
   */
  com.google.protobuf.ByteString
      getImageUriBytes();
}
