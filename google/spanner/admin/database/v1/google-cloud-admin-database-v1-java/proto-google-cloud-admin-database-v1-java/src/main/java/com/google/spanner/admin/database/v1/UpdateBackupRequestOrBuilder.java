// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/backup.proto

package com.google.spanner.admin.database.v1;

public interface UpdateBackupRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.admin.database.v1.UpdateBackupRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The backup to update. `backup.name`, and the fields to be updated
   * as specified by `update_mask` are required. Other fields are ignored.
   * Update is only supported for the following fields:
   *  * `backup.expire_time`.
   * </pre>
   *
   * <code>.google.spanner.admin.database.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the backup field is set.
   */
  boolean hasBackup();
  /**
   * <pre>
   * Required. The backup to update. `backup.name`, and the fields to be updated
   * as specified by `update_mask` are required. Other fields are ignored.
   * Update is only supported for the following fields:
   *  * `backup.expire_time`.
   * </pre>
   *
   * <code>.google.spanner.admin.database.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The backup.
   */
  com.google.spanner.admin.database.v1.Backup getBackup();
  /**
   * <pre>
   * Required. The backup to update. `backup.name`, and the fields to be updated
   * as specified by `update_mask` are required. Other fields are ignored.
   * Update is only supported for the following fields:
   *  * `backup.expire_time`.
   * </pre>
   *
   * <code>.google.spanner.admin.database.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.spanner.admin.database.v1.BackupOrBuilder getBackupOrBuilder();

  /**
   * <pre>
   * Required. A mask specifying which fields (e.g. `expire_time`) in the
   * Backup resource should be updated. This mask is relative to the Backup
   * resource, not to the request message. The field mask must always be
   * specified; this prevents any future fields from being erased accidentally
   * by clients that do not know about them.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  boolean hasUpdateMask();
  /**
   * <pre>
   * Required. A mask specifying which fields (e.g. `expire_time`) in the
   * Backup resource should be updated. This mask is relative to the Backup
   * resource, not to the request message. The field mask must always be
   * specified; this prevents any future fields from being erased accidentally
   * by clients that do not know about them.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  com.google.protobuf.FieldMask getUpdateMask();
  /**
   * <pre>
   * Required. A mask specifying which fields (e.g. `expire_time`) in the
   * Backup resource should be updated. This mask is relative to the Backup
   * resource, not to the request message. The field mask must always be
   * specified; this prevents any future fields from being erased accidentally
   * by clients that do not know about them.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder();
}
