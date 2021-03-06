// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/test_execution.proto

package com.google.devtools.testing.v1;

public interface ShardingOptionOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.devtools.testing.v1.ShardingOption)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Uniformly shards test cases given a total number of shards.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.UniformSharding uniform_sharding = 1;</code>
   * @return Whether the uniformSharding field is set.
   */
  boolean hasUniformSharding();
  /**
   * <pre>
   * Uniformly shards test cases given a total number of shards.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.UniformSharding uniform_sharding = 1;</code>
   * @return The uniformSharding.
   */
  com.google.devtools.testing.v1.UniformSharding getUniformSharding();
  /**
   * <pre>
   * Uniformly shards test cases given a total number of shards.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.UniformSharding uniform_sharding = 1;</code>
   */
  com.google.devtools.testing.v1.UniformShardingOrBuilder getUniformShardingOrBuilder();

  /**
   * <pre>
   * Shards test cases into the specified groups of packages, classes, and/or
   * methods.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.ManualSharding manual_sharding = 2;</code>
   * @return Whether the manualSharding field is set.
   */
  boolean hasManualSharding();
  /**
   * <pre>
   * Shards test cases into the specified groups of packages, classes, and/or
   * methods.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.ManualSharding manual_sharding = 2;</code>
   * @return The manualSharding.
   */
  com.google.devtools.testing.v1.ManualSharding getManualSharding();
  /**
   * <pre>
   * Shards test cases into the specified groups of packages, classes, and/or
   * methods.
   * </pre>
   *
   * <code>.google.devtools.testing.v1.ManualSharding manual_sharding = 2;</code>
   */
  com.google.devtools.testing.v1.ManualShardingOrBuilder getManualShardingOrBuilder();

  public com.google.devtools.testing.v1.ShardingOption.OptionCase getOptionCase();
}
