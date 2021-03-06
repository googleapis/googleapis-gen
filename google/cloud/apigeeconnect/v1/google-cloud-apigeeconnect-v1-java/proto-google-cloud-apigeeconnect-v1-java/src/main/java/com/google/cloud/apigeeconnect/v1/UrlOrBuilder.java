// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/apigeeconnect/v1/tether.proto

package com.google.cloud.apigeeconnect.v1;

public interface UrlOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.apigeeconnect.v1.Url)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Scheme.
   * </pre>
   *
   * <code>.google.cloud.apigeeconnect.v1.Scheme scheme = 1;</code>
   * @return The enum numeric value on the wire for scheme.
   */
  int getSchemeValue();
  /**
   * <pre>
   * Scheme.
   * </pre>
   *
   * <code>.google.cloud.apigeeconnect.v1.Scheme scheme = 1;</code>
   * @return The scheme.
   */
  com.google.cloud.apigeeconnect.v1.Scheme getScheme();

  /**
   * <pre>
   * Host or Host:Port.
   * </pre>
   *
   * <code>string host = 2;</code>
   * @return The host.
   */
  java.lang.String getHost();
  /**
   * <pre>
   * Host or Host:Port.
   * </pre>
   *
   * <code>string host = 2;</code>
   * @return The bytes for host.
   */
  com.google.protobuf.ByteString
      getHostBytes();

  /**
   * <pre>
   * Path starts with `/`.
   * </pre>
   *
   * <code>string path = 3;</code>
   * @return The path.
   */
  java.lang.String getPath();
  /**
   * <pre>
   * Path starts with `/`.
   * </pre>
   *
   * <code>string path = 3;</code>
   * @return The bytes for path.
   */
  com.google.protobuf.ByteString
      getPathBytes();
}
