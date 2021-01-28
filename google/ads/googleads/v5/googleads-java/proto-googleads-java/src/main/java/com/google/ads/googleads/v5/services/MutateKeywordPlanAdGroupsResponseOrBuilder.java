// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/services/keyword_plan_ad_group_service.proto

package com.google.ads.googleads.v5.services;

public interface MutateKeywordPlanAdGroupsResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.ads.googleads.v5.services.MutateKeywordPlanAdGroupsResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Errors that pertain to operation failures in the partial failure mode.
   * Returned only when partial_failure = true and all errors occur inside the
   * operations. If any errors occur outside the operations (e.g. auth errors),
   * we return an RPC level error.
   * </pre>
   *
   * <code>.google.rpc.Status partial_failure_error = 3;</code>
   * @return Whether the partialFailureError field is set.
   */
  boolean hasPartialFailureError();
  /**
   * <pre>
   * Errors that pertain to operation failures in the partial failure mode.
   * Returned only when partial_failure = true and all errors occur inside the
   * operations. If any errors occur outside the operations (e.g. auth errors),
   * we return an RPC level error.
   * </pre>
   *
   * <code>.google.rpc.Status partial_failure_error = 3;</code>
   * @return The partialFailureError.
   */
  com.google.rpc.Status getPartialFailureError();
  /**
   * <pre>
   * Errors that pertain to operation failures in the partial failure mode.
   * Returned only when partial_failure = true and all errors occur inside the
   * operations. If any errors occur outside the operations (e.g. auth errors),
   * we return an RPC level error.
   * </pre>
   *
   * <code>.google.rpc.Status partial_failure_error = 3;</code>
   */
  com.google.rpc.StatusOrBuilder getPartialFailureErrorOrBuilder();

  /**
   * <pre>
   * All results for the mutate. The order of the results is determined by the
   * order of the keywords in the original request.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult results = 2;</code>
   */
  java.util.List<com.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult> 
      getResultsList();
  /**
   * <pre>
   * All results for the mutate. The order of the results is determined by the
   * order of the keywords in the original request.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult results = 2;</code>
   */
  com.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult getResults(int index);
  /**
   * <pre>
   * All results for the mutate. The order of the results is determined by the
   * order of the keywords in the original request.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult results = 2;</code>
   */
  int getResultsCount();
  /**
   * <pre>
   * All results for the mutate. The order of the results is determined by the
   * order of the keywords in the original request.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult results = 2;</code>
   */
  java.util.List<? extends com.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResultOrBuilder> 
      getResultsOrBuilderList();
  /**
   * <pre>
   * All results for the mutate. The order of the results is determined by the
   * order of the keywords in the original request.
   * </pre>
   *
   * <code>repeated .google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResult results = 2;</code>
   */
  com.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupResultOrBuilder getResultsOrBuilder(
      int index);
}
