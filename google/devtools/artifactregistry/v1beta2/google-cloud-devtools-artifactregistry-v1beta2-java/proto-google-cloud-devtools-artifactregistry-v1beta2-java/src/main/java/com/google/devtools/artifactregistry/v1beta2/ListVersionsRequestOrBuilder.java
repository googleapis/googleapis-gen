// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/artifactregistry/v1beta2/version.proto

package com.google.devtools.artifactregistry.v1beta2;

public interface ListVersionsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.artifactregistry.v1beta2.ListVersionsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The name of the parent resource whose versions will be listed.
   * </pre>
   *
   * <code>string parent = 1;</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * The name of the parent resource whose versions will be listed.
   * </pre>
   *
   * <code>string parent = 1;</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The maximum number of versions to return.
   * Maximum page size is 10,000.
   * </pre>
   *
   * <code>int32 page_size = 2;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * The next_page_token value returned from a previous list request, if any.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * The next_page_token value returned from a previous list request, if any.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();

  /**
   * <pre>
   * The view that should be returned in the response.
   * </pre>
   *
   * <code>.google.devtools.artifactregistry.v1beta2.VersionView view = 4;</code>
   * @return The enum numeric value on the wire for view.
   */
  int getViewValue();
  /**
   * <pre>
   * The view that should be returned in the response.
   * </pre>
   *
   * <code>.google.devtools.artifactregistry.v1beta2.VersionView view = 4;</code>
   * @return The view.
   */
  com.google.devtools.artifactregistry.v1beta2.VersionView getView();
}
