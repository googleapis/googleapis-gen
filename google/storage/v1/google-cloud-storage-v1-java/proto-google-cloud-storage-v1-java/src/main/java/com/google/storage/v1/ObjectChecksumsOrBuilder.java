// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage_resources.proto

package com.google.storage.v1;

public interface ObjectChecksumsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.storage.v1.ObjectChecksums)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * CRC32C digest of the object data. Computed by the GCS service for
   * all written objects, and validated by the GCS service against
   * client-supplied values if present in an InsertObjectRequest.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 1;</code>
   * @return Whether the crc32c field is set.
   */
  boolean hasCrc32C();
  /**
   * <pre>
   * CRC32C digest of the object data. Computed by the GCS service for
   * all written objects, and validated by the GCS service against
   * client-supplied values if present in an InsertObjectRequest.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 1;</code>
   * @return The crc32c.
   */
  com.google.protobuf.UInt32Value getCrc32C();
  /**
   * <pre>
   * CRC32C digest of the object data. Computed by the GCS service for
   * all written objects, and validated by the GCS service against
   * client-supplied values if present in an InsertObjectRequest.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 1;</code>
   */
  com.google.protobuf.UInt32ValueOrBuilder getCrc32COrBuilder();

  /**
   * <pre>
   * Hex-encoded MD5 hash of the object data (hexdigest). Whether/how this
   * checksum is provided and validated is service-dependent.
   * </pre>
   *
   * <code>string md5_hash = 2;</code>
   * @return The md5Hash.
   */
  java.lang.String getMd5Hash();
  /**
   * <pre>
   * Hex-encoded MD5 hash of the object data (hexdigest). Whether/how this
   * checksum is provided and validated is service-dependent.
   * </pre>
   *
   * <code>string md5_hash = 2;</code>
   * @return The bytes for md5Hash.
   */
  com.google.protobuf.ByteString
      getMd5HashBytes();
}
