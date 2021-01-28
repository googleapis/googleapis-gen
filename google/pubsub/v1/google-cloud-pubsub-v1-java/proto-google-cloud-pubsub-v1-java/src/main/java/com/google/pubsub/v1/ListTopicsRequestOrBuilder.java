// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/pubsub/v1/pubsub.proto

package com.google.pubsub.v1;

public interface ListTopicsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.pubsub.v1.ListTopicsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The name of the project in which to list topics.
   * Format is `projects/{project-id}`.
   * </pre>
   *
   * <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The project.
   */
  java.lang.String getProject();
  /**
   * <pre>
   * Required. The name of the project in which to list topics.
   * Format is `projects/{project-id}`.
   * </pre>
   *
   * <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for project.
   */
  com.google.protobuf.ByteString
      getProjectBytes();

  /**
   * <pre>
   * Maximum number of topics to return.
   * </pre>
   *
   * <code>int32 page_size = 2;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * The value returned by the last `ListTopicsResponse`; indicates that this is
   * a continuation of a prior `ListTopics` call, and that the system should
   * return the next page of data.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * The value returned by the last `ListTopicsResponse`; indicates that this is
   * a continuation of a prior `ListTopics` call, and that the system should
   * return the next page of data.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();
}
