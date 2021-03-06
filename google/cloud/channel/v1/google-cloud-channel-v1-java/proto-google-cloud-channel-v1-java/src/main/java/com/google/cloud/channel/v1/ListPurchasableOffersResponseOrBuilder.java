// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/channel/v1/service.proto

package com.google.cloud.channel.v1;

public interface ListPurchasableOffersResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.channel.v1.ListPurchasableOffersResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of Offers requested.
   * </pre>
   *
   * <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
   */
  java.util.List<com.google.cloud.channel.v1.PurchasableOffer> 
      getPurchasableOffersList();
  /**
   * <pre>
   * The list of Offers requested.
   * </pre>
   *
   * <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
   */
  com.google.cloud.channel.v1.PurchasableOffer getPurchasableOffers(int index);
  /**
   * <pre>
   * The list of Offers requested.
   * </pre>
   *
   * <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
   */
  int getPurchasableOffersCount();
  /**
   * <pre>
   * The list of Offers requested.
   * </pre>
   *
   * <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
   */
  java.util.List<? extends com.google.cloud.channel.v1.PurchasableOfferOrBuilder> 
      getPurchasableOffersOrBuilderList();
  /**
   * <pre>
   * The list of Offers requested.
   * </pre>
   *
   * <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
   */
  com.google.cloud.channel.v1.PurchasableOfferOrBuilder getPurchasableOffersOrBuilder(
      int index);

  /**
   * <pre>
   * A token to retrieve the next page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * A token to retrieve the next page of results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
