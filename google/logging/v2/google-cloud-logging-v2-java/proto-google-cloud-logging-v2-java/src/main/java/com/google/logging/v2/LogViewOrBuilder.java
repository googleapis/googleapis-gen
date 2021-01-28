// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/logging/v2/logging_config.proto

package com.google.logging.v2;

public interface LogViewOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.logging.v2.LogView)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The resource name of the view.
   * For example
   * "projects/my-project-id/locations/my-location/buckets/my-bucket-id/views/my-view
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * The resource name of the view.
   * For example
   * "projects/my-project-id/locations/my-location/buckets/my-bucket-id/views/my-view
   * </pre>
   *
   * <code>string name = 1;</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Describes this view.
   * </pre>
   *
   * <code>string description = 3;</code>
   * @return The description.
   */
  java.lang.String getDescription();
  /**
   * <pre>
   * Describes this view.
   * </pre>
   *
   * <code>string description = 3;</code>
   * @return The bytes for description.
   */
  com.google.protobuf.ByteString
      getDescriptionBytes();

  /**
   * <pre>
   * Output only. The creation timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the createTime field is set.
   */
  boolean hasCreateTime();
  /**
   * <pre>
   * Output only. The creation timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The createTime.
   */
  com.google.protobuf.Timestamp getCreateTime();
  /**
   * <pre>
   * Output only. The creation timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.TimestampOrBuilder getCreateTimeOrBuilder();

  /**
   * <pre>
   * Output only. The last update timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return Whether the updateTime field is set.
   */
  boolean hasUpdateTime();
  /**
   * <pre>
   * Output only. The last update timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The updateTime.
   */
  com.google.protobuf.Timestamp getUpdateTime();
  /**
   * <pre>
   * Output only. The last update timestamp of the view.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   */
  com.google.protobuf.TimestampOrBuilder getUpdateTimeOrBuilder();

  /**
   * <pre>
   * Filter that restricts which log entries in a bucket are visible in this
   * view. Filters are restricted to be a logical AND of ==/!= of any of the
   * following:
   *   originating project/folder/organization/billing account.
   *   resource type
   *   log id
   * Example: SOURCE("projects/myproject") AND resource.type = "gce_instance"
   *             AND LOG_ID("stdout")
   * </pre>
   *
   * <code>string filter = 7;</code>
   * @return The filter.
   */
  java.lang.String getFilter();
  /**
   * <pre>
   * Filter that restricts which log entries in a bucket are visible in this
   * view. Filters are restricted to be a logical AND of ==/!= of any of the
   * following:
   *   originating project/folder/organization/billing account.
   *   resource type
   *   log id
   * Example: SOURCE("projects/myproject") AND resource.type = "gce_instance"
   *             AND LOG_ID("stdout")
   * </pre>
   *
   * <code>string filter = 7;</code>
   * @return The bytes for filter.
   */
  com.google.protobuf.ByteString
      getFilterBytes();
}
