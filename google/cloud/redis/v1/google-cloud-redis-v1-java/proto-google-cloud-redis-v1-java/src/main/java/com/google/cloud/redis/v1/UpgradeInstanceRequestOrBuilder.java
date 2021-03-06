// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/redis/v1/cloud_redis.proto

package com.google.cloud.redis.v1;

public interface UpgradeInstanceRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.redis.v1.UpgradeInstanceRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Redis instance resource name using the form:
   *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
   * where `location_id` refers to a GCP region.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Redis instance resource name using the form:
   *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
   * where `location_id` refers to a GCP region.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * Required. Specifies the target version of Redis software to upgrade to.
   * </pre>
   *
   * <code>string redis_version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The redisVersion.
   */
  java.lang.String getRedisVersion();
  /**
   * <pre>
   * Required. Specifies the target version of Redis software to upgrade to.
   * </pre>
   *
   * <code>string redis_version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for redisVersion.
   */
  com.google.protobuf.ByteString
      getRedisVersionBytes();
}
