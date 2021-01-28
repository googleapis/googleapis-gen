// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/memcache/v1/cloud_memcache.proto

package com.google.cloud.memcache.v1;

public interface OperationMetadataOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.memcache.v1.OperationMetadata)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Output only. Time when the operation was created.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the createTime field is set.
   */
  boolean hasCreateTime();
  /**
   * <pre>
   * Output only. Time when the operation was created.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The createTime.
   */
  com.google.protobuf.Timestamp getCreateTime();
  /**
   * <pre>
   * Output only. Time when the operation was created.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.TimestampOrBuilder getCreateTimeOrBuilder();

  /**
   * <pre>
   * Output only. Time when the operation finished running.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the endTime field is set.
   */
  boolean hasEndTime();
  /**
   * <pre>
   * Output only. Time when the operation finished running.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The endTime.
   */
  com.google.protobuf.Timestamp getEndTime();
  /**
   * <pre>
   * Output only. Time when the operation finished running.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.TimestampOrBuilder getEndTimeOrBuilder();

  /**
   * <pre>
   * Output only. Server-defined resource path for the target of the operation.
   * </pre>
   *
   * <code>string target = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The target.
   */
  java.lang.String getTarget();
  /**
   * <pre>
   * Output only. Server-defined resource path for the target of the operation.
   * </pre>
   *
   * <code>string target = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for target.
   */
  com.google.protobuf.ByteString
      getTargetBytes();

  /**
   * <pre>
   * Output only. Name of the verb executed by the operation.
   * </pre>
   *
   * <code>string verb = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The verb.
   */
  java.lang.String getVerb();
  /**
   * <pre>
   * Output only. Name of the verb executed by the operation.
   * </pre>
   *
   * <code>string verb = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for verb.
   */
  com.google.protobuf.ByteString
      getVerbBytes();

  /**
   * <pre>
   * Output only. Human-readable status of the operation, if any.
   * </pre>
   *
   * <code>string status_detail = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The statusDetail.
   */
  java.lang.String getStatusDetail();
  /**
   * <pre>
   * Output only. Human-readable status of the operation, if any.
   * </pre>
   *
   * <code>string status_detail = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for statusDetail.
   */
  com.google.protobuf.ByteString
      getStatusDetailBytes();

  /**
   * <pre>
   * Output only. Identifies whether the user has requested cancellation
   * of the operation. Operations that have successfully been cancelled
   * have [Operation.error][] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
   * corresponding to `Code.CANCELLED`.
   * </pre>
   *
   * <code>bool cancel_requested = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The cancelRequested.
   */
  boolean getCancelRequested();

  /**
   * <pre>
   * Output only. API version used to start the operation.
   * </pre>
   *
   * <code>string api_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The apiVersion.
   */
  java.lang.String getApiVersion();
  /**
   * <pre>
   * Output only. API version used to start the operation.
   * </pre>
   *
   * <code>string api_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for apiVersion.
   */
  com.google.protobuf.ByteString
      getApiVersionBytes();
}
