// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/clouderrorreporting/v1beta1/report_errors_service.proto

package com.google.devtools.clouderrorreporting.v1beta1;

public interface ReportErrorEventRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.clouderrorreporting.v1beta1.ReportErrorEventRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the Google Cloud Platform project. Written
   * as `projects/` plus the
   * [Google Cloud Platform project
   * ID](https://support.google.com/cloud/answer/6158840). Example:
   * `projects/my-project-123`.
   * </pre>
   *
   * <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The projectName.
   */
  java.lang.String getProjectName();
  /**
   * <pre>
   * Required. The resource name of the Google Cloud Platform project. Written
   * as `projects/` plus the
   * [Google Cloud Platform project
   * ID](https://support.google.com/cloud/answer/6158840). Example:
   * `projects/my-project-123`.
   * </pre>
   *
   * <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for projectName.
   */
  com.google.protobuf.ByteString
      getProjectNameBytes();

  /**
   * <pre>
   * Required. The error event to be reported.
   * </pre>
   *
   * <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the event field is set.
   */
  boolean hasEvent();
  /**
   * <pre>
   * Required. The error event to be reported.
   * </pre>
   *
   * <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The event.
   */
  com.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent getEvent();
  /**
   * <pre>
   * Required. The error event to be reported.
   * </pre>
   *
   * <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEventOrBuilder getEventOrBuilder();
}
