// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/analytics/admin/v1alpha/analytics_admin.proto

package com.google.analytics.admin.v1alpha;

public interface ListMeasurementProtocolSecretsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.analytics.admin.v1alpha.ListMeasurementProtocolSecretsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the parent stream.
   * Any type of stream (WebDataStream, IosAppDataStream, AndroidAppDataStream)
   * may be a parent.
   * Format:
   * properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The resource name of the parent stream.
   * Any type of stream (WebDataStream, IosAppDataStream, AndroidAppDataStream)
   * may be a parent.
   * Format:
   * properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * The maximum number of resources to return.
   * If unspecified, at most 10 resources will be returned.
   * The maximum value is 10. Higher values will be coerced to the maximum.
   * </pre>
   *
   * <code>int32 page_size = 2;</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * A page token, received from a previous `ListMeasurementProtocolSecrets`
   * call. Provide this to retrieve the subsequent page. When paginating, all
   * other parameters provided to `ListMeasurementProtocolSecrets` must match
   * the call that provided the page token.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * A page token, received from a previous `ListMeasurementProtocolSecrets`
   * call. Provide this to retrieve the subsequent page. When paginating, all
   * other parameters provided to `ListMeasurementProtocolSecrets` must match
   * the call that provided the page token.
   * </pre>
   *
   * <code>string page_token = 3;</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();
}
