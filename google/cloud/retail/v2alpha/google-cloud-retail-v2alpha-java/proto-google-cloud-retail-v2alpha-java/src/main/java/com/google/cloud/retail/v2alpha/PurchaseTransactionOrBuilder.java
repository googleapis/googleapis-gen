// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2alpha/user_event.proto

package com.google.cloud.retail.v2alpha;

public interface PurchaseTransactionOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.retail.v2alpha.PurchaseTransaction)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The transaction ID with a length limit of 128 characters.
   * </pre>
   *
   * <code>string id = 1;</code>
   * @return The id.
   */
  java.lang.String getId();
  /**
   * <pre>
   * The transaction ID with a length limit of 128 characters.
   * </pre>
   *
   * <code>string id = 1;</code>
   * @return The bytes for id.
   */
  com.google.protobuf.ByteString
      getIdBytes();

  /**
   * <pre>
   * Required. Total non-zero revenue or grand total associated with the
   * transaction. This value include shipping, tax, or other adjustments to
   * total revenue that you want to include as part of your revenue
   * calculations.
   * </pre>
   *
   * <code>float revenue = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The revenue.
   */
  float getRevenue();

  /**
   * <pre>
   * All the taxes associated with the transaction.
   * </pre>
   *
   * <code>float tax = 3;</code>
   * @return The tax.
   */
  float getTax();

  /**
   * <pre>
   * All the costs associated with the products. These can be manufacturing
   * costs, shipping expenses not borne by the end user, or any other costs,
   * such that:
   * * Profit =
   * [revenue][google.cloud.retail.v2alpha.PurchaseTransaction.revenue] -
   * [tax][google.cloud.retail.v2alpha.PurchaseTransaction.tax] -
   * [cost][google.cloud.retail.v2alpha.PurchaseTransaction.cost]
   * </pre>
   *
   * <code>float cost = 4;</code>
   * @return The cost.
   */
  float getCost();

  /**
   * <pre>
   * Required. Currency code. Use three-character ISO-4217 code.
   * </pre>
   *
   * <code>string currency_code = 5 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The currencyCode.
   */
  java.lang.String getCurrencyCode();
  /**
   * <pre>
   * Required. Currency code. Use three-character ISO-4217 code.
   * </pre>
   *
   * <code>string currency_code = 5 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for currencyCode.
   */
  com.google.protobuf.ByteString
      getCurrencyCodeBytes();
}
