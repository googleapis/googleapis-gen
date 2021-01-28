// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2/import_config.proto

package com.google.cloud.retail.v2;

public interface ImportMetadataOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.retail.v2.ImportMetadata)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Operation create time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   * @return Whether the createTime field is set.
   */
  boolean hasCreateTime();
  /**
   * <pre>
   * Operation create time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   * @return The createTime.
   */
  com.google.protobuf.Timestamp getCreateTime();
  /**
   * <pre>
   * Operation create time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1;</code>
   */
  com.google.protobuf.TimestampOrBuilder getCreateTimeOrBuilder();

  /**
   * <pre>
   * Operation last update time. If the operation is done, this is also the
   * finish time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 2;</code>
   * @return Whether the updateTime field is set.
   */
  boolean hasUpdateTime();
  /**
   * <pre>
   * Operation last update time. If the operation is done, this is also the
   * finish time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 2;</code>
   * @return The updateTime.
   */
  com.google.protobuf.Timestamp getUpdateTime();
  /**
   * <pre>
   * Operation last update time. If the operation is done, this is also the
   * finish time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 2;</code>
   */
  com.google.protobuf.TimestampOrBuilder getUpdateTimeOrBuilder();

  /**
   * <pre>
   * Count of entries that were processed successfully.
   * </pre>
   *
   * <code>int64 success_count = 3;</code>
   * @return The successCount.
   */
  long getSuccessCount();

  /**
   * <pre>
   * Count of entries that encountered errors while processing.
   * </pre>
   *
   * <code>int64 failure_count = 4;</code>
   * @return The failureCount.
   */
  long getFailureCount();
}
