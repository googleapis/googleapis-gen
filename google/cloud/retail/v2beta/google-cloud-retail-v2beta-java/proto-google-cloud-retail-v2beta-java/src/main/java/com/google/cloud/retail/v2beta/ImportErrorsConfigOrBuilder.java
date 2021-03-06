// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2beta/import_config.proto

package com.google.cloud.retail.v2beta;

public interface ImportErrorsConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.retail.v2beta.ImportErrorsConfig)
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
   * @return Whether the gcsPrefix field is set.
   */
  boolean hasGcsPrefix();
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

  public com.google.cloud.retail.v2beta.ImportErrorsConfig.DestinationCase getDestinationCase();
}
