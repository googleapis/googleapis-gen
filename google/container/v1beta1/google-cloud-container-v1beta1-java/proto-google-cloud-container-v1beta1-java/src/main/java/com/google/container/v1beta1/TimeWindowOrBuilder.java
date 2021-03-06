// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/container/v1beta1/cluster_service.proto

package com.google.container.v1beta1;

public interface TimeWindowOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.container.v1beta1.TimeWindow)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The time that the window first starts.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 1;</code>
   * @return Whether the startTime field is set.
   */
  boolean hasStartTime();
  /**
   * <pre>
   * The time that the window first starts.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 1;</code>
   * @return The startTime.
   */
  com.google.protobuf.Timestamp getStartTime();
  /**
   * <pre>
   * The time that the window first starts.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp start_time = 1;</code>
   */
  com.google.protobuf.TimestampOrBuilder getStartTimeOrBuilder();

  /**
   * <pre>
   * The time that the window ends. The end time should take place after the
   * start time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2;</code>
   * @return Whether the endTime field is set.
   */
  boolean hasEndTime();
  /**
   * <pre>
   * The time that the window ends. The end time should take place after the
   * start time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2;</code>
   * @return The endTime.
   */
  com.google.protobuf.Timestamp getEndTime();
  /**
   * <pre>
   * The time that the window ends. The end time should take place after the
   * start time.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 2;</code>
   */
  com.google.protobuf.TimestampOrBuilder getEndTimeOrBuilder();
}
