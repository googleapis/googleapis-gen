// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/common/offline_user_data.proto

package com.google.ads.googleads.v6.common;

public interface StoreSalesMetadataOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v6.common.StoreSalesMetadata)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * This is the fraction of all transactions that are identifiable (i.e.,
   * associated with any form of customer information).
   * Required.
   * The fraction needs to be between 0 and 1 (excluding 0).
   * </pre>
   *
   * <code>double loyalty_fraction = 5;</code>
   * @return Whether the loyaltyFraction field is set.
   */
  boolean hasLoyaltyFraction();
  /**
   * <pre>
   * This is the fraction of all transactions that are identifiable (i.e.,
   * associated with any form of customer information).
   * Required.
   * The fraction needs to be between 0 and 1 (excluding 0).
   * </pre>
   *
   * <code>double loyalty_fraction = 5;</code>
   * @return The loyaltyFraction.
   */
  double getLoyaltyFraction();

  /**
   * <pre>
   * This is the ratio of sales being uploaded compared to the overall sales
   * that can be associated with a customer. Required.
   * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
   * upload half the sales that you are able to associate with a customer, this
   * would be 0.5.
   * </pre>
   *
   * <code>double transaction_upload_fraction = 6;</code>
   * @return Whether the transactionUploadFraction field is set.
   */
  boolean hasTransactionUploadFraction();
  /**
   * <pre>
   * This is the ratio of sales being uploaded compared to the overall sales
   * that can be associated with a customer. Required.
   * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
   * upload half the sales that you are able to associate with a customer, this
   * would be 0.5.
   * </pre>
   *
   * <code>double transaction_upload_fraction = 6;</code>
   * @return The transactionUploadFraction.
   */
  double getTransactionUploadFraction();

  /**
   * <pre>
   * Name of the store sales custom variable key. A predefined key that
   * can be applied to the transaction and then later used for custom
   * segmentation in reporting.
   * Accessible only to customers on the allow-list.
   * </pre>
   *
   * <code>string custom_key = 7;</code>
   * @return Whether the customKey field is set.
   */
  boolean hasCustomKey();
  /**
   * <pre>
   * Name of the store sales custom variable key. A predefined key that
   * can be applied to the transaction and then later used for custom
   * segmentation in reporting.
   * Accessible only to customers on the allow-list.
   * </pre>
   *
   * <code>string custom_key = 7;</code>
   * @return The customKey.
   */
  java.lang.String getCustomKey();
  /**
   * <pre>
   * Name of the store sales custom variable key. A predefined key that
   * can be applied to the transaction and then later used for custom
   * segmentation in reporting.
   * Accessible only to customers on the allow-list.
   * </pre>
   *
   * <code>string custom_key = 7;</code>
   * @return The bytes for customKey.
   */
  com.google.protobuf.ByteString
      getCustomKeyBytes();

  /**
   * <pre>
   * Metadata for a third party Store Sales upload.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
   * @return Whether the thirdPartyMetadata field is set.
   */
  boolean hasThirdPartyMetadata();
  /**
   * <pre>
   * Metadata for a third party Store Sales upload.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
   * @return The thirdPartyMetadata.
   */
  com.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadata getThirdPartyMetadata();
  /**
   * <pre>
   * Metadata for a third party Store Sales upload.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
   */
  com.google.ads.googleads.v6.common.StoreSalesThirdPartyMetadataOrBuilder getThirdPartyMetadataOrBuilder();
}
