// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recommender/v1/recommendation.proto

package com.google.cloud.recommender.v1;

public interface RecommendationContentOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.recommender.v1.RecommendationContent)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.OperationGroup operation_groups = 2;</code>
   */
  java.util.List<com.google.cloud.recommender.v1.OperationGroup> 
      getOperationGroupsList();
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.OperationGroup operation_groups = 2;</code>
   */
  com.google.cloud.recommender.v1.OperationGroup getOperationGroups(int index);
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.OperationGroup operation_groups = 2;</code>
   */
  int getOperationGroupsCount();
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.OperationGroup operation_groups = 2;</code>
   */
  java.util.List<? extends com.google.cloud.recommender.v1.OperationGroupOrBuilder> 
      getOperationGroupsOrBuilderList();
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.OperationGroup operation_groups = 2;</code>
   */
  com.google.cloud.recommender.v1.OperationGroupOrBuilder getOperationGroupsOrBuilder(
      int index);
}
