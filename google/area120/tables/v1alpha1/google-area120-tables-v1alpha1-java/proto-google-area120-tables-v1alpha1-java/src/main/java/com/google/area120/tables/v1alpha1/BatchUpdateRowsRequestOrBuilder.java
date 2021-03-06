// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/area120/tables/v1alpha1/tables.proto

package com.google.area120.tables.v1alpha1;

public interface BatchUpdateRowsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.area120.tables.v1alpha1.BatchUpdateRowsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The parent table shared by all rows being updated.
   * Format: tables/{table}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The parent table shared by all rows being updated.
   * Format: tables/{table}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. The request messages specifying the rows to update.
   * A maximum of 500 rows can be modified in a single batch.
   * </pre>
   *
   * <code>repeated .google.area120.tables.v1alpha1.UpdateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<com.google.area120.tables.v1alpha1.UpdateRowRequest> 
      getRequestsList();
  /**
   * <pre>
   * Required. The request messages specifying the rows to update.
   * A maximum of 500 rows can be modified in a single batch.
   * </pre>
   *
   * <code>repeated .google.area120.tables.v1alpha1.UpdateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.area120.tables.v1alpha1.UpdateRowRequest getRequests(int index);
  /**
   * <pre>
   * Required. The request messages specifying the rows to update.
   * A maximum of 500 rows can be modified in a single batch.
   * </pre>
   *
   * <code>repeated .google.area120.tables.v1alpha1.UpdateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  int getRequestsCount();
  /**
   * <pre>
   * Required. The request messages specifying the rows to update.
   * A maximum of 500 rows can be modified in a single batch.
   * </pre>
   *
   * <code>repeated .google.area120.tables.v1alpha1.UpdateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<? extends com.google.area120.tables.v1alpha1.UpdateRowRequestOrBuilder> 
      getRequestsOrBuilderList();
  /**
   * <pre>
   * Required. The request messages specifying the rows to update.
   * A maximum of 500 rows can be modified in a single batch.
   * </pre>
   *
   * <code>repeated .google.area120.tables.v1alpha1.UpdateRowRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.area120.tables.v1alpha1.UpdateRowRequestOrBuilder getRequestsOrBuilder(
      int index);
}
