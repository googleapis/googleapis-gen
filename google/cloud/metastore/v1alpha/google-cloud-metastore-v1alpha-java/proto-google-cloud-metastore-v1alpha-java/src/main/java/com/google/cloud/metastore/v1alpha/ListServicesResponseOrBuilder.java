// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/metastore/v1alpha/metastore.proto

package com.google.cloud.metastore.v1alpha;

public interface ListServicesResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.metastore.v1alpha.ListServicesResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The services in the specified location.
   * </pre>
   *
   * <code>repeated .google.cloud.metastore.v1alpha.Service services = 1;</code>
   */
  java.util.List<com.google.cloud.metastore.v1alpha.Service> 
      getServicesList();
  /**
   * <pre>
   * The services in the specified location.
   * </pre>
   *
   * <code>repeated .google.cloud.metastore.v1alpha.Service services = 1;</code>
   */
  com.google.cloud.metastore.v1alpha.Service getServices(int index);
  /**
   * <pre>
   * The services in the specified location.
   * </pre>
   *
   * <code>repeated .google.cloud.metastore.v1alpha.Service services = 1;</code>
   */
  int getServicesCount();
  /**
   * <pre>
   * The services in the specified location.
   * </pre>
   *
   * <code>repeated .google.cloud.metastore.v1alpha.Service services = 1;</code>
   */
  java.util.List<? extends com.google.cloud.metastore.v1alpha.ServiceOrBuilder> 
      getServicesOrBuilderList();
  /**
   * <pre>
   * The services in the specified location.
   * </pre>
   *
   * <code>repeated .google.cloud.metastore.v1alpha.Service services = 1;</code>
   */
  com.google.cloud.metastore.v1alpha.ServiceOrBuilder getServicesOrBuilder(
      int index);

  /**
   * <pre>
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();

  /**
   * <pre>
   * Locations that could not be reached.
   * </pre>
   *
   * <code>repeated string unreachable = 3;</code>
   * @return A list containing the unreachable.
   */
  java.util.List<java.lang.String>
      getUnreachableList();
  /**
   * <pre>
   * Locations that could not be reached.
   * </pre>
   *
   * <code>repeated string unreachable = 3;</code>
   * @return The count of unreachable.
   */
  int getUnreachableCount();
  /**
   * <pre>
   * Locations that could not be reached.
   * </pre>
   *
   * <code>repeated string unreachable = 3;</code>
   * @param index The index of the element to return.
   * @return The unreachable at the given index.
   */
  java.lang.String getUnreachable(int index);
  /**
   * <pre>
   * Locations that could not be reached.
   * </pre>
   *
   * <code>repeated string unreachable = 3;</code>
   * @param index The index of the value to return.
   * @return The bytes of the unreachable at the given index.
   */
  com.google.protobuf.ByteString
      getUnreachableBytes(int index);
}
