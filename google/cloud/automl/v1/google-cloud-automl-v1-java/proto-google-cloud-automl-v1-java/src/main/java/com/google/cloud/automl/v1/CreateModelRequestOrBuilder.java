// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/automl/v1/service.proto

package com.google.cloud.automl.v1;

public interface CreateModelRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.automl.v1.CreateModelRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Resource name of the parent project where the model is being created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. Resource name of the parent project where the model is being created.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. The model to create.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the model field is set.
   */
  boolean hasModel();
  /**
   * <pre>
   * Required. The model to create.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The model.
   */
  com.google.cloud.automl.v1.Model getModel();
  /**
   * <pre>
   * Required. The model to create.
   * </pre>
   *
   * <code>.google.cloud.automl.v1.Model model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.automl.v1.ModelOrBuilder getModelOrBuilder();
}
