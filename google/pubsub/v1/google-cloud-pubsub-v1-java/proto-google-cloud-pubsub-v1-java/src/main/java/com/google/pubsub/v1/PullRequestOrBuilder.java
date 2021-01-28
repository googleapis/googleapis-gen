// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/pubsub/v1/pubsub.proto

package com.google.pubsub.v1;

public interface PullRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.pubsub.v1.PullRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The subscription from which messages should be pulled.
   * Format is `projects/{project}/subscriptions/{sub}`.
   * </pre>
   *
   * <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The subscription.
   */
  java.lang.String getSubscription();
  /**
   * <pre>
   * Required. The subscription from which messages should be pulled.
   * Format is `projects/{project}/subscriptions/{sub}`.
   * </pre>
   *
   * <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for subscription.
   */
  com.google.protobuf.ByteString
      getSubscriptionBytes();

  /**
   * <pre>
   * Optional. If this field set to true, the system will respond immediately
   * even if it there are no messages available to return in the `Pull`
   * response. Otherwise, the system may wait (for a bounded amount of time)
   * until at least one message is available, rather than returning no messages.
   * Warning: setting this field to `true` is discouraged because it adversely
   * impacts the performance of `Pull` operations. We recommend that users do
   * not set this field.
   * </pre>
   *
   * <code>bool return_immediately = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
   * @return The returnImmediately.
   */
  @java.lang.Deprecated boolean getReturnImmediately();

  /**
   * <pre>
   * Required. The maximum number of messages to return for this request. Must
   * be a positive integer. The Pub/Sub system may return fewer than the number
   * specified.
   * </pre>
   *
   * <code>int32 max_messages = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The maxMessages.
   */
  int getMaxMessages();
}
