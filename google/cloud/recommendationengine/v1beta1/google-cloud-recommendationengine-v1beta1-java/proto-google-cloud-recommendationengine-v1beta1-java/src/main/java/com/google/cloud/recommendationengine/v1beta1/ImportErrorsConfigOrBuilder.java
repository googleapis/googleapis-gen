// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recommendationengine/v1beta1/import.proto

package com.google.cloud.recommendationengine.v1beta1;

public interface ImportErrorsConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.recommendationengine.v1beta1.ImportErrorsConfig)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Google Cloud Storage path for import errors. This must be an empty,
   * existing Cloud Storage bucket. Import errors will be written to a file in
   * this bucket, one per line, as a JSON-encoded
   * `google.rpc.Status` message.
   * </pre>
   *
   * <code>string gcs_prefix = 1;</code>
   * @return The gcsPrefix.
   */
  java.lang.String getGcsPrefix();
  /**
   * <pre>
   * Google Cloud Storage path for import errors. This must be an empty,
   * existing Cloud Storage bucket. Import errors will be written to a file in
   * this bucket, one per line, as a JSON-encoded
   * `google.rpc.Status` message.
   * </pre>
   *
   * <code>string gcs_prefix = 1;</code>
   * @return The bytes for gcsPrefix.
   */
  com.google.protobuf.ByteString
      getGcsPrefixBytes();

  public com.google.cloud.recommendationengine.v1beta1.ImportErrorsConfig.DestinationCase getDestinationCase();
}
