// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/backup.proto

package com.google.spanner.admin.database.v1;

public interface BackupInfoOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.admin.database.v1.BackupInfo)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Name of the backup.
   * </pre>
   *
   * <code>string backup = 1 [(.google.api.resource_reference) = { ... }</code>
   * @return The backup.
   */
  java.lang.String getBackup();
  /**
   * <pre>
   * Name of the backup.
   * </pre>
   *
   * <code>string backup = 1 [(.google.api.resource_reference) = { ... }</code>
   * @return The bytes for backup.
   */
  com.google.protobuf.ByteString
      getBackupBytes();

  /**
   * <pre>
   * The backup contains an externally consistent copy of `source_database` at
   * the timestamp specified by `version_time`. If the
   * [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request did not specify
   * `version_time`, the `version_time` of the backup is equivalent to the
   * `create_time`.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp version_time = 4;</code>
   * @return Whether the versionTime field is set.
   */
  boolean hasVersionTime();
  /**
   * <pre>
   * The backup contains an externally consistent copy of `source_database` at
   * the timestamp specified by `version_time`. If the
   * [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request did not specify
   * `version_time`, the `version_time` of the backup is equivalent to the
   * `create_time`.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp version_time = 4;</code>
   * @return The versionTime.
   */
  com.google.protobuf.Timestamp getVersionTime();
  /**
   * <pre>
   * The backup contains an externally consistent copy of `source_database` at
   * the timestamp specified by `version_time`. If the
   * [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request did not specify
   * `version_time`, the `version_time` of the backup is equivalent to the
   * `create_time`.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp version_time = 4;</code>
   */
  com.google.protobuf.TimestampOrBuilder getVersionTimeOrBuilder();

  /**
   * <pre>
   * The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request was
   * received.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 2;</code>
   * @return Whether the createTime field is set.
   */
  boolean hasCreateTime();
  /**
   * <pre>
   * The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request was
   * received.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 2;</code>
   * @return The createTime.
   */
  com.google.protobuf.Timestamp getCreateTime();
  /**
   * <pre>
   * The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] request was
   * received.
   * </pre>
   *
   * <code>.google.protobuf.Timestamp create_time = 2;</code>
   */
  com.google.protobuf.TimestampOrBuilder getCreateTimeOrBuilder();

  /**
   * <pre>
   * Name of the database the backup was created from.
   * </pre>
   *
   * <code>string source_database = 3 [(.google.api.resource_reference) = { ... }</code>
   * @return The sourceDatabase.
   */
  java.lang.String getSourceDatabase();
  /**
   * <pre>
   * Name of the database the backup was created from.
   * </pre>
   *
   * <code>string source_database = 3 [(.google.api.resource_reference) = { ... }</code>
   * @return The bytes for sourceDatabase.
   */
  com.google.protobuf.ByteString
      getSourceDatabaseBytes();
}
