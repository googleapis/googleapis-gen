// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

package com.google.cloud.privatecatalog.v1beta1;

public interface SearchVersionsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.privatecatalog.v1beta1.SearchVersionsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The `Version` resources computed from the resource context.
   * </pre>
   *
   * <code>repeated .google.cloud.privatecatalog.v1beta1.Version versions = 1;</code>
   */
  java.util.List<com.google.cloud.privatecatalog.v1beta1.Version> 
      getVersionsList();
  /**
   * <pre>
   * The `Version` resources computed from the resource context.
   * </pre>
   *
   * <code>repeated .google.cloud.privatecatalog.v1beta1.Version versions = 1;</code>
   */
  com.google.cloud.privatecatalog.v1beta1.Version getVersions(int index);
  /**
   * <pre>
   * The `Version` resources computed from the resource context.
   * </pre>
   *
   * <code>repeated .google.cloud.privatecatalog.v1beta1.Version versions = 1;</code>
   */
  int getVersionsCount();
  /**
   * <pre>
   * The `Version` resources computed from the resource context.
   * </pre>
   *
   * <code>repeated .google.cloud.privatecatalog.v1beta1.Version versions = 1;</code>
   */
  java.util.List<? extends com.google.cloud.privatecatalog.v1beta1.VersionOrBuilder> 
      getVersionsOrBuilderList();
  /**
   * <pre>
   * The `Version` resources computed from the resource context.
   * </pre>
   *
   * <code>repeated .google.cloud.privatecatalog.v1beta1.Version versions = 1;</code>
   */
  com.google.cloud.privatecatalog.v1beta1.VersionOrBuilder getVersionsOrBuilder(
      int index);

  /**
   * <pre>
   * A pagination token returned from a previous call to SearchVersions that
   * indicates from where the listing should continue.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * A pagination token returned from a previous call to SearchVersions that
   * indicates from where the listing should continue.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
