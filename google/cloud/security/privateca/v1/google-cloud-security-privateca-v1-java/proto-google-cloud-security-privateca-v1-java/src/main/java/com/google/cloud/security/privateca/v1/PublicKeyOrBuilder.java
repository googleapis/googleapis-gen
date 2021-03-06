// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/security/privateca/v1/resources.proto

package com.google.cloud.security.privateca.v1;

public interface PublicKeyOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.security.privateca.v1.PublicKey)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. A public key. The padding and encoding
   * must match with the `KeyFormat` value specified for the `format` field.
   * </pre>
   *
   * <code>bytes key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The key.
   */
  com.google.protobuf.ByteString getKey();

  /**
   * <pre>
   * Required. The format of the public key.
   * </pre>
   *
   * <code>.google.cloud.security.privateca.v1.PublicKey.KeyFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The enum numeric value on the wire for format.
   */
  int getFormatValue();
  /**
   * <pre>
   * Required. The format of the public key.
   * </pre>
   *
   * <code>.google.cloud.security.privateca.v1.PublicKey.KeyFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The format.
   */
  com.google.cloud.security.privateca.v1.PublicKey.KeyFormat getFormat();
}
