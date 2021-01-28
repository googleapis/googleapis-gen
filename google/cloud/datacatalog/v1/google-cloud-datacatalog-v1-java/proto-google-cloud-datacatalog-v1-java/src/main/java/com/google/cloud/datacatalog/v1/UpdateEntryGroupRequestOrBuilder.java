// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/datacatalog.proto

package com.google.cloud.datacatalog.v1;

public interface UpdateEntryGroupRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.datacatalog.v1.UpdateEntryGroupRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The updated entry group. "name" field must be set.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the entryGroup field is set.
   */
  boolean hasEntryGroup();
  /**
   * <pre>
   * Required. The updated entry group. "name" field must be set.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The entryGroup.
   */
  com.google.cloud.datacatalog.v1.EntryGroup getEntryGroup();
  /**
   * <pre>
   * Required. The updated entry group. "name" field must be set.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.datacatalog.v1.EntryGroupOrBuilder getEntryGroupOrBuilder();

  /**
   * <pre>
   * The fields to update on the entry group. If absent or empty, all modifiable
   * fields are updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * The fields to update on the entry group. If absent or empty, all modifiable
   * fields are updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * The fields to update on the entry group. If absent or empty, all modifiable
   * fields are updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
