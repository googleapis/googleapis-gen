// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/spanner_database_admin.proto

package com.google.spanner.admin.database.v1;

public interface UpdateDatabaseDdlRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.admin.database.v1.UpdateDatabaseDdlRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The database to update.
   * </pre>
   *
   * <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The database.
   */
  java.lang.String getDatabase();
  /**
   * <pre>
   * Required. The database to update.
   * </pre>
   *
   * <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for database.
   */
  com.google.protobuf.ByteString
      getDatabaseBytes();

  /**
   * <pre>
   * Required. DDL statements to be applied to the database.
   * </pre>
   *
   * <code>repeated string statements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return A list containing the statements.
   */
  java.util.List<java.lang.String>
      getStatementsList();
  /**
   * <pre>
   * Required. DDL statements to be applied to the database.
   * </pre>
   *
   * <code>repeated string statements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The count of statements.
   */
  int getStatementsCount();
  /**
   * <pre>
   * Required. DDL statements to be applied to the database.
   * </pre>
   *
   * <code>repeated string statements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @param index The index of the element to return.
   * @return The statements at the given index.
   */
  java.lang.String getStatements(int index);
  /**
   * <pre>
   * Required. DDL statements to be applied to the database.
   * </pre>
   *
   * <code>repeated string statements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @param index The index of the value to return.
   * @return The bytes of the statements at the given index.
   */
  com.google.protobuf.ByteString
      getStatementsBytes(int index);

  /**
   * <pre>
   * If empty, the new update request is assigned an
   * automatically-generated operation ID. Otherwise, `operation_id`
   * is used to construct the name of the resulting
   * [Operation][google.longrunning.Operation].
   * Specifying an explicit operation ID simplifies determining
   * whether the statements were executed in the event that the
   * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] call is replayed,
   * or the return value is otherwise lost: the [database][google.spanner.admin.database.v1.UpdateDatabaseDdlRequest.database] and
   * `operation_id` fields can be combined to form the
   * [name][google.longrunning.Operation.name] of the resulting
   * [longrunning.Operation][google.longrunning.Operation]: `&lt;database&gt;/operations/&lt;operation_id&gt;`.
   * `operation_id` should be unique within the database, and must be
   * a valid identifier: `[a-z][a-z0-9_]*`. Note that
   * automatically-generated operation IDs always begin with an
   * underscore. If the named operation already exists,
   * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] returns
   * `ALREADY_EXISTS`.
   * </pre>
   *
   * <code>string operation_id = 3;</code>
   * @return The operationId.
   */
  java.lang.String getOperationId();
  /**
   * <pre>
   * If empty, the new update request is assigned an
   * automatically-generated operation ID. Otherwise, `operation_id`
   * is used to construct the name of the resulting
   * [Operation][google.longrunning.Operation].
   * Specifying an explicit operation ID simplifies determining
   * whether the statements were executed in the event that the
   * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] call is replayed,
   * or the return value is otherwise lost: the [database][google.spanner.admin.database.v1.UpdateDatabaseDdlRequest.database] and
   * `operation_id` fields can be combined to form the
   * [name][google.longrunning.Operation.name] of the resulting
   * [longrunning.Operation][google.longrunning.Operation]: `&lt;database&gt;/operations/&lt;operation_id&gt;`.
   * `operation_id` should be unique within the database, and must be
   * a valid identifier: `[a-z][a-z0-9_]*`. Note that
   * automatically-generated operation IDs always begin with an
   * underscore. If the named operation already exists,
   * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] returns
   * `ALREADY_EXISTS`.
   * </pre>
   *
   * <code>string operation_id = 3;</code>
   * @return The bytes for operationId.
   */
  com.google.protobuf.ByteString
      getOperationIdBytes();
}
