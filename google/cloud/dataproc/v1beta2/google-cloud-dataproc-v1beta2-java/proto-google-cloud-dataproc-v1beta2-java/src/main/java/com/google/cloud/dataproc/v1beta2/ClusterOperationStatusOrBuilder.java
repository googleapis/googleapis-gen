// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataproc/v1beta2/operations.proto

package com.google.cloud.dataproc.v1beta2;

public interface ClusterOperationStatusOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dataproc.v1beta2.ClusterOperationStatus)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Output only. A message containing the operation state.
   * </pre>
   *
   * <code>.google.cloud.dataproc.v1beta2.ClusterOperationStatus.State state = 1;</code>
   * @return The enum numeric value on the wire for state.
   */
  int getStateValue();
  /**
   * <pre>
   * Output only. A message containing the operation state.
   * </pre>
   *
   * <code>.google.cloud.dataproc.v1beta2.ClusterOperationStatus.State state = 1;</code>
   * @return The state.
   */
  com.google.cloud.dataproc.v1beta2.ClusterOperationStatus.State getState();

  /**
   * <pre>
   * Output only. A message containing the detailed operation state.
   * </pre>
   *
   * <code>string inner_state = 2;</code>
   * @return The innerState.
   */
  java.lang.String getInnerState();
  /**
   * <pre>
   * Output only. A message containing the detailed operation state.
   * </pre>
   *
   * <code>string inner_state = 2;</code>
   * @return The bytes for innerState.
   */
  com.google.protobuf.ByteString
      getInnerStateBytes();

  /**
   * <pre>
   * Output only. A message containing any operation metadata details.
   * </pre>
   *
   * <code>string details = 3;</code>
   * @return The details.
   */
  java.lang.String getDetails();
  /**
   * <pre>
   * Output only. A message containing any operation metadata details.
   * </pre>
   *
   * <code>string details = 3;</code>
   * @return The bytes for details.
   */
  com.google.protobuf.ByteString
      getDetailsBytes();

  /**
   * <pre>
   * Output only. The time this state was entered.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp state_start_time = 4;</code>
   * @return Whether the stateStartTime field is set.
   */
  boolean hasStateStartTime();
  /**
   * <pre>
   * Output only. The time this state was entered.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp state_start_time = 4;</code>
   * @return The stateStartTime.
   */
  com.google.protobuf.Timestamp getStateStartTime();
  /**
   * <pre>
   * Output only. The time this state was entered.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp state_start_time = 4;</code>
   */
  com.google.protobuf.TimestampOrBuilder getStateStartTimeOrBuilder();
}
