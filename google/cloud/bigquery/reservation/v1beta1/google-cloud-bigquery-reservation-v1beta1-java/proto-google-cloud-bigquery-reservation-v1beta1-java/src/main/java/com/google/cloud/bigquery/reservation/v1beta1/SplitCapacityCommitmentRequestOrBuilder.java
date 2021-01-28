// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/reservation/v1beta1/reservation.proto

package com.google.cloud.bigquery.reservation.v1beta1;

public interface SplitCapacityCommitmentRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.bigquery.reservation.v1beta1.SplitCapacityCommitmentRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name e.g.,:
   *  `projects/myproject/locations/US/capacityCommitments/123`
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. The resource name e.g.,:
   *  `projects/myproject/locations/US/capacityCommitments/123`
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Number of slots in the capacity commitment after the split.
   * </pre>
   *
   * <code>int64 slot_count = 2;</code>
   * @return The slotCount.
   */
  long getSlotCount();
}
