// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/osconfig/agentendpoint/v1/tasks.proto

package com.google.cloud.osconfig.agentendpoint.v1;

public interface ExecStepTaskProgressOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.osconfig.agentendpoint.v1.ExecStepTaskProgress)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The current state of this exec step.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1.ExecStepTaskProgress.State state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The enum numeric value on the wire for state.
   */
  int getStateValue();
  /**
   * <pre>
   * Required. The current state of this exec step.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1.ExecStepTaskProgress.State state = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The state.
   */
  com.google.cloud.osconfig.agentendpoint.v1.ExecStepTaskProgress.State getState();
}
