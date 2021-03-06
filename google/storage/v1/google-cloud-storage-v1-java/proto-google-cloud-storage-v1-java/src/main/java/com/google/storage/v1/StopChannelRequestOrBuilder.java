// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage.proto

package com.google.storage.v1;

public interface StopChannelRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.storage.v1.StopChannelRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The channel to be stopped.
   * </pre>
   *
   * <code>.google.storage.v1.Channel channel = 1;</code>
   * @return Whether the channel field is set.
   */
  boolean hasChannel();
  /**
   * <pre>
   * The channel to be stopped.
   * </pre>
   *
   * <code>.google.storage.v1.Channel channel = 1;</code>
   * @return The channel.
   */
  com.google.storage.v1.Channel getChannel();
  /**
   * <pre>
   * The channel to be stopped.
   * </pre>
   *
   * <code>.google.storage.v1.Channel channel = 1;</code>
   */
  com.google.storage.v1.ChannelOrBuilder getChannelOrBuilder();

  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   * @return Whether the commonRequestParams field is set.
   */
  boolean hasCommonRequestParams();
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   * @return The commonRequestParams.
   */
  com.google.storage.v1.CommonRequestParams getCommonRequestParams();
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   */
  com.google.storage.v1.CommonRequestParamsOrBuilder getCommonRequestParamsOrBuilder();
}
