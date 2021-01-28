// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage.proto

package com.google.storage.v1;

public interface CreateHmacKeyResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.storage.v1.CreateHmacKeyResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Key metadata.
   * </pre>
   *
   * <code>.google.storage.v1.HmacKeyMetadata metadata = 1;</code>
   * @return Whether the metadata field is set.
   */
  boolean hasMetadata();
  /**
   * <pre>
   * Key metadata.
   * </pre>
   *
   * <code>.google.storage.v1.HmacKeyMetadata metadata = 1;</code>
   * @return The metadata.
   */
  com.google.storage.v1.HmacKeyMetadata getMetadata();
  /**
   * <pre>
   * Key metadata.
   * </pre>
   *
   * <code>.google.storage.v1.HmacKeyMetadata metadata = 1;</code>
   */
  com.google.storage.v1.HmacKeyMetadataOrBuilder getMetadataOrBuilder();

  /**
   * <pre>
   * HMAC key secret material.
   * </pre>
   *
   * <code>string secret = 2;</code>
   * @return The secret.
   */
  java.lang.String getSecret();
  /**
   * <pre>
   * HMAC key secret material.
   * </pre>
   *
   * <code>string secret = 2;</code>
   * @return The bytes for secret.
   */
  com.google.protobuf.ByteString
      getSecretBytes();
}
