// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/services/reach_plan_service.proto

package com.google.ads.googleads.v6.services;

public interface PlannedProductForecastOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v6.services.PlannedProductForecast)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Number of unique people reached that exactly matches the Targeting.
   * </pre>
   *
   * <code>int64 on_target_reach = 1;</code>
   * @return The onTargetReach.
   */
  long getOnTargetReach();

  /**
   * <pre>
   * Number of unique people reached. This includes people that may fall
   * outside the specified Targeting.
   * </pre>
   *
   * <code>int64 total_reach = 2;</code>
   * @return The totalReach.
   */
  long getTotalReach();

  /**
   * <pre>
   * Number of ad impressions that exactly matches the Targeting.
   * </pre>
   *
   * <code>int64 on_target_impressions = 3;</code>
   * @return The onTargetImpressions.
   */
  long getOnTargetImpressions();

  /**
   * <pre>
   * Total number of ad impressions. This includes impressions that may fall
   * outside the specified Targeting, due to insufficient information on
   * signed-in users.
   * </pre>
   *
   * <code>int64 total_impressions = 4;</code>
   * @return The totalImpressions.
   */
  long getTotalImpressions();
}
