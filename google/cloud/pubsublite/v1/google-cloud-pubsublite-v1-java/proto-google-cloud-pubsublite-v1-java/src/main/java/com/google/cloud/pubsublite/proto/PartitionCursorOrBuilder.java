// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/pubsublite/v1/cursor.proto

package com.google.cloud.pubsublite.proto;

public interface PartitionCursorOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.pubsublite.v1.PartitionCursor)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The partition this is for.
   * </pre>
   *
   * <code>int64 partition = 1;</code>
   * @return The partition.
   */
  long getPartition();

  /**
   * <pre>
   * The value of the cursor.
   * </pre>
   *
   * <code>.google.cloud.pubsublite.v1.Cursor cursor = 2;</code>
   * @return Whether the cursor field is set.
   */
  boolean hasCursor();
  /**
   * <pre>
   * The value of the cursor.
   * </pre>
   *
   * <code>.google.cloud.pubsublite.v1.Cursor cursor = 2;</code>
   * @return The cursor.
   */
  com.google.cloud.pubsublite.proto.Cursor getCursor();
  /**
   * <pre>
   * The value of the cursor.
   * </pre>
   *
   * <code>.google.cloud.pubsublite.v1.Cursor cursor = 2;</code>
   */
  com.google.cloud.pubsublite.proto.CursorOrBuilder getCursorOrBuilder();
}
