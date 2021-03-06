// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/apigateway/v1/apigateway.proto

package com.google.cloud.apigateway.v1;

public interface CreateGatewayRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.apigateway.v1.CreateGatewayRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Parent resource of the Gateway, of the form:
   * `projects/&#42;&#47;locations/&#42;`
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. Parent resource of the Gateway, of the form:
   * `projects/&#42;&#47;locations/&#42;`
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. Identifier to assign to the Gateway. Must be unique within scope of
   * the parent resource.
   * </pre>
   *
   * <code>string gateway_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The gatewayId.
   */
  java.lang.String getGatewayId();
  /**
   * <pre>
   * Required. Identifier to assign to the Gateway. Must be unique within scope of
   * the parent resource.
   * </pre>
   *
   * <code>string gateway_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for gatewayId.
   */
  com.google.protobuf.ByteString
      getGatewayIdBytes();

  /**
   * <pre>
   * Required. Gateway resource.
   * </pre>
   *
   * <code>.google.cloud.apigateway.v1.Gateway gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the gateway field is set.
   */
  boolean hasGateway();
  /**
   * <pre>
   * Required. Gateway resource.
   * </pre>
   *
   * <code>.google.cloud.apigateway.v1.Gateway gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The gateway.
   */
  com.google.cloud.apigateway.v1.Gateway getGateway();
  /**
   * <pre>
   * Required. Gateway resource.
   * </pre>
   *
   * <code>.google.cloud.apigateway.v1.Gateway gateway = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.apigateway.v1.GatewayOrBuilder getGatewayOrBuilder();
}
