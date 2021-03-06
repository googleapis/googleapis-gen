// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1beta1/dataset_service.proto

package com.google.cloud.aiplatform.v1beta1;

public interface CreateDatasetRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.aiplatform.v1beta1.CreateDatasetRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the Location to create the Dataset in.
   * Format: `projects/{project}/locations/{location}`
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The resource name of the Location to create the Dataset in.
   * Format: `projects/{project}/locations/{location}`
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. The Dataset to create.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the dataset field is set.
   */
  boolean hasDataset();
  /**
   * <pre>
   * Required. The Dataset to create.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The dataset.
   */
  com.google.cloud.aiplatform.v1beta1.Dataset getDataset();
  /**
   * <pre>
   * Required. The Dataset to create.
   * </pre>
   *
   * <code>.google.cloud.aiplatform.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.aiplatform.v1beta1.DatasetOrBuilder getDatasetOrBuilder();
}
