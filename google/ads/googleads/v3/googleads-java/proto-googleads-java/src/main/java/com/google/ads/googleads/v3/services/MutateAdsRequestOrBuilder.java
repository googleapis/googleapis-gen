// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v3/services/ad_service.proto

package com.google.ads.googleads.v3.services;

public interface MutateAdsRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v3.services.MutateAdsRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The ID of the customer whose ads are being modified.
   * </pre>
   *
   * <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The customerId.
   */
  java.lang.String getCustomerId();
  /**
   * <pre>
   * Required. The ID of the customer whose ads are being modified.
   * </pre>
   *
   * <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for customerId.
   */
  com.google.protobuf.ByteString
      getCustomerIdBytes();

  /**
   * <pre>
   * Required. The list of operations to perform on individual ads.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v3.services.AdOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<com.google.ads.googleads.v3.services.AdOperation> 
      getOperationsList();
  /**
   * <pre>
   * Required. The list of operations to perform on individual ads.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v3.services.AdOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.ads.googleads.v3.services.AdOperation getOperations(int index);
  /**
   * <pre>
   * Required. The list of operations to perform on individual ads.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v3.services.AdOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  int getOperationsCount();
  /**
   * <pre>
   * Required. The list of operations to perform on individual ads.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v3.services.AdOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  java.util.List<? extends com.google.ads.googleads.v3.services.AdOperationOrBuilder> 
      getOperationsOrBuilderList();
  /**
   * <pre>
   * Required. The list of operations to perform on individual ads.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v3.services.AdOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.ads.googleads.v3.services.AdOperationOrBuilder getOperationsOrBuilder(
      int index);
}
