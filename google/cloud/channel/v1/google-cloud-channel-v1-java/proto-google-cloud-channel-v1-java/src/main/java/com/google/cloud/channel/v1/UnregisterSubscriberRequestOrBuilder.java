// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/channel/v1/service.proto

package com.google.cloud.channel.v1;

public interface UnregisterSubscriberRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.channel.v1.UnregisterSubscriberRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Resource name of the account.
   * </pre>
   *
   * <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The account.
   */
  java.lang.String getAccount();
  /**
   * <pre>
   * Required. Resource name of the account.
   * </pre>
   *
   * <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for account.
   */
  com.google.protobuf.ByteString
      getAccountBytes();

  /**
   * <pre>
   * Required. Service account to unregister from subscriber access to the topic.
   * </pre>
   *
   * <code>string service_account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The serviceAccount.
   */
  java.lang.String getServiceAccount();
  /**
   * <pre>
   * Required. Service account to unregister from subscriber access to the topic.
   * </pre>
   *
   * <code>string service_account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for serviceAccount.
   */
  com.google.protobuf.ByteString
      getServiceAccountBytes();
}
