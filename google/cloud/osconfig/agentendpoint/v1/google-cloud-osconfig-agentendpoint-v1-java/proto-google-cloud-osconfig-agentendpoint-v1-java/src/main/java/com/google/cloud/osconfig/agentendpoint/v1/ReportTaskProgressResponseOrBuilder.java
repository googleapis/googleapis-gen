// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/osconfig/agentendpoint/v1/agentendpoint.proto

package com.google.cloud.osconfig.agentendpoint.v1;

public interface ReportTaskProgressResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.osconfig.agentendpoint.v1.ReportTaskProgressResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Instructs agent to continue or not.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1.TaskDirective task_directive = 1;</code>
   * @return The enum numeric value on the wire for taskDirective.
   */
  int getTaskDirectiveValue();
  /**
   * <pre>
   * Instructs agent to continue or not.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1.TaskDirective task_directive = 1;</code>
   * @return The taskDirective.
   */
  com.google.cloud.osconfig.agentendpoint.v1.TaskDirective getTaskDirective();
}
