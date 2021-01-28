// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage.proto

package com.google.storage.v1;

public interface CommonRequestParamsOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.storage.v1.CommonRequestParams)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Required when using buckets with Requestor Pays feature enabled.
   * </pre>
   *
   * <code>string user_project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The userProject.
   */
  java.lang.String getUserProject();
  /**
   * <pre>
   * Required. Required when using buckets with Requestor Pays feature enabled.
   * </pre>
   *
   * <code>string user_project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for userProject.
   */
  com.google.protobuf.ByteString
      getUserProjectBytes();

  /**
   * <pre>
   * Lets you enforce per-user quotas from a server-side application even in
   * cases when the user's IP address is unknown. This can occur, for example,
   * with applications that run cron jobs on App Engine on a user's behalf.
   * You can choose any arbitrary string that uniquely identifies a user, but it
   * is limited to 40 characters.
   * Overrides user_ip if both are provided.
   * </pre>
   *
   * <code>string quota_user = 2;</code>
   * @return The quotaUser.
   */
  java.lang.String getQuotaUser();
  /**
   * <pre>
   * Lets you enforce per-user quotas from a server-side application even in
   * cases when the user's IP address is unknown. This can occur, for example,
   * with applications that run cron jobs on App Engine on a user's behalf.
   * You can choose any arbitrary string that uniquely identifies a user, but it
   * is limited to 40 characters.
   * Overrides user_ip if both are provided.
   * </pre>
   *
   * <code>string quota_user = 2;</code>
   * @return The bytes for quotaUser.
   */
  com.google.protobuf.ByteString
      getQuotaUserBytes();

  /**
   * <pre>
   * Subset of fields to include in the response.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask fields = 4;</code>
   * @return Whether the fields field is set.
   */
  boolean hasFields();
  /**
   * <pre>
   * Subset of fields to include in the response.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask fields = 4;</code>
   * @return The fields.
   */
  com.google.protobuf.FieldMask getFields();
  /**
   * <pre>
   * Subset of fields to include in the response.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask fields = 4;</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getFieldsOrBuilder();
}
