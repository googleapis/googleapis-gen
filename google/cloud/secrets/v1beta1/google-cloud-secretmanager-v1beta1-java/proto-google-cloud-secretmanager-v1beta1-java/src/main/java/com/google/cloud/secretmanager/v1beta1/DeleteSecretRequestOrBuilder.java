// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/secrets/v1beta1/service.proto

package com.google.cloud.secretmanager.v1beta1;

public interface DeleteSecretRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.secrets.v1beta1.DeleteSecretRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] to delete in the format
   * `projects/&#42;&#47;secrets/&#42;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] to delete in the format
   * `projects/&#42;&#47;secrets/&#42;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();
}
