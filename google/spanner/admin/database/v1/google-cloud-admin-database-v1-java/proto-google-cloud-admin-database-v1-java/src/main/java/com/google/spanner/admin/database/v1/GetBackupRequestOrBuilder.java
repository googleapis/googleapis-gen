// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/backup.proto

package com.google.spanner.admin.database.v1;

public interface GetBackupRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.admin.database.v1.GetBackupRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. Name of the backup.
   * Values are of the form
   * `projects/&lt;project&gt;/instances/&lt;instance&gt;/backups/&lt;backup&gt;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. Name of the backup.
   * Values are of the form
   * `projects/&lt;project&gt;/instances/&lt;instance&gt;/backups/&lt;backup&gt;`.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();
}
