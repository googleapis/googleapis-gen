// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/workflows/executions/v1/executions.proto

package com.google.cloud.workflows.executions.v1;

public interface ListExecutionsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.workflows.executions.v1.ListExecutionsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of the workflow for which the executions should be listed.
   * Format: projects/{project}/locations/{location}/workflows/{workflow}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. Name of the workflow for which the executions should be listed.
   * Format: projects/{project}/locations/{location}/workflows/{workflow}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Maximum number of executions to return per call.
   * Max supported value depends on the selected Execution view: it's 10000 for
   * BASIC and 100 for FULL. The default value used if the field is not
   * specified is 100, regardless of the selected view. Values greater than
   * the max value will be coerced down to it.
   * </pre>
   *
   * <code>int32 page_size = 2;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * A page token, received from a previous `ListExecutions` call.
   * Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListExecutions` must
   * match the call that provided the page token.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * A page token, received from a previous `ListExecutions` call.
   * Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListExecutions` must
   * match the call that provided the page token.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();

  /**
   * <pre>
   * Optional. A view defining which fields should be filled in the returned executions.
   * The API will default to the BASIC view.
   * </pre>
   *
   * <code>.google.cloud.workflows.executions.v1.ExecutionView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The enum numeric value on the wire for view.
   */
  int getViewValue();
  /**
   * <pre>
   * Optional. A view defining which fields should be filled in the returned executions.
   * The API will default to the BASIC view.
   * </pre>
   *
   * <code>.google.cloud.workflows.executions.v1.ExecutionView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The view.
   */
  com.google.cloud.workflows.executions.v1.ExecutionView getView();
}
