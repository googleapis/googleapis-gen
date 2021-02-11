// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/services/feed_mapping_service.proto

package com.google.ads.googleads.v6.services;

public interface MutateFeedMappingResultOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v6.services.MutateFeedMappingResult)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Returned for successful operations.
   * </pre>
   *
   * <code>string resource_name = 1;</code>
   * @return The resourceName.
   */
  java.lang.String getResourceName();
  /**
   * <pre>
   * Returned for successful operations.
   * </pre>
   *
   * <code>string resource_name = 1;</code>
   * @return The bytes for resourceName.
   */
  com.google.protobuf.ByteString
      getResourceNameBytes();

  /**
   * <pre>
   * The mutated feed mapping with only mutable fields after mutate. The field
   * will only be returned when response_content_type is set to
   * "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.FeedMapping feed_mapping = 2;</code>
   * @return Whether the feedMapping field is set.
   */
  boolean hasFeedMapping();
  /**
   * <pre>
   * The mutated feed mapping with only mutable fields after mutate. The field
   * will only be returned when response_content_type is set to
   * "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.FeedMapping feed_mapping = 2;</code>
   * @return The feedMapping.
   */
  com.google.ads.googleads.v6.resources.FeedMapping getFeedMapping();
  /**
   * <pre>
   * The mutated feed mapping with only mutable fields after mutate. The field
   * will only be returned when response_content_type is set to
   * "MUTABLE_RESOURCE".
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.FeedMapping feed_mapping = 2;</code>
   */
  com.google.ads.googleads.v6.resources.FeedMappingOrBuilder getFeedMappingOrBuilder();
}
