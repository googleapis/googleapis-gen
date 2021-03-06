// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/iam/v1beta/workload_identity_pool.proto

package com.google.iam.v1beta;

public interface ListWorkloadIdentityPoolsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.iam.v1beta.ListWorkloadIdentityPoolsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The parent resource to list pools for.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The parent resource to list pools for.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The maximum number of pools to return.
   * If unspecified, at most 50 pools are returned.
   * The maximum value is 1000; values above are 1000 truncated to 1000.
   * </pre>
   *
   * <code>int32 page_size = 2;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * A page token, received from a previous `ListWorkloadIdentityPools`
   * call. Provide this to retrieve the subsequent page.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * A page token, received from a previous `ListWorkloadIdentityPools`
   * call. Provide this to retrieve the subsequent page.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();

  /**
   * <pre>
   * Whether to return soft-deleted pools.
   * </pre>
   *
   * <code>bool show_deleted = 4;</code>
   * @return The showDeleted.
   */
  boolean getShowDeleted();
}
