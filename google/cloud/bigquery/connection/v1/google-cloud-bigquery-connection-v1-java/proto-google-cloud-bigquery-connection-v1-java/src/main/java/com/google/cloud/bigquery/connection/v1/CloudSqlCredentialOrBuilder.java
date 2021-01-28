// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/connection/v1/connection.proto

package com.google.cloud.bigquery.connection.v1;

public interface CloudSqlCredentialOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.bigquery.connection.v1.CloudSqlCredential)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The username for the credential.
   * </pre>
   *
   * <code>string username = 1;</code>
   * @return The username.
   */
  java.lang.String getUsername();
  /**
   * <pre>
   * The username for the credential.
   * </pre>
   *
   * <code>string username = 1;</code>
   * @return The bytes for username.
   */
  com.google.protobuf.ByteString
      getUsernameBytes();

  /**
   * <pre>
   * The password for the credential.
   * </pre>
   *
   * <code>string password = 2;</code>
   * @return The password.
   */
  java.lang.String getPassword();
  /**
   * <pre>
   * The password for the credential.
   * </pre>
   *
   * <code>string password = 2;</code>
   * @return The bytes for password.
   */
  com.google.protobuf.ByteString
      getPasswordBytes();
}
