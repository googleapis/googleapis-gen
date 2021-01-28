// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/channel/v1/service.proto

package com.google.cloud.channel.v1;

public interface ListChannelPartnerLinksRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.channel.v1.ListChannelPartnerLinksRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The resource name of the reseller account for listing channel partner
   * links.
   * The parent takes the format: accounts/{account_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. The resource name of the reseller account for listing channel partner
   * links.
   * The parent takes the format: accounts/{account_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Optional. Requested page size. Server might return fewer results than requested.
   * If unspecified, server will pick a default size (25).
   * The maximum value is 200, values above 200 will be coerced to 200.
   * </pre>
   *
   * <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The pageSize.
   */
  int getPageSize();

  /**
   * <pre>
   * Optional. A token identifying a page of results, if other than the first one.
   * Typically obtained via
   * [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token] of the previous
   * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks] call.
   * </pre>
   *
   * <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The pageToken.
   */
  java.lang.String getPageToken();
  /**
   * <pre>
   * Optional. A token identifying a page of results, if other than the first one.
   * Typically obtained via
   * [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token] of the previous
   * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks] call.
   * </pre>
   *
   * <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for pageToken.
   */
  com.google.protobuf.ByteString
      getPageTokenBytes();

  /**
   * <pre>
   * Optional. The level of granularity the ChannelPartnerLink will display.
   * </pre>
   *
   * <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The enum numeric value on the wire for view.
   */
  int getViewValue();
  /**
   * <pre>
   * Optional. The level of granularity the ChannelPartnerLink will display.
   * </pre>
   *
   * <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The view.
   */
  com.google.cloud.channel.v1.ChannelPartnerLinkView getView();
}
