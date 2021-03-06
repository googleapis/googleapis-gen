// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/bigtable/v2/data.proto

package com.google.bigtable.v2;

public interface ValueRangeOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.bigtable.v2.ValueRange)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Used when giving an inclusive lower bound for the range.
   * </pre>
   *
   * <code>bytes start_value_closed = 1;</code>
   * @return Whether the startValueClosed field is set.
   */
  boolean hasStartValueClosed();
  /**
   * <pre>
   * Used when giving an inclusive lower bound for the range.
   * </pre>
   *
   * <code>bytes start_value_closed = 1;</code>
   * @return The startValueClosed.
   */
  com.google.protobuf.ByteString getStartValueClosed();

  /**
   * <pre>
   * Used when giving an exclusive lower bound for the range.
   * </pre>
   *
   * <code>bytes start_value_open = 2;</code>
   * @return Whether the startValueOpen field is set.
   */
  boolean hasStartValueOpen();
  /**
   * <pre>
   * Used when giving an exclusive lower bound for the range.
   * </pre>
   *
   * <code>bytes start_value_open = 2;</code>
   * @return The startValueOpen.
   */
  com.google.protobuf.ByteString getStartValueOpen();

  /**
   * <pre>
   * Used when giving an inclusive upper bound for the range.
   * </pre>
   *
   * <code>bytes end_value_closed = 3;</code>
   * @return Whether the endValueClosed field is set.
   */
  boolean hasEndValueClosed();
  /**
   * <pre>
   * Used when giving an inclusive upper bound for the range.
   * </pre>
   *
   * <code>bytes end_value_closed = 3;</code>
   * @return The endValueClosed.
   */
  com.google.protobuf.ByteString getEndValueClosed();

  /**
   * <pre>
   * Used when giving an exclusive upper bound for the range.
   * </pre>
   *
   * <code>bytes end_value_open = 4;</code>
   * @return Whether the endValueOpen field is set.
   */
  boolean hasEndValueOpen();
  /**
   * <pre>
   * Used when giving an exclusive upper bound for the range.
   * </pre>
   *
   * <code>bytes end_value_open = 4;</code>
   * @return The endValueOpen.
   */
  com.google.protobuf.ByteString getEndValueOpen();

  public com.google.bigtable.v2.ValueRange.StartValueCase getStartValueCase();

  public com.google.bigtable.v2.ValueRange.EndValueCase getEndValueCase();
}
