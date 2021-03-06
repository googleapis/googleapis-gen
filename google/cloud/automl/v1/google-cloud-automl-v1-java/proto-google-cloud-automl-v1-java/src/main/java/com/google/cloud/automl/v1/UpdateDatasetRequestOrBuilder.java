// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/automl/v1/service.proto

package com.google.cloud.automl.v1;

public interface UpdateDatasetRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.automl.v1.UpdateDatasetRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The dataset which replaces the resource on the server.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Dataset dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the dataset field is set.
   */
  boolean hasDataset();
  /**
   * <pre>
   * Required. The dataset which replaces the resource on the server.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Dataset dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The dataset.
   */
  com.google.cloud.automl.v1.Dataset getDataset();
  /**
   * <pre>
   * Required. The dataset which replaces the resource on the server.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Dataset dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.automl.v1.DatasetOrBuilder getDatasetOrBuilder();

  /**
   * <pre>
   * Required. The update mask applies to the resource.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * Required. The update mask applies to the resource.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * Required. The update mask applies to the resource.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
