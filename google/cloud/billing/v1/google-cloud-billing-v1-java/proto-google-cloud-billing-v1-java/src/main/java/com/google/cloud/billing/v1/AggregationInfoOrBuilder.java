// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/billing/v1/cloud_catalog.proto

package com.google.cloud.billing.v1;

public interface AggregationInfoOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.billing.v1.AggregationInfo)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <code>.google.cloud.billing.v1.AggregationInfo.AggregationLevel aggregation_level = 1;</code>
   * @return The enum numeric value on the wire for aggregationLevel.
   */
  int getAggregationLevelValue();
  /**
   * <code>.google.cloud.billing.v1.AggregationInfo.AggregationLevel aggregation_level = 1;</code>
   * @return The aggregationLevel.
   */
  com.google.cloud.billing.v1.AggregationInfo.AggregationLevel getAggregationLevel();

  /**
   * <code>.google.cloud.billing.v1.AggregationInfo.AggregationInterval aggregation_interval = 2;</code>
   * @return The enum numeric value on the wire for aggregationInterval.
   */
  int getAggregationIntervalValue();
  /**
   * <code>.google.cloud.billing.v1.AggregationInfo.AggregationInterval aggregation_interval = 2;</code>
   * @return The aggregationInterval.
   */
  com.google.cloud.billing.v1.AggregationInfo.AggregationInterval getAggregationInterval();

  /**
   * <pre>
   * The number of intervals to aggregate over.
   * Example: If aggregation_level is "DAILY" and aggregation_count is 14,
   * aggregation will be over 14 days.
   * </pre>
   *
   * <code>int32 aggregation_count = 3;</code>
   * @return The aggregationCount.
   */
  int getAggregationCount();
}
