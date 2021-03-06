// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/channel/v1/service.proto

package com.google.cloud.channel.v1;

public interface CreateChannelPartnerLinkRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.channel.v1.CreateChannelPartnerLinkRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Create a channel partner link for the provided reseller account's
   * resource name.
   * Parent uses the format: accounts/{account_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The parent.
   */
  java.lang.String getParent();
  /**
   * <pre>
   * Required. Create a channel partner link for the provided reseller account's
   * resource name.
   * Parent uses the format: accounts/{account_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for parent.
   */
  com.google.protobuf.ByteString
      getParentBytes();

  /**
   * <pre>
   * Required. The channel partner link to create.
   * Either channel_partner_link.reseller_cloud_identity_id or domain can be
   * used to create a link.
   * </pre>
   *
   * <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the channelPartnerLink field is set.
   */
  boolean hasChannelPartnerLink();
  /**
   * <pre>
   * Required. The channel partner link to create.
   * Either channel_partner_link.reseller_cloud_identity_id or domain can be
   * used to create a link.
   * </pre>
   *
   * <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The channelPartnerLink.
   */
  com.google.cloud.channel.v1.ChannelPartnerLink getChannelPartnerLink();
  /**
   * <pre>
   * Required. The channel partner link to create.
   * Either channel_partner_link.reseller_cloud_identity_id or domain can be
   * used to create a link.
   * </pre>
   *
   * <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.channel.v1.ChannelPartnerLinkOrBuilder getChannelPartnerLinkOrBuilder();
}
