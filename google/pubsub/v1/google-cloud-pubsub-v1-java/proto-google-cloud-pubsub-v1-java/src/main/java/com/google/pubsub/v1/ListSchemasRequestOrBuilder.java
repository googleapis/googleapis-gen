// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/pubsub/v1/schema.proto

package com.google.pubsub.v1;

public interface ListSchemasRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.pubsub.v1.ListSchemasRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The name of the project in which to list schemas.
   * Format is `projects/{project-id}`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The name of the project in which to list schemas.
   * Format is `projects/{project-id}`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The set of Schema fields to return in the response. If not set, returns
   * Schemas with `name` and `type`, but not `definition`. Set to `FULL` to
   * retrieve all fields.
   * </pre>
   *
   * <code>.google.pubsub.v1.SchemaView view = 2;</code>
   * @return The enum numeric value on the wire for view.
   */
  int getViewValue();
  /**
   * <pre>
   * The set of Schema fields to return in the response. If not set, returns
   * Schemas with `name` and `type`, but not `definition`. Set to `FULL` to
   * retrieve all fields.
   * </pre>
   *
   * <code>.google.pubsub.v1.SchemaView view = 2;</code>
   * @return The view.
   */
  com.google.pubsub.v1.SchemaView getView();

  /**
   * <pre>
   * Maximum number of schemas to return.
   * </pre>
   *
   * <code>int32 page_size = 3;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * The value returned by the last `ListSchemasResponse`; indicates that
   * this is a continuation of a prior `ListSchemas` call, and that the
   * system should return the next page of data.
   * </pre>
   *
   * <code>string page_token = 4;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * The value returned by the last `ListSchemasResponse`; indicates that
   * this is a continuation of a prior `ListSchemas` call, and that the
   * system should return the next page of data.
   * </pre>
   *
   * <code>string page_token = 4;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();
}
