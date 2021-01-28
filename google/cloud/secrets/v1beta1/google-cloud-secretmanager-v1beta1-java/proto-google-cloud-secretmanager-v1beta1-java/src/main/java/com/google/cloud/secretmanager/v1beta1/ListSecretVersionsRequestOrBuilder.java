// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/secrets/v1beta1/service.proto

package com.google.cloud.secretmanager.v1beta1;

public interface ListSecretVersionsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.secrets.v1beta1.ListSecretVersionsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] associated with the
   * [SecretVersions][google.cloud.secrets.v1beta1.SecretVersion] to list, in the format
   * `projects/&#42;&#47;secrets/&#42;`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] associated with the
   * [SecretVersions][google.cloud.secrets.v1beta1.SecretVersion] to list, in the format
   * `projects/&#42;&#47;secrets/&#42;`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Optional. The maximum number of results to be returned in a single page. If
   * set to 0, the server decides the number of results to return. If the
   * number is greater than 25000, it is capped at 25000.
   * </pre>
   *
   * <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * Optional. Pagination token, returned earlier via
   * ListSecretVersionsResponse.next_page_token][].
   * </pre>
   *
   * <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * Optional. Pagination token, returned earlier via
   * ListSecretVersionsResponse.next_page_token][].
   * </pre>
   *
   * <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();
}
