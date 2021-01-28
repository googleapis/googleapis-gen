// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/services/account_link_service.proto

package com.google.ads.googleads.v6.services;

public interface CreateAccountLinkRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v6.services.CreateAccountLinkRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The ID of the customer for which the account link is created.
   * </pre>
   *
   * <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The customerId.
   */
  java.lang.String getCustomerId();
  /**
   * <pre>
   * Required. The ID of the customer for which the account link is created.
   * </pre>
   *
   * <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for customerId.
   */
  com.google.protobuf.ByteString
      getCustomerIdBytes();

  /**
   * <pre>
   * Required. The account link to be created.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the accountLink field is set.
   */
  boolean hasAccountLink();
  /**
   * <pre>
   * Required. The account link to be created.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The accountLink.
   */
  com.google.ads.googleads.v6.resources.AccountLink getAccountLink();
  /**
   * <pre>
   * Required. The account link to be created.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.ads.googleads.v6.resources.AccountLinkOrBuilder getAccountLinkOrBuilder();
}
