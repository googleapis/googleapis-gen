// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/vpcaccess/v1/vpc_access.proto

package com.google.cloud.vpcaccess.v1;

public interface DeleteConnectorRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.vpcaccess.v1.DeleteConnectorRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of a Serverless VPC Access connector to delete.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Name of a Serverless VPC Access connector to delete.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();
}
