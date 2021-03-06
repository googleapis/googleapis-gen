// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gkehub/v1/service.proto

package com.google.cloud.gkehub.v1;

public interface ListFeaturesResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.gkehub.v1.ListFeaturesResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of matching Features
   * </pre>
   *
   * <code>repeated .google.cloud.gkehub.v1.Feature resources = 1;</code>
   */
  java.util.List<com.google.cloud.gkehub.v1.Feature> 
      getResourcesList();
  /**
   * <pre>
   * The list of matching Features
   * </pre>
   *
   * <code>repeated .google.cloud.gkehub.v1.Feature resources = 1;</code>
   */
  com.google.cloud.gkehub.v1.Feature getResources(int index);
  /**
   * <pre>
   * The list of matching Features
   * </pre>
   *
   * <code>repeated .google.cloud.gkehub.v1.Feature resources = 1;</code>
   */
  int getResourcesCount();
  /**
   * <pre>
   * The list of matching Features
   * </pre>
   *
   * <code>repeated .google.cloud.gkehub.v1.Feature resources = 1;</code>
   */
  java.util.List<? extends com.google.cloud.gkehub.v1.FeatureOrBuilder> 
      getResourcesOrBuilderList();
  /**
   * <pre>
   * The list of matching Features
   * </pre>
   *
   * <code>repeated .google.cloud.gkehub.v1.Feature resources = 1;</code>
   */
  com.google.cloud.gkehub.v1.FeatureOrBuilder getResourcesOrBuilder(
      int index);

  /**
   * <pre>
   * A token to request the next page of resources from the
   * `ListFeatures` method. The value of an empty string means
   * that there are no more resources to return.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * A token to request the next page of resources from the
   * `ListFeatures` method. The value of an empty string means
   * that there are no more resources to return.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
