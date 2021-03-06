// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/pubsub/v1/schema.proto

package com.google.pubsub.v1;

public interface SchemaOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.pubsub.v1.Schema)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of the schema.
   * Format is `projects/{project}/schemas/{schema}`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Name of the schema.
   * Format is `projects/{project}/schemas/{schema}`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * The type of the schema definition.
   * </pre>
   *
   * <code>.google.pubsub.v1.Schema.Type type = 2;</code>
   * @return The enum numeric value on the wire for type.
   */
  int getTypeValue();
  /**
   * <pre>
   * The type of the schema definition.
   * </pre>
   *
   * <code>.google.pubsub.v1.Schema.Type type = 2;</code>
   * @return The type.
   */
  com.google.pubsub.v1.Schema.Type getType();

  /**
   * <pre>
   * The definition of the schema. This should contain a string representing
   * the full definition of the schema that is a valid schema definition of
   * the type specified in `type`.
   * </pre>
   *
   * <code>string definition = 3;</code>
   * @return The definition.
   */
  java.lang.String getDefinition();
  /**
   * <pre>
   * The definition of the schema. This should contain a string representing
   * the full definition of the schema that is a valid schema definition of
   * the type specified in `type`.
   * </pre>
   *
   * <code>string definition = 3;</code>
   * @return The bytes for definition.
   */
  com.google.protobuf.ByteString
      getDefinitionBytes();
}
