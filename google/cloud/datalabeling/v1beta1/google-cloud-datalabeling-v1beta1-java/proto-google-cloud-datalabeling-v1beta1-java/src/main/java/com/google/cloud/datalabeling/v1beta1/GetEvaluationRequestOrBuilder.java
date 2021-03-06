// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

package com.google.cloud.datalabeling.v1beta1;

public interface GetEvaluationRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.datalabeling.v1beta1.GetEvaluationRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of the evaluation. Format:
   * "projects/&lt;var&gt;{project_id}&lt;/var&gt;/datasets/&lt;var&gt;{dataset_id}&lt;/var&gt;/evaluations/&lt;var&gt;{evaluation_id}&lt;/var&gt;'
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Name of the evaluation. Format:
   * "projects/&lt;var&gt;{project_id}&lt;/var&gt;/datasets/&lt;var&gt;{dataset_id}&lt;/var&gt;/evaluations/&lt;var&gt;{evaluation_id}&lt;/var&gt;'
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();
}
