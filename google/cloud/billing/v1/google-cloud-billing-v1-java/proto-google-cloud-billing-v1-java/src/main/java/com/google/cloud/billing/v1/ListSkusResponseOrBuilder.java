// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/billing/v1/cloud_catalog.proto

package com.google.cloud.billing.v1;

public interface ListSkusResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.billing.v1.ListSkusResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The list of public SKUs of the given service.
   * </pre>
   *
   * <code>repeated .google.cloud.billing.v1.Sku skus = 1;</code>
   */
  java.util.List<com.google.cloud.billing.v1.Sku> 
      getSkusList();
  /**
   * <pre>
   * The list of public SKUs of the given service.
   * </pre>
   *
   * <code>repeated .google.cloud.billing.v1.Sku skus = 1;</code>
   */
  com.google.cloud.billing.v1.Sku getSkus(int index);
  /**
   * <pre>
   * The list of public SKUs of the given service.
   * </pre>
   *
   * <code>repeated .google.cloud.billing.v1.Sku skus = 1;</code>
   */
  int getSkusCount();
  /**
   * <pre>
   * The list of public SKUs of the given service.
   * </pre>
   *
   * <code>repeated .google.cloud.billing.v1.Sku skus = 1;</code>
   */
  java.util.List<? extends com.google.cloud.billing.v1.SkuOrBuilder> 
      getSkusOrBuilderList();
  /**
   * <pre>
   * The list of public SKUs of the given service.
   * </pre>
   *
   * <code>repeated .google.cloud.billing.v1.Sku skus = 1;</code>
   */
  com.google.cloud.billing.v1.SkuOrBuilder getSkusOrBuilder(
      int index);

  /**
   * <pre>
   * A token to retrieve the next page of results. To retrieve the next page,
   * call `ListSkus` again with the `page_token` field set to this
   * value. This field is empty if there are no more results to retrieve.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  java.lang.String getNextPageToken();
  /**
   * <pre>
   * A token to retrieve the next page of results. To retrieve the next page,
   * call `ListSkus` again with the `page_token` field set to this
   * value. This field is empty if there are no more results to retrieve.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  com.google.protobuf.ByteString
      getNextPageTokenBytes();
}
